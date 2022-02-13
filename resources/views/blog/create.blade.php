@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{route('blog.store')}}" method="POST" enctype="multipart/form-data">
                <div class="card">
                    <div class="card-header">{{ __('Profile') }} 
                        <div class="action">
                            <button class="btn btn-primary float-end" type="submit" class="float-end">Save</button>
                        </div>
                    </div>

                    <div class="card-body ">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="card p-5" >
                            @csrf

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="title" class="col-md-4 col-form-label ">{{ __('Title') }}</label>
                                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title')  }}" required autocomplete="title" autofocus>
    
                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                             
                                
                                <div class="col-md-12">
                                    <label for="email" class="col-md-4 col-form-label ">{{ __('Description') }}</label>

                                    <textarea name="description" id="" class="form-control" rows="10" cols="30"></textarea>
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            
    
                     
                              
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
