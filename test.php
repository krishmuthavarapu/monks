<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Skill Monks</title>
  <?php include('includes/links.php'); ?>


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
  </style>
  <style type="text/css">
    body {
      font-family: Arail, sans-serif;
    }

    /* Formatting search box */
    .search-box {
      width: 300px;
      position: relative;
      display: inline-block;
      font-size: 14px;
    }

    .search-box input[type="text"] {
      height: 32px;
      padding: 5px 10px;
      border: 1px solid #CCCCCC;
      font-size: 14px;
    }

    .result {
      position: absolute;
      z-index: 999;
      top: 100%;
      left: 0;
      background: #1C2331;
    }

    .search-box input[type="text"],
    .result {
      width: 100%;
      box-sizing: border-box;
    }

    /* Formatting result items */
    .result p {
      margin: 0;
      padding: 7px 10px;
      border: 1px solid #CCCCCC;
      border-top: none;
      cursor: pointer;
      color: white
    }

    .result p:hover {
      background: #f2f2f2;
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
    <script>
      $(document).ready(function() {
        load_data();

        function load_data(query) {
          $.ajax({
            url: "tab_search.php",
            method: "POST",
            data: {
              query: query
            },
            success: function(data) {
              $('#result').html(data);
            }
          });
        }
        $('#search').keyup(function() {
          var search = $(this).val();
          if (search != '') {
            load_data(search);
          } else {
            load_data();
          }
        });
      });
    </script>
    <!-- <button type="button" class=" btn modelbutton" data-toggle="modal" data-target="#basicExampleModal">
      Launch demo modal
    </button> -->
    <div class="row">
      <div class="col-12">
        <input type="text" name="search" id="search" placeholder="Search" class="form-control" />


        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="python-tab" data-toggle="tab" href="#python" role="tab" aria-controls="home" aria-selected="true">Python</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="java-tab" data-toggle="tab" href="#java" role="tab" aria-controls="profile" aria-selected="false">Java</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="all-tab" data-toggle="tab" href="#all" role="tab" aria-controls="contact" aria-selected="false">All Courses</a>
          </li>


          <li class="nav-item">
            <!-- <form class="form-inline md-form mr-auto mb-4" method="post" action="course_search.php"> -->


            <!-- </form> -->
          </li>
        </ul>
      </div>

    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col">
      </div>
    </div>
  </div>
  <div class="container tab-content cus-tab-content" id="myTabContent">
    <!-- <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">Raw denim you
          probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master
          cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro
          keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip
          placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi
          qui.</div> -->
    <!-- <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">Raw denim you
          probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master
          cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro
          keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip
          placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi
          qui.</div> -->
    <div class="row tab-pane fade show active" id="python" role="tabpanel" aria-labelledby="python-tab">

      <div class="col-12">Python</div>
      <?php
      $query = "SELECT * FROM institute_data WHERE course = 'python'";
      $query_run = mysqli_query($connection, $query);
      ?>
      <?php
      if (mysqli_num_rows($query_run) > 0) {
        while ($row = mysqli_fetch_assoc($query_run)) {
          $image = (!empty($row['photo'])) ? 'img/' . $row['photo'] : 'img/jav.jpg';
          ?>
          <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 card-head fadeIn animated">
            <div class="row  card-course h-95 mb-0 pt-0 d-rel">
              <!-- Featured image -->
              <div class="">
                <div class=" overlay rounded  mb-2 mt-0">
                  <img class="img-fluid" src="<?php echo $image ?>" alt="Sample image">
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
              </div>
              <div class="p-2 w-100 ">
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
                <p class="p-2"></p>
                <div class="d-abs" style="float:right">
                  <p class="dark-grey-text small" style="float:left">
                    <a href="https://api.whatsapp.com/send?phone=9578800900" target="_blank">
                      <i class="fab  fa-whatsapp skc pr-1" style="font-size:18px"></i>
                    </a><a href='tel:9578800900' class="skc"> 9578 800 900</a>

                  </p>
                  <form action="student_course_select.php" method="post">

                  <p class="dark-grey-text small" style="float:right">
                  
                     <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                     <button class="skbc p-1 btn-rounded border-0" href="#!" name="course_select_btn" type="submit">Apply</button>
                  </p>
                  </form>

                </div>
               
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
    <div class="row tab-pane fade" id="java" role="tabpanel" aria-labelledby="java-tab">
      <div class="col-12">Java</div>
      <?php
      $query = "SELECT * FROM institute_data WHERE course = 'Java'";
      $query_run = mysqli_query($connection, $query);
      ?>
      <?php
      if (mysqli_num_rows($query_run) > 0) {
        while ($row = mysqli_fetch_assoc($query_run)) {
          $image = (!empty($row['photo'])) ? 'img/' . $row['photo'] : 'img/jav.jpg';
          ?>
          <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 card-head fadeIn animated">
            <div class="row  card-course h-95 mb-0 pt-0 d-rel">
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
                <p class="p-2"></p>
                <div class="d-abs" style="float:right">
                  <p class="dark-grey-text small">
                    <a href="https://api.whatsapp.com/send?phone=9578800900" target="_blank">
                      <i class="fab  fa-whatsapp skc pr-1" style="font-size:18px"></i>
                    </a>
                    <a href='tel:9578800900' class="skc"> 9578 800 900</a>
                  </p>
                </div>
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
    <div class="row tab-pane fade active" id="all" role="tabpanel" aria-labelledby="all-tab">
      <div class="col-12">All courses</div>
      <?php
      $query = "SELECT * FROM institute_data ";
      $query_run = mysqli_query($connection, $query);
      ?>
      <?php
      if (mysqli_num_rows($query_run) > 0) {
        while ($row = mysqli_fetch_assoc($query_run)) {
          $image = (!empty($row['photo'])) ? 'img/' . $row['photo'] : 'img/jav.jpg';
          ?>
          <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 card-head fadeIn animated">
            <div class="row  card-course h-95 mb-0 pt-0 d-rel">
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
                <p class="p-2"></p>
                <div class="d-abs">
                  <p class="dark-grey-text small">
                    <a href="https://api.whatsapp.com/send?phone=9578800900" target="_blank">
                      <i class="fab  fa-whatsapp skc pr-1" style="font-size:18px"></i>
                    </a>
                    <a href='tel:9578800900' class="skc"> 9578 800 900</a>
                  </p>
                </div>
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



  <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <?php include('includes/scripts.php'); ?>
  <script>
    $(function() {
      $("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
    });
  </script>
  <!-- search ajax -->
  <script type="text/javascript">
    $(document).ready(function() {
      $('.search-box input[type="text"]').on("keyup input", function() {
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if (inputVal.length) {
          $.get("backend-search.php", {
            term: inputVal
          }).done(function(data) {
            // Display the returned data in browser
            resultDropdown.html(data);
          });
        } else {
          resultDropdown.empty();
        }
      });

      // Set search input value on click of result item
      $(document).on("click", ".result p", function() {
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
      });
    });
  </script>
</body>

</html>