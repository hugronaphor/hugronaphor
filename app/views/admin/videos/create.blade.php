@extends('admin._layouts.default')

@section('main')

<h2>Create new <i>Video</i></h2>

@include('admin._partials.notifications')

{{ Form::open(array('route' => 'admin.videos.store', 'files' => true)) }}

<div class="control-group">
  {{ Form::label('title', 'Title') }}
  <div class="controls">
    {{ Form::text('title') }}
  </div>
  <div class="form-group">
    {{ Form::label('url', 'Video Url') }}
    <div class="controls">
      {{ Form::text('url', '', array('placeholder'=>'Please use strict url format like: http://vimeo.com/29252510')) }}
    </div>
    {{ Form::label('width', 'Video Width') }}
    <div class="controls">
      {{ Form::text('width', '', array('placeholder'=>'Video width, used for calculating video ratio  (default:500).')) }}
    </div>
    {{ Form::label('height', 'Video Height') }}
    <div class="controls">
      {{ Form::text('height', '', array('placeholder'=>'Video height, used for calculating video ratio  (default:203).')) }}
    </div>
  </div>
  {{ Form::label('author', 'Author') }}
  <div class="controls">
    {{ Form::text('author') }}
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

      <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image">

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

<div class="form-actions">
  {{ Form::submit('Save', array('class' => 'btn btn-success btn-save btn-large')) }}  
</div>

{{ Form::close() }}

@stop