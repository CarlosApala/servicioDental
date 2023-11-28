@extends('welcome')

@section('content')
<div class="d-flex justify-content-center align-items-center vh-100">

<div id="carouselExample" class="w-75 carousel slide">
    <div class="carousel-inner">
      <div class="carousel-item active ">
        <img src="{{asset('assets/image.jpg')}}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{asset('assets/image2.jpg')}}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{asset('assets/image3.jpg')}}" class="d-block w-100" alt="..." w>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>
@endsection