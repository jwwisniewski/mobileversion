<?php

namespace App;

class Fotonotki extends JCMModel {

  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'devel_fotonotki';

  /**
   * The primary key for the model.
   *
   * @var string
   */
  protected $primaryKey = 'id_fotonotki';

  public function scopeBrowseAll($query, $id_instance) {
    return $query->where('instance', $id_instance)->orderBy('id_fotonotki', ' desc')->get();
  }

}
