@extends('admin._layouts.default')

@section('main')

<h1>
  Profiles <a href="{{ URL::route('admin.profiles.create') }}" class="btn btn-success"><i class="icon-plus-sign"></i> Add new profile</a>
</h1>

<hr>

{{ Notification::showAll() }}

<table class="table table-hover table-condensed table-bordered table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>When</th>
      <th><i class="icon-cog"></i></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($profiles as $profile)
    <tr>
      <td>{{ $profile->id }}</td>
      <td><a href="{{ URL::route('admin.profiles.show', $profile->id) }}">{{ $profile->f_name }}</a></td>
      <td><a href="{{ URL::route('admin.profiles.show', $profile->id) }}">{{ $profile->m_name }}</a></td>
      <td><a href="{{ URL::route('admin.profiles.show', $profile->id) }}">{{ $profile->l_name }}</a></td>
      <td>{{ $profile->created_at }}</td>
      <td>
        <a href="{{ URL::route('admin.profiles.edit', $profile->id) }}" class="btn btn-success btn-mini pull-left">Edit</a>

        {{ Form::open(array('route' => array('admin.profiles.destroy', $profile->id), 'method' => 'delete', 'data-confirm' => 'Are you sure?')) }}
        <button type="submit" href="{{ URL::route('admin.profiles.destroy', $profile->id) }}" class="btn btn-danger btn-mini">Delete</butfon>
          {{ Form::close() }}
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@stop