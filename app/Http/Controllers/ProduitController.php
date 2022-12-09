<?php

namespace App\Http\Controllers;

use App\Models\produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = produit::latest()->paginate(25);

        return view('produits/tproduits',compact('data'))->with('i',(request()->input('page',1)-1)*25);        
      }
  
      
      public function create()
      {
          return view('/produits/produits');
      }
  
     
      public function store(Request $request)
      {
        $request->validate([
            'idpr'  => 'required|unique:produits',
            'nom'  => 'required',
            'description'  =>'required',
            'prix'  =>'required',
            'stock'  =>'required'

        ]);

        $produit = new produit;

        $produit->idpr = $request->idpr;
        $produit->nom = $request->nom;
        $produit->description = $request->description;
        $produit->prix = $request->prix;
        $produit->stock = $request->stock;


        $produit->save();
        return redirect('/tproduits')->with('success','Produit  ajoutee !!');
      }
  
      
      public function show($idpr)
      {
          $produit = produit::find($idpr);
          return view('produits/show',compact('produit'));
      }
  
      
      public function edit($idpr)
      {
          $produit = produit::find($idpr);
          return view('produits/edit',compact('produit'));
      }
  
    
      public function update(Request $request, produit $produit)
      {
        $request->validate([
            'nom'      =>  'required',
            'description'     =>  'required',
            'description'  =>'required',
            'prix'  =>'required',
            'stock'  =>'required'
        ]);

        

        $produit = produit::find($request->hidden_idpr);

        $produit->nom = $request->nom;

        $produit->description = $request->description;
        $produit->prix = $request->prix;
        $produit->stock = $request->stock;


        $produit->save();

        return redirect('tproduits')->with('success', 'Produit a ete modifiee !! ');
 
      }
  
     
      public function destroy($idpr)
      {
        $produit=produit::find($idpr);

        $produit->delete();
          return redirect('tproduits')->with('success', 'produits deleted!');  
      }
    }

?>
