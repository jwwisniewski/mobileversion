<?php

namespace App;

class Podstawy extends JCMModel {

  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'devel_podstawy';

  /**
   * The primary key for the model.
   *
   * @var string
   */
  protected $primaryKey = 'id_podstawy';

//  public function products() {
//    return $this->belongsToMany(Produkty::class, 'devel_podstawy_assoc', 'id_produkty', 'id_podstawy');
//  }

}
