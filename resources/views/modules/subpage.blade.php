@extends('master')

@section('content')
<div class="page-header">
  <h1>
    {!! $matchedInstance->title !!}
  </h1>
</div>
{!! $matchedInstance->tresc !!}
@endsection
