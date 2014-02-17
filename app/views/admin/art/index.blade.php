@extends('admin._layouts.default')

@section('main')

<h1>
  Art <a href="{{ URL::route('admin.art.create') }}" class="btn btn-success"><i class="icon-plus-sign"></i> Add new Art item</a>
</h1>

<hr>

{{ Notification::showAll() }}

<table class="table table-hover table-condensed table-bordered table-striped">
  <thead>
    <tr>
      <th>#order</th>
      <th>Title</th>
      <th>Author</th>
      <th>Credit</th>
      <th><i class="icon-cog"></i></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($rows as $row)
    <tr>
      <td>{{ $row->order }}</td>
      <td>{{ $row->title }}</td>
      <td>{{ $row->author }}</td>
      <td>{{ $row->credit }}</td>
      <td>{{ $row->created_at }}</td>
      <td>
        <div class="mini-edit-node-buttons">
          <a href="{{ URL::route('admin.art.edit', $row->aid) }}" class="btn btn-success btn-mini pull-left">Edit</a>

          {{ Form::open(array('route' => array('admin.art.destroy', $row->aid), 'method' => 'delete', 'data-confirm' => 'Are you sure?')) }}
          <button type="submit" href="{{ URL::route('admin.art.destroy', $row->aid) }}" class="btn btn-danger btn-mini">Delete</button>
          {{ Form::close() }}
        </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@stop