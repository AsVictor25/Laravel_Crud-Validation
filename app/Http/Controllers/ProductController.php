<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function read(){

    $products = Produit::all();

    return view('/products/read')->with('products',$products);

    }

    public function showProduct($id){

        $products = Produit::FindOrFail($id);

        return view('/products/showProduct',compact('products'));

    }

    public function create(){

        return view('products/create');
    }
    
    public function store(Request $request){

        $request->validate([
            'nom_p' => 'required|min:3|string',
            'description_p' => 'required|min:5|string'
        ]);

         Produit::create(['nom'=>$request->nom_p,'description'=>$request->description_p]);

         return redirect('/read');
        
    }

    public function update(Request $request){

        $produit = Produit::find($request->id);

        $produit->nom = $request->nom_p;
        $produit->description = $request->description_p;

        $produit->save();

        return  redirect('/read');
    }

    public function delete($id){

        Produit::destroy($id);

        return back();
    }
}
