<?php

namespace App\Controllers\Admin;

use App\Models\Video;
use App\Services\Validators\VideoValidator;
use App\Services\Files;
use Image,
    Input,
    Notification,
    Redirect,
    Sentry,
    Str,
    Illuminate\Support\Facades\DB,
    App;

class VideosController extends \BaseController {

  public function index() {
    return \View::make('admin.videos.index')->with('rows', Video::all());
  }

  public function show($id) {
    return \View::make('admin.videos.show')->with('row', Video::find($id));
  }

  public function create() {
    return \View::make('admin.videos.create');
  }

  public function store() {
//    $validation = new ProfileValidator;
//
//    if ($validation->passes()) {
//      $row = new Video;
//      $row->title = Input::get('f_name');
//      $row->m_name = Input::get('m_name');
//      $row->l_name = Input::get('l_name');
//      $for_slug = $row->f_name . ' ' . $row->m_name . ' ' . $row->l_name;
//      $row->slug = Str::slug($for_slug);
//      $row->body = Input::get('body');
//      $row->user_id = Sentry::getUser()->id;
//      $row->save();
//
//      // Now that we have the profile ID we need to move the image
//      if (Input::hasFile('image')) {
//        $row->image = Image::upload(Input::file('image'), 'profiles/' . $row->id);
//        $row->save();
//      }
//
//      Notification::success('The video was saved.');
//      return Redirect::route('admin.videos.edit', $row->id);
//    }
    //return Redirect::back()->withInput()->withErrors($validation->errors);
  }

  public function edit($id) {

    $row = DB::table('video')
      ->leftJoin('files', 'video.image', '=', 'files.fid')
      ->where('video.vid', '=', $id)
      ->get();

    $row = @reset($row);
    if (!empty($row)) {
      
      $row->width = $row->width ? $row->width : '';
      $row->height = $row->height ? $row->height : '';
      
      return \View::make('admin.videos.edit')->with('row', $row);
    }

    return 'Something is wrong.';
  }

  public function update($id) {
    App::setLocale('ro');
    $validation = new VideoValidator;

    if ($validation->passes()) {
      $row = Video::find($id);
      $row->title = Input::get('title');
      $row->url = Input::get('url');
      $row->width = Input::get('width');
      $row->height = Input::get('height');
      //$for_slug = $row->f_name . ' ' . $row->m_name . ' ' . $row->l_name;
      $row->slug = Str::slug($row->title);
      $row->body = Input::get('body');
      //$row->user_id = Sentry::getUser()->id;

      if (Input::hasFile('image')) {
        // First - delete old one.
        if ($row->image && !$file_deleted = Files::deleteFile($row->image)) {
          //if (!$file_deleted = Files::deleteFile($row->image)) {
            Notification::success('The old File can\'t be deleted.');
            return Redirect::route('admin.videos.edit', $row->vid);
          //}
        }

        $row->image = Files::createFile(Input::file('image'), 'videos/' . $row->vid, 'image');
      }
      $row->save();

      Notification::success('The video was saved.');

      return Redirect::route('admin.videos.edit', $row->vid);
    }

    return Redirect::back()->withInput()->withErrors($validation->errors);
  }

  public function destroy($id) {
    $row = Video::find($id);

    if (isset($row->image) && $row->image != '0') {
      if (!$file_deleted = Files::deleteFile($row->image)) {
        Notification::success('The File can\'t be deleted.');
        return Redirect::route('admin.videos.edit', $row->vid);
      }
    }
    $row->delete();
    Notification::success('The Video was deleted.');
    return Redirect::route('admin.videos.index');
  }

}
