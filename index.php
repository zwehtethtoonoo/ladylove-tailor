<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
        <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
    <script src="./js/quixnav-init.js"></script>
    <script src="./js/custom.min.js"></script>
    <script src="css/index.js"></script>
    <?php
   include('connect.php');
      session_start();
   if (!isset($_SESSION['StaffID'])) {
      echo "<script>window.alert('Please Login!')</script>";
      echo "<script>window.location='login.php'</script>";
   }
    ?>

</head>
<body>
<?php 
include('header.php');
 ?>

<script>
    $(document).ready(function () {
  $('#dtBasicExample').DataTable();
  $('.dataTables_length').addClass('bs-select');
});
</script>
    <div class="app" id="app">
        <div class="text-box">
            <label class="h3" id="label">Customers list</label>
            <button class="me-3 mb-3 btn-for-creating" onclick="location.href = './customer_entry.php';">New Customer</button>
        </div>

        <div class="list-box">
        <table id="dtBasicExample" class="table table-bordered table-sm" cellspacing="0" width="99%">
  <thead>
    <tr class="data-title">
      <th class="th-m fs-ll">No
      </th>
      <th class="th-m fs-l name-column">Name
      </th>
      <th class="th-m fs-l data">Bust
      </th>
      <th class="th-m fs-l data">Waist
      </th>
      <th class="th-m fs-l data">Hip
      </th>
      <th class="th-m fs-l">Action
      </th>
    </tr>
  </thead>
  <tbody>
  <?php 

        $select="Select CustomerID, CustomerName, Bust, Waist, Hip 
                from customer;";
        $run=mysqli_query($connect,$select);
        $count=mysqli_num_rows($run);

        for ($i=0; $i < $count; $i++) { 
          $row=mysqli_fetch_array($run); 
?>
    <tr class="data-result">
      <td class="ps-3 fs-ll"><b><?php echo $i+1;?></b></td>
      <td class="ps-3 fs-xl fw-500 name-column"><?php echo $row['CustomerName'];?></td>
      <td class="ps-3 fs-ll data"><b><?php echo $row['Bust'];?></b></td>
      <td class="ps-3 fs-ll data"><b><?php echo $row['Waist'];?></b></td>
      <td class="ps-3 fs-ll data"><b><?php echo $row['Hip'];?></b></td>
      <td>
          <span>
              <a href="customer.php?cusid=<?php echo  $row['CustomerID']; ?>" class="no-under" data-toggle="tooltip" data-placement="top" title="View">
                  <img src="images/eye.png" class="eye" >
              </a>
          </span>
          <span class="ms-2">
          <a onclick="return confirm('Are you sure you want to delete this customer?')" href="customerdelete.php?cusid=<?php echo  $row['CustomerID']; ?>" class="no-under" data-toggle="tooltip" data-placement="top" title="Delete">
                  <img src="images/delete.png" class="eye pointer" title="Delete">
          </span>
      </td>

    </tr>


       <?php }
  ?>
    
    </tbody>
  <tfoot>
    <tr class="data-title">
      <th class="fs-l">No
      </th>
      <th class="fs-l name-column">Name
      </th>
      <th class="fs-ll data">Bust
      </th>
      <th class="fs-l data">Waist
      </th=>
      <th class="fs-l data">Hip
      </th=>
      <th class="fs-l">Action
      </th>
    </tr>
  </tfoot>
</table>
<div class="flex btn-container"><button class="phone-btn-for-creating" onclick="location.href = './customer_entry.php';">New Customer</button></div>

        </div>
    </div>
    <!-- Jquery Validation -->
    <script src="./vendor/jquery-validation/jquery.validate.min.js"></script>
    <!-- Form validate init -->
    <script src="./js/plugins-init/jquery.validate-init.js"></script>

    <!-- Datatable -->
    <script src="./vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="./js/plugins-init/datatables.init.js"></script>
</body>
</html>