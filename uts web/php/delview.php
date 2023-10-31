<?php
include('dbconfig.php');

if (isset($_GET['matkul']) && isset($_GET['materi'])) {
    $matkul = $_GET['matkul'];
    $materi = $_GET['materi'];


    $sql = "UPDATE matkuldb SET materi" . $materi . " = NULL WHERE matkul = '$matkul'";
    $result = mysqli_query($connect, $sql);

    if (!$result) {
        die("Deletion failed: " . mysqli_error($connect));
    }

    
    header("Location: ../view.php?matkul=" . $matkul . "");
    exit();
} else {
    echo "Missing parameters for deletion.";

}
?>