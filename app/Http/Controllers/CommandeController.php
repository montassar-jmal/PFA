<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Commande::latest()->paginate(25);

        return view('commande/tcommande',compact('data'))->with('i',(request()->input('page',1)-1)*25);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('commande/commande');
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
            'id'  => 'required|unique:commandes',
            'nom_cl'  => 'required',
            'adresse'  =>'required',
            'date'  =>'required',
            'prix_tot'  =>'required'

        ]);

        $commande = new Commande;

        $commande->id = $request->id;
        $commande->nom_cl = $request->nom_cl;
        $commande->adresse = $request->adresse;
        $commande->date = $request->date;
        $commande->prix_tot = $request->prix_tot;


        $commande->save();
        return redirect('/tcommande')->with('success','Commande  ajoutee !!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Commande  $commande
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $commande=Commande::find($id);
        return view('commande/show', compact('commande'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Commande  $commande
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $commande=Commande::find($id);
       
        return view('commande/edit', compact('commande'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Commande  $commande
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Commande $commande)
    {
        $request->validate([
            'nom_cl'      =>  'required',
            'adresse'     =>  'required',
            'date'     =>  'required',
            'prix_tot'     =>  'required'

        ]);

        

        $commande = Commande::find($request->hidden_id);

        $commande->nom_cl = $request->nom_cl;

        $commande->adresse = $request->adresse;

        $commande->date = $request->date;

        $commande->prix_tot = $request->prix_tot;


        $commande->save();

        return redirect('tcommande')->with('success', 'Commande a ete modifiee !! ');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Commande  $commande
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $commande=Commande::find($id);

        $commande->delete();

        return redirect('tcommande')->with('success','Commande bien supprimee !! ');
    }
}
