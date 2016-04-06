<?php

namespace App;

class Category extends JCMModel {

  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'devel_produkty_kategoria';

  /**
   * The primary key for the model.
   *
   * @var string
   */
  protected $primaryKey = 'id_kategoria';

  public function parentCategory() {
    return $this->belongsTo(Category::class, 'id_kategoria', 'rodzic');
  }

  public function children() {
    return $this->hasMany(Category::class, 'rodzic', 'id_kategoria');
  }

  public function products() {
    return $this->hasMany(Produkty::class, 'kategoria', 'id_kategoria');
  }

  public function scopeGetByParentId($query, $parent, $columns) {
    return $query->where('rodzic', $parent)->where('widoczny', 1)->orderBy('pozycja', 'asc')->get($columns);
  }

}
