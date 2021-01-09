<?php include_once "../inc/db.php"; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>SIGN UP || Admin Panel</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
        <script data-search-pseudo-elements defer src="js/all.min.js"></script>
        <script src="js/feather.min.js"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                <?php
                    if(isset($_POST['submit']))
                    {
                        $first_name = trim($_POST['first-name']);
                        $last_name  = trim($_POST['last-name']);
                        $full_name  = $first_name .' '. $last_name;
                        $username   = trim($_POST['username']);
                        $email      = trim($_POST['email']);
                        $password   = trim($_POST['password']);
                        $conf_pass  = trim($_POST['confirm-password']);

                        if($password != $conf_pass)
                        {
                            $error = "Password doesn't match";
                        }
                        else
                        {
                            // $hash = password_hash($password, PASSWORD_BCRYPT, ['cost' => 10]);
                            $sql = "INSERT INTO users (user_name , user_nickname, user_email, user_password, user_photo, registered_on)
                                    VALUE (:name, :username, :email, :password, :photo, :data)";


                            $stmt = $pdo->prepare($sql);
                            $stmt->execute([
                                ':name'     => $full_name,
                                ':username' => $username,
                                ':email'    => $email,
                                ':password' => $password,
                                ':photo'    => 'default.png',
                                ':data'     => date("M n, Y") . ' at ' . date("h:i A")
                            ]);
                            // var_dump($hash);
                            $success = true;
                        }
                    }
                ?>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header justify-content-center"><h3 class="font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">
                                        <form action="signup.php" method="post">
                                            <?php
                                                if(isset($error))
                                                {
                                                    echo "<div class='alert alert-danger text-center'>{$error}</div><hr>";
                                                }
                                                else if(isset($success))
                                                {
                                                    echo "<div class='alert alert-success text-center'>Account created successfuly. <a href='signin.php'> Sign in now </a></div><hr>";
                                                }
                                            ?>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputFirstName">First Name</label>
                                                         <input name="first-name" required class="form-control py-4" id="inputFirstName" type="text" placeholder="Enter first name"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputLastName">Last Name</label>
                                                        <input name="last-name" required class="form-control py-4" id="inputLastName" type="text" placeholder="Enter last name" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group"><label class="small mb-1" for="inputNickname">Username</label>
                                                <input name="username"  required class="form-control py-4" id="inputEmailAddress" type="text" placeholder="Enter user name" />
                                            </div>

                                            <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Email</label>
                                                <input name="email"  required class="form-control py-4" id="inputEmailAddress" type="email" aria-describedby="emailHelp" placeholder="Enter email address" />
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputPassword">Password</label>
                                                        <input name="password" required class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputConfirmPassword">Confirm Password</label>
                                                         <input name="confirm-password" required class="form-control py-4" id="inputConfirmPassword" type="password" placeholder="Confirm password" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mt-4 mb-0">
                                                <button name="submit" class="btn btn-primary btn-block">Create Account</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small">
                                            <a href="signin.php">Have an account? Go to signin</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>

        <!--Script JS-->
        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
