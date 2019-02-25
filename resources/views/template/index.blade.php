@extends('template.master')
    <!-- Page Header -->
<header class="masthead" style="background-image: url({{asset('img/home-bg.jpg')}})">
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
@section('content')
    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
         @foreach($posts as $post )
            <div class="post-preview">
              <a href="post">
                <h2 class="post-title">
                  {{$post->post_title}}
                </h2>
                  <img src="img/{{$post->image_name}}" class="img-fluid w-25 h-25" >
                <h3 class="post-subtitle">
                  {!! $post->post_content !!}

                </h3>
              </a>
              <p class="post-meta">Posted by
                <a href="#"> {{$post->writer_name}}</a>
                on{{$post->created_at}}</p>
            </div>
            <a href="/index/{{$post->id}}/delete"> Delete </a>
            <a href="/index/{{$post->id}}/edit"> Edit </a>
            <hr>
          @endforeach
          <!-- Pager -->
          <div class="clearfix">
            <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
          </div>
        </div>
      </div>
    </div>
@endsection
