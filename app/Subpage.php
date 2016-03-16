<?php

namespace App;

class Subpage extends JCMModel {

  const MODULE_NAME = 'subpage';
  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'devel_subpage';

  /**
   * The primary key for the model.
   *
   * @var string
   */
  protected $primaryKey = 'id_subpage';

}
