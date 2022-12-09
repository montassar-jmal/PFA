<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Categorie::latest()->paginate(25);

        return view('categories/tcategories',compact('data'))->with('i',(request()->input('page',1)-1)*25);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories/categories');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id'  => 'required|unique:categories',
            'nom'  => 'required',
            'description'  =>'required'

        ]);

        $categorie = new Categorie;

        $categorie->id = $request->id;
        $categorie->nom = $request->nom;
        $categorie->description = $request->description;

        $categorie->save();
        return redirect('/tcategories')->with('success','Categorie  ajoutee !!');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   $categorie=Categorie::find($id);
        return view('categories/show', compact('categorie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {   
        $categorie=Categorie::find($id);
       
        return view('categories/edit', compact('categorie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categorie $categorie)
    {
        $request->validate([
            'nom'      =>  'required',
            'description'     =>  'required'
        ]);

        

        $categorie = Categorie::find($request->hidden_id);

        $categorie->nom = $request->nom;

        $categorie->description = $request->description;

        $categorie->save();

        return redirect('tcategories')->with('success', 'Categorie a ete modifiee !! ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
                $categorie=Categorie::find($id);

        $categorie->delete();

        return redirect('tcategories')->with('success','Categorie bien supprimee !! ');
    }
}
