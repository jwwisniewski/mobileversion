@extends('master')
@section('content')
<div class="container-fluid productlist">
  @foreach($payload as $key => $item)
  @continue($key%3 != 0)
  @if($key%6 == 0)
  <div class="row">
    @if(count($payload) > $key+2)
    @if(count($payload) > $key)
    <div class="col-sm-8">
      @include('modules/produkty/item', ['item' => $payload[$key]])
    </div>
    @endif
    @if(count($payload) > $key+1)
    <div class="col-sm-4">
      @include('modules/produkty/item', ['item' => $payload[$key+1]])
    </div>
    @endif
    @if(count($payload) > $key+2)
    <div class="col-sm-4">
      @include('modules/produkty/item', ['item' => $payload[$key+2]])
    </div>
    @endif
    @else
    <div class="col-sm-6">
      @include('modules/produkty/item', ['item' => $payload[$key]])
    </div>
    @if(count($payload) > $key+1)
    <div class="col-sm-6">
      @include('modules/produkty/item', ['item' => $payload[$key+1]])
    </div>
    @endif
    @endif
  </div>
  @else
  <div class="row">
    @if(count($payload) > $key+2)
    <div class="col-sm-4 special">
      @if(count($payload) > $key)
      <div class="col-sm-12">
        @include('modules/produkty/item', ['item' => $payload[$key]])
      </div>
      @endif
      @if(count($payload) > $key+1)
      <div class="col-sm-12">
        @include('modules/produkty/item', ['item' => $payload[$key+1]])
      </div>
      @endif
    </div>
    <div class="col-sm-8">
      @include('modules/produkty/item', ['item' => $payload[$key+2]])
    </div>
    @else
    <div class="col-sm-6">
      @include('modules/produkty/item', ['item' => $payload[$key]])
    </div>
    @if(count($payload) > $key+1)
    <div class="col-sm-6">
      @include('modules/produkty/item', ['item' => $payload[$key+1]])
    </div>
    @endif
    @endif
  </div>
  @endif
  @endforeach
  @include('modules/produkty/pagination')
</div>
@endsection