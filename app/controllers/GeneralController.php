<?php

use App\Services\Menu;

class GeneralController extends BaseController {

  public function __construct() {
    $this->vars['currentRoute'] = Route::currentRouteName();
    $menu = new Menu();
    $this->menu = $menu->getAllMenu();
    $this->vars['menu'] = $this->menu;
    $this->vars['baseParent'] = $menu->getBaseMenuItem($this->vars['currentRoute']);
  }

  public function getHome() {

//    // Get variables from Backend. @todo
//    $vars = \DB::table('variables')->whereIn('name', array(
//      'site_name',
//      'footer_contact_text'
//    ))->remember(1)->get();
//    foreach ($vars as $var) {
//      $vars[$var->name] = $var->value;
//    }
    $this->vars['title'] = 'Home';
    return \View::make('site.index')->with('vars', $this->vars);
  }

  public function getContact() {

    // Get variables from Backend. @todo
    $dbVars = \DB::table('variables')->whereIn('name', array(
        'site_name',
        'footer_contact_text'
      ))->remember(1)->get();
    foreach ($dbVars as $var) {
      $this->vars[$var->name] = $var->value;
    }

    $this->vars['title'] = 'Contact';
    return \View::make('site.contact')->with('vars', $this->vars);
  }

  public function getRaphael() {
    $this->vars['title'] = 'Raphael';

// Get variables from Backend. @todo
    $vars = \DB::table('variables')->whereIn('name', array(
        'site_name',
        'footer_contact_text'
      ))->remember(1)->get();
    foreach ($vars as $var) {
      $vars[$var->name] = $var->value;
    }


    return \View::make('site.raphael')->with('vars', $this->vars);
  }

  public function getWeb() {
    $this->vars['title'] = 'Web';
    return \View::make('site.web')->with('vars', $this->vars);
  }

  public function getMovie($id = FALSE) {

    $movies = DB::table('video')
      ->leftJoin('files', 'video.image', '=', 'files.fid')
//          ->get();
      ->paginate(6);
//dd($movies);
    $new_movies = array();
    foreach ($movies as $key => $movie) {
      $new_movies[$movie->vid]['thumbnail'] = !empty($movie->path) ? $movie->path : '/uploads/no-image.jpg';
      $new_movies[$movie->vid]['title'] = $movie->title;
      $new_movies[$movie->vid]['author'] = $movie->author;
      $new_movies[$movie->vid]['year'] = $movie->year;
      $new_movies[$movie->vid]['id'] = $movie->vid;
      $new_movies[$movie->vid]['order'] = $key;

      $page = Input::get('page');

      $new_movies[$movie->vid]['node_path'] = $page ?
        '/movie/' . $movie->vid . '?page=' . e($page) : '/movie/' . $movie->vid;
//      $movies[$key]['id'] = $match[1];
      //$movies[$key]['thumbnail'] = $this->getVimeoInfo($movies[$key]['id']);
    }

    $currentId = (!$id || !isset($new_movies[$id]['id'])) ? $movies[0]->vid : $id;

    // Get vimeo Id.
    preg_match('%vimeo\.com\/([0-9]+)%i', $movies[$new_movies[$currentId]['order']]->url, $match);
    if (isset($match[1]) && !empty($match[1])) {
      $this->vars['current_movie']['vimeo_id'] = $match[1];
      $this->vars['current_movie']['id'] = $id;
      $this->vars['current_movie']['width'] = $movies[$new_movies[$currentId]['order']]->width ?
        $movies[$new_movies[$currentId]['order']]->width : 500;
      $this->vars['current_movie']['height'] = $movies[$new_movies[$currentId]['order']]->width ?
        $movies[$new_movies[$currentId]['order']]->height : 203;
    }

    $this->vars['title'] = 'Movie';
    $this->vars['movies'] = $new_movies;
    $this->vars['original_movies'] = $movies;

    return \View::make('site.movie')->with('vars', $this->vars);
  }

  public function getVimeoInfo($id, $info = 'thumbnail_medium') {
    if (!function_exists('curl_init')) {
      die('CURL is not installed!');
    }
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://vimeo.com/api/v2/video/$id.php");
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    $output = unserialize(curl_exec($ch));
    $output = $output[0][$info];
    curl_close($ch);
    return $output;
  }

}
