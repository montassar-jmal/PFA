<x-app-layout>
<div id="layoutSidenav">

@include('layouts.sidebar')

<div id="layoutSidenav_content">

  @if($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach($errors->all() as $error)
      <li> {{ $error }} </li>
      @endforeach
    </ul>
    
  </div>
  @endif  


  <div class="card">
    <div class="card-header">   Ajouter un nouveau Produit</div>
    <div class="card-body">
    <form method="post" action="{{ route('tproduits.store') }}" enctype="multipart/form-data">
      @csrf
  <div class="form-group row">
    <label for="idpr" class="col-sm-2 col-form-label">Id du produit</label>
    <div class="col-sm-10">
      <input type="idpr" class="form-control" id="idpr" placeholder="Id du produit" name="idpr">
    </div>
  </div>

    <br>

  <div class="form-group row">
    <label for="nom" class="col-sm-2 col-form-label">Nom du produit</label>
    <div class="col-sm-10">
      <input type="nom" class="form-control" id="nom" placeholder="Nom du produit" name="nom">
    </div>
  </div>

    <br>

  <div class="form-group row">
    <label for="description" class="col-sm-2 col-form-label">Description</label>
    <div class="col-sm-10">
      <input type="description" class="form-control" id="description" placeholder="Description" name="description">
    </div>
  </div>


  <br>

  <div class="form-group row">
    <label for="prix" class="col-sm-2 col-form-label">Prix du produit</label>
    <div class="col-sm-10">
      <input type="prix" class="form-control" id="prix" placeholder="Prix du produit" name="prix">
    </div>
  </div>


    <br>

    

  <div class="form-group row">
    <label for="stock" class="col-sm-2 col-form-label">Stock du produit</label>
    <div class="col-sm-10">
      <input type="stock" class="form-control" id="stock" placeholder="stock du produit" name="stock">
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" style="background-color: blue"class="btn btn-primary" value="ajouter">Ajouter</button>
    </div>
  </div>
</form>
</div>
</div>
</div>
</div>
</x-app-layout>

