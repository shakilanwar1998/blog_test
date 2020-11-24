@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create a blog</h1>

        <form action="{{url('blogs/create')}}" class="mt-5" method="post">
            @csrf
            <div class="form-group row">
                <div class="col-md-3">
                    <label>Blog title</label>
                </div>
                <div class="col-md-7">
                    <input type="text" name="title" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-3">
                    <label>Blog Description</label>
                </div>
                <div class="col-md-7">
                    <textarea name="description" cols="30" rows="10" class="form-control"></textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">

                </div>
                <div class="col-md-7">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
                
            </div>
            
        </form>
    </div>
@endsection
