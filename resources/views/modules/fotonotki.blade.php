@extends('master')

@section('content')
<div class="page-header">
  <h1>
    {!! $matchedInstance->title !!}
  </h1>
</div>
@foreach($payload as $item)
<article>
  <header>
    <h2><a href="blog-article.html">
        {!! $item->title !!}
      </a></h2>
  </header>
<!--  <div class="post-date">
    September 15, 2014 | <a href="">Angelo </a> <span><a href="blog-article.html">4 Comments</a></span>
  </div>	-->
  <div class="content">

<!--    <div class="container-fluid productlist">
      <div class="row">
        <div class="col-sm-8">
          <a href="blog-article.html"><img src="img/vase_3a.jpg" class="img-responsive" alt="item"></a>
        </div>
        <div class="col-sm-4">
          <a href="blog-article.html"><img src="img/vase_6a.jpg"  class="img-responsive" alt="item"></a>
        </div>
        <div class="col-sm-4">
          <a href="blog-article.html"><img src="img/vase_4b.jpg"  class="img-responsive" alt="item"></a>
        </div>
      </div>
    </div>-->
    <p>
     {!! $item->tresc !!}
    </p>
  </div>
</article>
@endforeach
@endsection
