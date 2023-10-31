<!DOCTYPE html>
<html>

<head>
    <title>VIEW DATA</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    .profile-picture {
        width: 50px;
        height: 50px;
        margin-right: 10px;
        border-radius: 50%;
    }
</style>
<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="dashboard.php">
                    <img src="asset/rangga.jpg" alt="Profile Picture" class="profile-picture">
                    Rangga Dwi Saputra
                </a>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="dashboard.php"><strong>22.01.4808</a></li></strong>
                    <li class="nav-item"><a class="nav-link" href="create.php">Create</a></li>
                    <li class="nav-item"><a class="nav-link" href="list.php">List</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="container mt-5">
        <h1>VIEW DATA</h1>

        <?php
        include('php/dbconfig.php');

        if (isset($_GET['matkul'])) {
            $matkul = $_GET['matkul'];

            $sql = "SELECT * FROM matkuldb WHERE matkul = '$matkul'";
            $result = mysqli_query($connect, $sql);

            if ($result && $row = mysqli_fetch_assoc($result)) {
                $record_id = $row['matkul'];
            } else {
                echo "Record not found.";
            }
        }
        ?>

        <form action="php/edform.php" method="POST">
            <input type="hidden" name="matkul" value="<?php echo $record_id; ?>">
            <div class="mb-3">
                <label for="new_matkul" class="form-label">Matkul</label>
                <input type="text" name="new_matkul" class="form-control" value="<?php echo $record_id; ?>" disabled readonly>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <input type="text" name="deskripsi" class="form-control" value="<?php echo $row['deskripsi']; ?>" disabled readonly>
            </div>
            <div class="mb-3">
                <label for="materi1" class="form-label">Materi pertemuan 1</label>
                <div class="d-flex justify-content-center">
                <input type="text" name="materi1" class="form-control" value="<?php echo $row['materi1']; ?>" disabled readonly>
                <?php echo "<a href='./php/delview.php?matkul=" . $matkul . "&materi=1'><button type='button' class='btn btn-danger'>hapus</button></a>"
                ?>
                </div>
            </div>
            <div class="mb-3">
                <label for="materi2" class="form-label">Materi pertemuan 2</label>
                <div class="d-flex justify-content-center">
                <input type="text" name="materi2" class="form-control" value="<?php echo $row['materi2']; ?>" disabled readonly>
                <?php echo "<a href='./php/delview.php?matkul=" . $matkul . "&materi=2'><button type='button' class='btn btn-danger'>hapus</button></a>"
                ?>
                </div>
            </div>
            <div class="mb-3">
                <label for="materi3" class="form-label">Materi pertemuan 3</label>
                <div class="d-flex justify-content-center">
                <input type="text" name="materi3" class="form-control" value="<?php echo $row['materi3']; ?>" disabled readonly>
                <?php echo "<a href='./php/delview.php?matkul=" . $matkul . "&materi=3'><button type='button' class='btn btn-danger'>hapus</button></a>"
                ?>
                </div>
            </div>
            <div class="mb-3">
                <label for="materi4" class="form-label">Materi pertemuan 4</label>
                <div class="d-flex justify-content-center">
                <input type="text" name="materi4" class="form-control" value="<?php echo $row['materi4']; ?>" disabled readonly>
                <?php echo "<a href='./php/delview.php?matkul=" . $matkul . "&materi=4'><button type='button' class='btn btn-danger'>hapus</button></a>"
                ?>
                </div>
            </div>
            <div class="mb-3">
                <label for="materi5" class="form-label">Materi pertemuan 5</label>
                <div class="d-flex justify-content-center">
                <input type="text" name="materi5" class="form-control" value="<?php echo $row['materi5']; ?>" disabled readonly>
                <?php echo "<a href='./php/delview.php?matkul=" . $matkul . "&materi=5'><button type='button' class='btn btn-danger'>hapus</button></a>"
                ?>
                </div>
            </div>
            <div class="mb-3">
                <label for="materi6" class="form-label">Materi pertemuan 6</label>
                <div class="d-flex justify-content-center">
                <input type="text" name="materi6" class="form-control" value="<?php echo $row['materi6']; ?>" disabled readonly>
                <?php echo "<a href='./php/delview.php?matkul=" . $matkul . "&materi=6'><button type='button' class='btn btn-danger'>hapus</button></a>"
                ?>
                </div>
            </div>
            <div class="mb-3">
                <label for="materi7" class="form-label">Materi pertemuan 7</label>
                <div class="d-flex justify-content-center">
                <input type="text" name="materi7" class="form-control" value="<?php echo $row['materi7']; ?>" disabled readonly>
                <?php echo "<a href='./php/delview.php?matkul=" . $matkul . "&materi=7'><button type='button' class='btn btn-danger'>hapus</button></a>"
                ?>
                </div>
            </div>
            <div class="mb-3">
                <label for="materi8" class="form-label">Materi pertemuan 8</label>
                <div class="d-flex justify-content-center">
                <input type="text" name="materi8" class="form-control" value="<?php echo $row['materi8']; ?>" disabled readonly>
                <?php echo "<a href='./php/delview.php?matkul=" . $matkul . "&materi=8'><button type='button' class='btn btn-danger'>hapus</button></a>"
                ?>
                </div>
            </div>
            <div class="mb-3">
                <label for="materi9" class="form-label">Materi pertemuan 9</label>
                <div class="d-flex justify-content-center">
                <input type="text" name="materi9" class="form-control" value="<?php echo $row['materi9']; ?>" disabled readonly>
                <?php echo "<a href='./php/delview.php?matkul=" . $matkul . "&materi=9'><button type='button' class='btn btn-danger'>hapus</button></a>"
                ?>
                </div>
            </div>
            <div class="mb-3">
                <label for="materi10" class="form-label">Materi pertemuan 10</label>
                <div class="d-flex justify-content-center">
                <input type="text" name="materi10" class="form-control" value="<?php echo $row['materi10']; ?>" disabled readonly>
                <?php echo "<a href='./php/delview.php?matkul=" . $matkul . "&materi=10'><button type='button' class='btn btn-danger'>hapus</button></a>"
                ?>
                </div>
            </div>
            <div class="mb-3">
                <label for="materi11" class="form-label">Materi pertemuan 11</label>
                <div class="d-flex justify-content-center">
                <input type="text" name="materi11" class="form-control" value="<?php echo $row['materi11']; ?>" disabled readonly>
                <?php echo "<a href='./php/delview.php?matkul=" . $matkul . "&materi=11'><button type='button' class='btn btn-danger'>hapus</button></a>"
                ?>
                </div>
            </div>
            <div class="mb-3">
                <label for="materi12" class="form-label">Materi pertemuan 12</label>
                <div class="d-flex justify-content-center">
                <input type="text" name="materi12" class="form-control" value="<?php echo $row['materi12']; ?>" disabled readonly>
                <?php echo "<a href='./php/delview.php?matkul=" . $matkul . "&materi=12'><button type='button' class='btn btn-danger'>hapus</button></a>"
                ?>
                </div>
            </div>
            <div class="mb-3">
                <label for="materi13" class="form-label">Materi pertemuan 13</label>
                <div class="d-flex justify-content-center">
                <input type="text" name="materi13" class="form-control" value="<?php echo $row['materi13']; ?>" disabled readonly>
                <?php echo "<a href='./php/delview.php?matkul=" . $matkul . "&materi=13'><button type='button' class='btn btn-danger'>hapus</button></a>"
                ?>
                </div>
            </div>
            <div class="mb-3">
                <label for="materi14" class="form-label">Materi pertemuan 14</label>
                <div class="d-flex justify-content-center">
                <input type="text" name="materi14" class="form-control" value="<?php echo $row['materi14']; ?>" disabled readonly>
                <?php echo "<a href='./php/delview.php?matkul=" . $matkul . "&materi=14'><button type='button' class='btn btn-danger'>hapus</button></a>"
                ?>
                </div>
            </div>
        </form>
        <a href="list.php" class="btn btn-primary">kembali</a>
    </main>

</body>

</html>
