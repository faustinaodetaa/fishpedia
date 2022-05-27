@extends('template')

@section('content')
    <h1 style="text-align: center; margin-top: 20px">Welcome to FishPedia!</h1>
    @if (auth()->user()->role == "admin")
        <div class="text-center" style="margin-top: 20px">
            <a href="{{url('product/insert')}}" type="submit" class="btn btn-primary">Insert Product</a>
        </div>
    @endif

    <div style="margin: 100px">
        <div class="row" style="justify-content:space-evenly">
            @foreach ($products as $product)
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <img src="{{ asset('storage/' .$product->image) }}" style="width: 200px; height: 200px"/>
                        <h5 class="card-title">{{$product->name}}</h5>
                        <p class="card-text">{{$product->description}}</p>
                        <p class="card-text">IDR {{$product->price}}</p>
                        <div class="row">
                            @if (auth()->user()->role == 'user')
                                @if(auth()->user()->favorite->where('product_id', '=', $product->id)->first() != NULL)
                                    <a href="{{url('favorite/remove/'.$product->id)}}" class="btn btn-danger" style="margin-bottom: 20px">Unfavorite</a>
                                @else
                                    <a href="{{url('favorite/insert/'.$product->id)}}" class="btn btn-primary" style="margin-bottom: 20px">Favorite</a>
                                @endif
                            @endif
                            @if (auth()->user()->role == 'admin')
                                <a href="{{url('product/update/'.$product->id)}}" class="btn btn-warning" style="margin-bottom: 20px">Update</a>
                                <a href="{{url('product/delete/'.$product->id)}}" class="btn btn-danger">Delete</a>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach

            <div style="justify-content:space-around; margin-top:50px" >
                <div>
                    <div class="d-flex justify-content-center">
                        <ul class="pagination">
                            <li class="page-item active">
                                <a class="page-link" href="{{$products->previousPageUrl()}}">&laquo;</a>
                            </li>
                            @for($i = 1; $i <= $products->lastPage(); $i++)
                                @if($i == $products->currentPage())
                                    <li class="page-item active">
                                        <a class="page-link" href="#">{{$i}}</a>
                                    </li>
                                @else
                                    <li class="page-item">
                                        <a class="page-link" href="{{$products->url($i)}}">{{$i}}</a>
                                    </li>
                                @endif
                            @endfor
                            <li class="page-item">
                                <a class="page-link" href="{{$products->nextPageUrl()}}">&raquo;</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
