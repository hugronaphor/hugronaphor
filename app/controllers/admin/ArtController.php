<?php

namespace App\Controllers\Admin;

use App\Models\Art;
use App\Services\Validators\ArtValidator;
use App\Services\Files;
use Image,
    Input,
    Notification,
    Redirect,
    Sentry,
    Str,
    Illuminate\Support\Facades\DB;

class ArtController extends \BaseController {

  public function index() {
    return \View::make('admin.art.index')->with('rows', Art::all());
  }

  public function show($id) {
    return \View::make('admin.art.show')->with('row', Art::find($id));
  }

  public function create() {
    return \View::make('admin.art.create');
  }

  public function store() {
    $validation = new ArtValidator;

    if ($validation->passes()) {
      $row = new Art;
      $row->title = Input::get('title');
      $row->url = 'simple value';
      $row->credit = Input::get('credit');
      $row->author = Input::get('author');
      $row->order = Input::get('order');
      //$for_slug = $row->f_name . ' ' . $row->m_name . ' ' . $row->l_name;
      $row->slug = Str::slug($row->title);
      $row->body = Input::get('body');
      //$row->user_id = Sentry::getUser()->id;
      $row->save();
      if (Input::hasFile('image')) {
        // First - delete old one.
        if ($row->image && !$file_deleted = Files::deleteFile($row->image)) {
          //if (!$file_deleted = Files::deleteFile($row->image)) {
          Notification::success('The old File can\'t be deleted.');
          //return Redirect::route('admin.art.edit', $row->aid);
          //}
        }

        $row->image = Files::createFile(Input::file('image'), 'art/' . $row->aid, 'image');
        $row->save();
      }
      

      Notification::success('The art item was saved.');

      return Redirect::route('admin.art.edit', $row->aid);
    }

    return Redirect::back()->withInput()->withErrors($validation->errors);
  }

  public function edit($id) {

    $row = DB::table('art')
      ->leftJoin('files', 'art.image', '=', 'files.fid')
      ->where('art.aid', '=', $id)
      ->get();

    $row = @reset($row);
    if (!empty($row)) {
      return \View::make('admin.art.edit')->with('row', $row);
    }

    return 'Something is wrong.';
  }

  public function update($id) {
    $validation = new ArtValidator;

    if ($validation->passes()) {
      $row = Art::find($id);
      $row->title = Input::get('title');
      $row->url = Input::get('url');
      $row->credit = Input::get('credit');
      $row->author = Input::get('author');
      $row->order = Input::get('order');
      //$for_slug = $row->f_name . ' ' . $row->m_name . ' ' . $row->l_name;
      $row->slug = Str::slug($row->title);
      $row->body = Input::get('body');
      //$row->user_id = Sentry::getUser()->id;

      if (Input::hasFile('image')) {
        // First - delete old one.
        if ($row->image && !$file_deleted = Files::deleteFile($row->image)) {
          //if (!$file_deleted = Files::deleteFile($row->image)) {
          Notification::success('The old File can\'t be deleted.');
          //return Redirect::route('admin.art.edit', $row->aid);
          //}
        }

        $row->image = Files::createFile(Input::file('image'), 'art/' . $row->aid, 'image');
      }
      $row->save();

      Notification::success('The art item was saved.');

      return Redirect::route('admin.art.edit', $row->aid);
    }

    return Redirect::back()->withInput()->withErrors($validation->errors);
  }

  public function destroy($id) {
    $row = Art::find($id);

    if (isset($row->image) && $row->image != '0') {
      if (!$file_deleted = Files::deleteFile($row->image)) {
        Notification::success('The File can\'t be deleted.');
       // return Redirect::route('admin.art.edit', $row->aid);
      }
    }
    $row->delete();
    Notification::success('The Art item was deleted.');
    return Redirect::route('admin.art.index');
  }

}
