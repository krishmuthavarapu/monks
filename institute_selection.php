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

    <!-- <style type="text/css">
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
    </style> -->
</head>

<body>
    <!-- Full Page Intro -->
    <div class=" full-page-intro bg-img ">

        <!-- Mask & flexbox options-->
        <div class="mask d-flex justify-content-center align-items-center ">

        
            <!-- Content -->
            <div class="container pb-100 mb-4">
                <?php include('includes/header.php'); ?>
                <?php

if (isset($_POST['submit'])) {
    $mysqltime = date_create()->format('Y-m-d H:i:s');
    $sql = "INSERT INTO institute_data(institute, course, location, batch_date, demo_date, email, number, date)
VALUES ('" . $_POST["institute"] . "','" . $_POST["course"] . "', '" . $_POST["location"] . "', '" . $_POST["batch_date"] . "', '" . $_POST["demo_date"] . "', '" . $_POST["email"] . "', '" . $_POST["number"] . "', '" . $mysqltime . "')";

    $result = mysqli_query($connection, $sql);
    echo "<script>window.location.href='institute_registration.php'</script>";
}

?>
                <div class="row fadeIn animated">
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-6 register-pop">
                        <div class="text-center">
                        <h3 class="text-white" >Demo Information</h3>
                        </div>
                        <hr class="skbc">
                  
                  <br>
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active text-align form-new" id="home" role="tabpanel" aria-labelledby="home-tab">
                      <div class="row register-form">
                        <div class="col-md-12" id="right">
                      
                          <form action="" method="post">
                            <div class="form-group">
                              <input type="text" name="institute" class="form-control" placeholder="Institute Name" value="" required="" />
                            </div>
                            <div class="form-group">
                              <input type="text" name="course" class="form-control" placeholder="course" value="" required="" />
                            </div>
                            <div class="form-group">
                              <input type="text" name="batch_date" class="form-control" placeholder="Batch Date" value="" required="" />
                            </div>
                            <div class="form-group">
                              <input type="text" name="demo_date" class="form-control" placeholder="Demo Date" value="" required="" />
                            </div>
                            <div class="form-group">
                              <input type="text" name="location" class="form-control" placeholder="location" value="" required="" />
                            </div>
                  
                            <div class="form-group">
                              <input type="text" name="email" class="form-control" placeholder="email" value="" required="" />
                            </div>
                            <div class="form-group">
                              <input type="text" name="number" class="form-control" placeholder="Mobile Number" value="" required="" />
                            </div>

                            <div class="form-group" style="text-align: center">
                              <input type="submit" name="submit" class="btn skbc" value="Submit" />
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                    <div class="col-md-3">

                    </div>
                </div>

            </div>

        </div>
        <!-- Mask & flexbox options-->

    </div>
    <!-- institute form -->

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