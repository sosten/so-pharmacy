@extends('layouts.app')

@section('title', 'product details')
    
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="product_details">
                <div class="product_details_cont">
                    <div class="product_details_header">
                        <a href="/shop">< Continue shopping</a>
                        <h4>Product details</h4>
                    </div>
                    <div class="product_details_flex">
                        <div class="product_details_img">
                            <img src="{{asset('images/'.$product_details->bunner)}}" alt="product name">
                        </div>
                        <div class="product_details_desc">
                            <h5>{{$product_details->pname}}</h5>
                            <p><span>Brand: {{$product_details->brand}}</span></p>
                            <p>Category: {{$product_details->category}}</p>
                            <h3>K{{$product_details->price}}</h3>
                            <p>Description: {{$product_details->description}}</p>
                            <form action="/remove_product/{{$product_details->id}}" method="POST">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Remove product">
                            </form>
                            <form action="/add_to_cart" method="POST">
                                <input type="hidden" name="product_id" value="{{$product_details->id}}">
                                <input type="submit" value="Add to cart">
                            </form>
                            <a href="/edit_product/{{$product_details->id}}">Edit product</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection