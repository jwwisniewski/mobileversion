<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class InstanceController extends Controller {

  /**
   *
   * @var \App\Instance 
   */
  private $matchedInstance;
  private $topLinks;
  private $bottomLinks;

  public function __construct() {
    $this->topLinks = \App\NavMenu::topLinks();
    $this->bottomLinks = \App\NavMenu::bottomLinks();
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
        'topLinks' => $this->topLinks,
        'bottomLinks' => $this->bottomLinks,
    ];

    return view('index', $data);
  }

  public function instance($instance) {

    list($module, $subModule) = $this->matchInstance($instance);

    $requestHandler = \App::make('\\App\\InstanceHandlers\\' . ucfirst($this->matchedInstance->module) . 'Handler');

    return $requestHandler->instance([
                'module' => $module,
                'subModule' => $subModule,
                'matchedInstance' => $this->matchedInstance,
                'topLinks' => $this->topLinks,
                'bottomLinks' => $this->bottomLinks,
    ]);
  }

}
