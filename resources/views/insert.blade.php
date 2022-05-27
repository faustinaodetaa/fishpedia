@extends('template')

@section('content')

    <form action="{{ url('/product/insert') }}" style="margin: 100px" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <fieldset>
            <legend>Insert Fish</legend>
            <div class="form-group">
                <label for="product_name" class="form-label mt-4">Product Name</label>
                <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Product Name">
            </div>
            <div class="form-group">
                <label for="product_price" class="form-label mt-4">Product Price</label>
                <input type="number" class="form-control" id="product_price" name="product_price" placeholder="Product Price">
            </div>
            <div class="form-group">
                <label for="product_description" class="form-label mt-4">Product Description</label>
                <input type="text" class="form-control" id="product_description" name="product_description" placeholder="Product Description">
            </div>
            <div class="form-group">
                <label for="product_image" class="form-label mt-4">Image</label>
                <input class="form-control" type="file" id="product_image" name="product_image">
            </div>

            <div class="text-center">
            <button type="submit" class="btn btn-primary">Insert</button>
            </div>
            @if ($errors->any())
                <div class="alert alert-dismissible alert-danger">
                    {{$errors->first()}}
                </div>
            @endif
        </fieldset>
    </form>

@endsection
