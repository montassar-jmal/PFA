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
    <div class="card-header">   Ajouter une nouvelle commande</div>
    <div class="card-body">
    <form method="post" action="{{ route('tcommande.store') }}" enctype="multipart/form-data">
      @csrf
  <div class="form-group row">
    <label for="id" class="col-sm-2 col-form-label">Id du commande</label>
    <div class="col-sm-10">
      <input type="id" class="form-control" id="id" placeholder="Id du commande" name="id">
    </div>
  </div>

    <br>

  <div class="form-group row">
    <label for="nom_cl" class="col-sm-2 col-form-label">Nom du client</label>
    <div class="col-sm-10">
      <input type="nom_cl" class="form-control" id="nom_cl" placeholder="Nom du client" name="nom_cl">
    </div>
  </div>

    <br>

  <div class="form-group row">
    <label for="adresse" class="col-sm-2 col-form-label">Adresse</label>
    <div class="col-sm-10">
      <input type="adresse" class="form-control" id="adresse" placeholder="Adresse" name="adresse">
    </div>
  </div>

    <br>

    <div class="form-group row">
    <label for="date" class="col-sm-2 col-form-label">Date de livraison</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="date" placeholder="Date de livraison" name="date">
    </div>
  </div>

  <br>


  <div class="form-group row">
    <label for="prix_tot" class="col-sm-2 col-form-label">Prix totale de commande</label>
    <div class="col-sm-10">
      <input type="prix_tot" class="form-control" id="prix_tot" placeholder="Prix totale" name="prix_tot">
    </div>
  </div>

  <br>



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

