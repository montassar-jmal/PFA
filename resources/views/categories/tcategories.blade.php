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
                                 Categories
                            </div>
                            <div class="card-body">
                                 
                            <button type="button" onclick="location.href='http://127.0.0.1:8000/categories';" style="background-color: blue" class="btn btn-primary">Ajouter categorie</button>
                                
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Id categorie</th>
                                            <th>Nom categorie</th>
                                            <th>Description</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Id categorie</th>
                                            <th>Nom categorie</th>
                                            <th>Description</th>
                                            <th>Actions</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @if (count($data)>0)
                                            @foreach ($data as $row)
                                                <tr>
                                                    <td>{{ $row->id}}</td>
                                                    <td>{{ $row->nom}}</td>
                                                    <td>{{ $row->description}}</td>
                                                    <td>
                                                        <form method="post" action="{{route('tcategories.destroy',$row->id )}}">
                                                            @csrf
                                                            @method('DELETE')

                                                        <a href= "{{ route('tcategories.show',$row->id) }}" class ="btn btn-primary btn-sm">Afficher details</a>
                                                        <a href= "{{ route('tcategories.edit',$row->id) }}" class ="btn btn-warning btn-sm">Modifer</a>
                                                        <input type="submit" style="background-color: #dc3545" class="btn btn-danger btn-sm" value="Delete"/>
                                                    </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif

                                    </tbody>
                                </table>
                            </div>
                        </div>


</div>
</div>
</x-app-layout>





