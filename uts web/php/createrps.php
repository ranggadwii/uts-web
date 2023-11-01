<?php
include('dbconfig.php');

if (isset($_POST['daftar'])) {
    $matkul = $_POST['matkul'];
    $deskripsi = $_POST['deskripsi'];
    $materi1 = $_POST['materi1'];
    $materi2 = $_POST['materi2'];
    $materi3 = $_POST['materi3'];
    $materi4 = $_POST['materi4'];
    $materi5 = $_POST['materi5'];
    $materi6 = $_POST['materi6'];
    $materi7 = $_POST['materi7'];
    $materi8 = $_POST['materi8'];
    $materi9 = $_POST['materi9'];
    $materi10 = $_POST['materi10'];
    $materi11 = $_POST['materi11'];
    $materi12 = $_POST['materi12'];
    $materi13 = $_POST['materi13'];
    $materi14 = $_POST['materi14'];

    $jdmateri1 = $_POST['jdmateri1'];
    $jdmateri2 = $_POST['jdmateri2'];
    $jdmateri3 = $_POST['jdmateri3'];
    $jdmateri4 = $_POST['jdmateri4'];
    $jdmateri5 = $_POST['jdmateri5'];
    $jdmateri6 = $_POST['jdmateri6'];
    $jdmateri7 = $_POST['jdmateri7'];
    $jdmateri8 = $_POST['jdmateri8'];
    $jdmateri9 = $_POST['jdmateri9'];
    $jdmateri10 = $_POST['jdmateri10'];
    $jdmateri11 = $_POST['jdmateri11'];
    $jdmateri12 = $_POST['jdmateri12'];
    $jdmateri13 = $_POST['jdmateri13'];
    $jdmateri14 = $_POST['jdmateri14'];


    if (empty($matkul) || empty($deskripsi)) {
        header('location: ../create.php?status=kosong');
        exit;
    }

    $checkSql = "SELECT COUNT(*) FROM matkuldb WHERE matkul = '$matkul'";
    $checkResult = mysqli_query($connect, $checkSql);
    $count = mysqli_fetch_array($checkResult);

    if ($count[0] == 0) {
        $sql = "INSERT INTO matkuldb (matkul, deskripsi, materi1, materi2, materi3, materi4, materi5, materi6, materi7, materi8, materi9, materi10, materi11, materi12, materi13, materi14, jdmateri1, jdmateri2, jdmateri3, jdmateri4, jdmateri5, jdmateri6, jdmateri7, jdmateri8, jdmateri9, jdmateri10, jdmateri11, jdmateri12, jdmateri13, jdmateri14) VALUES ('$matkul', '$deskripsi', '$materi1', '$materi2', '$materi3', '$materi4', '$materi5', '$materi6', '$materi7', '$materi8', '$materi9', '$materi10', '$materi11', '$materi12', '$materi13', '$materi14', '$jdmateri1', '$jdmateri2', '$jdmateri3','$jdmateri4', '$jdmateri5', '$jdmateri6', '$jdmateri7', '$jdmateri8', '$jdmateri9', '$jdmateri10', '$jdmateri11', '$jdmateri12', '$jdmateri13', '$jdmateri14')";
        $query = mysqli_query($connect, $sql);

        if ($query) {
            header('location: ../create.php?status=sukses');
        } else {
            header('location: ../create.php?status=gagal');
        }
    } else {
        header('location: ../create.php?status=sudahdipakai');
    }
} else {
    die("Access Denied");
}
?>
