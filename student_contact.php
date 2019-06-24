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
    <!-- add navar fixed-top and remove styles and ml-2 -->
    <!-- <nav style="z-index: 100;background: #fff;" class=" navbar-expand-lg navbar-dark ">
    <div class="container-fluid">
      <a class="navbar-brand ml-4 pl-lg-4" href="#" target="_blank">
        <img src="img/logo.png" width="100px" alt="">
      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

    </div>
  </nav> -->

    <!-- Navbar -->

    <!-- Full Page Intro -->
    <div class=" full-page-intro bg-img">

        <!-- Mask & flexbox options-->
        <div class="mask d-flex justify-content-center align-items-center">


            <!-- Content -->
            <div class="container ">
                <?php include('includes/header.php'); ?>


                <!--Grid row-->
                <div class="row wow ">
                <div class="col-12 mt-2 text-center mb-3">
                            <h1 class="">Common <span class="skc">Application Form</span></h1>
                        </div>
                    <!--Grid column-->
                    <div class="col-lg-6 col-md-6 mb-4   text-center text-md-left  animated fadeIn">
                    <div class="col-12 mt-4 text-center mb-2">
                            <h1 class="">Random Title</h1>
                        </div>

                        <div class="row text-center card-caf mt-5">

                            <!-- Grid column -->
                            <div class="col-lg-6 col-md-12 mb-lg-0  mb-4 zoom ">

                                <!--Excerpt-->
                                <div class="card-body pt-3 pb-3">

                                    <i class="fas fa-book fa-3x text-white"></i>
                                    <h5 class="font-weight-bold my-2">Support</h5>
                                    <p class="mb-0">Lorem ipsum dolor sit amet
                                    </p>

                                </div>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-lg-6 col-md-12 mb-lg-0 mb-4 zoom">

                                <!--Excerpt-->
                                <div class="card-body pt-3 pb-3">

                                    <i class="fas fa-chart-area fa-3x red-text"></i>
                                    <h5 class="font-weight-bold my-2">Support</h5>
                                    <p class="mb-0">Lorem ipsum dolor sit amet
                                    </p>

                                </div>
                            </div>
                            <!-- Grid column -->
                            <div class="col-lg-6 col-md-12 mb-lg-0 mb-4 zoom">

                                <!--Excerpt-->
                                <div class="card-body pt-3 pb-3">

                                    <i class="far fa-comments fa-3x orange-text"></i>
                                    <h5 class="font-weight-bold my-2">Support</h5>
                                    <p class="mb-0">Lorem ipsum dolor sit amet
                                    </p>

                                </div>
                            </div>
                            <!-- Grid column -->
                            <div class="col-lg-6 col-md-12 mb-lg-0 mb-4 zoom">

                                <!--Excerpt-->
                                <div class="card-body pt-3 pb-3">

                                    <i class="far fa-comments fa-3x text-white"></i>
                                    <h5 class="font-weight-bold my-2">Support</h5>
                                    <p class="mb-0">Lorem ipsum dolor sit amet
                                    </p>

                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-1 d-none d-lg-block"></div>
                    <!-- <div class="col-lg-1 col-md-1"></div> -->
                    <div class="col-lg-5 col-md-6 mb-3 animated fadeIn">
                        <!-- Default form login -->
                        <div class=" text-center pt-3  " style="    border-radius: 8px;background: #060501b5;">
                            <h2 class=" text-white " style="font-weight:400"> Application Form</h2>
                            <hr class="hr-cus">
                            <form action="" method="post" class="text-center  pr-lg-5 pl-lg-5 pt-lg-3 pb-lg-3 p-3 ">

                                <!-- <p class="h4 mb-4 text-white">Sign in</p> -->

                                <!-- Email -->
                                <input type="text" id="" class="form-control mb-3 " name="username" placeholder="Your Name" required>
                                <input type="text" id="" class="form-control mb-3" name="number" placeholder="Mobile Number" required>
                                <input type="email" id="" class="form-control mb-3" name="email" placeholder="E-Mail" required>
                                <input type="text" id="" class="form-control mb-3" name="" placeholder="Year of passing" required>
                                <input type="text" id="" class="form-control mb-3" name="qualification" placeholder="Qualification" required>
                                <input type="text" id="" class="form-control mb-3" name="" placeholder="Course Interested In" required>
                                <input type="text" id="" class="form-control mb-3" name="city" placeholder="City" required>

                                <!-- Sign in button -->
                                <button class="btn btn-info skbc btn-block my-4" name="save" type="submit">Sign Up</button>

                            </form>
                            <!-- Default form login -->
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