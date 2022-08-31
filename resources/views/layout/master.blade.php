<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css_foot/ionicons.min.css">
    <link rel="stylesheet" href="css_foot/style.css">
    <link rel="stylesheet" href="css_nav/style.css">
    <link href="lib_liv/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="lib_liv/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="css_liv/style.css" rel="stylesheet">
    <link href="css_liv/style-responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css')}}">
    <style>
        .nav-item {
            margin: 9px;

        }

        nav {
            height: 200px;
        }

        /*  .ftco-section {
            position: fixed;
            width: 100%;
            top: 0;
            z-index:1 ;
        } */
    </style>
    <title>
        @yield("titre")
    </title>


</head>

<body style="overflow-x: hidden;">
    @include("partials.navbar")

    @yield("contenu")


    @include("partials.footer")
    <script src="js_nav/jquery.min.js"></script>
    <script src="js_nav/popper.js"></script>
    <script src="js_nav/bootstrap.min.js"></script>
    <script src="js_nav/main.js"></script>
    <script src="js_foot/jquery.min.js"></script>
    <script src="js_foot/popper.js"></script>
    <script src="js_foot/bootstrap.min.js"></script>
    <script src="js_foot/main.js"></script>
    <script src="lib_liv/jquery/jquery.min.js"></script>
    <script src="lib_liv/bootstrap/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
    <script src="lib_liv/jquery.scrollTo.min.js"></script>
    <script src="lib_liv/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="lib_liv/common-scripts.js"></script>
    <script src="lib_liv/form-validation-script.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=false&libraries=geometry&v=3.7"></script>
    <script src="lib_liv/google-maps/maplace.js"></script>
    <script src="lib_liv/google-maps/data/points.js"></script>
    <script>
        //ul list example
        new Maplace({
            locations: LocsB,
            map_div: '#gmap-list',
            controls_type: 'list',
            controls_title: 'Choose a location:'
        }).Load();

        new Maplace({
            locations: LocsB,
            map_div: '#gmap-tabs',
            controls_div: '#controls-tabs',
            controls_type: 'list',
            controls_on_map: false,
            show_infowindow: false,
            start: 1,
            afterShow: function(index, location, marker) {
                $('#info').html(location.html);
            }
        }).Load();
    </script>

</body>

</html>