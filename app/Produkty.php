<?php

namespace App;

class Produkty extends JCMModel {

  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'devel_produkty';

  /**
   * The primary key for the model.
   *
   * @var string
   */
  protected $primaryKey = 'id_produkty';

  public function getCenaAttribute($v) {
    return $this->extractXML($v);
  }

  public function getTrescAttribute($v) {
    return preg_replace('/' . preg_quote('($naglowek)') . '/i', '', parent::getTrescAttribute($v));
  }

  public function getUrlAttribute($v) {
    return $this->transliterateString($this->title);
  }

  public function scopeByCategory($query, $category_id, $columns) {
    return $query->where('widoczny', 1)->where('kategoria', $category_id)->where('glowna', 1)->orderBy('pozycja')->orderBy($this->primaryKey)->get($columns);
  }

  public function scopeMainPage($query, $columns) {
    return $query->where('widoczny', 1)->where('glowna', 1)->orderBy('pozycja')->orderBy($this->primaryKey)->simplePaginate(100, $columns, 'p');
  }

  public function scopeGetByCategoryId($query, $id, $columns) {
    return $query->where('widoczny', 1)->whereIn('kategoria', $id)->orderBy('pozycja')->orderBy($this->primaryKey)->get($columns);
  }

  public function scopeGetPaginatedByCategoryId($query, $perPage, $id, $columns) {
    return $query->where('widoczny', 1)->whereIn('kategoria', $id)->orderBy('pozycja')->orderBy($this->primaryKey)->simplePaginate($perPage, $columns, 'p');
  }

  public function fotos() {
    return $this->hasMany(ProduktyFoto::class, 'produkty', 'id_produkty');
  }

  public function category() {
    return $this->belongsTo(Category::class, 'kategoria', 'id_kategoria')->select(['id_kategoria', 'title']);
  }

  public static function matchByUrl($url, $columns) {
    $products = \App\Produkty::with('fotos')->get($columns);

    foreach ($products as $product) {
      if ($product->url == $url) {
        return $product;
      }
    }
    throw new \App\Exceptions\InstanceNotFoundException('No product for "' . $url . '" url found');
  }

}
