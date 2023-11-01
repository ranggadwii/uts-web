<!DOCTYPE html>
<html>
<head>
    <title>Create</title>

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

<main class="container align-items-center justify-content-center d-flex mt-5">
	<div class="d-flex align-items-center justify-content-center">
    <form action="php/createrps.php" method="POST">
            <h5 class="px-2 pt-2 fw-bold text-center">Buat RPS Baru</h5>
            <div class="d-flex flex-row">
                <div class="form-group p-2">
                    <label for="matkul" class="form-label">Matkul</label>
                    <input type="text" name="matkul" id="matkul" class="form-control mb-2" placeholder="masukkan nama matkul">
                    <label for="deskripsi" class="form-label">Deskripsi Matkul</label>
                    <input type="text" name="deskripsi" id="deskripsi" class="form-control mb-2" placeholder="masukkan deskripsi matkul">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                            <label for="materi1" class="form-label">Meteri pertemuan 1</label>
                            <input type="text" name="materi1" id="materi1" class="form-control mb-2" placeholder="masukkan materi">
                            <label for="jdmateri1" class="form-label">Deskripsi Materi 1</label>
                            <input type="text" name="jdmateri1" id="jdmateri1" class="form-control mb-2" placeholder="masukkan deskripsi materi 1">
                            <label for="materi2" class="form-label">Meteri pertemuan 2</label>
                            <input type="text" name="materi2" id="materi2" class="form-control mb-2" placeholder="masukkan materi">
                            <label for="jdmateri2" class="form-label">Deskripsi Materi 2</label>
                            <input type="text" name="jdmateri2" id="jdmateri2" class="form-control mb-2" placeholder="masukkan deskripsi materi 2">
                            <label for="materi3" class="form-label">Meteri pertemuan 3</label>
                            <input type="text" name="materi3" id="materi3" class="form-control mb-2" placeholder="masukkan materi">
                            <label for="jdmateri3" class="form-label">Deskripsi Materi 3</label>
                            <input type="text" name="jdmateri3" id="jdmateri3" class="form-control mb-2" placeholder="masukkan deskripsi materi 3">
                            <label for="materi4" class="form-label">Meteri pertemuan 4</label>
                            <input type="text" name="materi4" id="materi4" class="form-control mb-2" placeholder="masukkan materi">
                            <label for="jdmateri4" class="form-label">Deskripsi Materi 4</label>
                            <input type="text" name="jdmateri4" id="jdmateri4" class="form-control mb-2" placeholder="masukkan deskripsi materi 4">
                            <label for="materi5" class="form-label">Meteri pertemuan 5</label>
                            <input type="text" name="materi5" id="materi5" class="form-control mb-2" placeholder="masukkan materi">
                            <label for="jdmateri5" class="form-label">Deskripsi Materi 5</label>
                            <input type="text" name="jdmateri5" id="jdmateri5" class="form-control mb-2" placeholder="masukkan deskripsi materi 5">
                            <label for="materi6" class="form-label">Meteri pertemuan 6</label>
                            <input type="text" name="materi6" id="materi6" class="form-control mb-2" placeholder="masukkan materi">
                            <label for="jdmateri6" class="form-label">Deskripsi Materi 6</label>
                            <input type="text" name="jdmateri6" id="jdmateri6" class="form-control mb-2" placeholder="masukkan deskripsi materi 6">
                            <label for="materi7" class="form-label">Meteri pertemuan 7</label>
                            <input type="text" name="materi7" id="materi7" class="form-control mb-2" placeholder="masukkan materi">
                            <label for="jdmateri7" class="form-label">Deskripsi Materi 7</label>
                            <input type="text" name="jdmateri7" id="jdmateri7" class="form-control mb-2" placeholder="masukkan deskripsi materi 7">
                            </div>
                            <div class="col">
                            <label for="materi8" class="form-label">Meteri pertemuan 8</label>
                            <input type="text" name="materi8" id="materi8" class="form-control mb-2" placeholder="masukkan materi">
                            <label for="jdmateri8" class="form-label">Deskripsi Materi 8</label>
                            <input type="text" name="jdmateri8" id="jdmateri8" class="form-control mb-2" placeholder="masukkan deskripsi materi 8">
                            <label for="materi9" class="form-label">Meteri pertemuan 9</label>
                            <input type="text" name="materi9" id="materi9" class="form-control mb-2" placeholder="masukkan materi">
                            <label for="jdmateri9" class="form-label">Deskripsi Materi 9</label>
                            <input type="text" name="jdmateri9" id="jdmateri9" class="form-control mb-2" placeholder="masukkan deskripsi materi 9">
                            <label for="materi10" class="form-label">Meteri pertemuan 10</label>
                            <input type="text" name="materi10" id="materi10" class="form-control mb-2" placeholder="masukkan materi">
                            <label for="jdmateri10" class="form-label">Deskripsi Materi 10</label>
                            <input type="text" name="jdmateri10" id="jdmateri10" class="form-control mb-2" placeholder="masukkan deskripsi materi 10">
                            <label for="materi11" class="form-label">Meteri pertemuan 11</label>
                            <input type="text" name="materi11" id="materi11" class="form-control mb-2" placeholder="masukkan materi">
                            <label for="jdmateri11" class="form-label">Deskripsi Materi 11</label>
                            <input type="text" name="jdmateri11" id="jdmateri11" class="form-control mb-2" placeholder="masukkan deskripsi materi 11">
                            <label for="materi12" class="form-label">Meteri pertemuan 12</label>
                            <input type="text" name="materi12" id="materi12" class="form-control mb-2" placeholder="masukkan materi">
                            <label for="jdmateri12" class="form-label">Deskripsi Materi 12</label>
                            <input type="text" name="jdmateri12" id="jdmateri12" class="form-control mb-2" placeholder="masukkan deskripsi materi 12">
                            <label for="materi13" class="form-label">Meteri pertemuan 13</label>
                            <input type="text" name="materi13" id="materi13" class="form-control mb-2" placeholder="masukkan materi">
                            <label for="jdmateri13" class="form-label">Deskripsi Materi 13</label>
                            <input type="text" name="jdmateri13" id="jdmateri13" class="form-control mb-2" placeholder="masukkan deskripsi materi 13">
                            <label for="materi14" class="form-label">Meteri pertemuan 14</label>
                            <input type="text" name="materi14" id="materi14" class="form-control mb-2" placeholder="masukkan materi">
                            <label for="jdmateri14" class="form-label">Deskripsi Materi 14</label>
                            <input type="text" name="jdmateri14" id="jdmateri14" class="form-control mb-2" placeholder="masukkan deskripsi materi 14">
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <button name="daftar" type="submit" class="btn btn-primary">SUBMIT</i></button>
            <a href="dashboard.php" class="btn btn-primary">kembali</a>
        </form>
	</div>
</main>

</body>
</html>