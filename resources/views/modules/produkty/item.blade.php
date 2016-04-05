<a href="{{$item->url}}.html">
  <img src="/convert40/{{$item->fotos->first()->id_foto}}_mob.jpg" class="img-responsive" alt="item" title="{{$item->title}}">
  @if($item->sprzedany || $item->magazyn)
  <div class="productlist-label">
    @if($item->sprzedany)<span class="sold-out-label">{{ trans('produkty.label.sold-out') }}</span>@endif
    @if($item->magazyn)<span class="sold-out-label">{{ trans_choice('produkty.label.magazyn', $item->magazyn, ['number' => $item->magazyn]) }}</span>@endif
  </div>
  @endif
  <span class="productlist-price-container">
    <span class="product-price">
      <span class="price">{{$item->cena}} {{ trans('produkty.price.currency') }}</span>
    </span>
  </span>
</a>
