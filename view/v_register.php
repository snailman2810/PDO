<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="body">
            <div class="container">
                <div class="h1 text-center">Register user</div>
                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <form class="mt-4" action="" method="POST">
                            <div class="mb-3">
                                <label for="mail" class="form-label">Email address</label>
                                <input type="test" class="form-control <?php if (isset($_SESSION['errors']['mail'])) {print_r('border border-danger');}?>" id="mail" name="mail" value="<?php if (isset($_SESSION['mail'])) {echo $_SESSION['mail'];}?>">
                                <div class="text-danger">
                                    <?php 
                                        if (isset($_SESSION['errors']['mail'])) {
                                        print_r($_SESSION['errors']['mail']);
                                        } 
                                    ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="Name" class="form-label">Name</label>
                                <input type="text" class="form-control <?php if (isset($_SESSION['errors']['name'])) {print_r('border border-danger');}?>" id="name" name="name" value="<?php if (isset($_SESSION['name'])) {echo $_SESSION['name'];}?>">
                                <div class="text-danger"> 
                                    <?php 
                                        if (isset($_SESSION['errors']['name'])) {
                                        print_r($_SESSION['errors']['name']);
                                        } 
                                    ?>

                            </div>
                            <div class="row">
                                <div class="mb-3 col-sm-6">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control <?php if (isset($_SESSION['errors']['password'])) {print_r('border border-danger');}?>" id="password" name="password" value="<?php if (isset($_SESSION['password'])) {echo $_SESSION['password'];}?>">
                                    <div class="text-danger"> 
                                        <?php 
                                            if (isset($_SESSION['errors']['password'])) {
                                            print_r($_SESSION['errors']['password']);
                                            } 
                                        ?>
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <label for="password_confirm" class="form-label">Password confirm</label>
                                    <input type="password" class="form-control <?php if (isset($_SESSION['errors']['password_confirm'])) {print_r('border border-danger');}?>" id="password_confirm" name="password_confirm" value="<?php if (isset($_SESSION['password_confirm'])) {echo $_SESSION['password_confirm'];}?>">
                                    <div class="text-danger">
                                        <?php 
                                            if (isset($_SESSION['errors']['password_confirm'])) {
                                            print_r($_SESSION['errors']['password_confirm']);
                                            } 
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" class="form-control <?php if (isset($_SESSION['errors']['phone'])) {print_r('border border-danger');}?>" id="phone" name="phone" value="<?php if (isset($_SESSION['phone'])) {echo $_SESSION['phone'];}?>">
                                <div class="text-danger">    
                                    <?php 
                                        if (isset($_SESSION['errors']['phone'])) {
                                        print_r($_SESSION['errors']['phone']);
                                        } 
                                    ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control <?php if (isset($_SESSION['errors']['address'])) {print_r('border border-danger');}?>" id="address" name="address" value="<?php if (isset($_SESSION['address'])) {echo $_SESSION['address'];}?>">
                                <div class="text-danger">    
                                    <?php 
                                        if (isset($_SESSION['errors']['address'])) {
                                        print_r($_SESSION['errors']['address']);
                                        } 
                                    ?>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" name="register">Register</button>
                        </form>
                    </div>
                    </div>
                    
            </div>
        </div>
    </body>
</html>