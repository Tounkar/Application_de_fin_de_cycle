<!DOCTYPE html>
<html>
    <head>
        <title>connexion</title>
        <link rel="stylesheet"
              href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
              integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
              crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet"
              href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
              integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP"
              crossorigin="anonymous">
        <style>
		body,
		html {
			margin: 0;
			padding: 0;
			height: 100%;
			background: #272343 !important;
		}
		.user_card {
			width: 350px;
			margin-top: auto;
			margin-bottom: auto;
			background: white;
			position: relative;
			display: flex;
			justify-content: center;
			flex-direction: column;
			padding: 10px;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			-webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			-moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			border-radius: 5px;

		}

		.form_container {
			margin-top: 20px;
		}

		#form-title{
			color: #272343;

		}

		.login_btn {
			width: 100%;
			background: #272343 !important;
			color: white !important;
		}
		.login_btn:focus {
			box-shadow: none !important;
			outline: 0px !important;
		}
		.login_container {
			padding: 0 2rem;
		}
		.input-group-text {
			background: #272343 !important;
			color: white !important;
			border: 0 !important;
			border-radius: 0.25rem 0 0 0.25rem !important;
		}
		.input_user,
		.input_pass:focus {
			box-shadow: none !important;
			outline: 0px !important;
		}

		#messages{
			background-color: grey;
			color: #fff;
			padding: 10px;
			margin-top: 10px;
		}
	
        </style>
    </head> 
    <body>
        <div class="container h-100">
            <div class="d-flex justify-content-center h-100">
                <div class="user_card">
                    <div class="d-flex justify-content-center">
                        <h3 id="form-title">connexion</h3>
                    </div>
						@if (Session::has('error'))
							<div class="alert alert-danger">
								<p>{{Session::get('error')}}</p>
							</div>
						@endif
                    <div class="d-flex justify-content-center form_container">
                        <form method="POST" action="{{url('connexion/livreur')}}">
                            @csrf
                            <div class="input-group mb-3">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text"
                                       name="Email"
                                       placeholder="Nom d'utilisation"
                                       class="form-control @error('Email') is-invalid @enderror">
								@error('Email')
                            		<div class="invalid-feedback">{{ $message }}</div>
                        		@enderror
                            </div>
                            <div class="input-group mb-2">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <input type="password"
                                       name="mot_de_passe"
                                       placeholder="Mot de passe"
                                       class="form-control @error('mot_de_passe') is-invalid @enderror">
								@error('mot_de_passe')
									<div class="invalid-feedback">{{ $message }}</div>
								@enderror
                            </div>
                            <div class="d-flex justify-content-center mt-3 login_container">
                                <input class="btn login_btn" type="submit" value="connexion">
                            </div>
                        </form>
                    </div>
                    <div class="mt-4">
                        <div class="d-flex justify-content-center links">
                            Voulez-vous creer un compte? <a href="#" class="ml-2">S'inscrire</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
