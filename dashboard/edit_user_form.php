<?php
require_once "../database.php";
require_once "../user.php";

$db = new Database();
$conn = $db->connect();
$users = new User($conn);

$id = $_GET['id'] ;
$user_data = $users->ambilUserDariId($id);

?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <h1 class="mt-4">Edit User</h1>
          <hr />
          <div class="table-responsive small">
            <form action="proses_edit_user.php" method="POST">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input value="<?php echo $user_data['username']; ?>" type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input value="<?php echo $user_data['email']; ?>" type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="asal" class="form-label">Asal</label>
                    <input value="<?php echo $user_data['asal']; ?>" type="text" class="form-control" id="asal" name="asal" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input value="<?php echo $user_data['password']; ?>" type="password" class="form-control" id="password" name="password" required>
                </div>
                <input type="hidden" name="id" value="<?php echo $user_data['id']; ?>">
                <button type="submit" class="btn btn-primary">Edit User</button>
            </form>
          </div>
        </main>