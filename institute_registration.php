<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Skill Monks</title>
    <?php include('includes/links.php'); ?>
</head>

<body>
    <!-- Full Page Intro -->
    <div class=" full-page-intro bg-img ">

        <!-- Mask & flexbox options-->
        <div class="mask d-flex justify-content-center align-items-center ">


            <!-- Content -->
            <div class="container pb-100 mb-4">
                <?php include('includes/header.php'); ?>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="col-lg-12 col-md-12 mt-4 text-center text-md-left">

                            <div class="col-12 mt-4 text-center">
                                <h1 class="">Institute <span class="skc">Application Form</span></h1>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam expedita dignissimos, accusamus impedit voluptas dolorum optio reprehenderit necessitatibus atque adipisci labore dolore iste tempora veniam molestias tenetur quasi? Deserunt, temporibus.</p>
                            </div>

                            <div class="row text-center card-caf mt-4 animated fadeIn">

                                <!-- Grid column -->
                                <div class="col-lg-6 col-md-12 mb-lg-0 mb-4 zoom">

                                    <!--Excerpt-->
                                    <div class="card-body ">
                                        <h4 class="h3-responsive my-3">Title of the news</h4>
                                        <p class="">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus.
                                        </p>
                                    </div>
                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-lg-6 col-md-12 mb-lg-0 mb-4 zoom">

                                    <!--Excerpt-->
                                    <div class="card-body ">
                                        <h4 class="h3-responsive my-3">Title of the news</h4>
                                        <p class="">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus.
                                        </p>
                                    </div>
                                </div>
                                <!-- Grid column -->
                                <div class="col-lg-6 col-md-12 mb-lg-0 mb-4 zoom">

                                    <!--Excerpt-->
                                    <div class="card-body ">
                                        <h4 class="h3-responsive my-3">Title of the news</h4>
                                        <p class="">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus.
                                        </p>
                                    </div>
                                </div>
                                <!-- Grid column -->
                                <div class="col-lg-6 col-md-12 mb-lg-0 mb-4 zoom">

                                    <!--Excerpt-->
                                    <div class="card-body ">
                                        <h4 class="h3-responsive my-3">Title of the news</h4>
                                        <p class="">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>

            </div>

        </div>
        <!-- Mask & flexbox options-->

    </div>
    <!-- institute form -->
    <div class="container mt-5" class="text-center">

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 mb-3">
                <?php

                if (isset($_POST['submit'])) {
                    $mysqltime = date_create()->format('Y-m-d H:i:s');
                    $sql = "INSERT INTO institute_registration(institute_name, email, number, password, city, location, website, date)
VALUES ('" . $_POST["institute_name"] . "','" . $_POST["email"] . "', '" . $_POST["number"] . "', '" . $_POST["password"] . "', '" . $_POST["city"] . "', '" . $_POST["location"] . "', '" . $_POST["website"] . "', '" . $mysqltime . "')";

                    $result = mysqli_query($connection, $sql);
                    echo "<script>window.location.href='course_view.php'</script>";
                }

                ?>
                <form id="frm" class="wdt-change" action="" method="post">
                    <br>
                    <h2 class="text-center">Institute Application Form</h2>
                    <div class="md-form input-group mb-3">
                        <div class="input-group-prepend ">
                            <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-default">Institute Name:</span>
                        </div>
                        <input type="text" name="institute_name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroupMaterial-sizing-default" required>
                    </div>
                    <div class="md-form input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-default">Email:</span>
                        </div>
                        <input type="email" name="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroupMaterial-sizing-default" required>
                    </div>
                    <div class="md-form input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-default">Number:</span>
                        </div>
                        <input type="text" name="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroupMaterial-sizing-default" required>
                    </div>
                    <div class="md-form input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-default">Password:</span>
                        </div>
                        <input type="password" name="password" id="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroupMaterial-sizing-default" required>
                    </div>
                    <div class="md-form input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-default">Confirm Password:</span>
                        </div>
                        <input type="password" name="" class="form-control" id="confirm_password" aria-label="Sizing example input" aria-describedby="inputGroupMaterial-sizing-default" required>
                    </div>
                    <div class="md-form input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-default">City:</span>
                        </div>
                        <input type="text" name="city" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroupMaterial-sizing-default" required>
                    </div>
                    <div class="md-form input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-default">Location:</span>
                        </div>
                        <input type="text" name="location" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroupMaterial-sizing-default" required>
                    </div>
                    <div class="md-form input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-default">Institute's website:</span>
                        </div>
                        <input type="text" name="website" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroupMaterial-sizing-default" required>
                    </div>


                    <button type="submit" name="submit" class="btn btnclr">Submit</button>
                </form>

            </div>
            <div class="col-md-2"></div>
        </div>

    </div>
    <!-- Full Page Intro -->
    <!--Footer-->
    <?php include('includes/footer.php'); ?>
    <script>
        var password = document.getElementById("password"),
            confirm_password = document.getElementById("confirm_password");

        function validatePassword() {
            if (password.value != confirm_password.value) {
                confirm_password.setCustomValidity("Passwords Don't Match");
            } else {
                confirm_password.setCustomValidity('');
            }
        }

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
    </script>
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