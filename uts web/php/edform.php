<?php
include('dbconfig.php');

if (isset($_POST['update'])) {
    $matkul = mysqli_real_escape_string($connect, $_POST['matkul']);
    $new_matkul = mysqli_real_escape_string($connect, $_POST['new_matkul']);
    $deskripsi = mysqli_real_escape_string($connect, $_POST['deskripsi']);
    $materi1 = mysqli_real_escape_string($connect, $_POST['materi1']);
    $materi2 = mysqli_real_escape_string($connect, $_POST['materi2']);
    $materi3 = mysqli_real_escape_string($connect, $_POST['materi3']);
    $materi4 = mysqli_real_escape_string($connect, $_POST['materi4']);
    $materi5 = mysqli_real_escape_string($connect, $_POST['materi5']);
    $materi6 = mysqli_real_escape_string($connect, $_POST['materi6']);
    $materi7 = mysqli_real_escape_string($connect, $_POST['materi7']);
    $materi8 = mysqli_real_escape_string($connect, $_POST['materi8']);
    $materi9 = mysqli_real_escape_string($connect, $_POST['materi9']);
    $materi10 = mysqli_real_escape_string($connect, $_POST['materi10']);
    $materi11 = mysqli_real_escape_string($connect, $_POST['materi11']);
    $materi12 = mysqli_real_escape_string($connect, $_POST['materi12']);
    $materi13 = mysqli_real_escape_string($connect, $_POST['materi13']);
    $materi14 = mysqli_real_escape_string($connect, $_POST['materi14']);

    $sql = "UPDATE matkuldb SET matkul='$new_matkul', deskripsi='$deskripsi', materi1='$materi1', materi2='$materi2', materi3='$materi3', materi4='$materi4', materi5='$materi5', materi6='$materi6', materi7='$materi7', materi8='$materi8', materi9='$materi9', materi10='$materi10', materi11='$materi11', materi12='$materi12', materi13='$materi13', materi14='$materi14' WHERE matkul='$matkul'";
    $query = mysqli_query($connect, $sql);

    if ($query) {
        header('location: ../list.php');
    } else {
        echo "Update failed: " . mysqli_error($connect);
    }
} else {
    die("Access Denied");
}
?>