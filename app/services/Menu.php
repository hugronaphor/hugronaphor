<?php

namespace App\Services;

class Menu {

  public function __construct($page = '') {
    $this->page = $page;
    //$this->menu = $this->getCurrentMenuTree($page);
  }

  public function getCurrentMenuTree() {
    $menus = $this->getAllMenu();
    return $menus[$this->page];
  }

  /**
   * Here we store routes name.
   * @return array
   */
  public function getAllMenu() {
    return array(
      // Art.
      'art' => array('name' => trans('base_site.menu_main_art'), 'parent' => '0'),
      'art-about' => array('name' => 'About', 'parent' => 'art'),
      'art-works' => array('name' => 'Works', 'parent' => 'art'),
      'art-how-we-work' => array('name' => 'How We Work', 'parent' => 'art'),
      // Movie.
      'movie' => array('name' => trans('base_site.menu_main_movie'), 'parent' => '0'),
//      'art-about' => array('name' => 'About', 'parent' => 'movie'),
//      // Web.
      'web' => array('name' => trans('base_site.menu_main_web'), 'parent' => '0'),
//      'art-about' => array('name' => 'About', 'parent' => 'web'),
//      // Sound.
      'contact' => array('name' => trans('base_site.menu_main_contact'), 'parent' => '0'),
//      'art-about' => array('name' => 'About', 'parent' => 'sound'),
    );
  }

  public function getBaseMenuItem($currentRoute) {
    if (!$currentRoute)
      return 'home';
    $menuArr = explode('-', $currentRoute);
    return $menuArr[0];
  }

}
