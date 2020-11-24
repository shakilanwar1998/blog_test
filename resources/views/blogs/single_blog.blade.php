@extends('layouts.app')

@section('content')

<header class="masthead" style="background-image: url('img/post-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1>{{$blog->title}}</h1>
            <span class="meta">Posted by
              <a href="#">Start Bootstrap</a>
              on {{$blog->created_at}}</span>
          </div>
        </div>
      </div>


      <article class="mt-5">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                {{$blog->description}}
            </div>
          </div>
        </div>
      </article>

    </div>
  </header>
@endsection