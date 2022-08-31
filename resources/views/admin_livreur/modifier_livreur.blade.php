@extends("layout.masteradmin")

@section("titre")
Modifier livreur
@endsection


@section("contenu")
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="card">
        <h3 class="card-header text-center">Modifier le livreur</h3>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li> {{ $error }} </li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (session()->has("success"))
            <div class="alert alert-success">
                <h3>
                    {{ session()->get('success') }}
                </h3>
            </div>
        @endif
        <div class="card-body">
            <form method="post" action="{{ route('modifier_livreur', ['livreur'=>$livreur->id])}}" id="basicform" data-parsley-validate="">
                @csrf

                <input type="hidden" name="_method" value="put">

                <div class="form-group">
                    <label for="inputUserName">Nom</label>
                    <input id="inputUserName" type="text" name="nom" data-parsley-trigger="change"  autocomplete="off" class="form-control" value="{{$livreur->nom}}">
                </div>
                <div class="form-group">
                    <label for="inputEmail">prenom</label>
                    <input id="inputEmail" type="text" name="prenom" data-parsley-trigger="change"  autocomplete="off" class="form-control" value="{{$livreur->prenom}}">
                </div>
                <div class="form-group">
                    <label for="inputEmail">Domicile</label>
                    <input id="inputEmail" type="text" name="domicile" data-parsley-trigger="change"  autocomplete="off" class="form-control" value="{{$livreur->domicile}}">
                </div>
                <div class="form-group">
                    <label for="inputEmail">Numéro de téléphone</label>
                    <input id="inputEmail" type="text" name="telephone" data-parsley-trigger="change"  autocomplete="off" class="form-control" value="{{$livreur->telephone}}">
                </div>
                <div class="form-group">
                    <label for="inputPassword">Mot de passe</label>
                    <input id="inputPassword" type="password" name="mot_de_passe"  class="form-control" value="{{$livreur->mot_de_passe}}">
                </div>
                <div class="form-group">
                    <label for="inputEmail">Email</label>
                    <input id="inputEmail" type="email" name="Email" data-parsley-trigger="change"  autocomplete="off" class="form-control" value="{{$livreur->Email}}">
                </div>
                <div class="form-group">
                    <label for="inputPassword">Numéro de permi de conduite</label>
                    <input id="inputPassword" type="text" name="permis_de_conduite"  class="form-control" value="{{$livreur->permis_de_conduite}}">
                </div>
                <div class="form-group">
                    <label for="inputPassword">Véhicule</label> <br>
                    <select name="engin_id" id="inputPassword" class="form-control">
                        @foreach ($engins as $engin )
                        @if($engin->id == $livreur->engin_id)
                        <option value="{{ $engin->id }}" selected> {{ $engin->nom }} </option>
                        @else
                        <option value="{{ $engin->id }}"> {{ $engin->nom }} </option>
                        @endif
                        @endforeach
                    </select> 
                </div>
                <div class="form-group">
                    <label for="inputPassword">la caution </label> <br>
                    <select name="payer_caution_id" id="inputPassword" class="form-control">
                        @foreach ($payer_cautions as $payer_caution)
                        @if($payer_caution->id == $livreur->payer_caution_id)
                        <option value="{{ $payer_caution->id }}" selected> {{ $payer_caution->montant }} </option>
                        @else
                        <option value="{{ $payer_caution->id }}"> {{ $payer_caution->montant }} </option>
                        @endif
                        @endforeach
                    </select>
                </div>

                <div class="row">
                    <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                    </div>
                    <div class="col-sm-6 pl-0">
                        <p class="text-right">
                            <input type="submit" class="btn btn-primary" value="Modifier">
                            <a href=" {{ route('pageadmin') }} " class="btn btn-danger">Annuler</a>
                        </p>
                    </div>
                </div>
            </form>
        </div> 
    </div>
</div>
@endsection