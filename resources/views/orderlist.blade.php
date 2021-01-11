@extends('master')
@section('content')
    <div class="container">
        <div class="row align-items-center">
            <h4 class="mt-4">My orders</h4>
            @foreach ($orders as $item)
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
                            <p>{{$item->address}}</p>
                            <p>{{$item->status}}</p>
                            <p>{{$item->payment_method}}</p>
                            <br> <br>
                        </div>
                    </div>
                </div>
            <div class="col-md-3">
                    <div class=" text-center">

                    </div>
                </div>
                @endforeach
        </div>
    </div>
@endsection
