@extends('layouts.main')

@section('content')
<div class="spazioedit">
<form action="" method="post">
  @csrf
  @method('POST')

  <label for="title">TITLE</label>
  <input type="text" name="title" value="{{ $post -> title }}">
  <br>
  <label for="text">TEXT</label>
  <input type="text" name="text" value="{{ $post -> text }}">
  <br>
  <label for="category">CATEGORY</label>
  <select name="category">

    <option value="1">1</option>
    <option value="2" selected>2</option>
    <option value="3">3</option>
  </select>
  <input type="submit" name="submit" value="UPDATE">

</form>

</div>
@endsection
