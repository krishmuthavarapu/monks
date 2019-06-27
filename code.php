<?php include('includes/header.php'); ?>

<?php

if ($_POST) {
    $mysqltime = date_create()->format('Y-m-d H:i:s');
    $sql = "INSERT INTO searched_students(name, number, email, qualification, date)
VALUES ('" . $_POST["name"] . "','" . $_POST["number"] . "', '" . $_POST["email"] . "', '" . $_POST["qualification"] . "', '" . $mysqltime . "')";

    $result = mysqli_query($connection, $sql);
    echo "";
}

?>