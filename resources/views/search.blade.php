@extends('master')
@section('content')
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
            <br> <br>
                <a class="text-center" href="{{'/'}}">Go back</a>
            <br> <br>
        </div>
    </div>
@endsection

