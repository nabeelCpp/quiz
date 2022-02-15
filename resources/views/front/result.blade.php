@extends('layouts.master')

@section('content')
    <div class="container screen-center mt-sm-5 my-1">
        <div class="row justify-content-center my-1">
            <div class="col-6">
                <h3 class="text-center">Result Page</h3>
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">Correct Answers</th>
                        <th scope="col">{{$result->correct_answers}}</th>
                      </tr>
                      <tr>
                        <th scope="col">Wrong Answers</th>
                        <th scope="col">{{$result->wrong_answers}}</th>
                      </tr>
                      <tr>
                        <th scope="col">Skipped Answers</th>
                        <th scope="col">{{$result->skipped_answers}}</th>
                      </tr>
                    </thead>
                  </table>
                  <div class="text-center">
                      <button class="btn btn-success" onclick="window.location.href = '{{route('quiz.logout')}}'">
                          Done
                      </button>    
                  </div>          
            </div> 
        </div>
    </div>
@endsection

    