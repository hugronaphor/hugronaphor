@extends('admin._layouts.default')

@section('main')

<h1>
  General site configuration
</h1>

<hr>

{{ Notification::showAll() }}

{{ Form::open(array('route' => array('admin.config.index'))) }}

<label>General</label>
<div class="well well-small">

  {{ Form::label('site_name', 'Site Name') }}
  {{ Form::text('site_name', $vars['site_name'] , array('style' => 'width: 50%;')) }}

</div>

<label>Contact</label>
<div class="well well-small">

  {{ Form::label('footer_contact', 'Footer Contact') }}
  {{ Form::textarea('footer_contact', $vars['footer_contact_text'] , array('style' => 'width: 50%;', 'class' => 'ckeditor', 'name' => 'editor1')) }}

</div>

<div class="form-actions edit-node-buttons">
  {{ Form::submit('Save', array('class' => 'btn btn-success btn-save save-node-btn btn-large')) }}
  {{ Form::close() }}  
</div>

@stop