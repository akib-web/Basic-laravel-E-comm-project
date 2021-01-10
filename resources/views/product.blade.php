@extends('master')
@section('content')
{{-- <h5>{{$product['name']}}</h5> --}}
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
          <li data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"></li>
          <li data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></li>
          <li data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            @foreach ($products as $item)
                <div class="carousel-item {{$item['id']==1?'active':''}}" data-bs-interval="10000">
                    <img class="slider-img d-flex justify-content-center" src="{{$item['gallery']}}" class="d-block w-100" alt="{{$item['name']}}">
                    <div class="carousel-caption d-none d-md-block">
                        <h4>{{$item['name']}}</h4>
                        <p>{{$item['description']}}</p>
                    </div>
                </div>
            @endforeach

        </div>
        <a class="carousel-control-prev" href="#carouselExampleDark" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleDark" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </a>
      </div>
<div class="container">
    <div class="row">
        <div class="product_list d-flex justify-content-around">
            @foreach ($products as $item)
                <div class=" text-center">
                    <a href="details/{{$item['id']}}">
                        <img class="product_list_img" src="{{$item['gallery']}}"  alt="{{$item['name']}}">
                        <h5>{{$item['name']}}</h5>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
