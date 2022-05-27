<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Models\User;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    //
    public function index(){
        $favorite = auth()->user()->favorite;
        return view('favorite', compact('favorite'));

    }

    public function favorite(Request $request){
        Favorite::create([
            'product_id' => $request->route('id'),
            'user_id' => auth()->user()->id
        ]);
        return redirect()->back();
    }

    public function unFavorite(Request $request){
        Favorite::where('product_id', $request->route('id'))->delete();
        return redirect()->back();
    }
}
