@extends('master')
@section('content')
<div class="container-fluid">
  <div class="row">
    @foreach($payload as $category)
    <div class="col-sm-12">	
      <article>
        <header>
          <h1>
            <a href="/{{$instance}}/{{$category->url}}.html">
              {{$category->title}}
            </a>
          </h1>
        </header>
        <div class="content">
          <p>
            {!! $category->tresc !!}
          </p>
        </div>
      </article>
    </div>
    @endforeach
  </div>
  @include('modules/produkty/pagination')
</div>

@endsection
