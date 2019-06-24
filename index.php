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
        <div class="mask d-flex justify-content-center align-items-center ">


            <!-- Content -->
            <div class="container pb-100 mb-4">
                <?php include('includes/header.php'); ?>


                <!--Grid row-->
                <div class="row pt-3 mt-3 pb-3">
                    <div class="col text-center ">
                    <h2 class="h-rem" style="font-weight:400"><span class="p-1">Explore Here!</span></h2>

                        <!-- <h2 class="h-rem" style="font-weight:400"><span class="p-1">Welcome to</span><span class="p-1" style="color: #01783d;">SkillMonks</span></h2> -->
                        <!-- <h2 class="h2-responsive weight-400"><span class="skbc p-1">Welcome </span><span style="" class="p-1 bg-dark text-white"> to SkillMonks</span></h2> -->
                    </div>
                </div>
                <div class="row wow fadeIn pb-100 mb-5 pt-3 mt-5 animated fadeIn">
                    <div class="col text-center align-self-center">
                        <div class="overlay zoom">
                            <button type="button" onclick="location.href='student_selection.php'" class="btn btn-default btn skbc btn-rounded ">
                                <div class="h5-responsive">Student</div>
                            </button>
                        </div>
                    </div>
                    <div class="col text-center align-self-center ">
                        <div class="overlay zoom">
                            <button type="button" onclick="location.href='institute_selection.php'" class="btn btn-default btn skbc btn-rounded">
                                <div class="h5-responsive">Institute</div>
                            </button>
                        </div>
                    </div>
                    <div class="col text-center align-self-center">
                        <div class="overlay zoom">
                            <button type="button" class="btn btn-default btn skbc btn-rounded">
                                <div class="h5-responsive">Trainer</div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Mask & flexbox options-->

    </div>
    <!-- Full Page Intro -->
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