@extends('layouts.app')
@php
    
 $user = auth()->guard()->user();
@endphp

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }} 
                    <div class="action">
                        <a href="{{route('user.edit', $user->id)}}" class="float-end mr-3">Edit Profile</a>
                        <a href="{{route('blog.index')}}" class="float-end">My Blogs</a>
                    </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="card" >
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item"><img class="img-fluid" src="{{asset('storage/'.$user->image)}}" alt=""> </li>
                          <li class="list-group-item">{{ucfirst($user->name)}}</li>
                          <li class="list-group-item">{{ucfirst($user->number)}}</li>
                          <li class="list-group-item">{{ucfirst($user->email)}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
