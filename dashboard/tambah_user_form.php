<?php
include '../user.php';
include '../database.php';

$db = new Database();
$conn = $db->connect();
$user = new User($conn);

$result = $user->getAllUsers();
$daftar_user = $result->fetch_all(MYSQLI_ASSOC);
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <h1 class="mt-4">Tambah User</h1>
          <hr />
          <div class="table-responsive small">
            <form action="proses_tambah_user.php" method="POST">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="asal" class="form-label">Asal</label>
                    <input type="text" class="form-control" id="asal" name="asal" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary">Tambah User</button>
            </form>
          </div>
        </main>