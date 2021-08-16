@extends('layouts.app')

@section('title','Add product')
    
@section('content')
    <div class="row">
        <div class="col-md-12" style="margin: 10%">
            <h2>Add product</h2>

            <form action="/store_product" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="bunner">Bunner</label>
                <input type="file" name="bunner" id="bunner"><br />
                <label for="pname">Product name</label>
                <input type="text" name="pname" id="pname"><br />
                <label for="brand">Brand name</label>
                <input type="text" name="brand" id="brand"><br />
                <label for="price">Price</label>
                <input type="number" name="price" id="price"><br />
                <label for="description">Description</label><br />
                <textarea name="description" id="description" cols="30" rows="10" placeholder="Description ..."></textarea><br />
                <label for="category">Category</label>
                <input type="text" name="category" id="category">
                <input type="submit" value="Add product">
            </form>
        </div>
    </div>
@endsection