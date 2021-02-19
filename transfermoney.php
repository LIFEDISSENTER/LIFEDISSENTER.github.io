<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title><!--KARTIKEY NARAIYAN GARG-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <style type="text/css" >
      button{
        background-color:#a8e012;
		transition: 1.5s;
      }
      button:hover{
        background-color:#e012a8;
        color: white;
      }
    </style>
</head><!--KARTIKEY NARAIYAN GARG-->

<body>
<?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>

<?php
  include 'navbar.php';
?>

<div class="container">
        <h2 class="text-center pt-4" style="background:#ffd100;padding:10px 20px;color:#280071;">Transfer Money</h2>
        <br><!--KARTIKEY NARAIYAN GARG-->
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm" style="background:#12a8e0;color:#fff;"><!--KARTIKEY NARAIYAN GARG-->
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered">
                        <thead>
                            <tr><!--KARTIKEY NARAIYAN GARG-->
                            <th scope="col" class="text-center py-2">Id</th>
                            <th scope="col" class="text-center py-2">Name</th>
                            <th scope="col" class="text-center py-2">E-mail</th><!--KARTIKEY NARAIYAN GARG-->
                            <th scope="col" class="text-center py-2">Balance in ₹</th>
                            <th scope="col" class="text-center py-2">Payment</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr><!--KARTIKEY NARAIYAN GARG-->
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td><!--KARTIKEY NARAIYAN GARG-->
                        <td class="py-2"><?php echo $rows['email']?></td>
                        <td class="py-2"><?php echo $rows['balance']?></td>
                        <td><a href="selecteduserdetail.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn">Transfer Money</button></a></td> 
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    </div><!--KARTIKEY NARAIYAN GARG-->
                </div>
            </div> <!--KARTIKEY NARAIYAN GARG-->
         </div>
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>