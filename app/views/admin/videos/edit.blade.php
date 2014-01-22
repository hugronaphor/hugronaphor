@extends('admin._layouts.default')

@section('main')

<h2>Edit video</h2>

@include('admin._partials.notifications')

{{ Form::model($row, array('method' => 'put', 'route' => array('admin.videos.update', $row->vid), 'files' => true)) }}

<div class="control-group">
  {{ Form::label('title', 'Title') }}
  <div class="controls">
    {{ Form::text('title') }}
  </div>
    {{ Form::label('url', 'Video Url') }}
  <div class="controls">
    {{ Form::text('url') }}
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
      @if ($row->image)
      <a href="<?php echo $row->image; ?>"><img src="<?php echo Image::resize($row->image, 300, 300); ?>" alt=""></a>
      @else
      <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image">
      @endif
    </div>
    <div>
      <span class="btn btn-file">
        <span class="fileupload-new">Select image</span>
        <span class="fileupload-exists">Change</span>
        <p>{{ Form::file('image') }}</p>
      </span>
      <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
    </div>
  </div>
</div>

<div class="form-actions">
  {{ Form::submit('Save', array('class' => 'btn btn-success btn-save btn-large')) }}
  <a href="{{ URL::route('admin.videos.index') }}" class="btn btn-large">Cancel</a>
</div>

{{ Form::close() }}

@stop