<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Skill Monks</title>
    <link rel="icon shortcut" href="img/logo.png">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat|Open+Sans&display=swap" rel="stylesheet"> <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <style type="text/css">
        body {}

        /* html,
    body,
    header,
    .view {
      height: 100%;
    } */

        @media (max-width: 740px) {

            html,
            body,
            header,
            .view {
                height: 1300px;
            }
        }

        @media (min-width: 700px) and (max-width: 990px) {

            html,
            body,
            header,
            .view {
                height: 1200px;
            }
        }

        @media (min-width: 800px) and (max-width: 850px) {

            html,
            body,
            header,
            .view {
                height: 1200px;
            }
        }

        @media (min-width: 800px) and (max-width: 850px) {
            .navbar:not(.top-nav-collapse) {
                background: #1C2331 !important;
            }
        }
    </style>
</head>

<body>

    <!-- Navbar -->

    <!-- Full Page Intro -->
    <div class=" full-page-intro bg-img ">

        <!-- Mask & flexbox options-->
        <div class="mask d-flex justify-content-center align-items-center">


            <!-- Content -->
            <div class="container mb-5 pb-5">
                <?php include('includes/header.php'); ?>
                <!--Grid row-->
                <div class="row wow fadeIn ">

                    <div class="col-lg-6 pt-5 mt-5 pb-5 mb-5 bor-right animated fadeIn">
                        <div>
                            <h2 class="h2-responsive weight-400">What do you want to <br> <span class="skc">learn today</span></h2>
                            <form class="form-inline md-form mr-auto mb-4">
                                <input class="form-control mr-sm-2" type="text" style="border-bottom: 2px solid #01783d;" placeholder="Search" aria-label="Search">
                                <button class="btn skbc btn-rounded  my-0"  onclick="location.href='course_view.php'" type="button">Search</button>
                            </form>
                        </div>
                    </div>
                    <div class=" col-lg-6 text-center sel-card animated fadeIn">
                        <div>
                            <h2 class="h2-responsive text-white weight-400">Contact <span class="skc">Application Form</span></h2>
                            <button onclick="location.href='student_contact.php'" class="btn btn-success skbc mt-4 mb-4 btn-rounded ">Sign Up</button>
                        </div>
                        <div>
                            <div class="mb-4   text-center text-md-left">
                                <div class="row text-center card-sel mt-4">
                                    <div class="col-12">
                                        <h2 class="h1-responsive text-white weight-400">Heading</h2>
                                    </div>
                                    <!-- Grid column -->
                                    <div class="col-lg-6 col-md-12 mb-lg-0 mb-4 zoom">

                                        <!--Excerpt-->
                                        <div class="card-body ">
                                            <h4 class="h4-responsive my-3">Title of the news</h4>
                                        </div>
                                    </div>
                                    <!-- Grid column -->

                                    <!-- Grid column -->
                                    <div class="col-lg-6 col-md-12 mb-lg-0 mb-4 zoom">

                                        <!--Excerpt-->
                                        <div class="card-body ">
                                            <h4 class="h4-responsive my-3">Title of the news</h4>
                                        </div>
                                    </div>
                                    <!-- Grid column -->
                                    <div class="col-lg-6 col-md-12 mb-lg-0 mb-4 zoom">

                                        <!--Excerpt-->
                                        <div class="card-body ">
                                            <h4 class="h4-responsive my-3">Title of the news</h4>
                                        </div>
                                    </div>
                                    <!-- Grid column -->
                                    <div class="col-lg-6 col-md-12 mb-lg-0 mb-4 zoom">

                                        <!--Excerpt-->
                                        <div class="card-body ">
                                            <h4 class="h4-responsive my-3">Title of the news</h4>
                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Mask & flexbox options-->

    </div>
    <!-- Full Page Intro -->

    <!--Main layout-->

    <!--Main layout-->
    <!-- Projects section v.3 -->
    <!-- Section: Features v.1 -->

    <!-- Section: Features v.1 -->
    <!-- Projects section v.3 -->
    <!--Footer-->
    <?php include('includes/footer.php'); ?>

    <script>
        $(function() {
            $("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
        });
    </script>
    <!--/.Footer-->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Initializations -->
    <script type="text/javascript">
        // Animations initialization
        // new WOW().init();
    </script>
</body>

</html>