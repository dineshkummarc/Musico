@extends('layouts.master')

@section('content')
<div class="container">
  <form method="POST" action="/music">

    {{ csrf_field() }}

    <h1>Create Music</h1>
    <hr>
    <div class="form-group">
      <label for="title">Title</label>
      <input name="title" type="text" class="form-control" id="title" placeholder="Enter Title">
    </div>
    <div class="form-group">
      <label for="filename">Filename</label>
      <input name="filename" type="text" class="form-control" id="filename" placeholder="Filename">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

@endsection
