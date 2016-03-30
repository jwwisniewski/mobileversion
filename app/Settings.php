<?php

namespace App;

class Settings extends JCMModel {

  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'devel_settings';

  /**
   * The primary key for the model.
   *
   * @var string
   */
  protected $primaryKey = 'id_settings';

  public function getWartoscAttribute($v) {
    return $this->extractXML($v);
  }

  public function scopeDefaultSEO($query) {
    return $query->where('instance_module', 'set_default_page')->get(['pole', 'wartosc']);
  }
}
