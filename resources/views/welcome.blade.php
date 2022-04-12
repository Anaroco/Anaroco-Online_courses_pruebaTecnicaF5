@extends('layouts.template')

@section('content')

@foreach ( $proyectos as $proyecto )
    
<div class="col mb-5">
  <div class="card h-100">

        <!-- Product image-->
        {{-- <div class= "portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal {{ $proyecto->id }}">
            <div class= "portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                <div class= "portfolio-item-caption-content text-center text"> --}}

        <img class="card-img-top" style="height: 175px" src=" {{ $proyecto->imagen }}" alt="tech picture" />

        <!-- Product details-->
    <div class="card-body p-4">
    <div class="text-center">

        <!-- Product name-->
        <h5 class="fw-bolder"> {{ $proyecto->nombre }} </h5>

        <!-- Product reviews-->
        <div class="d-flex justify-content-center small text-warning mb-2">
            <div class="bi-star-fill"></div>
            <div class="bi-star-fill"></div>
            <div class="bi-star-fill"></div>
            <div class="bi-star-fill"></div>
            <div class="bi-star-fill"></div>
        </div>

        <!-- Product price-->
        <p> {{ $proyecto->descripcion }} </p>

    </div>
    </div>

    <!-- Product actions-->
    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href=" {{ $proyecto->url }} ">View options</a></div>
    </div>

  </div>
</div> 

@endforeach

@endsection 

