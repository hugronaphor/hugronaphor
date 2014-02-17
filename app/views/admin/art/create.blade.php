@extends('admin._layouts.default')

@section('main')

<h2>Create new art item</h2>

@include('admin._partials.notifications')

{{ Form::open(array('route' => 'admin.art.store', 'files' => true)) }}

<div class="control-group">
  {{ Form::label('title', 'Title') }}
  <div class="controls">
    {{ Form::text('title') }}
  </div>
  
  {{ Form::label('author', 'Author') }}
  <div class="controls">
    {{ Form::text('author') }}
  </div>
  {{ Form::label('credit', 'Credit') }}
  <div class="controls">
    {{ Form::text('credit') }}
  </div>
  {{ Form::label('order', 'Order') }}
  <div class="controls">
    {{ Form::text('order', '', array('placeholder'=>'Non repeating Integer Value')) }}
  </div>
</div>

<!--<div class="control-group">
  {{ Form::label('body', 'Content') }}
  <div class="controls">
    {{ Form::textarea('body') }}
  </div>
</div>-->

<div class="control-group">
  {{ Form::label('image', 'Image') }}

  <div class="fileupload fileupload-new" data-provides="fileupload">
    <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;">
      <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image">
    </div>
    <div>
      <span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span>{{ Form::file('image') }}</span>
      <!--<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>-->
    </div>
  </div>
</div>

<div class="form-actions">
  {{ Form::submit('Save', array('class' => 'btn btn-success btn-save btn-large')) }}
  <a href="{{ URL::route('admin.art.index') }}" class="btn btn-large">Cancel</a>
</div>

{{ Form::close() }}

@stop