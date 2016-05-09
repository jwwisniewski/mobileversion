@extends('master')
@section('content')
<div class="container-fluid product">
  <div class="row visible-xs product-mobile">
    <div class="col-xs-12 text-center">
      <h2 class="product-title"> {!! $payload->title !!} </h2>
      <div class="product-price">
        <span class="price">{{ $payload->cena }} {{ trans('produkty.price.currency') }}</span>
      </div>
    </div>
  </div>	
  <div class="row">
    <div class="col-sm-8 ">
      @foreach($payload->fotos as $foto)
      <img src="/convert40/{{$foto->id_foto}}_mob.jpg" class="img-responsive" alt="item" title="{{$foto->title}}"><br>
      @endforeach
    </div>
    <div class="col-sm-4 ">
      <h2 class="product-title hidden-xs">{!! $payload->title !!}</h2>
      <div class="product-price hidden-xs">
        <span class="price">{{ $payload->cena }} {{ trans('produkty.price.currency') }}</span>
      </div>
      <div class="product-detail">
        {!! $payload->tresc !!}
      </div>
      <form  action="product1.html" method="POST" class="myform">
        <div class="form-group clearfix">
          <label class="control-label">Size</label>
          <select class="form-control">
            <option value="XS">XS</option>
            <option value="S">S</option>
            <option value="M">M</option>
            <option value="L">L</option>
            <option value="XL">XL</option>
          </select>
        </div>	

        <ul class="product-colors">
          <li class="selected"><a class="white" style="background-color:#FFF"> </a></li>
          <li class=""><a style="background-color:#000"> </a></li>
          <li class=""><a style="background-color:#49A3F1"> </a></li>
          <li class=""><a style="background-color:#FF6279"> </a></li>
        </ul>

        <div class="product-btn">
          <a href="" class="btn">Add To Cart</a>
        </div>	
      </form>
    </div>
  </div>
</div>

@endsection
