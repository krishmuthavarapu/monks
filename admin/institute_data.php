<?php
include('security.php');
include('db/config.php');


include('includes/header.php'); ?>

<?php include('includes/navbar.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>
                Institute Course Data
            </h2>
        </div>
    <?php
    if (isset($_SESSION['success']) && $_SESSION['success'] != '') {
        echo '<h4>' . $_SESSION['success'] . '</h4>';
        unset($_SESSION['success']);
    }
    if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
        echo '<h4 class="bg-warning">' . $_SESSION['status'] . '</h4>';
        unset($_SESSION['status']);
    }
    ?>
        <?php
        $query = "SELECT * FROM institute_data";
        $query_run = mysqli_query($connection, $query);
        ?>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Institute Name</th>
                        <th>Course</th>
                        <th>Location</th>
                        <th>Batch Date</th>
                        <th>Demo Date</th>
                        <th>Email</th>
                        <th>Number</th>
                        <th>Date</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (mysqli_num_rows($query_run) > 0) {
                        while ($row = mysqli_fetch_assoc($query_run)) {
                            ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['institute']; ?></td>
                                <td><?php echo $row['course']; ?></td>
                                <td><?php echo $row['location']; ?></td>
                                <td><?php echo $row['batch_date']; ?></td>
                                <td><?php echo $row['demo_date']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['number']; ?></td>

                                <td><?php echo $row['date']; ?></td>
                                <td><form action="institute_edit.php" method="post">
                                    <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                    <button class="btn-success " name="edit_btn" type="submit">Edit</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="code.php" method="POST">
                                    <input type="hidden" name="delete_Id" value="<?php echo $row['id'];?>">
                                    <button class="btn-danger " name="delete_ud" type="submit">Delete</button>
                                    </form>
                                </td>

                                <!-- <td><button class="btn-success " type="submit">Edit</button></td>
                                                        <td><button class="btn-danger " type="submit">Delete</button></td> -->


                            </tr>
                        <?php
                    }
                } else {
                    echo "No record found";
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h2>Institute Registration Details</h2>
        </div>
    <?php
    if (isset($_SESSION['success']) && $_SESSION['success'] != '') {
        echo '<h4>' . $_SESSION['success'] . '</h4>';
        unset($_SESSION['success']);
    }
    if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
        echo '<h4 class="bg-warning">' . $_SESSION['status'] . '</h4>';
        unset($_SESSION['status']);
    }
    ?>
        <?php
        $query = "SELECT * FROM institute_registration";
        $query_run = mysqli_query($connection, $query);
        ?>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Institute Name</th>
                        <th>Email</th>
                        <th>Number</th>
                        <th>Password</th>
                        <th>City</th>
                        <th>Location</th>
                        <th>Website</th>
                        <th>Date</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (mysqli_num_rows($query_run) > 0) {
                        while ($row = mysqli_fetch_assoc($query_run)) {
                            ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['institute_name']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['number']; ?></td>
                                <td><?php echo $row['password']; ?></td>
                                <td><?php echo $row['city']; ?></td>
                                <td><?php echo $row['location']; ?></td>
                                <td><?php echo $row['website']; ?></td>
                                

                                <td><?php echo $row['date']; ?></td>
                                <td><form action="institute_regitration_edit.php" method="post">
                                    <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                    <button class="btn-success " name="institute_registration_btn" type="submit">Edit</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="code.php" method="POST">
                                    <input type="hidden" name="delete_Id" value="<?php echo $row['id'];?>">
                                    <button class="btn-danger " name="delete_ins_reg_data" type="submit">Delete</button>
                                    </form>
                                </td>

                                <!-- <td><button class="btn-success " type="submit">Edit</button></td>
                                                        <td><button class="btn-danger " type="submit">Delete</button></td> -->


                            </tr>
                        <?php
                    }
                } else {
                    echo "No record found";
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
   
</div>
</div>
<!-- End of Page Wrapper -->
<?php include('includes/scripts.php'); ?>

<?php include('includes/footer.php'); ?>