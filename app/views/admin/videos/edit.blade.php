@extends('admin._layouts.default')

@section('main')

<h2>Edit video <i>{{ $row->title }}</i></h2>

@include('admin._partials.notifications')

{{ Form::model($row, array('method' => 'put', 'route' => array('admin.videos.update', $row->vid), 'files' => true)) }}

<div class="control-group">
  {{ Form::label('title', 'Title') }}
  <div class="controls">
    {{ Form::text('title') }}
  </div>
  <div class="form-group">
    {{ Form::label('url', 'Video Url') }}
    <div class="controls">      
      {{ Form::text('url', $row->url, array('placeholder'=>'Please use strict url format like: http://vimeo.com/29252510')) }}
    </div>
    {{ Form::label('width', 'Video Width') }}
    <div class="controls">
      {{ Form::text('width', $row->width, array('placeholder'=>'Video width, used for calculating video ratio  (default:500).')) }}
    </div>
    {{ Form::label('height', 'Video Height') }}
    <div class="controls">
      {{ Form::text('height', $row->height, array('placeholder'=>'Video height, used for calculating video ratio  (default:203).')) }}
    </div>
  </div>
  {{ Form::label('author', 'Author') }}
  <div class="controls">
    {{ Form::text('author', $row->author) }}
  </div>
  {{ Form::label('year', 'Year') }}
  <div class="controls">
    {{ Form::text('year') }}
  </div>
</div>

<div class="control-group">
  {{ Form::label('body', 'Content') }}
  <div class="controls">
    {{ Form::textarea('body') }}
  </div>
</div>

<div class="control-group">
  {{ Form::label('image', 'Image') }}

  <div class="fileupload fileupload-new" data-provides="fileupload">
    <div class="fileupload-preview thumbnail" style="width: 300px; height: 300px;">
      @if ($row->image)
      {{-- dd($row); --}}
      <a href="<?php echo $row->path; ?>"><img src="<?php echo /* Image::resize($row->path, 300, 300); */ $row->path; ?>" alt=""></a>
      @else
      <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image">
      @endif
    </div>
    <div>
      <span class="btn btn-file">
        <span class="fileupload-new">Select image /</span>
        <span class="fileupload-exists">Change</span>
        <p>{{ Form::file('image') }}</p>
      </span>
      <!--<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>-->
    </div>
  </div>
</div>

<div class="form-actions edit-node-buttons">
  {{ Form::submit('Save', array('class' => 'btn btn-success btn-save save-node-btn btn-large')) }}
  <a href="{{ URL::route('admin.videos.index') }}" class="btn btn-large cancel-node-btn">Cancel</a>
  {{ Form::close() }}

  {{ Form::open(array('route' => array('admin.videos.destroy', $row->vid), 'method' => 'delete', 'data-confirm' => 'Are you sure?')) }}
  <button type="submit" href="{{ URL::route('admin.videos.destroy', $row->vid) }}" class="btn btn-danger btn-large delete-node-btn">Delete</button>
  {{ Form::close() }}
</div>
@stop