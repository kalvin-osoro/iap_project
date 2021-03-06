@extends('layouts.app')

@section('content')
<div class="container">
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
       <h2>{{Auth::user()->name}}
                    You are logged in!</h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
