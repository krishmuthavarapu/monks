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

  <div class="container  mb-4">
    <?php include('includes/header.php'); ?>
  </div>
  <div class="container">
    <!-- <button type="button" class=" btn modelbutton" data-toggle="modal" data-target="#basicExampleModal">
      Launch demo modal
    </button> -->

    <div class="row">
    <div class="col-12">Python</div>
      <?php
      $query = "SELECT * FROM institute_data WHERE course = 'Python'";
      $query_run = mysqli_query($connection, $query);
      ?>
      <?php
      if (mysqli_num_rows($query_run) > 0) {
        while ($row = mysqli_fetch_assoc($query_run)) {
          ?>
          <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 card-head fadeIn animated">
            <div class="row  card-course h-95 mb-0">
              <!-- Featured image -->
              <div class="">
                <div class=" overlay rounded  mb-2 mt-2">
                  <img class="img-fluid" src="img/jav.jpg" alt="Sample image">
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
              </div>
              <div class="p-2">
                <!-- Category -->
                <a href="#!" class="">
                  <h6 class="font-weight-bold mb-1 skc"><i class="fas fa-map pr-2"></i><?php echo $row['course']; ?></h6>
                </a>
                <!-- Post title -->
                <h4 class="font-weight-bold mb-1"><strong><?php echo $row['institute']; ?></strong></h4>
                <p class="mb-1"><a href="#!" class="font-weight-bold skc">Location: </a><?php echo $row['location']; ?></p>
                <!-- Post data -->
                <p class="mb-1"><a href="#!" class="font-weight-bold skc">Batch Date: </a><?php echo $row['batch_date']; ?></p>
                <!-- Excerpt -->
                <p class="dark-grey-text">Nam libero tempore, cum soluta nobis est </p>
                <!-- Read more button -->
              </div>
            </div>
          </div>
        <?php
      }
    } else {
      echo "No record found";
    }
    ?>
    </div>
    <div class="row">
        <div class="col-12">Java</div>
      <?php
      $query = "SELECT * FROM institute_data WHERE course = 'Java'";
      $query_run = mysqli_query($connection, $query);
      ?>
      <?php
      if (mysqli_num_rows($query_run) > 0) {
        while ($row = mysqli_fetch_assoc($query_run)) {
          ?>
          <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 card-head fadeIn animated">
            <div class="row  card-course h-95 mb-0">
              <!-- Featured image -->
              <div class="">
                <div class=" overlay rounded  mb-2 mt-2">
                  <img class="img-fluid" src="img/jav.jpg" alt="Sample image">
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
              </div>
              <div class="p-2">
                <!-- Category -->
                <a href="#!" class="">
                  <h6 class="font-weight-bold mb-1 skc"><i class="fas fa-map pr-2"></i><?php echo $row['course']; ?></h6>
                </a>
                <!-- Post title -->
                <h4 class="font-weight-bold mb-1"><strong><?php echo $row['institute']; ?></strong></h4>
                <p class="mb-1"><a href="#!" class="font-weight-bold skc">Location: </a><?php echo $row['location']; ?></p>
                <!-- Post data -->
                <p class="mb-1"><a href="#!" class="font-weight-bold skc">Batch Date: </a><?php echo $row['batch_date']; ?></p>
                <!-- Excerpt -->
                <p class="dark-grey-text">Nam libero tempore, cum soluta nobis est </p>
                <!-- Read more button -->
              </div>
            </div>
          </div>
        <?php
      }
    } else {
      echo "No record found";
    }
    ?>
    </div>
    <div class="row">
        <div class="col-12">All courses</div>
      <?php
      $query = "SELECT * FROM institute_data ";
      $query_run = mysqli_query($connection, $query);
      ?>
      <?php
      if (mysqli_num_rows($query_run) > 0) {
        while ($row = mysqli_fetch_assoc($query_run)) {
          ?>
          <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 card-head fadeIn animated">
            <div class="row  card-course h-95 mb-0">
              <!-- Featured image -->
              <div class="">
                <div class=" overlay rounded  mb-2 mt-2">
                  <img class="img-fluid" src="img/jav.jpg" alt="Sample image">
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
              </div>
              <div class="p-2">
                <!-- Category -->
                <a href="#!" class="">
                  <h6 class="font-weight-bold mb-1 skc"><i class="fas fa-map pr-2"></i><?php echo $row['course']; ?></h6>
                </a>
                <!-- Post title -->
                <h4 class="font-weight-bold mb-1"><strong><?php echo $row['institute']; ?></strong></h4>
                <p class="mb-1"><a href="#!" class="font-weight-bold skc">Location: </a><?php echo $row['location']; ?></p>
                <!-- Post data -->
                <p class="mb-1"><a href="#!" class="font-weight-bold skc">Batch Date: </a><?php echo $row['batch_date']; ?></p>
                <!-- Excerpt -->
                <p class="dark-grey-text">Nam libero tempore, cum soluta nobis est </p>
                <!-- Read more button -->
              </div>
            </div>
          </div>
        <?php
      }
    } else {
      echo "No record found";
    }
    ?>
    </div>
  </div>


  <!-- Full Page Intro -->
  <!--Footer-->
  <?php include('includes/footer.php'); ?>
  <!-- modal -->
  <!-- Modal -->
  <!-- add class dis -->
  <div class="modal fade " id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content bgin">
        <div class="modal-body" id="mbody">
          <div class="container register-pop">
            <div class="row">
              <div class="col-md-12">
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">

                  <li class="nav-item">
                    <a class="" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Sign Up </a>
                  </li>

                </ul>
                <br>
                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active text-align form-new" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row register-form">
                      <div class="col-md-12" id="">
                        <form method="post">
                          <div class="form-group">
                            <input type="text" name="username" class="form-control" placeholder="Your Name" value="" required="" />
                          </div>
                          <div class="form-group">
                            <input type="text" name="number" class="form-control" placeholder="Mobile Number" value="" required="" />
                          </div>
                          <div class="form-group">
                            <input type="text" name="email" class="form-control" placeholder="Your Email" value="" required="" />
                          </div>
                          <div class="form-group">
                            <input type="text" name="qualification" class="form-control" placeholder="Qualification" value="" required="" />
                          </div>

                          <div class="form-group" style="text-align: center">
                            <input type="submit" onclick="$('.modal').removeClass('dis').addClass('fade');" name="save" class="btn  skbc" value="Submit" />
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>

                </div>


              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

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