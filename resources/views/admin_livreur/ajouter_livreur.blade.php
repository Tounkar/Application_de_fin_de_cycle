@extends("layout.masteradmin")

@section("titre")
ajouter livreur
@endsection


@section("contenu")
<div class="container" style="margin-top:50px;">
    <div class="card">
        <h3 class="card-header text-center" style="background:#272343 ; color:white;">Ajouter un livreur</h3>
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
            <form method="post" action="{{ route('ajouter_livreur') }}" id="basicform" data-parsley-validate="">
                @csrf
                <div class="form-group">
                    <label for="inputUserName">Nom</label>
                    <input id="inputUserName" type="text" name="nom" data-parsley-trigger="change"  autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                    <label for="inputEmail">prenom</label>
                    <input id="inputEmail" type="text" name="prenom" data-parsley-trigger="change"  autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                    <label for="inputEmail">Domicile</label>
                    <input id="inputEmail" type="text" name="domicile" data-parsley-trigger="change"  autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                    <label for="inputEmail">Numéro de téléphone</label>
                    <input id="inputEmail" type="text" name="telephone" data-parsley-trigger="change"  autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                    <label for="inputPassword">Mot de passe</label>
                    <input id="inputPassword" type="password" name="mot_de_passe"  class="form-control">
                </div>
                <div class="form-group">
                    <label for="inputEmail">Email</label>
                    <input id="inputEmail" type="email" name="Email" data-parsley-trigger="change"  autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                    <label for="inputPassword">Numéro de permi de conduite</label>
                    <input id="inputPassword" type="text" name="permis_de_conduite"  class="form-control">
                </div>
                <div class="form-group">
                    <label for="inputPassword">Véhicule</label> <br>
                    <select name="engin_id" id="inputPassword" class="form-control">
                        @foreach ($engins as $engin )
                        <option value="{{ $engin->id }}"> {{ $engin->nom }} </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="inputPassword">la caution </label> <br>
                    <select name="payer_caution_id" id="inputPassword" class="form-control">
                        @foreach ($payer_cautions as $payer_caution )
                        <option value="{{ $payer_caution->id }}"> {{ $payer_caution->montant }} </option>
                        @endforeach
                    </select>
                </div>

                <div class="row">
                    <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                    </div>
                    <div class="col-sm-6 pl-0">
                        <p class="text-right">
                            <input type="submit" class="btn btn-primary" value="Ajouter">
                            <a href=" {{ route('pageadmin') }} " class="btn btn-danger">Annuler</a>
                        </p>
                    </div>
                </div>
            </form>
        </div> 
    </div>
</div>
@endsection