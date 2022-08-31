@extends("layout.master")
@section("titre")
Page Client
@endsection
@section("contenu")
<div class="container-fluid">
    <div class="row mt">
        <div class="col-sm-8 ">
            <section class="panel">
                <header class="panel-heading">
                    Google Map with Loaction List
                </header>
                <div class="panel-body">
                    <div id="gmap-list"></div>
                </div>
            </section>
        </div>
        <div class="col-sm-4 ">
            <div class="card" style="height: auto">
                <div class="card-header" style="background: #272343;">
                    <h2 class="text-center" style="color:white ;">Formulaire de demande</h2>
                </div>
                <div class="card-body">
                    <form class="contact-form php-mail-form"
                  role="form"
                  action="contactform/contactform.php"
                  method="POST">
                <div class="form-group">
                    <input type="text"
                           name="nom"
                           class="form-control"
                           id="contact-name"
                           placeholder="Votre Nom"
                           data-rule="minlen:4"
                           data-msg="Please enter at least 4 chars">
                    <div class="validate"></div>
                </div>
                <div class="form-group">
                    <input type="text"
                           name="telephone"
                           class="form-control"
                           id="contact-email"
                           placeholder="Votre numéro"
                           data-rule="email"
                           data-msg="Please enter a valid email">
                    <div class="validate"></div>
                </div>
                <div class="form-group">
                    <input type="text"
                           name="subject"
                           class="form-control"
                           id="contact-subject"
                           placeholder="Nom du colis"
                           data-rule="minlen:4"
                           data-msg="Please enter at least 8 chars of subject">
                    <div class="validate"></div>
                </div>
                <div class="form-group">
                    <select class="form-select form-control a" aria-label="Default select example">
                        <option selected>Le colis est-il extimable</option>
                        <option value="Non">Non</option>
                        <option value="Oui">Oui</option>
                      </select>
                </div>
                <div class="form-group b" style="display:none;" >
                    <input type="text"
                           name="valeur_marchande"
                           class="form-control"
                           id="contact-email"
                           placeholder="Valeur marchande du colis"
                           data-rule="email"
                           data-msg="Please enter a valid email">
                    <div class="validate"></div>
                </div>
                <div class="form-group">
                    <select class="form-select form-control" aria-label="Default select example">
                        <option selected>Destination du colis</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                </div>
                <div>
                    <button type="submit" class="btn btn-large " style="background:#272343; color:white;">Envoie la demande</button>
                </div>
            </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    let select = document.querySelector('.a');
        let valeur_marchande = document.querySelector('.b');

        select.addEventListener('click', () => {
            if(select.value == "Oui"){
                valeur_marchande.style.display = "block"
            } else {
                valeur_marchande.style.display = "none"
            }
        })
</script>
@endsection
