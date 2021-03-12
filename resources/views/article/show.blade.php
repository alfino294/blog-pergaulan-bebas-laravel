@extends('layouts.app')
@section('content')

<!-- Page Header -->
<header class="masthead" style="background-image: url('{{ asset('assets/startbootstrap/img/bg1.png') }}');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1>{{$posts->title}}</h1>
            <span class="meta">Posted by
              <a href="#">{{$posts->author_id}}</a>
              {{date('d M Y',strtotime($posts->created_at))}}</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
      <img src="{{ asset('storage/'.$posts->image)}}" style="width:50%; margin-left:20%;">
        <div class="col-lg-8 col-md-10 mx-auto">
          <p>{{$posts->body}}</p>
        </div>
      </div>
    </div>
  </article>

  <hr>


  @endsection