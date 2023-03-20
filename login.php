<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
   <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/logo.jpg">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Datatable -->
    <link href="./vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- CSS -->
    <!-- <link rel="stylesheet" href="css/style.css">     -->
    <!--**********************************
        Scripts
    ***********************************-->
        <!-- Required vendors -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
    <script src="./vendor/global/global.min.js"></script>
    <script src="./js/quixnav-init.js"></script>
    <script src="./js/custom.min.js"></script>
    <script src="css/index.js"></script>
    <?php
   include('connect.php');
   session_start();

    if (isset($_POST['btnSubmit'])) {
        $StaffName = $_POST['txtStaffName'];
        $Password = $_POST['txtPassword'];

        $query = "SELECT * FROM `staff`
                    WHERE `StaffName` = '$StaffName' 
                    AND `Password` = '$Password'";
        $run = mysqli_query($connect,$query);
        $count = mysqli_num_rows($run);
        $row = mysqli_fetch_array($run);
        if ($count > 0) {
           $_SESSION["StaffID"]=$row["StaffID"];
           echo "<script>alert('Login Successful!')</script>";
           echo header("Location:index.php");
        } else {
            echo '<script type="text/javascript">
            alert("Incorrect Username and Password!");
            history.back();
            window.location.href="login.php";
            </script>';
        }
    }
    
   ?>
   <style>
    :root {
    --green1: #54d964;
    --green2: #2dd041;
    --green3: #00a214;
    --green3: #008010;
    --light-blue: #3457dc;
    --dark-blue: #1f3796;
    /* background-color: var(--main-bg-color); */
  }
* {
    box-sizing: border-box;
  }
    body {
        background-image: url('./images/logo.jpg');
        background-size: 1000px 1000px;
        background-position: fixed;
        background-repeat: repeat;
    }
    nav {
      display:flex;
      justify-content: center;
    }
    nav > img {
      margin-left:0;
    }
    .data {
      display: none;
    }
    .login-form{
        width:550px;
        height:450px;
        border: 1px solid black;
        position: relative;
        margin:auto;
        border-radius: 1.5rem;
        background:white;
        box-shadow: 0px 10px 15px -3px rgba(0,0,0,0.1);
        margin-top:125px;
        margin-bottom:125px;
    }
    .title {
        font-size:2.4rem;
        font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        margin-top: 20px;
        margin-bottom:30px;
    }
    .login-line{
        width:100%;
    }
    .content {
        padding: 30px;
    }
    .content > label {
        font-family:sans-serif;
        font-size:1rem;
        font-weight:;
    }
    .input-user{
        width:100%;
        height:40px;
        font-family:sans-serif;
        font-size:1.4rem;
        color:black;
        display: block;
        border: none;
        background: none;
        border-bottom: 2px solid rgba(0, 0, 0, .6);
        text-align: left;
        position: relative;
        margin-top:0;
        margin-bottom:40px;
    }
    
    .input-user:focus{
        outline: none;
    }
    ::placeholder{
        color:#b8b8b8;
    }
    .input-password{
        width:100%;
        height:40px;
        font-family:sans-serif;
        font-size:1.4rem;
        color:black;
        display: block;
        border: none;
        background: none;
        text-align: left;
        position: relative;
        right: 0;
        border-bottom: 2px solid rgba(0, 0, 0, .6);
        margin-bottom:20px;
    }

    .input-password:focus{
        outline: none;
        font-family:sans-serif;
    }

    .btn-submit{
        width:100%;
        height:50px;
        border:0;
        color:white;
        background-color:var(--light-blue);
        border-radius:3rem;
        margin-top:50px;
        font-family:sans-serif;
        font-size:1.3rem;
    }
    .btn-submit:hover{
        color:white;
        background-color:var(--dark-blue);
    }
    .btn-logout {
        display:none;
    }
    @media screen and (max-width: 1440px){
        body{
            background-size: 800px 800px;
        }
        .login-form{
            width:500px;
            height:425px;
            margin-top:175px;
        }
        .input-user{
            margin-top: 0px;
            margin-bottom:40px;
        }
        .content {
            padding:10px 30px;
        }
        .btn-submit{
            margin-top:50px;
        }
    }
    @media screen and (max-width: 1024px){
        body {
            background-size: 600px 800px;
        }
        .login-form{
            width:475px;
            height:410px;
            margin-top: 200px;
        }
        .input-user{
            margin-top: 0px;
            margin-bottom:35px;
        }
        .btn-submit{
            margin-top:45px;
        }
    }
    @media screen and (max-width: 768px){
        body {
            background-size: 600px 600px;
        }
    }
    @media screen and (max-width: 520px){
        body{
            background-size: 520px 550px;
            background-repeat: repeat-y;
        }
        .login-form{
            width:320px;
            height:400px;
            margin-top: 200px;
        }
        .title {
            font-size:2.2rem;
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            margin-top: 20px;
            margin-bottom:30px;
        }
        .content {
            padding: 10px 20px;
        }
    }
    @media screen and (max-width: 425px){
        body{
            background-size: 425px 550px;
            background-repeat: repeat-y;
        }
    }
    @media screen and (max-width: 375px){
        body{
            background-size: 375px 550px;
            background-repeat: repeat-y;
        }
    }
    @media screen and (max-width: 320px){
        body{
            background-size: 320px 550px;
            background-repeat: repeat-y;
        }
        .login-form{
            width:275px;
            height:350px;
            margin-top: 225px;
        }
        .title {
            font-size:2rem;
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            margin-top: 10px;
            margin-bottom:10px;   
        }
        .content {
            padding: 10px 20px;
        }
        .input-user{
            font-size:1.3rem;
        }
        .input-password{
            font-size:1.3rem;
        }
        .btn-submit{
            margin-top:25px;
        }
    }

   </style>
   <script>
    // const togglePassword = document.querySelector('#togglePassword');
    // const password = document.querySelector('#txtPassword');

    // togglePassword.addEventListener('click',function(e) {
    //     //toggle the type attribute
    //     const type = password.getAttribute('type') === 'password' ? 'text' : 'password' ; 
    //         password.setAttribute('type', type);
            
    //     //toggle the eye 

    // })
        
        function togglePassword() {
            const x =  document.getElementById('input-password');
            if (x.type === 'password') {
                x.type = 'text';
            }else {
                x.type = 'password';
            }

        }
   </script>
</head>
<body>
    <?php
        include('header.php');
    ?>
    <form action="login.php" method="post">
        <section class="login-form">
            <h3 class="title" align="middle">Login</h3>
            <hr class="login-line">
            <div class="content">
                <input type="text" name="txtStaffName" class="input-user" placeholder="Username" required>
 
                <input type="password" name="txtPassword" class="input-password" id="input-password" placeholder="Password" required>
                <input type="checkbox" name="" onclick="togglePassword()"> <label class="">Show password</label> 
                
             <input type="submit" name="btnSubmit" class="btn btn-submit" value="Login">
            </div>
        </section>

    </form>
</body>
</html>