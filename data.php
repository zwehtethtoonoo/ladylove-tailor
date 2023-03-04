<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Details</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/logo.jpg">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <!-- Datatable -->
    <link href="./vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="css/newstyle.css">    
    <!--**********************************
        Scripts
    ***********************************-->
        <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
    <script src="./js/quixnav-init.js"></script>
    <script src="./js/custom.min.js"></script>
    <?php
   include('connect.php');
    
   if (isset($_POST['btncreate'])) {
        $DateCreated = date('Y-m-d');
        $CustomerName = $_POST['txtCustomerName'];
        $Shoulder = $_POST['numShoulder'];
        $SleeveDepth = $_POST['numSleeveDepth'];
        $WaistLine = $_POST['numWaistLine'];
        $HipLine = $_POST['numHipLine'];
        $BackWidth = $_POST['numBackWidth'];
        $FrontWidth = $_POST['numFrontWidth'];
        $Bust = $_POST['numBust'];
        $Waist = $_POST['numWaist'];
        $Hip = $_POST['numHip'];
        $BustLength = $_POST['numBustLength'];
        $BustPoint = $_POST['numBustPoint'];
        $Neck = $_POST['numNeck'];
        $ArmHole = $_POST['numArmHole'];
        $SleeveWidth = $_POST['txtSleeveWidth'];
        $SleeveLength = $_POST['numSleeveLength'];
        $PhoneNumber = $_POST['txtPhoneNumber'];
        
        $insert = "Insert into customer(CustomerName,Shoulder,SleeveDepth,WaistLine,HipLine,BackWidth,FrontWidth,Bust,Waist,Hip,BustLength,BustPoint,Neck,ArmHole,SleeveWidth,SleeveLength,PhoneNumber,DateCreated) values ('$CustomerName','$Shoulder','$SleeveDepth','$WaistLine','$HipLine','$BackWidth','$FrontWidth','$Bust','$Waist','$Hip','$BustLength','$BustPoint','$Neck','$ArmHole','$SleeveWidth','$SleeveLength','$PhoneNumber','$DateCreated')";

        $query = mysqli_query($connect,$insert);
        if ($query) {
           echo "<script>alert('New Customer is successfully created! ')</script> ";
        }
        else 
        {
            echo "<script>alert('Something Went Wrong! Pls Try Again! ".$error."')</script> ";
        };
   }
    ?>

</head>
<body>
    <!-- Nav -->
    <nav>
        <img src="images/logo.jpg">
        <div>
            <li><a href="">Profile</a></li>
            <li><a href="">Manage</a></li>
            <li><a href="">Home</a></li>
        </div>
    </nav>
    <!-- end of nav -->
    <!-- Sec -->
    <section class="customer">
      <form action="index.php" method="post" >
        <h2 align="middle">Customer Entry</h2>
        <p>Please fill in this form to create a customer.</p>
        <hr>
        <div class="container">
            <label class="measurements"><b>Customer name</b></label>
            <input type="text" name="txtCustomerName" style="width:100%; text-align:left;"placeholder="Enter customer name..." required>

            <label class="measurements"><b>Shoulder</b></label>
            <input type="text" minlength="2" maxlength="4" name="numShoulder" required>

            <label class="measurements"><b>Sleeve Depth</b></label>
            <input type="text" minlength="2" maxlength="4" name="numSleeveDepth" required>

            <label class="measurements"><b>Waist Line</b></label>
            <input type="text" minlength="2" maxlength="4" name="numWaistLine"  required>

            <label class="measurements"><b>Hip Line</b></label>
            <input type="text" minlength="2" maxlength="4" name="numHipLine" required>

            <label class="measurements"><b>Back Width</b></label>
            <input type="text" minlength="2" maxlength="4" name="numBackWidth"  required>

            <label class="measurements"><b>Front Width</b></label>
            <input type="text" minlength="2" maxlength="4" name="numFrontWidth"  required>

            <label class="measurements"><b>Bust</b></label>
            <input type="text" minlength="2" maxlength="4" name="numBust"  required>

            <label class="measurements"><b>Waist</b></label>
            <input type="text" minlength="2" maxlength="4" name="numWaist"  required>

            <label class="measurements"><b>Hip</b></label>
            <input type="text" minlength="2" maxlength="4" name="numHip"  required>

            <label class="measurements"><b>Bust Length</b></label>
            <input type="text" minlength="2" maxlength="4" name="numBustLength"  required>

            <label class="measurements"><b>Bust Point</b></label>
            <input type="text" minlength="2" maxlength="4" name="numBustPoint"  required>

            <label class="measurements"><b>Neck</b></label>
            <input type="text" minlength="2" maxlength="4" name="numNeck"  required>

            <label class="measurements"><b>ArmHole</b></label>
            <input type="text" minlength="2" maxlength="4" name="numArmHole"  required>

            <label class="measurements"><b>SleeveWidth</b></label>
            <input type="text" name="txtSleeveWidth"   required>

            <label class="measurements"><b>SleeveLength</b></label>
            <input type="text" name="numSleeveLength"  required>

            <label class="measurements"><b>Phone Number</b></label>
            <input type="text" name="txtPhoneNumber" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" minlength="8" maxlength="11"  placeholder="09**********" required>

            <input type="submit" name="btncreate" class="btn" value="Submit">
        </div>
      </form>
    </section>
</body>
</html>