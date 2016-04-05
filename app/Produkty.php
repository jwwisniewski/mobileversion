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

  public function getUrlAttribute($v) {
    return $this->transliterateString($this->title);
  }

  public function scopeByCategory($query, $category_id) {
    return $query->where('widoczny', 1)->where('kategoria', $category_id)->where('glowna', 1)->orderBy('pozycja')->get();
  }

  public function scopeMainPage($query) {
    return $query->where('widoczny', 1)->where('glowna', 1)->orderBy('pozycja')->get();
  }

  public function fotos() {
    return $this->hasMany(ProduktyFoto::class, 'produkty', 'id_produkty');
  }

}
