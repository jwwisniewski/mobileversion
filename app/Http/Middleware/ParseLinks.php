<?php

namespace App\Http\Middleware;

use Closure;

class ParseLinks {

  /**
   * Handle an incoming request.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \Closure  $next
   * @return mixed
   */
  public function handle($request, Closure $next) {
    $response = $next($request);

//instance
    $allInstances = [];
    foreach (\App\Instance::all() as $instance) {
      $allInstances[$instance->id_instance] = $instance->name;
    }
    $matchedInstances = [];
    preg_match_all('/' . preg_quote('index.php?iid=') . '([0-9]+)/i', $response, $matchedInstances);

    foreach ($matchedInstances[0] as $key => $val) {
      $s = '/' . $allInstances[$matchedInstances[1][$key]];
      $response->setContent(preg_replace('/' . preg_quote($val) . '/i', $s, $response->content()));
    }
    
//kategorie produktów
    $allCategories = [];
    foreach (\App\Category::all() as $category) {
      $allCategories[$category->id_kategoria] = $category->url;
    }
    $matchedCategories = [];
    preg_match_all('/' . preg_quote('&prodkatid=') . '([0-9]+)/i', $response, $matchedCategories);

    foreach ($matchedCategories[0] as $key => $val) {
      $d =  '/'.$allCategories[$matchedCategories[1][$key]];
      $response->setContent(preg_replace('/' . preg_quote($val) . '/i', $d, $response->content()));
    }
    
//zakonczenia linków
    $response->setContent(preg_replace('/href="\/([a-z\-\/]{1,})"/', 'href="/$1.html"', $response->content()));
    
    return $response;
  }

}
