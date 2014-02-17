@extends('admin._layouts.default')

@section('main')

<h2>Edit art item <i>{{ $row->title }}</i></h2>

@include('admin._partials.notifications')

{{ Form::model($row, array('method' => 'put', 'route' => array('admin.art.update', $row->aid), 'files' => true)) }}

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
    {{ Form::text('order', $row->order, array('placeholder'=>'Non repeating Integer Value')) }}
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
  <a href="{{ URL::route('admin.art.index') }}" class="btn btn-large cancel-node-btn">Cancel</a>
  {{ Form::close() }}

  {{ Form::open(array('route' => array('admin.art.destroy', $row->aid), 'method' => 'delete', 'data-confirm' => 'Are you sure?')) }}
  <button type="submit" href="{{ URL::route('admin.art.destroy', $row->aid) }}" class="btn btn-danger btn-large delete-node-btn">Delete</button>
  {{ Form::close() }}
</div>
@stop