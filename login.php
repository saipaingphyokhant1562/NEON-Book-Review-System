<?php
session_start();
include_once "controllers/registercontroller.php";


$register_controller=new RegisterController();
$getUserList=$register_controller->getUserList();

if(isset($_POST['signIn']))
{
    $error_status=false;

    // Login user_email
    if(isset($_POST['user_email']))
    {
        $user_email=$_POST['user_email'];
       // echo $user_email;
    }else{
        $error_status=true;

    }

    // Login user_password
    if(isset($_POST['user_password']))
    {
        $user_password=$_POST['user_password'];
    }else{
        $error_status=true;
    }

    

    if($error_status==false)
        {   
            //$_SESSION['user_name']=$user_name;
            $_SESSION['user_password']=$user_password;
            $_SESSION['user_email']=$user_email;
            
            foreach ($getUserList as $user) {
                if($user['email']==$user_email && $user['password']==$user_password){
                    $userid = $register_controller->getUserInfo($_SESSION['user_email']);
                    $_SESSION["userid"] = $userid[0]["id"];
                    header("location:BookReviewSystem Font-End/index.php");
                }else{
                        $error_message="Incorret Email Address or Password";

                }
            }
        
       
    }
    

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login1.css">
    <title>Document</title>

</head>
<body>
    <div class="container">
        <form action=" " method="post">
            <div class="row">
                <div class="col-lg-10 col-xl-9 mx-auto">
                    <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
                    <div class="card-img-left d-none d-md-flex">
                        <!-- Background image for card set in CSS! -->
                    </div>
                    <div class="card-body p-4 p-sm-5">
                        <h5 class="card-title text-center mb-5 fw-light fs-5">Welcome Back</h5>
                        <div class="form-floating mb-3">
                            <input type="email" name="user_email"  class="form-control" required value="<?php if(isset($user_email)) echo $user_email ?>" id="floatingInputUsername" id="floatingInputEmail" placeholder="name@example.com">
                            <label for="floatingInputEmail">Email address</label>
                        </div>

                        <hr>

                        <div class="form-floating mb-3">
                            <input type="password" name="user_password" required value="<?php if(isset($user_password)) echo $user_password ?>"  class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="text-center my-3">
                            <span class="text-danger"><?php if(isset($error_message)) echo $error_message ?></span>

                        </div>
                        <div class="d-grid mb-2">
                            <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" type="submit"  name="signIn">Sign In</button>
                        </div>

                        <a class="d-block text-center mt-2 small" href="register.php">If you don't have an account,Sign Up!</a>

                        <hr class="my-4">
                    </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>