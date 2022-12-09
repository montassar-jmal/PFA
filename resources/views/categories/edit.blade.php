<x-app-layout>
<div id="layoutSidenav">

@include('layouts.sidebar')

<div id="layoutSidenav_content">

<div class="card">
    <div class="card-header">Modifier un categorie</div>
    <div class="card-body">
    <form method="post" action="{{ route('tcategories.update','categorie => $categorie->id ') }}" enctype="multipart/form-data">
      @csrf
      @method('PUT')
  

      <input type="hidden" name="hidden_id" value="{{ $categorie->id }}"/>


    <br>

  <div class="form-group row">
    <label for="nom" class="col-sm-2 col-form-label">Nom du categorie</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"   name="nom" value="{{ $categorie->nom }}">
    </div>
  </div>

    <br>

  <div class="form-group row">
    <label for="description" class="col-sm-2 col-form-label">Description</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  name="description" value="{{ $categorie->description }}">
    </div>
  </div>

    <br>

  <div class="form-group row">
    <div class="col-sm-10">
        <input type="submit" class="btn btn-primary" value="modifier"/>
    </div>
  </div>
</form>
</div>
</div>

</div>
</div>
</x-app-layout>

