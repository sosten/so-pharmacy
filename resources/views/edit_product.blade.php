@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="container">
                <h5>Edit Product</h5>
                <hr />
                <form action="/edit" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$edit_product->id}}">
                    <label for="bunner">Bunner</label>
                    <input type="file" name="bunner" value="{{$edit_product->bunner}}" id="bunner"><br />
                    <label for="pname">Product name</label>
                    <input type="text" name="pname" value="{{$edit_product->pname}}" id="pname"><br />
                    <label for="brand">Brand name</label>
                    <input type="text" name="brand" value="{{$edit_product->brand}}" id="brand"><br />
                    <label for="price">Price</label>
                    <input type="number" name="price" value="{{$edit_product->price}}" id="price"><br />
                    <label for="description">Description</label><br />
                    <textarea name="description" value="{{$edit_product->description}}" id="description"></textarea><br />
                    <label for="category">Category</label> <br />
                    <input type="text" name="category" value="{{$edit_product->category}}" id="category">
                    <input type="submit" value="Update">
                </form>
            </div>
        </div>
    </div>
@endsection