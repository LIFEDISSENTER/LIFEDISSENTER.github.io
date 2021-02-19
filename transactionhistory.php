<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title><!--KARTIKEY NARAIYAN GARG-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css"><!--KARTIKEY NARAIYAN GARG-->
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
</head>

<body>
<?php
  include 'navbar.php';
?>

	<div class="container"><!--KARTIKEY NARAIYAN GARG-->
        <h2 class="text-center pt-4" style="background:#ffd100;padding:10px 20px;color:#280071;">Transaction History</h2>
        
       <br>
       <div class="table-responsive-sm"><!--KARTIKEY NARAIYAN GARG-->
    <table class="table table-hover table-striped table-condensed table-bordered" style="background:#12a8e0;color:#fff;">
        <thead>
            <tr>
                <th class="text-center">S.No.</th>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th><!--KARTIKEY NARAIYAN GARG-->
                <th class="text-center">Amount in ₹</th>
                <th class="text-center">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'config.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);
			$i=1;
            while($rows = mysqli_fetch_assoc($query))
            {
        ?><!--KARTIKEY NARAIYAN GARG-->

            <tr>
            <td class="py-2"><?php echo $i; ?></td>
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['receiver']; ?></td><!--KARTIKEY NARAIYAN GARG-->
            <td class="py-2"><?php echo $rows['balance']; ?> </td>
            <td class="py-2"><?php echo $rows['datetime']; ?> </td>
                
        <?php
			$i++;
            }

        ?><!--KARTIKEY NARAIYAN GARG-->
        </tbody>
    </table>

    </div>
</div><!--KARTIKEY NARAIYAN GARG-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>