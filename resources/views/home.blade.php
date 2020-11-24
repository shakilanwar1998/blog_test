@extends('layouts.app')

@section('content')
      <!-- Page Header -->
  <header class="masthead">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Clean Blog</h1>
            <span class="subheading">A Blog Theme by Start Bootstrap</span>
          </div>
        </div>
      </div>
    </div>
  </header>



  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        
        @foreach ($blogs as $blog)
            <div class="post-preview">
            <a href="{{url('blogs/'.$blog->id)}}">
                <h2 class="post-title">
                    {{$blog->title}}
                </h2>
                </a>
                <p class="post-meta">Posted by
                <a href="#">Start Bootstrap</a>
                on  {{$blog->created_at}}</p>
            </div>
        @endforeach


        <!-- Pager -->
        <div class="clearfix">
            <a class="btn btn-primary float-right" href="{{url('blogs/create')}}">Create blog &rarr;</a>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
          <p class="copyright text-muted">Copyright &copy; Your Website 2020</p>
        </div>
      </div>
    </div>
  </footer>
@endsection
