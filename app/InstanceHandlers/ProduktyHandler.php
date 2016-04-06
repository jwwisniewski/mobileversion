<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\InstanceHandlers;

/**
 * Description of newPHPClass
 *
 * @author L540
 */
class ProduktyHandler {

  public function mainPage($data) {

    $data['payload'] = \App\Produkty::with('fotos')->mainPage(['title', 'cena', 'magazyn', 'sprzedany', 'id_produkty']);

    return view('modules/produkty/list', $data);
  }

}

//
//{{--
//  
//    @foreach($payload as $key => $item)
//    
//    <div @if($key%3 == 2) class="col-sm-8" @else class="col-sm-4" @endif id="p{{$item->id_produkty}}">
//      <a href="{{$item->url}}.html">
//        <img src="/convert40/{{$item->fotos->first()->id_foto}}_mob.jpg" class="img-responsive" alt="item">
//        <span class="productlist-price-container">
//          <span class="product-price">
//            <span class="price">{{$item->cena}}</span>
//          </span>
//        </span>
//      </a>
//    </div>
//    
//    @if($key%3 == 2)
//  </div>
//  <div class="row">
//    @endif
//
//    @endforeach
//  </div>
//  
//  --}}