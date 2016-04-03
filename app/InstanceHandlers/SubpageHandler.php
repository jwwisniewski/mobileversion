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
class SubpageHandler {

  public function instance($data){
    $data['matchedInstance'] = \App\Subpage::find($data['subModule']);
    return view('modules/subpage', $data);
  }
}
