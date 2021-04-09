@extends('layouts.app')

@section('content')
<div class="container">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error )
             <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @if (session('error'))
    <div class="alert alert-danger">
        {{session('error')}}
    </div>

    @endif
    @if (session()->get('message'))
    <div class="alert alert-success" role="alert">
        <strong>SUCCESS:</strong>{{session()->get('message')}}
    </div>

    @endif
    <div class="row justify-content-center">
        @include('includes.Profile_Sidebar')

                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">{{Auth::user()->name}}'s Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{!!route('changePassword')!!}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="current_password"><strong>Current Password:</strong></label>
                            <input type="password" class="form-control" id="current_Password" name="current_Password">
                        </div>
                        <div class="form-group">
                            <label for="new_Password"><strong>New Password:</strong></label>
                            <input type="password" class="form-control" id="new_Password" name="new_Password">
                        </div>

                        <div class="form-group">
                            <label for="current_password_confirmation"><strong>Confirm New Password:</strong></label>
                            <input type="password" class="form-control" id="current_Password_confirmation" name="current_Password_confirmation">
                        </div>

                           <button class="btn btn-primary" type="submit">Change Password</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
