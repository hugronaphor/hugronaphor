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
    $this->vars['title'] = 'Art';
    return \View::make('site.art.index')->with('vars', $this->vars);
  }

  public function getAbout() {

    
  }

}
