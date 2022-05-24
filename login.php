<?php 

$servername = "localhost";
$username = "rentalcar";
$password = "xN@w{X(eA0y4";
$dbname = "rentalcar";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$msg = "";
session_start();
if(!empty($_SESSION)){
    if(!empty($_SESSION['email']) && !empty($_SESSION['password'])){
        header("Location: http://itsugestion.com/dev/car/");
        die();
    }
}
if(!empty($_POST)){
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $sql = "SELECT id, email, password FROM users where email='$email' And password='$password'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        header("Location: http://itsugestion.com/dev/car/");
        die();
    } else {
        $msg = "1";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
<style>
    .successmsg{
        text-align: center;
        position: fixed;
        top: 80px;
        z-index: 998;
        right: 10px;
    }
</style>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap');

    body {
        margin: 0;
        padding: 0;
        background: url(https://www.linkpicture.com/q/car_4.png) no-repeat top center;
        background-size: cover;
        font-family: 'Lato', sans-serif;
    }

    a {
        text-decoration: none;
    }

    ul {
        list-style: none;
        padding-left: 0;
    }

    .full-page {
        position: fixed;
        top: 0;
        bottom: 0;
        right: 0;
        left: 0;
        background: url(https://www.linkpicture.com/q/street_2.jpg) no-repeat center;
        background-size: cover;
        z-index: 2;
    }

    .overlay-box {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background: rgba(0, 0, 0, 0.5);
        z-index: 3;
    }

    .center-form-box {
        position: absolute;
        z-index: 5;
        top: 50%;
        left: 50%;
        transform: translateY(-50%) translateX(-50%);
        background: #232cb799;
        padding: 40px;
        width: 90%;
        max-width: 400px;
        box-sizing: border-box;
    }

    .header-text {
        text-align: center;
    }

    .header-text h1 {
        color: #fff;
        font-size: 26px;
        margin-bottom: 10px;
        margin-top: 0;
        font-weight: 600;
    }

    .header-text h5 {
        color: #fff;
        font-size: 16px;
        margin-bottom: 25px;
        margin-top: 0;
        font-weight: 400;
    }

    .center-form-box form input[type="text"],
    input[type="password"] {
        width: 100%;
        padding: 10px;
        color: #000;
        font-size: 16px;
        border: none;
        border-radius: 0px;
        margin-bottom: 10px;
        box-sizing: border-box;
        background: rgba(255, 255, 255, 0.5);
    }

    .center-form-box form button {
        background: #fff;
        color: #000;
        width: 100%;
        padding: 10px 30px;
        border: none;
        font-size: 16px;
        font-weight: 600;
    }

    .sign-in {
        text-align: center;
        width: 100%;
        color: #fff;
        display: block;
        font-size: 14px;
        margin-top: 10px;
    }

    .d-flex {
        display: flex;
    }

    .justify-content-between {
        justify-content: space-between;
    }

    .text-white {
        color: #fff;
    }

    .mb-15 {
        margin-bottom: 15px;
    }

    .show {
        display: block;
    }

    .hide {
        display: none;
    }
</style>

<body>
    <div class="full-page">
        <div class="overlay-box"></div>
        <div class="center-form-box show" id="login-box">
            <div class="header-text">
                <h1>LogIn</h1>
                <h5>Have an account?</h5>
            </div>
            <form action="login.php" method="post">
                <input type="text" placeholder="Email" name="email">
                <input type="password" name="password" id="" placeholder="Password">

                <!-- <div class="d-flex justify-content-between mb-15">
                    <label for="" class="d-flex text-white">
                        <input type="checkbox" name="" id="">
                        <span>Remember Me</span>
                    </label>
                    <a href="#" class="forgot text-white">Forgot Password</a>
                </div> -->
                <button type="submit">Submit</button>
                <!-- <a href="javascript:void(0)" class="sign-in" id="sign-link">Or Signup</a> -->
            </form>
        </div>
        <div class="center-form-box hide" id="sign-box">
            <div class="header-text">
                <h1>Signup</h1>
                <h5>use your email for registration </h5>
            </div>
            <form action="login.php" method="post">
                <input type="text" name="name" placeholder="Name" required>
                <input type="text" name="email" placeholder="Email" required>
                <input type="text" name="phone" onkeypress="return validateFloatKeyPress(this,event);" placeholder="Phone" required>
                <input type="password"  id="password" name="password" placeholder="Password" required>
                <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm password" required>
                <span id="msg"></span>

                <!-- <div class="d-flex justify-content-between mb-15">
                    <label for="" class="d-flex text-white">
                        <input type="checkbox" name="" id="">
                        <span>Remember Me</span>
                    </label>

                </div> -->
                <button type="submit" onclick="return checkuser();">Submit</button>
                <a href="javascript:void(0)" class="sign-in" id="login-link">Or Login</a>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#sign-link').click(function () {
                $("#login-box").addClass("hide");
                $("#login-box").removeClass("show");
                $("#sign-box").addClass("show");
                $("#sign-box").removeClass("hide");

            });
            $('#login-link').click(function () {
                $("#sign-box").removeClass("show");
                $("#sign-box").addClass("hide")
                $("#login-box").addClass("show");
                $("#login-box").removeClass("hide");

            });
        });
        function checkuser()
        {
            var password = $('#password').val();
            var confirm_password = $('#confirm_password').val();
            if(password != "" && confirm_password != ""){
                if(confirm_password != password){
                    $('#msg').html('Confirm password should match with password').css('color', 'red');
                    return false;
                } else {
                    $('#msg').html('');
                }
            }
        } 
        function validateFloatKeyPress(el, evt, nodigit)
        {
            nodigit = nodigit-1;
            var charCode = (evt.which) ? evt.which : event.keyCode;
            var number = el.value.split('.');
            if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
            }
            // //just one dot
            // /*if(number.length>1 && charCode == 46){
            //         return false;
            // }*/
            // //get the carat position
            // var caratPos = getSelectionStart(el);
            // var dotPos = el.value.indexOf(".");
            // if( charCode != 8 && caratPos > dotPos && dotPos>-1 && (number[1].length > nodigit)){
            // return false;
            // }
            // return true;
        }
    </script>
    <?php 
    if(!empty($msg)){ ?>
        <div
            style="text-align:center"
            class="alert alert-danger alert-dismissable successmsg"
            >
            <p style="font-size:larger; margin-bottom:0; color:red">
               <b>Invalid Detail</b>
            </p>
         </div>
    <?php } ?>
    <script>
        setTimeout(function () {
        $('.alert-danger').css('display','none');
        }, 3500);
    </script>
</body>

</html>