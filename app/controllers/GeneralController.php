<?php

class GeneralController extends BaseController {


  public function getContact() {

    // Get variables from Backend. @todo
    $vars = \DB::table('variables')->whereIn('name', array(
      'site_name',
      'footer_contact_text'
    ))->remember(1)->get();
    foreach ($vars as $var) {
      $vars[$var->name] = $var->value;
    }

    return \View::make('site.contact')->with('vars', $vars);

  }

}