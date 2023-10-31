<!DOCTYPE html>
<html>
<head>
    <title>LIST</title>

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
    <div class="card p-2">
        <h5 class="px-2 pt-2 pb-2 fw-bold">DATA</h5>
        <table class="table table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>No</th>
                                <th>Matkul</th>
                                <th>Deskripsi</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
            </thead>
            <tbody>
                <?php
                include('php/dbconfig.php');

                $sql = "SELECT * FROM matkuldb";
                $result = mysqli_query($connect, $sql);
                $nomor = 1;

                if (!$result) {
                    die("Query failed: " . mysqli_error($connect));
                }

                while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $nomor; ?></td>
                        <td><?php echo $row['matkul']; ?></td>
                        <td><?php echo $row['deskripsi']; ?></td>
                        <td>
                            <a href='edit.php?matkul=<?php echo $row['matkul']; ?>' class='btn btn-info'>EDIT</a>
                            <a href='php/delform.php?matkul=<?php echo $row['matkul']; ?>' class='btn btn-danger'>DELETE</a>
                            <a href='view.php?matkul=<?php echo $row['matkul']; ?>' class='btn btn-success'>VIEW</a>
                        </td>
                    </tr>
                <?php
                    $nomor++;
                }
                ?>
            </tbody>
        </table>
        <a href="dashboard.php" class="btn btn-primary">kembali</a>
    </div>
</main>

</body>
</html>
