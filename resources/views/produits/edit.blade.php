<x-app-layout>
<div id="layoutSidenav">

@include('layouts.sidebar')

<div id="layoutSidenav_content">

<div class="card">
    <div class="card-header">Modifier un produit</div>
    <div class="card-body">
    <form method="post" action="{{ route('tproduits.update','produit => $produit->idpr ') }}" enctype="multipart/form-data">
      @csrf
      @method('PUT')
  

      <input type="hidden" name="hidden_idpr" value="{{ $produit->idpr }}"/>


    <br>

  <div class="form-group row">
    <label for="nom" class="col-sm-2 col-form-label">Nom du produit</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"   name="nom" value="{{ $produit->nom }}">
    </div>
  </div>

    <br>

  <div class="form-group row">
    <label for="description" class="col-sm-2 col-form-label">Description</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  name="description" value="{{ $produit->description }}">
    </div>
  </div>

    <br>

    <div class="form-group row">
      <label for="prix" class="col-sm-2 col-form-label">Prix</label>
      <div class="col-sm-10">
        <input type="text" class="form-control"  name="prix" value="{{ $produit->prix }}">
      </div>
    </div>
  
<br>


    <div class="form-group row">
      <label for="stock" class="col-sm-2 col-form-label">Stock</label>
      <div class="col-sm-10">
        <input type="text" class="form-control"  name="stock" value="{{ $produit->stock }}">
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

