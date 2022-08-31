<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>page du livreur</title>

  <!-- Favicons -->
  <link href="img_liv/favicon.png" rel="icon">
  <link href="img_liv/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="lib_liv/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="lib_liv/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="css_liv/style.css" rel="stylesheet">
  <link href="css_liv/style-responsive.css" rel="stylesheet">
  <script src="lib_liv/chart-master/Chart.js"></script>

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
  <style>
    footer {
      position: absolute;
      bottom: 0;
      width: 100%;
      z-index: -1;
    }

    .btn btn-primary:hover {

      color: white;
    }
  </style>
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>ENICAL TECHNOLOGIE</b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->

        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="login.html">se déconnecter</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="{{ asset('img_liv/Tounkara.jpg') }}" class="img-circle" width="80"></a></p>
          <h5 class="centered" style="color:#272343 ;">Tounkara Seydou</h5>
          <li class="mt">
            <a href="#">
              <i class="fa fa-user"></i>
              <span>Mon Profile</span>
            </a>
          </li>
          <li class="mt">
            <a href="#">
              <i class="fa fa-money"></i>
              <span>caution</span>
            </a>
          </li>
          <li class="mt">
            <a href="#">
              <i class="fa fa-history"></i>
              <span>Historique </span>
            </a>
          </li>
          <li class="mt">
            <a href="#">
              <i class="fa fa-truck"></i>
              <span>Mon véhicule</span>
            </a>
          </li>

        </ul>
      </div>

    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="col-lg-12">
          <!-- CHART PANELS -->
          <div class="row" style="margin-top:60px ;">
            <!--  /col-md-4 -->
            <div class="col-md-4 col-sm-4 mb">
              <div class="darkblue-panel pn">
                <div class="darkblue-header">
                  <h4 style="color: white;">Véhicule utilisé</h4>
                </div>
                <h1 class="mt"><i class="fa fa-truck fa-3x"></i></h1>
                <p style="font-size: 30px; color:white;">TAXI</p>
              </div>
              <!--  /darkblue panel -->
            </div>
            <!-- /col-md-4 -->
            <div class="col-md-4 col-sm-4 mb">
              <div class="darkblue-panel pn">
                <div class="darkblue-header">
                <h4 style="color: white;">Evolution de la caution</h4>
                </div>
                <canvas id="serverstatus02" height="120" width="120"></canvas>
                <script>
                  var doughnutData = [{
                      value: 60,
                      color: "#1c9ca7"
                    },
                    {
                      value: 40,
                      color: "#f68275"
                    }
                  ];
                  var myDoughnut = new Chart(document.getElementById("serverstatus02").getContext("2d")).Doughnut(doughnutData);
                </script>
                <p style="color: white;">Votre solde est: 200 0000 FCFA</p>
                
              </div>
              <!--  /darkblue panel -->
            </div>
            <!-- /col-md-4 -->
            <div class="col-md-4 col-sm-4 mb">
              <div class="green-panel pn">
                <div class="green-header">
                <h4 style="color: white;">Pour chaque livraison</h4>
                </div>
                <canvas id="serverstatus03" height="120" width="120"></canvas>
                <script>
                  var doughnutData = [{
                      value: 60,
                      color: "#2b2b2b"
                    },
                    {
                      value: 40,
                      color: "#fffffd"
                    }
                  ];
                  var myDoughnut = new Chart(document.getElementById("serverstatus03").getContext("2d")).Doughnut(doughnutData);
                </script>
                <h3>60% USED</h3>
              </div>
            </div>
            <!-- /col-md-4 -->
          </div>
          <!-- BASIC FORM VALIDATION -->
            <div class="container-fluid">
              <div class="card" style="height: auto">
                <div class="card-header" style="background: #272343;">
                    <h2 class="text-center" style="color:white ;">Les tâches du livreur</h2>
                </div>
                  <div class="card-body">
                    <table class="table" style="height: 100%;">
                      <thead>
                        <tr>
                          <th>N°</th>
                          <th>Nom</th>
                          <th>Nom du colis</th>
                          <th>Numéro du client</th>
                          <th>destination du colis</th>
                          <th>Prix de livraison</th>
                          <th>Decision du livreur</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Mark</td>
                          <td>Sac de Riz</td>
                          <td>022829829</td>
                          <td>Adjamé</td>
                          <td>2000 fcfa</td>
                          <td>
                              <a href="#" class="btn " style="background:#272343 ; color:white; margin-right: 12px;">Accepter</a>
                              <a href="#" class="btn btn-danger">Refuser</a>
                          </td>
                          
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Junior</td>
                          <td>Banan</td>
                          <td>022829829</td>
                          <td>Yopougon</td>
                          <td>1000 fcfa</td>
                          <td>
                              <a href="#" class="btn " style="background:#272343 ; color:white; margin-right: 12px;">Accepter</a>
                              <a href="#" class="btn btn-danger">Refuser</a>
                          </td>
                          
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>Akissi</td>
                          <td>Chausseure</td>
                          <td>032829829</td>
                          <td>Gare-nord</td>
                          <td>2000 fcfa</td>
                          <td>
                              <a href="#" class="btn " style="background:#272343 ; color:white; margin-right: 12px;">Accepter</a>
                              <a href="#" class="btn btn-danger">Refuser</a>
                          </td>
                          
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>

                <!-- /form-panel -->
              </div>
              <!-- /col-lg-12 -->
            </div>
            <!-- /row -->
            <!-- FORM VALIDATION -->
            <div class="row mt">
              <div class="col-lg-12">

                <!-- /form-panel -->
              </div>
              <!-- /col-lg-12 -->
            </div>
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Bienvenue chez <strong>Enical</strong>. La satisfaction notre devise
        </p>
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
          Pour tout vos service de livraison <a href="https://templatemag.com/">Enical Technologie</a>
        </div>
        <a href="form_validation.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
        </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib_liv/jquery/jquery.min.js"></script>
  <script src="lib_liv/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib_liv/jquery.scrollTo.min.js"></script>
  <script src="lib_liv/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib_liv/common-scripts.js"></script>
  <!--script for this page-->
  <script src="lib_liv/form-validation-script.js"></script>
  <!--script for this page-->
  <script src="lib_liv/sparkline-chart.js"></script>

</body>

</html>