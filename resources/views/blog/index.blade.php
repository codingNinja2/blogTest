@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
                <div class="card">
                    <div class="card-header">{{ __('My Blogs') }} 
                        <a href="{{route('blog.create')}}" class="float-end mr-3">Create</a>
                        <a href="{{route('blog.user.index')}}" class="float-end mr-3">Front View</a>
                    </div>

                    <div class="card-body ">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <table class="table table-striped">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Post Date</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($blogs as $blog)
                                    <tr>
                                    <th scope="row">{{$blog->id}}</th>
                                    <td>{{$blog->title}}</td>
                                    <td>{{$blog->created_at}}</td>
                                    <td><a href="{{route('blog.edit', $blog->id)}}" class="btn btn-primary mr-3">Edit</a><a href="{{route('blog.delete', $blog->id)}}" class="btn btn-danger">Delete</a></td>
                                    </tr>
                                @endforeach
                        
                            </tbody>
                          </table>

                   
                          <div class="row mt-3">
                              <div class="col-12"> {{ $blogs->links() }}</div>
                          </div>
                    </div>

                </div>
            
        </div>
    </div>
</div>
@endsection
