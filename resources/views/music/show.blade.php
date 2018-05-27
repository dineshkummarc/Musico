@extends('layouts.master')

@section('content')
<br>
<div class="jumbotron container text-center">
	<br>
	<hr>
  <h1 class="display-4">{{ $music->title }}</h1>
  <audio id="myAudio" controls controlsList="nodownload">
  	<source src="/song/{{ $music->filename }}" type="audio/mpeg">
  </audio>
  <p>This soundeffect is free for you to modify and use</p>
  <a class="btn btn-primary btn-lg" href="/song/{{ $music->filename }}" role="button" download>Download</a>
  <hr>
</div>
@endsection