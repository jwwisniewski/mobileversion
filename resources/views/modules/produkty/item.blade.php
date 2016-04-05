<a href="{{$item->url}}.html">
  <img src="/convert40/{{$item->fotos->first()->id_foto}}_mob.jpg" class="img-responsive" alt="item">
  @if($item->sprzedany)
  <div class="productlist-label">
    <span class="sold-out-label">{{ trans('produkty.label.sold-out') }}</span>
  </div>
  @endif
  <span class="productlist-price-container">
    <span class="product-price">
      <span class="price">{{$item->cena}} {{ trans('produkty.price.currency') }}</span>
    </span>
  </span>
</a>
