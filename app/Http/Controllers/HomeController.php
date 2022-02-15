<?php

namespace App\Http\Controllers;
use App\Models\Users;
use App\Models\Quiz;
use App\Models\Questions;
use App\Models\Answers;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        if($this->checkSession()){
            return redirect(route('home.quiz'));
        }
        return view('front.index');
    }

    public function save_user(Request $request)
    {
        $user['email'] = $request->email;
        $user['name'] = $request->name;
        $checkUser = $this->checkIfUserAlreadyExist($request->email);
        if($checkUser){
            $data = $checkUser;
        }else{
            $data = Users::create($user);
        }
        $session['id'] = $data->id;
        $session['name'] = $data->name;
        session(['userdata'=>$session]);
        return json_encode(['code' => 200, 'href' => route('home.quiz'), 'token' => csrf_token()]);
    }

    private function checkIfUserAlreadyExist($email){
        $user = Users::whereEmail($email)->first();
        if($user){
            return $user;
        }
    }


    private function checkSession()
    {
        if(session()->has('userdata')){
            $id = session('userdata')['id'];
            $user = Users::find($id);
            $user['last_login'] = date('Y-m-d H:i:s');
            $user->update();
            return true;
        }else{
            return false;
        }
    }

    public function questions()
    {   
        if(!$this->checkSession()){
            return redirect(route('home.login'));
        }
        $check_quizzess = Quiz::where('user_id', session('userdata')['id'])->first();
        if($check_quizzess){
            if($check_quizzess['completed']){
                return redirect(route('home.result'));
            }
            $next_question = $check_quizzess['next_question_id'];
        }else{
            $next_question = 0;
        }
        if($next_question > 0){
            $question = Questions::find($next_question);
        }else{
            $question = Questions::first();
        }
        $answers = Answers::where('question_id', $question->id)->get();
        $total_questions = Questions::all()->count();
        return view('front.questions', compact('question', 'answers', 'total_questions'));
    }

    private function skippedQuestion()
    {
        $quiz = Quiz::where('user_id',session('userdata')['id'])->first();
        if(!$quiz){
            $quiz = new Quiz();
            $quiz->user_id = session('userdata')['id'];
        }
        $quiz->skipped_answers++;
        return $quiz;
    }


    private function checkRightOrWrongAnswer($question_id, $answer_id)
    {
        $quiz = Quiz::where('user_id',session('userdata')['id'])->first();
        $answer = Answers::where(['id' => $answer_id, 'question_id' => $question_id])->first();
        if(!$quiz){
            $quiz = new Quiz();
            $quiz->user_id = session('userdata')['id'];
        }
        if($answer->right_ans == 0){
            $quiz->wrong_answers++;
        }else{
            $quiz->correct_answers++;
        }
        return $quiz;
    }

    public function saveQuestionData(Request $request)
    {
        if($request->skip == '1'){
           $quiz = $this->skippedQuestion();
        }else{
            $quiz = $this->checkRightOrWrongAnswer($request->question_id,$request->answer_id);
        }
        $check_next_question = Questions::where('id','>',$request->question_id)->first();
        if(!$check_next_question){
            $quiz->completed = 1;
            $quiz->save();
            return json_encode(['code' => 200, 'href' =>route('home.result')]);
        }
        $next_question = $check_next_question->id;
        $quiz->next_question_id = $next_question;
        $quiz->save();
        return json_encode(['code' => 200, 'question' => $this->nextQuestion($next_question), 'answers' => $this->answersOfQuestion($next_question)]);
    }

    private function nextQuestion($id)
    {
        $question = Questions::find($id);
        $question->bankName = $question->getBank->name;
        return $question;
    }

    private function answersOfQuestion($q_id)
    {
        $answers = Answers::where('question_id', $q_id)->get();
        return $answers;
    }

    public function logout()
    {
        session()->forget('userdata');
        return redirect(route('home.login'));
    }


    public function result()
    {
        if(!$this->checkSession()){
            return redirect(route('home.login'));
        }
        $check_quizzess = Quiz::where('user_id', session('userdata')['id'])->first();
        if($check_quizzess){
            if(!$check_quizzess['completed']){
                return redirect(route('home.quiz'));
            }
        }
        $result = Quiz::where('user_id', session('userdata')['id'])->first();
        return view('front.result', compact('result'));
    }
}
