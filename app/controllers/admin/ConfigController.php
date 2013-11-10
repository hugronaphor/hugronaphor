<?php

namespace App\Controllers\Admin;

use Image;
use Input;
use Notification;
use Redirect;
use Sentry;
use Str;

class ConfigController extends \BaseController {

  public function index() {

    $vars = \DB::table('variables')->whereIn('name', array(
      'site_name',
      'footer_contact_text'
    ))->remember(1)->get();
    foreach ($vars as $var) {
      $vars[$var->name] = $var->value;
    }

    return \View::make('admin.config.index')->with('vars', $vars);
  }

  public function show($id) {
  }

  public function create() {
  }

  public function store() {
  }

  public function edit($id) {
  }

  public function update($id) {
  }

  public function destroy($id) {
  }

}
