<?php
session_start();
?>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <style>
        body{
            display: flex;
            justify-content: center;
        }
    </style>
    </head>
    <body>
        <div class="w-25 h-75 bg-body-tertiary p-5 m-5 border border-2 border-warning rounded rounded-3">
            <form action="login.php" method="post">
                <h1 class="mb-2">Login System</h1>
                <?php
                    if(isset($_SESSION['pesan_kesalahan'])){
                        echo '<div class="alert alert-warning" role="alert">' . $_SESSION['pesan_kesalahan'] . '</div>';
                        unset($_SESSION['pesan_kesalahan']);
                    }
                ?>
                <label class="mb-2 form-label">Username</label>
                <input class="mb-2 form-control" type="text" name="input_username">
                <label class="mb-2 form-label">Password</label>
                <input class="mb-2 form-control" type="password" name="input_password" id="">
                <div class="mt-2 text-center">
                    <button class="btn btn-success" type="submit">Submit</button>
                    <button class="btn btn-danger" type="reset">Reset</button>
                </div>
                 <div class="mt-2 text-center">
                    <a href="signup.html">Pendaftaran</a>
                </div>
            </form>  
        </div>   
    </body>
</html>