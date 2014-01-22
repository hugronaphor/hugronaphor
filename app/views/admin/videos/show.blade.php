@extends('admin._layouts.default')

@section('main')
<h2>Display Profile</h2>

<hr>

<h3>{{ $profile->title }}</h3>
<h5>@{{ $profile->created_at }}</h5>
{{ $profile->body }}

@if ($profile->image)
<hr>
<figure><img src="{{ Image::resize($profile->image, 800, 600) }}" alt=""></figure>
@endif
@stop