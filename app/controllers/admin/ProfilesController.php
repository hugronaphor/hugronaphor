<?php

namespace App\Controllers\Admin;

use App\Models\Profile;
use App\Services\Validators\ProfileValidator;
use Image,
    Input,
    Notification,
    Redirect,
    Sentry,
    Str;

class ProfilesController extends \BaseController {

  public function index() {
    return \View::make('admin.profiles.index')->with('profiles', Profile::all());
  }

  public function show($id) {
    return \View::make('admin.profiles.show')->with('profile', Profile::find($id));
  }

  public function create() {
    return \View::make('admin.profiles.create');
  }

  public function store() {
    $validation = new ProfileValidator;

    if ($validation->passes()) {
      $profile = new Profile;
      $profile->f_name = Input::get('f_name');
      $profile->m_name = Input::get('m_name');
      $profile->l_name = Input::get('l_name');
      $for_slug = $profile->f_name . ' ' . $profile->m_name . ' ' . $profile->l_name;
      $profile->slug = Str::slug($for_slug);
      $profile->body = Input::get('body');
      $profile->user_id = Sentry::getUser()->id;
      $profile->save();

      // Now that we have the profile ID we need to move the image
      if (Input::hasFile('image')) {
        $profile->image = Image::upload(Input::file('image'), 'profiles/' . $profile->id);
        $profile->save();
      }

      Notification::success('The profile was saved.');

      return Redirect::route('admin.profiles.edit', $profile->id);
    }

    return Redirect::back()->withInput()->withErrors($validation->errors);
  }

  public function edit($id) {
    return \View::make('admin.profiles.edit')->with('profile', Profile::find($id));
  }

  public function update($id) {
    $validation = new ProfileValidator;

    if ($validation->passes()) {
      $profile = Profile::find($id);
      $profile->f_name = Input::get('f_name');
      $profile->m_name = Input::get('m_name');
      $profile->l_name = Input::get('l_name');
      $for_slug = $profile->f_name . ' ' . $profile->m_name . ' ' . $profile->l_name;
      $profile->slug = Str::slug($for_slug);
      $profile->body = Input::get('body');
      $profile->user_id = Sentry::getUser()->id;
      if (Input::hasFile('image'))
        $profile->image = Image::upload(Input::file('image'), 'profiles/' . $profile->id);
      $profile->save();

      Notification::success('The profile was saved.');

      return Redirect::route('admin.articles.edit', $profile->id);
    }

    return Redirect::back()->withInput()->withErrors($validation->errors);
  }

  public function destroy($id) {
    $profile = Profile::find($id);
    $profile->delete();

    Notification::success('The article was deleted.');

    return Redirect::route('admin.articles.index');
  }

}
