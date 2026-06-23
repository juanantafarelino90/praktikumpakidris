<?php
include '../user.php';
include_once '../database.php';

$db = new Database();
$conn = $db->connect();
$users = new User($conn);

$result = $users->getAllUsers();
$daftar_users = [];

if ($result && $result->num_rows > 0) {
    $daftar_users = $result->fetch_all(MYSQLI_ASSOC);
}
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<h1>Daftar User</h1>
<div class="alert alert-success mt-3" role="alert" style="background-color: #d1e7dd; color: #0f5132; padding: 15px; border-radius: 5px; margin-bottom: 20px;">
    Selamat Datang <strong><?php echo htmlspecialchars($username); ?></strong>, Anda telah login sebanyak <?php echo $login_count; ?> kali
</div>
<hr />
<a href="index.php?halaman=tambah_user_form.php" class="btn btn-primary mb-3">Tambah User</a>
          <div class="table-responsive small">
            <table class="table table-striped table-sm"> 
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">username</th>
                  <th scope="col">Email</th>
                  <th scope="col">Asal</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
              <?php 
              foreach ($daftar_users as $user) {
                ?>
                <tr> 
                  <td><?= $user['id'] ?></td>
                  <td><?= $user['username'] ?></td>
                  <td><?= $user['email'] ?></td>
                  <td><?= $user['asal'] ?></td>
                  <td>
                   <a href="delete_user.php?id=<?= $user['id'] ?>"> delete</a> 
                   <a href="index.php?halaman=edit_user_form.php&id=<?php echo $user['id'] ?>"> | edit</a>
              </td>
              </tr>
                 <?php
                 } 
                 ?>
              </tbody>
            </table>
          </div>
        </main>