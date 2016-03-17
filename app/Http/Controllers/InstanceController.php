<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class InstanceController extends Controller {

  /**
   *
   * @var \App\Instance 
   */
  private $matchedInstance;

  private function matchInstance($url) {
    $instances = \App\Instance::all();

    foreach ($instances as $instance) {
      if ($instance->name == $url) {
        $this->matchedInstance = $instance;
        return [
            $instance->module,
            $instance->sub_module,
        ];
      }
    }

    return false;
  }

  public function index($url) {

    list($module, $subModule) = $this->matchInstance($url);

    if ($module == \App\Subpage::MODULE_NAME) {
      $payload = \App\Subpage::find($subModule);
    } else {
      $payload = $this->matchedInstance;
    }

    return view('index', $payload);
  }

}
