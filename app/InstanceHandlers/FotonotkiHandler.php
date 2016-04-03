<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\InstanceHandlers;

/**
 * Description of newPHPClass
 *
 * @author L540
 */
class FotonotkiHandler {

  public function instance($data) {
    $data['payload'] = \App\Fotonotki::browseAll($data['matchedInstance']->id_instance);
    return view('modules/fotonotki', $data);
  }

  public function subInstance() {
    
  }

}
