@extends('layouts.app')

@section('title', 'Shop')
    
@section('content')
    <section>
        <div class="row">
            <div class="col-md-12">
                <div class="shop_wrapper">
                    
                        {{-- <p>{{$product->brand}}</p>
                        <p>{{$product->category}}</p>
                        <p>{{$product->description}}</p>
                        <a href="/product_details/{{$product->id}}">product details</a> --}}
                    <div class="product_cont_wrapper">
                        <div class="product_heading">
                            <h4>Health Care Devices</h4>
                            <a href="#">VIEW ALL</a>
                        </div>
                        <div class="product_flex">
                            @foreach ($products as $product)
                                <div class="product_card">
                                    <a href="/product_details/{{$product->id}}">
                                        <div class="product_cont">
                                            <div class="product_img">
                                                <img src="{{asset('images/'.$product->bunner)}}" alt="product name">
                                            </div>
                                            <h5>{{$product->pname}}</h5>
                                            <p>K{{$product->price}}</p>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection