@extends('master')

@section('content')
<div class="page-header">
  <h1>
    {!! $payload->title !!}
  </h1>
</div>
{!! $payload->tresc !!}
@endsection
