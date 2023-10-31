<?php
include('dbconfig.php');

if (isset($_GET['matkul'])) {
    $matkul = $_GET['matkul'];

    $sql = "DELETE FROM matkuldb WHERE matkul = ?";
    $stmt = mysqli_prepare($connect, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "s", $matkul);

        if (mysqli_stmt_execute($stmt)) {
            header('location: ../list.php');
        } else {
            echo "Delete operation failed: " . mysqli_error($connect);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error in preparing the SQL statement: " . mysqli_error($connect);
    }
} else {
    die("Access Denied");
}
?>
