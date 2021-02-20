<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"><!--KARTIKEY NARAIYAN GARG-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View All Customers</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <style type="text/css">
      button{
        transition: 1.5s;
      }
      button:hover{
        background-color:#616C6F;
        color: white;
      }
    </style>
</head>

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
        <h2 class="text-center pt-4" style="background:#ffd100;padding:10px 20px;color:#280071;">All Customers</h2>
        <br>
            <div class="row">
                <div class="col"><!--KARTIKEY NARAIYAN GARG-->
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered" style="background:#12a8e0;color:#fff;">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center py-2">S.No</th>
                            <th scope="col" class="text-center py-2">Name</th>
                            <th scope="col" class="text-center py-2">E-mail</th>
                            </tr>
                        </thead><!--KARTIKEY NARAIYAN GARG-->
                        <tbody>
                <?php 
					$i=0;
                    while($rows=mysqli_fetch_assoc($result)){
						$i++;
                ?><!--KARTIKEY NARAIYAN GARG-->
                    <tr>
                        <td class="py-2"><?php echo $i ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td><!--KARTIKEY NARAIYAN GARG-->
                        <td class="py-2"><?php echo $rows['email']?></td>
                    </tr>
                <?php
                    }
				
                ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>
		 <!--KARTIKEY NARAIYAN GARG-->
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>