<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Skill Monks</title>
  <?php include('includes/links.php'); ?>
  <!-- <script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script> -->
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

    .cus-tab-content>.active {
      display: flex;
    }

    body {
      background: #e0e0e0;
    }

    a:hover {
      color: black;
    }
  </style>
</head>

<body>



  <!-- Navbar -->

  <!-- Full Page Intro -->

  <div class="container mb-4">
    <?php include('includes/header.php'); ?>
  </div>
  <div class="container mb-3">
    <!-- <button type="button" class=" btn modelbutton" data-toggle="modal" data-target="#basicExampleModal">
      Launch demo modal
    </button> -->
    <div class="row">
      <div class="col-12">
        <ul class="nav nav-tabs cus-s-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="all-tab" data-toggle="tab" href="#all" role="tab" aria-controls="contact" aria-selected="false">All Courses</a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" id="java-tab" data-toggle="tab" href="#java" role="tab" aria-controls="profile" aria-selected="false">Java</a>
          </li>
          <?php
          $query = "SELECT * FROM course_tab";
          $query_run = mysqli_query($connection, $query);
          ?>
          <?php
          if (mysqli_num_rows($query_run) > 0) {
            while ($row = mysqli_fetch_assoc($query_run)) {
              ?>
              <li class="nav-item">
                <a class="nav-link" id="<?php echo $row['course']; ?>-tab" data-toggle="tab" href="#<?php echo $row['course']; ?>" role="tab" aria-controls="<?php echo $row['course']; ?>" aria-selected="false"><?php echo $row['course']; ?></a>
              </li>
            <?php
            }
          } else {
            echo "No record found";
          }
          ?>

        </ul>
      </div>

    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col">
        <h2 class="h2-responsive text-center">Upcoming Batches.</h2>
      </div>
    </div>
  </div>
  <div class="container tab-content cus-tab-content mt-3" id="myTabContent">

    
    <div class="row tab-pane fade" id="java" role="tabpanel" aria-labelledby="java-tab">
      <?php
      $query = "SELECT * FROM institute_data WHERE course LIKE '%Java%'";
      $query_run = mysqli_query($connection, $query);
      ?>
      <?php
      if (mysqli_num_rows($query_run) > 0) {
        while ($row = mysqli_fetch_assoc($query_run)) {
          $image = (!empty($row['photo'])) ? 'img/' . $row['photo'] : 'img/jav.jpg';
          ?>
          <div class="col-lg-3 col-md-4 col-sm-6 mb-lg-0 mb-4 card-head fadeIn animated">
            <div class="row  card-course h-95 mb-0 pt-0">
              <!-- Featured image -->
              <div class="">
                <div class=" overlay rounded  mb-2 mt-0">
                  <img class="img-fluid" src="<?php echo $image ?>" alt="Sample image">
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
              </div>
              <div class="p-2">
                <!-- Category -->
                <a href="#!" class="">
                  <p class="font-weight-bold mb-1 skc"><i class="fas fa-map pr-2"></i><?php echo $row['course']; ?></p>
                </a>
                <!-- Post title -->
                <h5 class=" mb-1"><strong><?php echo $row['institute']; ?></strong></h5>
                <p class="mb-1 small"><a href="#!" class="font-weight-bold skc">Location: </a><?php echo $row['location']; ?></p>
                <!-- Post data -->
                <p class="mb-1 small"><a href="#!" class="font-weight-bold skc">Batch Date: </a><?php echo $row['batch_date']; ?></p>
                <!-- Excerpt -->
                <p class="dark-grey-text small p-2"> </p>
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
    <div class="row tab-pane fade show  active" id="all" role="tabpanel" aria-labelledby="all-tab">
      <?php
      $query = "SELECT * FROM institute_data ";
      $query_run = mysqli_query($connection, $query);
      ?>
      <?php
      if (mysqli_num_rows($query_run) > 0) {
        while ($row = mysqli_fetch_assoc($query_run)) {
          $image = (!empty($row['photo'])) ? 'img/' . $row['photo'] : 'img/jav.jpg';
          ?>
          <div class="col-lg-3 col-md-4 col-sm-6 mb-lg-0 mb-4 card-head fadeIn animated">
            <div class="row  card-course h-95 mb-0 pt-0">
              <!-- Featured image -->
              <div class="">
                <div class=" overlay rounded  mb-2 mt-0">
                  <img class="img-fluid" src="<?php echo $image ?>" alt="Sample image">
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
              </div>
              <div class="p-2">
                <!-- Category -->
                <a href="#!" class="">
                  <p class="font-weight-bold mb-1 skc"><i class="fas fa-map pr-2"></i><?php echo $row['course']; ?></p>
                </a>
                <!-- Post title -->
                <h5 class=" mb-1"><strong><?php echo $row['institute']; ?></strong></h5>
                <p class="mb-1 small"><a href="#!" class="font-weight-bold skc">Location: </a><?php echo $row['location']; ?></p>
                <!-- Post data -->
                <p class="mb-1 small"><a href="#!" class="font-weight-bold skc">Batch Date: </a><?php echo $row['batch_date']; ?></p>
                <!-- Excerpt -->
                <p class="dark-grey-text small p-2"></p>
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
    <?php
          $query = "SELECT * FROM course_tab";
          $query_run = mysqli_query($connection, $query);
          ?>
    <?php
          if (mysqli_num_rows($query_run) > 0) {
            while ($row = mysqli_fetch_assoc($query_run)) {
              ?>
    <div class="row tab-pane fade show" id="<?php echo $row['course']; ?>" role="tabpanel" aria-labelledby="<?php echo $row['course']; ?>-tab">
    
     
     <?php
     
      $query = "SELECT * FROM institute_data WHERE course LIKE '%mean%'";
      $query_run = mysqli_query($connection, $query);
      ?>
      <?php
      if (mysqli_num_rows($query_run) > 0) {
        while ($row = mysqli_fetch_assoc($query_run)) {
          $image = (!empty($row['photo'])) ? 'img/' . $row['photo'] : 'img/jav.jpg';
          ?>
          <div class="col-lg-3 col-md-4 col-sm-6 mb-lg-0 mb-4 card-head fadeIn animated">
            <div class="row  card-course h-95 mb-0 pt-0">
              <!-- Featured image -->
              <div class="">
                <div class=" overlay rounded  mb-2 mt-0">
                  <img class="img-fluid w-100" width="100%" src="<?php echo $image ?>" alt="Sample image">
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
              </div>
              <div class="pt-2 pr-2 pl-2">
                <!-- Category -->
                <a href="#!" class="">
                  <p class="font-weight-bold mb-1 skc"><i class="fas fa-map pr-2"></i><?php echo $row['course']; ?></p>
                </a>
                <!-- Post title -->
                <h5 class=" mb-1"><strong><?php echo $row['institute']; ?></strong></h5>
                <p class="mb-1 small"><a href="#!" class="font-weight-bold skc">Location: </a><?php echo $row['location']; ?></p>
                <!-- Post data -->
                <p class="mb-1 small"><a href="#!" class="font-weight-bold skc">Batch Date: </a><?php echo $row['batch_date']; ?></p>
                <!-- Excerpt -->
                <p class="dark-grey-text small p-2"> </p>
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
    <?php
            }
          } else {
            echo "No record found";
          }
          ?>
  </div>
  


  <!-- Full Page Intro -->
  <!--Footer-->
  <?php include('includes/footer.php'); ?>
  <!-- modal -->
  <!-- Modal -->
  <!-- add class dis -->


  <script>
    $(function() {
      $("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
    });
  </script>
  <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <?php include('includes/scripts.php'); ?>

</body>

</html>