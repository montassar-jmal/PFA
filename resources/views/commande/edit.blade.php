<x-app-layout>
<div id="layoutSidenav">

@include('layouts.sidebar')

<div id="layoutSidenav_content">

<div class="card">
    <div class="card-header">Modifier une commande</div>
    <div class="card-body">
    <form method="post" action="{{ route('tcommande.update','commande => $commande->id ') }}" enctype="multipart/form-data">
      @csrf
      @method('PUT')
  

      <input type="hidden" name="hidden_id" value="{{ $commande->id }}"/>


    <br>

  <div class="form-group row">
    <label for="nom_cl" class="col-sm-2 col-form-label">Nom du client </label>
    <div class="col-sm-10">
      <input type="text" class="form-control"   name="nom_cl" value="{{ $commande->nom_cl }}">
    </div>
  </div>

    <br>

  <div class="form-group row">
    <label for="adresse" class="col-sm-2 col-form-label">Adresse</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  name="adresse" value="{{ $commande->adresse }}">
    </div>
  </div>

    <br>

    <div class="form-group row">
    <label for="date" class="col-sm-2 col-form-label">Date</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  name="date" value="{{ $commande->date }}">
    </div>
  </div>

    <br>
    <div class="form-group row">
    <label for="prix_tot" class="col-sm-2 col-form-label">Prix Totale</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  name="prix_tot" value="{{ $commande->prix_tot }}">
    </div>
  </div>

    <br>


  <div class="form-group row">
    <div class="col-sm-10">
        <input type="submit" class="btn btn-primary" value="Modifier"/>
    </div>
  </div>
</form>
</div>
</div>

</div>
</div>
</x-app-layout>

