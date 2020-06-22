@extends('layouts.main')

@section('content')

<form action="" method="post">
  @csrf
  @method('POST')

  <label for="title">TITLE</label>
  <input type="text" name="title" value="{{ $post -> title }}">
  <br>
  <label for="text">TEXT</label>
  <input type="text" name="text" value="{{ $post -> text }}">
  <br>
  <input type="submit" name="submit" value="UPDATE">

</form>


@endsection
