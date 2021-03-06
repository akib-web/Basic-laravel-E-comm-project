@extends('master')
@section('content')
    <div class="container">
        <div class="row align-items-center">
            <h4 class="mt-4">Result for products</h4>
            <div class="mt-2 mb-3">
                <a class="btn  btn-success" href="/ordernow">Order now</a>
            </div>
            @foreach ($products as $item)
            <div class="col-md-3">
                    <div class=" text-center">
                        <a href="details/{{$item->id}}">
                            <img class="cart-img d-flex justify-content-center" src="{{$item->gallery}}">
                        </a>
                    </div>
                </div>
            <div class="col-md-4">
                    <div class=" text-center">
                        <div class="">
                            <h4>{{$item->name}}</h4>
                            <p>{{$item->description}}</p>
                        </div>
                    </div>
                </div>
            <div class="col-md-3">
                    <div class=" text-center">
                        <a class="btn btn-warning" href="/cart_list/{{$item->cart_id}}">Remove to cart</a>
                    </div>
                </div>
                @endforeach
        </div>
        <div class=" text-right mt-5 mb-3">
            <a class="btn  btn-success" href="/ordernow">Order now</a>
        </div>
    </div>
@endsection
