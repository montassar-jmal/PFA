<x-app-layout>
<div id="layoutSidenav">

@include('layouts.sidebar')

<div id="layoutSidenav_content">

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6"><b>Afficher plus de details</b></div>
            <div class="col col-md-6">
                <a href="{{ route('tcategories.index') }}" class="btn btn-primary btn-sm float-end">Afficher tous</a>
            </div>
        </div>
    </div>

 <div class="card-body">
    

    <div class="row mb-3">
        <label class="col-sm-2 col-label-form"><b> Nom du categorie</b></label>
        <div class="col-sm-10">
            {{ $categorie->nom }}
        </div>
    </div>

    
    <div class="row mb-3">
        <label class="col-sm-2 col-label-form"><b> Description du categorie</b></label>
        <div class="col-sm-10">
            {{ $categorie->description }}
        </div>
    </div>
 </div>

</div>
</div>
</div>
</x-app-layout>