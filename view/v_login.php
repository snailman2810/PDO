<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="body">
            <div class="container">
                <div class="h1 text-center">Login</div>
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                        <form class="mt-4" action="" method="POST">
                            <div class="mb-3">
                                <label for="mail" class="form-label">Email address</label>
                                <input type="test" class="form-control <?php if (isset($_SESSION['errors']['password_confirm'])) {print_r('border border-danger');}?>" id="mail" name="mail">
                                <div class="text-danger">
                                    <?php 
                                        if (isset($_SESSION['errors']['mail'])) {
                                            print_r($_SESSION['errors']['mail']);
                                        }
                                    ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control <?php if (isset($_SESSION['errors']['password_confirm'])) {print_r('border border-danger');}?>" id="Password" name="password">
                                <div class="text-danger">
                                    <?php 
                                        if (isset($_SESSION['errors']['password'])) {
                                            print_r($_SESSION['errors']['password']);
                                        } else {
                                            if (isset($_SESSION['errors']['login'])) {
                                                print_r($_SESSION['errors']['login']);
                                            }
                                        }
                                    ?>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" name="login">Login</button>
                            <a href="register.php" class="btn btn-primary">Register</a>
                            <label class="custom-control-label" for="customCheck">Remember Me</label>
                            <input type="checkbox" name="remember" class="custom-control-input" id="customCheck">
                        </form>
                    </div>
                    </div>
                    
            </div>
        </div>
    </body>
</html>