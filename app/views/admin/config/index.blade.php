@extends('admin._layouts.default')

@section('main')

<h1>
  Pages <a href="{{ URL::route('admin.pages.create') }}" class="btn btn-success"><i class="icon-plus-sign"></i> Add new page</a>
</h1>

<hr>

{{ Notification::showAll() }}

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

@stop