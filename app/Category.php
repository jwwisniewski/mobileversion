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

  public function moduleInstance() {
    return $this->belongsTo(Instance::class, 'instance', 'id_instance')->select(['id_instance', 'name']);
  }

  public function children() {
    return $this->hasMany(Category::class, 'rodzic', 'id_kategoria')->select(['id_kategoria', 'title', 'instance', 'rodzic']);
  }

  public function products() {
    return $this->hasMany(Produkty::class, 'kategoria', 'id_kategoria');
  }

  public function scopeGetTreeByParentId($query, $parent, $columns) {
    return $query->where('rodzic', $parent)->where('widoczny', 1)->orderBy('pozycja', 'asc')->get($columns);
  }

  public function getUrlAttribute($v) {
    return $this->transliterateString($this->title);
  }

  public static function matchByUrl($url, $columns) {
    $categories = \App\Category::with('children')->get($columns);

    foreach ($categories as $category) {
      if ($category->url == $url) {
        return $category;
      }
    }
    throw new \App\Exceptions\InstanceNotFoundException('No category for "' . $url . '" url found');
  }
  
  public function scopeBrowseAll($query, $columns) {
    return $query->where('widoczny', 1)->orderBy('pozycja')->get($columns);
  }
}
