@extends('layouts.master')

@section('content')
    <div class="container screen-center mt-sm-5 my-1">
        <form action="{{route('quiz.save')}}">
            <p class="text-center">Total Questions: {{$total_questions}}</p>
            <div class="row justify-content-center my-1 question_container">
                <div class="col-6">
                    <h3 class="text-center">Question#{{$question->id}} ({{$question->getBank->name}})</h3>
                    <p>{{$question->question}}</p>
                    <ul class="list-group">
                        @foreach ($answers as $ans)
                            <li class="list-group-item"><input type="radio" name="answer_id" id="answer_{{$ans->id}}" value="{{$ans->id}}"> <label for="answer_{{$ans->id}}">{{$ans->answer}}</label></li>
                        @endforeach
                    </ul>
                    <input type="hidden" value="{{$question->id}}" name="question_id">
                    <input type="hidden" id="skip_status" name="skip" value="">
                    <div class="row my-1">
                        <div class="col-6">
                            <button type="button" data-skip="true" class="btn btn-primary" id="skip">Skip</button>
                        </div>
                        <div class="col-6 text-right">
                            <button type="button" class="btn btn-success" id="next" disabled>Next</button>
                        </div>
                    </div>
                </div>           
            </div>
        </form>
    </div>
@endsection
@section('js')
    <script>
        $(document).on('click', 'label, [type="radio"]', function(){
            $('#next').attr('disabled', false);
        })
    </script>
@endsection

    