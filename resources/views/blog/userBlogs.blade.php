@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center blogs">

        @foreach ($blogs as $blog)
        
            <div class="col-md-12 mt-3">
                <a href="{{route('view.blog', $blog->id)}}">
                    <div class="card" >
                        
                    <div class="card-body">
                        <h5 class="card-title">{{ucfirst($blog->title)}}</h5>
                        <p class="card-text">{{Illuminate\Support\Str::words($blog->description, 20, ' (...)')}}</p>
                        <p><b>Posted On  </b>{{$blog->created_at}}</p>
                    </div>
                    </div>   
                </a>          
            </div>
        @endforeach
    </div>

    <div class="row mt-5">
        <div class="col-12">
            {{ $blogs->links() }}
        </div>
    </div>
</div>
@endsection
