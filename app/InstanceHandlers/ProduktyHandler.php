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

    $data['payload'] = \App\Produkty::with(['fotos', 'category'])->mainPage(['title', 'cena', 'magazyn', 'sprzedany', 'id_produkty', 'kategoria']);

    return view('modules/produkty/list', $data);
  }

  public function instance($data) {

    $data['payload'] = \App\Category::getPaginatedByParentId(3, ['title', 'tresc', 'keywords', 'description']);

    return view('modules/produkty/category_list', $data);
  }

  public function category($data) {

    $matchedCategory = \App\Category::matchByUrl($data['category'], ['id_kategoria', 'title', 'keywords', 'description']);
    $ids = [];
    $ids[] = $matchedCategory->id_kategoria;
    foreach ($matchedCategory->children as $subCategory) {
      $ids[] = $subCategory->id_kategoria;
    }
    
    $data['seo'] = new \stdClass();
    $data['seo']->title = $matchedCategory->title;
    $data['seo']->keywords = $matchedCategory->keywords;
    $data['seo']->description = $matchedCategory->description;

    $data['payload'] = \App\Produkty::with(['fotos', 'category'])->getPaginatedByCategoryId(5, $ids, ['title', 'cena', 'magazyn', 'sprzedany', 'id_produkty', 'kategoria']);

    return view('modules/produkty/list', $data);
  }
  
    public function product($data) {

    $data['payload'] = \App\Produkty::matchByUrl($data['product'], ['*']);
    
    $data['seo'] = new \stdClass();
    $data['seo']->title = $data['payload']->title;
    $data['seo']->keywords = $data['payload']->keywords;
    $data['seo']->description = $data['payload']->description;

    return view('modules/produkty/full', $data);
  }

}
