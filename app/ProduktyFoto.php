<?php

namespace App;

class ProduktyFoto extends JCMModel {

  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'devel_produkty_foto';

  /**
   * The primary key for the model.
   *
   * @var string
   */
  protected $primaryKey = 'id_foto';

  public function produkt() {
    return $this->belongsTo(Produkty::class, 'produkty', 'id_produkty');
  }

}
