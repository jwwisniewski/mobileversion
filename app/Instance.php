<?php

namespace App;

class Instance extends JCMModel {

  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'devel_instance';

  /**
   * The primary key for the model.
   *
   * @var string
   */
  protected $primaryKey = 'id_instance';

  public function getNameAttribute($v) {
    return $this->extractXML($v);
  }

  public function getModuleAttribute($v) {
    $ex = explode('&', $v);

    return $ex[0];
  }

}
