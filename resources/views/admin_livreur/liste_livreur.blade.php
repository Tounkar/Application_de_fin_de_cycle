@extends("layout.masteradmin")

@section("titre")
liste livreur
@endsection


@section("contenu") 
<div class="container-fluid dashboard-content">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <h1 class="text-center">liste des livreurs</h1>
        </div>
    </div>
</div>
<div class="row">
    <!-- ============================================================== -->
    <!-- basic table  -->
    <!-- ============================================================== -->
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    @if (session()->has("successDelete"))
                    <div class="alert alert-success">
                        <h3>
                            {{ session()->get('successDelete') }}
                        </h3>
                    </div>
                    @endif
                    <table class="table table-striped table-bordered first">
                        <thead>
                            <tr>
                                <th>
                                    <h4>N°</h4>
                                </th>
                                <th>
                                    <h4>Nom</h4>
                                </th>
                                <th>
                                    <h4>Prenom</h4>
                                </th>
                                <th>
                                    <h4>Domicile</h4>
                                </th>
                                <th>
                                    <h4>Numéro</h4>
                                </th>
                                <th>
                                    <h4>Véhicule</h3>
                                </th>
                                <th>
                                    <h4>Caution</h4>
                                </th>
                                <th>
                                    <h4 class="text-center">Actions</h4>
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($livreurs as $livreur)
                            <tr>
                                <td scope="row"> {{ $loop->index + 1 }} </td>
                                <td>{{ $livreur->nom }}</td>
                                <td>{{ $livreur->prenom }}</td>
                                <td>{{ $livreur->domicile }}</td>
                                <td>{{ $livreur->telephone }}</td>
                                <td>{{ $livreur->engin->nom }}</td>
                                <td>{{ $livreur->payer_caution->montant }}</td>
                                <td><a style="margin-right:8px ;" href=" {{ route('info_livreur', ['livreur'=>$livreur->id]) }} " class="btn btn-primary">Voir</a>

                                    <a style="margin-right:8px ;" href=" {{ route('edit_livreur', ['livreur'=>$livreur->id]) }} " class="btn btn-warning">Modifier</a>
                                    <a href="#" class="btn btn-danger" 
                                    onclick="if(confirm('voulez-vous vraiment supprimer ce livreur')){document.getElementById('form-{{$livreur->id}}').submit() }">Supprimer</a>
                                    <form id="form-{{$livreur->id}}" action="{{ route('supprimer_livreur', ['livreur' => $livreur->id])}}" method="post">
                                        @csrf
                                        <input type="hidden" name="_method" value="delete">
                                    </form>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{ $livreurs->links() }}
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end basic table  -->
    <!-- ============================================================== -->
</div>
@endsection