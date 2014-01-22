@extends('admin._layouts.default')

@section('main')

<h2>Create new profile</h2>

@include('admin._partials.notifications')

{{ Form::open(array('route' => 'admin.profiles.store', 'files' => true)) }}

<div class="control-group">
  {{ Form::label('f_name', 'First Name') }}
  <div class="controls">
    {{ Form::text('f_name') }}
  </div>
    {{ Form::label('m_name', 'Middle Name') }}
  <div class="controls">
    {{ Form::text('m_name') }}
  </div>
      {{ Form::label('l_name', 'Last Name') }}
  <div class="controls">
    {{ Form::text('l_name') }}
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
    <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;">
      <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image">
    </div>
    <div>
      <span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span>{{ Form::file('image') }}</span>
      <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
    </div>
  </div>
</div>

<div class="form-actions">
  {{ Form::submit('Save', array('class' => 'btn btn-success btn-save btn-large')) }}
  <a href="{{ URL::route('admin.profiles.index') }}" class="btn btn-large">Cancel</a>
</div>

{{ Form::close() }}

@stop