@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class=" ">
                <img class="slider-img d-flex justify-content-center" src="{{$product['gallery']}}" alt="{{$product['name']}}">
            </div>
        </div>
        <div class="col-md-6"><br> <br>
            <a href="{{'/'}}">Go back</a><br> <br>
            <div class="d-flex ">
                <div class="  ">
                    <h4>{{$product['name']}}</h4>
                    <strong><p>{{$product['price']}}</p></strong>
                    <p>{{$product['category']}}</p>
                    <p>{{$product['description']}}</p>

                    <br> <br>
                    <form action="/add_to_cart" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{$product['id']}}">
                        <button  class="btn btn-primary">Add to cart</button>
                    </form><br>
                    <form action="">

                        <button class="btn btn-success">But now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
