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
    throw new \App\Exceptions\InstanceNotFoundException('No instance for "' . \Illuminate\Support\Facades\Request::path() . '" url found');
  }

  public function index() {

    $seo = new \stdClass();

    foreach (\App\Settings::defaultSEO() as $setting) {
      $seo->{$setting->pole} = $setting->wartosc;
    }

    $requestHandler = \App::make(\App\InstanceHandlers\ProduktyHandler::class);

    return $requestHandler->mainPage([
                'matchedInstance' => $seo,
    ]);
  }

  public function instance($instance, $category = null, $product = null) {

    list($module, $subModule) = $this->matchInstance($instance);

    $requestHandler = \App::make('\\App\\InstanceHandlers\\' . ucfirst($this->matchedInstance->module) . 'Handler');

    if (!empty($product)) {
      return $requestHandler->product([
                  'module' => $module,
                  'subModule' => $subModule,
                  'instance' => $instance,
                  'category' => $category,
                  'product' => $product,
                  'matchedInstance' => $this->matchedInstance,
      ]);
    }

    if (!empty($category)) {
      return $requestHandler->category([
                  'module' => $module,
                  'subModule' => $subModule,
                  'instance' => $instance,
                  'category' => $category,
                  'product' => $product,
                  'matchedInstance' => $this->matchedInstance,
      ]);
    }

    return $requestHandler->instance([
                'module' => $module,
                'subModule' => $subModule,
                'instance' => $instance,
                'category' => $category,
                'product' => $product,
                'matchedInstance' => $this->matchedInstance,
    ]);
  }

}
