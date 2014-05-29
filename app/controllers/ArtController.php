<?php

use App\Services\Menu;

class ArtController extends BaseController {

  public function __construct() {
    $this->vars['currentRoute'] = Route::currentRouteName();
    $menu = new Menu();
    $this->menu = $menu->getAllMenu();
    $this->vars['menu'] = $this->menu;
    $this->vars['baseParent'] = $menu->getBaseMenuItem($this->vars['currentRoute']);
  }

  public function getIndex() {

    $art_items = DB::table('art')
      ->leftJoin('files', 'art.image', '=', 'files.fid')
      ->get();

    $artCount = count($art_items);
    $newOrderedArt = array();

    foreach ($art_items as $key => $art_item) {
      // Order array by order value.
      $newOrderedArt[$art_item->order] = $art_item;
    }
    ksort($newOrderedArt);
    $newOrderedArt = array_values($newOrderedArt);

    foreach ($newOrderedArt as $key => $art_item) {
      // start li
      if (!$key || (($key + 1) % 2 != 0)) {
        $newOrderedArt[$key]->li = 'start';
      }
      // end li
      elseif ($key == $artCount - 1 || (($key + 1) % 2 == 0)) {
        $newOrderedArt[$key]->li = 'end';
      } else {
        $newOrderedArt[$key]->li = 'no';
      }
    }

    //dd($art_items);
    $this->vars['art_items'] = $newOrderedArt;

    $this->vars['title'] = 'Art';
    $this->vars['current_lang'] = LaravelLocalization::getCurrentLocaleName();
    return \View::make('site.art.index')->with('vars', $this->vars);
  }

  public function getAbout() {
    
  }

}
