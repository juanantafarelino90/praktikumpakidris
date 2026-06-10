 <?php
 include "../user.php";
 include "../database.php";
 
 $db = new Database();
$conn = $db->connect();
$user = new User($conn);

 $result = $user->getAllUsers();
 $daftar_user = $result->fetch_all(MYSQLI_ASSOC);
 ?>
 <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
         
          <h1 Class="mt-4">Daftar User</h1>
          <hr/>
          <div class="table-responsive small">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Username</th>
                  <th scope="col">Email</th>
                  <th scope="col">Asal</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ($daftar_user as $user) {
                  ?>
                <tr>
                  <td><?php echo $user["id"]; ?></td>
                  <td><?php echo $user["username"]; ?></td>
                  <td><?php echo $user["email"] ?></td>
                  <td><?php echo $user["asal"] ?></td>
                  <td>
                  delete | edit
                  </td>
                </tr>
                <?php
                }
                ?>
              </tbody>
            </table>
          </div>
        </main>