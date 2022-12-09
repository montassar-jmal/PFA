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
                                 Commandes
                            </div>
                            <div class="card-body">
                                 
                            <button type="button" onclick="location.href='http://127.0.0.1:8000/commande';" style="background-color: blue"class="btn btn-primary">Ajouter Commande</button>

                            
{{--                             <div class="dataTable-search"><input class="dataTable-input" placeholder="Search..." type="text"></div>
 --}}                                <table id="datatablesSimple"{{-- id="table" class="table table-striped table-bordered" style="width:100%" --}}  >
                                    <thead>
                                        <tr>
                                            <th>Id Commande</th>
                                            <th>Nom client</th>
                                            <th>Adresse</th>
                                            <th>Date</th>
                                            <th>Prix Totale</th>
                                            <th>Actions</th>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Id Commande</th>
                                            <th>Nom client</th>
                                            <th>Adresse</th>
                                            <th>Date</th>
                                            <th>Prix Totale</th>
                                            <th>Actions</th>
                                       
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    @if (count($data)>0)
                                            @foreach ($data as $row)
                                                <tr>
                                                    <td>{{ $row->id}}</td>
                                                    <td>{{ $row->nom_cl}}</td>
                                                    <td>{{ $row->adresse}}</td>
                                                    <td>{{ $row->date}}</td>
                                                    <td>{{ $row->prix_tot}}</td>

                                                    <td>
                                                        <form method="post" action="{{route('tcommande.destroy',$row->id )}}">
                                                            @csrf
                                                            @method('DELETE')

                                                        <a href= "{{ route('tcommande.show',$row->id) }}" class ="btn btn-primary btn-sm">Afficher details</a>
                                                        <a href= "{{ route('tcommande.edit',$row->id) }}" class ="btn btn-warning btn-sm">Modifer</a>
                                                        <input type="submit"style="background-color: #dc3545" class="btn btn-danger btn-sm" value="Delete"/>
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





