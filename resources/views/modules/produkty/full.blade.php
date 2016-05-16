@extends('master')
@section('content')
<div class="container-fluid product">
  <div class="row visible-xs product-mobile">
    <div class="col-xs-12 text-center">
      <h2 class="product-title"> {!! $payload->title !!} </h2>
<!--      <div class="product-price">
        <span class="price">{{ $payload->cena }} {{ trans('produkty.price.currency') }}</span>
      </div>-->
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
<!--      <div class="product-price hidden-xs">
        <span class="price">{{ $payload->cena }} {{ trans('produkty.price.currency') }}</span>
      </div>-->
      <div class="product-detail">
        {!! $payload->tresc !!}
      </div>
      <form  action="product1.html" method="POST" class="myform">
        <h3>
          Dostępne kolory wykończeń
        </h3>
        
        <ul class="product-colors">
          @foreach($payload->podstawy as $item)
          <li><a title="{{$item->title}}" style="background: url(/podstawy/{{$item->id_podstawy}}.jpg) 0 0 no-repeat;"> </a></li>
          @endforeach
        </ul>
        
        <div class="product-price">
          <span class="price">{{ $payload->cena }} {{ trans('produkty.price.currency') }}</span>
        </div>

        <div class="product-btn">
          <a href="" class="btn">{{ trans('ui.basket.button.add') }}</a>
        </div>	
      </form>
    </div>
  </div>
</div>

@endsection
