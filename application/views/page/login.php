<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="page/login.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/login.css">
    <title>Login Page</title>
</head>

<body>
    <div id="page">
        <div id="content1">
            <h1 class="Poppins">Sign in</h1>
            <form action="<?php echo base_url('welcome/login');?>" method="post">
                <input type="email" name="email" placeholder="Email" ><br>
                <input type="password" name="mdp" placeholder="Password" >
                <h4><a href="page/updatePass.php"> Forgot Passwords ? </a></h4>
                <input type="submit" value="Sign In" class="btnInscr">
            </form>
        </div>
        <!-- ---------------------------Page-Right---------------------------------- -->
            <form action="page/inscription.php">
                <input type="submit" value="SIGN UP" class="signup" class="Poppins">
            </form>
    </div>
</body>
</html>