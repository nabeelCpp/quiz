@extends('layouts.master')

@section('content')
    <div class="container screen-center mt-sm-5 my-1">
        <form action="{{route('user.auth')}}">
            <div class="row justify-content-center my-1">
                <div class="col-6">
                    <error>
                        <input type="email" class="form-control my-1" name="email" placeholder="Enter Your Email" required data-required="Enter your email" db-column="email">
                        <span class="error"></span>
                    </error> 
                    <error>
                        <input type="text" class="form-control" name="name" placeholder="Enter Your Name" required data-required="Enter your name to continue" db-column="name">
                        <span class="error"></span>
                    </error>
                    <div class="text-center my-1">
                        <button type="button" class="btn btn-secondary btn-block">Next</button>
                    </div>
                </div>
            </div>
        </form>           
    </div>
@endsection

    