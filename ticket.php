<!--IT23163454
A.M.H.Navodya-->
<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Page</title>

	<link rel="stylesheet" href="css/style1.css">
    <style>
        body {
          font-family: Arial, sans-serif;
          margin: 0;
          padding: 0;
          background-image: url(bg1.png);
          }
        </style>
</head>
<body>

<center><h1 id="heading">Successfully submited. </h1></center>
<div class="box">
    
   <form class="form" method="post" action="update.php">

    <div class="inputbox">


    <?php
    require 'Read.php';
    ?>

     <button type="submit" class="btn right" onclick="update()">Update</button>
     <button type="button" class="btn left" onclick="deleteFunction()">Delete</button>
  </div>
</div>
</form>

<script>
        function deleteFunction() {
            var dresult= confirm("Do you really want to delete account?");
                        if (dresult) 
                        {
                             alert("Account delete  confirmed.");
                             window.location.href = "Delete.php";
                            
        
                             } else {
                       
                                alert("Account deletion cancelled.");
                        }
                    }
        function update()
        {
            alert("Redirect to update page.");
            window.location.href = "update.php";
        }
                </script>

</body>

<html>