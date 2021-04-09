<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illumniate\Support\Facades\DB;
use Auth;

class ProductController extends Controller
{
    public function index()
    {
        return view('product.index', [
            'product' => \App\Models\Product::all()->where('uitleenbaar', 1),
            'namen' =>  \App\Models\Product::all()->where('uitleenbaar', 1),
        ]);
    }


    public function show($id)
    {
        return view('product.show', [
            'product' => \App\Models\Product::find($id),
        ]);
    }

    public function succes()
    {
        return view('product.succes');
    }

    public function laadMijnProducten()
    {
        return view('profiel.index', [
            'naam' => $user = Auth::user()->name,
            'producten' => \App\Models\Product::all()->where('uitgeleend_aan', $user),
        ]);
    }

    public function laadMijnProductenTerug($id)
    {
        return view('profiel.terug', [
            'naam' => $user = Auth::user()->name,
            'product' => \App\Models\Product::find($id),
        ]);
    }

    public function laadReview()
    {
        $user = Auth::user()->name;
        return view('profiel.review', [
            'gebruikers' => \App\Models\User::all()->where('User', '!=', $user),
        ]);
    }

    public function plaatsReview(Request $request, \App\Models\Review $review)
    {
        $review->User = $request->input('gebruiker');
        $review->Inhoud = $request->input('review');
        $review->Poster = Auth::user()->name;
        $review->timestamps = false;


        try {
            $review->save();
            return redirect('/');
        } catch (Exception $e) {
            return redirect('/product');
        }
    }

    public function admin()
    {
        return view('profiel.admin', [
            'producten' => \App\Models\Product::all(),
            'gebruikers' => \App\Models\User::all(),
        ]);
    }

    public function verwijder(Request $request, \App\Models\Product $product, \App\Models\User $gebruikers)
    {
        $user = $request->input('gebruiker');
        $naam = $request->input('naam');
        $gebruikers::where('name', $user)->delete();
        $product::where('name', $naam)->delete();
        try {
            return redirect('/');
        } catch (Exception $e) {
            return redirect('/admin');
        }

    }

    public function laadProfiel()
    {
        return view('profiel.show', [
            'naam' => $user = Auth::user()->name,
            'producten' => \App\Models\Product::all()->where('owner', $user),
            'reviews' => \App\Models\Review::all()->where('User', $user),
        ]);

        
    }

    public function create()
    {

        return view("product.create", [
            "kind_of_product" => \App\Models\KindOfProduct::all(),
            'images' => \App\Models\Image::all(),
        ]);
    }

    public function store(Request $request, \App\Models\Product $product)
    {
        $product->name = $request->input('name');
        $product->kind = $request->input('kind');
        $product->description = $request->input('description');
        $product->image = $request->input('image');
        $product->info = $request->input('info');
        $product->datum = $request->input('datum');
        $product->owner = Auth::user()->name;

        try {
            $product->save();
            return redirect('/');
        } catch (Exception $e) {
            return redirect('/product/create');
        }
    }

    public function leenUit($id, \App\Models\Product $product)
    {

        try {
            $product::where('id', $id)->update(array('uitleenbaar' => false, 'uitgeleend_aan' => Auth::user()->name));
            return redirect('/');
        } catch (Exception $e) {
            return redirect('/product/create');
        }
    }

    public function geefProductTerug($id, \App\Models\Product $product)
    {
        try {
            $product::where('id', $id)->update(array('uitleenbaar' => true, 'uitgeleend_aan' => "Niemand"));
            return redirect('/review');
        } catch (Exception $e) {
            return redirect('/product/create');
        }
    }

    public function laatReviewAchter()
    {
    }
}
