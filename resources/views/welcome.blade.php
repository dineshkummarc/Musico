@extends('layouts.master')

@section('jumbotron')
<div class="jumbotron">
    <div class="row">
      <div class="col-sm-4">
        <img class="img-fluid" src="/images/teknokrat.png" alt="">
    </div>
    <div class="col-sm-8 text-center">
        <br>
        <br>
        <br>
        <h1 class="display-4">PEMOGRAMAN WEB IF 16 C </h1>
        <p class="lead">Music and soundeffect provider website</p>
        <button id="scrollToList" type="button" class="btn btn-primary btn-lg">About US</button>
    </div>
</div>
</div>
@endsection

@section('content')
<section id="scrollHere" class="container text-center">
    <img style="width: 60%;" class="img-fluid" src="/images/bergadang.png" alt="">
    <div class="row ">
      <div class="col about-item">
        <div>
            <h3>15312371</h3>
            <h3>Tio Saputra</h3>
        </div>
    </div>
    <div class="col about-item">
        <div>
          <h3>15312360</h3>
          <h3>Ragil Satrio</h3>
      </div>
  </div>
  <div class="col about-item">
    <div>
        <h3>15312714</h3>
      <h3>Sri Cahyo Hadi</h3>
  </div>

</div>
</div>
</section>
@endsection