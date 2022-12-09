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
    <div class="card-header">   Ajouter une nouvelle categorie</div>
    <div class="card-body">
    <form method="post" action="{{ route('tcategories.store') }}" enctype="multipart/form-data">
      @csrf
  <div class="form-group row">
    <label for="id" class="col-sm-2 col-form-label">Id du categorie</label>
    <div class="col-sm-10">
      <input type="id" class="form-control" id="id" placeholder="Id du categorie" name="id">
    </div>
  </div>

    <br>

  <div class="form-group row">
    <label for="nom" class="col-sm-2 col-form-label">Nom du categorie</label>
    <div class="col-sm-10">
      <input type="nom" class="form-control" id="nom" placeholder="Nom du categorie" name="nom">
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

