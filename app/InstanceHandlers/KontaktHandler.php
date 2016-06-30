<?php

namespace App\InstanceHandlers;

class KontaktHandler {

  public function instance($data){
    
    $data['subpage'] = \App\Subpage::find(27);
    
    return view('modules/kontakt', $data);
  }
  
}
