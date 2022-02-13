@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" >
                        
                <div class="card-body">
                    <h5 class="card-title">{{ucfirst($blog->title)}}</h5>
                    <p class="card-text">{{$blog->description}}</p>
                    <p><b>Posted On  </b>{{$blog->created_at}}</p>
                </div>
                </div> 
        </div>
    </div>
</div>
@endsection
