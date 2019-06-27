<?php include('db/config.php'); ?>

<?php

if (isset($_POST['user_name']) && isset($_POST['user_number']) &&isset($_POST['user_email']) && isset($_POST['user_qualification'])) {
    $name = $_POST['user_name'];
    $number = $_POST['user_number'];
    $email = $_POST['user_email'];
    $qualification = $_POST['user_qualification'];
    $mysqltime = date_create()->format('Y-m-d H:i:s');
    $sql = "INSERT INTO searched_students(name, number, email, qualification, date)
VALUES ('$name','$number', '$email', '$qualification', '" . $mysqltime . "')";

    $result = mysqli_query($connection, $sql);
    echo "<script>
    $('.modal').removeClass('dis').addClass('fade');
    </script>";
}

?>