@extends('layouts.master')

@section('jumbotron')
<div class="jumbotron">
  <div class="row">
    <div class="col-sm-4">
      <img class="img-fluid" src="/images/headphone.png" alt="">
    </div>
    <div class="col-sm-8">
      <br>
      <br>
      <br>
      <h1 class="display-4">HELLO !!!</h1>
      <p class="lead">Enjoy free soundeffect and music</p>
      <button id="scrollToList" type="button" class="btn btn-primary btn-lg">Download Free</button>
    </div>
  </div>
</div>
@endsection

@section('content')
<section class="container">
  <!-- List of song -->
  <div class="music-list" id="scrollHere">
    @foreach($musics as $music)
    <div class="music-item">
      <br>
      <h4 class="songTitle">{{ $music->title }}  <a href="/music/{{ $music->id }}" class="btn btn-primary">Download</a></h4>
      <audio id="myAudio" controls controlsList="nodownload">
        <source src="/song/{{$music->filename}}" type="audio/mpeg">
      </audio>
        <p>{{ $music->desc }}</p>
      </div>
      @endforeach
    </div>

  </section>
  @endsection
