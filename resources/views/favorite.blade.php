@extends('template')

@section('content')


        <div>
            <h1 style="text-align: center; margin-top: 20px">Favorited Fish</h1>
            <div class="row" style="justify-content:space-evenly; margin: 100px">
                @foreach ($favorite as $fav)
                    <div class="card" style="margin: 20px 0px">
                        <div class="card-body">
                            <h5 class="card-title">{{$fav->product->name}}</h5>
                            <p class="card-text">{{$fav->product->description}}</p>
                            <p class="card-text">IDR {{$fav->product->price}}</p>
                            <div class="row">
                                @if (auth()->user()->role == 'user')
                                    @if(auth()->user()->favorite->where('product_id', '=', $fav->product->id)->first() != NULL)
                                        <a href="{{url('favorite/remove/'.$fav->product->id)}}" class="btn btn-danger" style="margin: 20px; width: 20%">Unfavorite</a>
                                    @else
                                        <a href="{{url('favorite/insert/'.$fav->product->id)}}" class="btn btn-primary" style="margin: 20px; width: 20%">Favorite</a>
                                    @endif
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

@endsection
