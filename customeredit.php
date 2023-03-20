<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editing Customer Details</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/logo.jpg">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <!-- Datatable -->
    <link href="./vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">  

    <!--**********************************
        Scripts
    ***********************************-->
        <!--  vendors -->
    <script src="./vendor/global/global.min.js"></script>
    <script src="./js/quixnav-init.js"></script>
    <script src="./js/custom.min.js"></script>
    <?php
   include('connect.php');
   session_start();
   if (!isset($_SESSION['StaffID'])) {
    echo "<script>window.alert('Please Login!')</script>";
    echo "<script>window.location='login.php'</script>";
    }

   $cusid = $_GET['cusid'];
        
   $select = "SELECT * from customer 
               WHERE CustomerID=$cusid";

   $query = mysqli_query($connect,$select);
   $count = mysqli_num_rows($query);
   $row = mysqli_fetch_array($query);

   if ($count < 1) 
       {
           echo "<script>window.alert('ERROR : Customer Profile Not Found.')</script>";
           echo "<script>window.location='index.php'</script>";
       }
              
    if (isset($_POST['BtnSubmit'])) {
        $cusid = $_GET['cusid'];
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
        $DateCreated = date('Y-m-d');

        $query = "UPDATE customer
                    SET CustomerName = '$CustomerName',
                    Shoulder = '$Shoulder',
                    SleeveDepth = '$SleeveDepth',
                    WaistLine = '$WaistLine',
                    HipLine = '$HipLine',
                    BackWidth = '$BackWidth',
                    FrontWidth = '$FrontWidth',
                    Bust = '$Bust',
                    Waist = '$Waist',
                    Hip = '$Hip',
                    BustLength = '$BustLength',
                    BustPoint = '$BustPoint',
                    Neck = '$Neck',
                    ArmHole = '$ArmHole',
                    SleeveWidth = '$SleeveWidth',
                    SleeveLength = '$SleeveLength',
                    PhoneNumber = '$PhoneNumber',
                    DateCreated = '$DateCreated'
                    WHERE CustomerID = '$cusid'; ";
        $run = mysqli_query($connect,$query);
        
        if ($run) {
                echo '<script>alert ("Customer details are updated!");
                                window.location="index.php";</script>';
        }
        else {
            echo '<script>alert("Error updating customer!")</script>';
        }
    }
        

    ?>

</head>
<body>
<?php include('header.php'); ?>

    <!-- Sec -->
    <section class="overlay-content">
      <form action="#" method="POST" >
        <label class="app-title" id="label" align="middle">Editing Details</label>
        <p> You can now edit customer details.</p>
        <hr>
        <div class="container">
            <label class="measurements"><b>Customer name</b></label>
            <input type="text" name="txtCustomerName" style="width:100%; text-align:left;" value="<?php echo $row['CustomerName'] ?>"  required>

            <label class="measurements"><b>Shoulder</b></label>
            <input type="text" minlength="2" maxlength="4" name="numShoulder" value="<?php echo $row['Shoulder'] ?>"  required>

            <label class="measurements"><b>Sleeve Depth</b></label>
            <input type="text" minlength="2" maxlength="4" name="numSleeveDepth" value="<?php echo $row['SleeveDepth'] ?>"  required>

            <label class="measurements"><b>Waist Line</b></label>
            <input type="text" minlength="2" maxlength="4" name="numWaistLine" value="<?php echo $row['WaistLine'] ?>"  required>

            <label class="measurements"><b>Hip Line</b></label>
            <input type="text" minlength="2" maxlength="4" name="numHipLine" value="<?php echo $row['HipLine'] ?>"  required>

            <label class="measurements"><b>Back Width</b></label>
            <input type="text" minlength="2" maxlength="4" name="numBackWidth" value="<?php echo $row['BackWidth'] ?>"  required>

            <label class="measurements"><b>Front Width</b></label>
            <input type="text" minlength="2" maxlength="4" name="numFrontWidth" value="<?php echo $row['FrontWidth'] ?>"  required>

            <label class="measurements"><b>Bust</b></label>
            <input type="text" minlength="2" maxlength="4" name="numBust" value="<?php echo $row['Bust'] ?>" required >

            <label class="measurements"><b>Waist</b></label>
            <input type="text" minlength="2" maxlength="4" name="numWaist" value="<?php echo $row['Waist'] ?>" required >

            <label class="measurements"><b>Hip</b></label>
            <input type="text" minlength="2" maxlength="4" name="numHip" value="<?php echo $row['Hip'] ?>" required >

            <label class="measurements"><b>Bust Length</b></label>
            <input type="text" minlength="2" maxlength="4" name="numBustLength" value="<?php echo $row['BustLength'] ?>" required >

            <label class="measurements"><b>Bust Point</b></label>
            <input type="text" minlength="2" maxlength="4" name="numBustPoint" value="<?php echo $row['BustPoint'] ?>" required >

            <label class="measurements"><b>Neck</b></label>
            <input type="text" minlength="2" maxlength="4" name="numNeck" value="<?php echo $row['Neck'] ?>" required >

            <label class="measurements"><b>ArmHole</b></label>
            <input type="text" minlength="2" maxlength="4" name="numArmHole" value="<?php echo $row['ArmHole'] ?>" required >

            <label class="measurements"><b>SleeveWidth</b></label>
            <input type="text" name="txtSleeveWidth" value="<?php echo $row['SleeveWidth'] ?>" required  >

            <label class="measurements"><b>SleeveLength</b></label>
            <input type="text" name="numSleeveLength" value="<?php echo $row['SleeveLength'] ?>" required >

            <label class="measurements"><b>Phone Number</b></label>
            <input type="text" name="txtPhoneNumber" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" minlength="8" maxlength="11"  value="<?php echo $row['PhoneNumber'] ?>" required >
       
            <button type="reset" class="btn btn-cancel" style="float:left; color:white;"><a href="customer.php?cusid=<?php echo $_GET['cusid']?>" class="no-under cancel" >Cancel</a></button>
            <button type="submit" class="btn btn-submit float-right" name="BtnSubmit">Submit</button>
        </div>
      </form>
    </section>
</body>
</html>