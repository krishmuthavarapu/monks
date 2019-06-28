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
  </style>
</head>

<body>



  <!-- Navbar -->

  <!-- Full Page Intro -->

  <div class="container mb-4">
    <?php include('includes/header.php'); ?>
  </div>
  <div class="container">
    <div class="row">
      
    <div class="col-12">
        <h2 class="text-center">More Batches Coming Soon</h2>
      </div>
        <?php
        $search_value = $_POST["search"];
        if ($connection->connect_error) {
          echo 'Connection Faild: ' . $connection->connect_error;
        } else {
          $sql = ("SELECT * FROM institute_data WHERE course LIKE '$search_value%'") or die ("Could not search");

          $res = $connection->query($sql);
          $count = mysqli_num_rows($res);
          echo "
          <div class='col-12'>
          <p>Search Results For: $search_value</p>
          </div>
          ";
          if($count == 0){ ?>
                  <h2 class="text-center p-5 m-5">Stay Tune We are Launching Soon</h2>

          <?php
         
      
          }else{
          while ($row = $res->fetch_assoc()) { 
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
                <p class="dark-grey-text small">Nam libero tempore, cum soluta nobis est </p>
                <!-- Read more button -->
              </div>
            </div>
          </div>
         <?php }
        }
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
  <div class="modal dis" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog cus-modal-dialog" role="document">
      <div class="modal-content bgin">
        <div class="modal-body" id="mbody">
          <div class="container register-pop">
            <div class="row">
              <div class="col-md-12 text-center text-white">
                <h4>Sign Up</h4>
                <br>
                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active text-align form-new" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row register-form">
                      <div class="col-md-12" id="">
                        <script type="text/javascript">
                          function post() {
                            var name = document.getElementById("name").value;
                            var number = document.getElementById("number").value;
                            var email = document.getElementById("email").value;
                            var qualification = document.getElementById("qualification").value;
                            if (name && number && email && qualification) {
                              $.ajax({
                                type: 'post',
                                url: 'code_stu.php',
                                data: {
                                  user_name: name,
                                  user_number: number,
                                  user_email: email,
                                  user_qualification: qualification
                                },
                                success: function(response) {
                                  $('.modal').removeClass('dis').addClass('fade');
                                }
                              });
                            }
                            return false;
                          }
                        </script>
                        <form method="post" onsubmit="return post();">
                          <div class="form-group">
                            <input type="text" id="name" class="form-control" placeholder="Your Name" required />
                          </div>
                          <div class="form-group">
                            <input type="text" id="number" class="form-control" placeholder="Mobile Number" required />
                          </div>
                          <div class="form-group">
                            <input type="text" id="email" class="form-control" placeholder="Your Email" required />
                          </div>
                          <div class="form-group">
                            <input type="text" id="qualification" class="form-control" placeholder="Qualification" required />
                          </div>

                          <div class="form-group" style="text-align: center">
                            <input type="submit" onclick="" id="submit" name="submit" class="btn btn-rounded  skbc" />
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
  <?php include('includes/scripts.php'); ?>

</body>

</html>