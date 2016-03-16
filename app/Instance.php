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

  private $module;

  private function explodeModule($m) {
    $this->module = explode('&', $m);
  }

  public function getModuleAttribute($v) {
    $this->explodeModule($v);

    return $this->module[0];
  }

  public function getSubModuleAttribute($v) {
    if (empty($this->module[1])) {
      return FALSE;
    }

    $ex = explode('=', $this->module[1]);

    return !empty($ex[1]) ? $ex[1] : false;
  }

}
