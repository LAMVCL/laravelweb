@extends('main')
<link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
@section('seccion')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="slider d-block w-100" src="{{URL::asset('img/slider2.png')}}" alt="Primer slide">
    </div>
    <div class="carousel-item">
      <img class="slider d-block w-100" src="{{URL::asset('img/slider1.jpg')}}" alt="Segundo slide">
    </div>
    <div class="carousel-item">
      <img class="slider d-block w-100" src="{{URL::asset('img/slider3.jpg')}}" alt="Tercer slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="my-4"></div>

@endsection