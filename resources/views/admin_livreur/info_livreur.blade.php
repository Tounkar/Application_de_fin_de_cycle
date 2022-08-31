@extends('layout.masteradmin')

@section('titre')
    info livreur
@endsection


@section('contenu')
<div class="container mt-5">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h3 class="card-header text-center">Information du livreur</h3>
            <div class="card-body">
               <table>
                <tr>
                    <th>Nom:</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>{{ $livreur->nom }}</td>
                </tr>
                <tr>
                    <th>Prenom:</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>{{ $livreur->prenom }}</td>
                </tr>
                <tr>
                    <th>Domicile:</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>{{ $livreur->domicile }}</td>
                </tr>
                <tr>
                    <th>Téléphone:</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>{{ $livreur->telephone }}</td>
                </tr>
                <tr>
                    <th>Mot de passe:</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>{{ $livreur->mot_de_passe }}</td>
                </tr>
                <tr>
                    <th>Email:</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>{{ $livreur->Email }}</td>
                </tr>
                <tr>
                    <th>Numéro de permi de conduite:</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>{{ $livreur->permis_de_conduite }}</td>
                </tr>
                <tr>
                    <th>Véhicule:</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>{{ $livreur->engin->nom }}</td>
                </tr>
                <tr>
                    <th>Caution:</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>{{ $livreur->payer_caution->montant }}</td>
                </tr>
                
               </table> 
            </div>
        </div>
    </div>
    </div>
@endsection
