<x-app-layout>
<div id="layoutSidenav">

@include('layouts.sidebar')

<div id="layoutSidenav_content">

@if($message = Session::get('success'))
  <div class="alert alert-success">
    {{ $message }}
  </div>
  @endif

    <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                 Produits
                            </div>
                            <div class="card-body">
                              <br>   
                            <button type="button" onclick="location.href='http://127.0.0.1:8000/produits';" style="background-color: blue"class="btn btn-primary">Ajouter produit</button>
                            
{{--                             <div class="dataTable-search"><input class="dataTable-input" placeholder="Search..." type="text"></div>
 --}}                                <table id="datatablesSimple" {{-- id="table" class="table table-striped table-bordered" style="width:100%" --}}>
                                    <thead>
                                        <tr>
                                            <th>Id produit</th>
                                            <th>Nom produit</th>
                                            <th>Description</th>
                                            <th>Prix</th>
                                            <th>Stock</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Id produit</th>
                                            <th>Nom produit</th>
                                            <th>Description</th>
                                            <th>Prix</th>
                                            <th>Stock</th>
                                            <th>Actions</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        
                                    @if (count($data)>0)
                                            @foreach ($data as $row)
                                                <tr>
                                                    <td>{{ $row->idpr}}</td>
                                                    <td>{{ $row->nom}}</td>
                                                    <td>{{ $row->description}}</td>
                                                    <td>{{ $row->prix}}</td>
                                                    <td>{{ $row->stock}}</td>

                                                    <td>
                                                        <form method="post" action="{{route('tproduits.destroy',$row->idpr )}}">
                                                            @csrf
                                                            @method('DELETE')

                                                        <a href= "{{ route('tproduits.show',$row->idpr) }}" class ="btn btn-primary btn-sm">Afficher details</a>
                                                        <a href= "{{ route('tproduits.edit',$row->idpr) }}" class ="btn btn-warning btn-sm">Modifer</a>
                                                        <input type="submit" style="background-color: #dc3545"class="btn btn-danger btn-sm" value="Delete"/>
                                                    </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif

                                        
                                    </tbody>
                                </table>
                                {!! $data->links() !!}
                            </div>
                        </div>
</div>
</div>
</x-app-layout>

        





