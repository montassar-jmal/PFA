<x-app-layout>
<div id="layoutSidenav">

@include('layouts.sidebar')

<div id="layoutSidenav_content">

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6"><b>Afficher plus de details</b></div>
            <div class="col col-md-6">
                <a href="{{ route('tcommande.index') }}" class="btn btn-primary btn-sm float-end">Afficher tous</a>
            </div>
        </div>
    </div>

 <div class="card-body">
    

    <div class="row mb-3">
        <label class="col-sm-2 col-label-form"><b> Nom du Client</b></label>
        <div class="col-sm-10">
            {{ $commande->nom_cl }}
        </div>
    </div>

    
    <div class="row mb-3">
        <label class="col-sm-2 col-label-form"><b> Adresse du Client</b></label>
        <div class="col-sm-10">
            {{ $commande->adresse }}
        </div>
    </div>
 </div>

 <div class="row mb-3">
        <label class="col-sm-2 col-label-form"><b> Date </b></label>
        <div class="col-sm-10">
            {{ $commande->date }}
        </div>
    </div>
 </div>


 <div class="row mb-3">
        <label class="col-sm-2 col-label-form"><b> Prix Totale</b></label>
        <div class="col-sm-10">
            {{ $commande->prix_tot }}
        </div>
    </div>
 </div>


</div>
</div>
</div>
</x-app-layout>