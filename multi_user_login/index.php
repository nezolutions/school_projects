<!DOCTYPE html>
<html>
    <head>
        <title>Login Multi User Level</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body class="index">
        <?php
        if(isset($_GET['pesan'])){
            if($_GET['pesan']=="gagal"){
                echo "<div class='alert alert-danger'>Username dan Password tidak sesuai !</div>";
                sleep(1);
            }
        }
        ?>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card mt-5">
                        <div class="card-body">
                            <h5 class="card-title">LOGIN MULTI USER</h5>
                            <form action="cek_login.php" method="post">
                                <div class="form-group">
                                    <label for="username" class="form-label mt-2">Username</label>
                                    <input type="text" name="username" class="form-control" id="username" placeholder="Masukkan Username ... " required="required" autocomplete="off" spellcheck="off">
                                </div>
                                <div class="form-group">
                                    <label for="password" class="form-label mt-2">Password</label>
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan Password ... " required="required" autocomplete="off" spellcheck="off">
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary btn-block">LOGIN</button>
                                <button type="reset" class="btn btn-secondary btn-block">RESET</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>