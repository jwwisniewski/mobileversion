<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class InstanceController extends Controller {

  /**
   *
   * @var \App\Instance 
   */
  private $matchedInstance;
  private $toplinks;

  public function __construct() {
    $this->toplinks = \App\NavMenu::topLinks();
  }

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
    throw new \App\Exceptions\InstanceNotFoundException('No instance for "' . \Illuminate\Support\Facades\Request::path() . '" url found');
  }

  public function index() {

    $payload = new \stdClass();

    foreach (\App\Settings::defaultSEO() as $setting) {
      $payload->{$setting->pole} = $setting->wartosc;
    }

    $data = [
        'payload' => $payload,
        'links' => $this->toplinks,
    ];

    return view('index', $data);
  }

  public function instance($instance) {

    list($module, $subModule) = $this->matchInstance($instance);

    if ($module == \App\Subpage::MODULE_NAME) {
      return view('subpage', [
          'payload' => \App\Subpage::find($subModule),
          'links' => $this->toplinks,
      ]);
    } else {
//      $output = \App::make('\\App\\' . ucfirst($this->matchedInstance->module));
//      dd($output);
      return view('instance', [
          'payload' => $this->matchedInstance,
          'links' => $this->toplinks,
//          'content' => $this->toplinks,
      ]);
    }
  }
}
