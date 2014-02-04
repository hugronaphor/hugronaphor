@extends('admin._layouts.default')

@section('main')

<h1>
  Videos <a href="{{ URL::route('admin.videos.create') }}" class="btn btn-success"><i class="icon-plus-sign"></i> Add new Video</a>
</h1>

<hr>

{{ Notification::showAll() }}

<table class="table table-hover table-condensed table-bordered table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>Title</th>
      <th>Author</th>
      <th>Year</th>
      <th><i class="icon-cog"></i></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($rows as $row)
    <tr>
      <td>{{ $row->vid }}</td>
      <td><a href="{{ URL::route('admin.videos.show', $row->vid) }}">{{ $row->title }}</a></td>
      <td><a href="{{ URL::route('admin.videos.show', $row->vid) }}">{{ $row->author }}</a></td>
      <td><a href="{{ URL::route('admin.videos.show', $row->vid) }}">{{ $row->year }}</a></td>
      <td>{{ $row->created_at }}</td>
      <td>
        <div class="mini-edit-node-buttons">
          <a href="{{ URL::route('admin.videos.edit', $row->vid) }}" class="btn btn-success btn-mini pull-left">Edit</a>

          {{ Form::open(array('route' => array('admin.videos.destroy', $row->vid), 'method' => 'delete', 'data-confirm' => 'Are you sure?')) }}
          <button type="submit" href="{{ URL::route('admin.videos.destroy', $row->vid) }}" class="btn btn-danger btn-mini">Delete</button>
          {{ Form::close() }}
        </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@stop