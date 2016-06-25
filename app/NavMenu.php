<?php

namespace App;

class NavMenu extends JCMModel {

  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'devel_nav_menu';

  /**
   * The primary key for the model.
   *
   * @var string
   */
  protected $primaryKey = 'id_menu';

  const TOPLINKS = 31;
  const BOTTOMLINKS = 32;
  
  protected $hiddenTop = [17, 24];
  protected $hiddenBottom = [];

  public function scopeTopLinks($query) {
    return $query->where('widoczne', 1)->where('instance', self::TOPLINKS)->whereNotIn('id_menu', $this->hiddenTop)->orderBy('pozycja')->get(['nazwa', 'url']);
  }

  public function scopeBottomLinks($query) {
    return $query->where('widoczne', 1)->where('instance', self::BOTTOMLINKS)->whereNotIn('id_menu', $this->hiddenBottom)->orderBy('pozycja')->get(['nazwa', 'url']);
  }

  public function getNazwaAttribute($v) {
    return $this->extractXML($v);
  }

  public function getUrlAttribute($v) {

    $ex = explode('=', $v);

    $instance = Instance::where('id_instance', $ex[1])->get()->first();

    return $instance->name;
  }

}
