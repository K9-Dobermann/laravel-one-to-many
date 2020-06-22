@extends('layouts.main')

@section('content')
<div class="spaziosingolo">


<h1>
  POSTS
</h1>
<ul>
  @foreach($posts as $post)
    <li>
      <h3>{{ $post -> title }}</h3><br>
      <p>{{ $post -> text }}<br>
      <small>CATEGORY: {{ $post -> category ->name }}<br>
                       {{ $post -> category ->description }}
      </small></p>
      <a href="{{ route('edit-post', $post['id']) }}">EDIT ME</a>
    </li>
    <br>
  @endforeach
</ul>
</div>
@endsection
