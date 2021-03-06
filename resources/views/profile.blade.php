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
                    <form action="{!!route('profileUpdate')!!}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name"><strong>Name:</strong></label>
                            <input type="text" class="form-control" id="name" name="name" value="{{Auth::user()->name}}">
                        </div>
                        <div class="form-group">
                            <label for="email"><strong>Email:</strong></label>
                            <input type="email" class="form-control" id="email" name="email" value="{{Auth::user()->email}}">
                        </div>
                        <button class="btn btn-primary" type="submit">Update Profile</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
