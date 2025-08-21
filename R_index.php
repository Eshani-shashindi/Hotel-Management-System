<!--IT23157132 J.A.S.R.Jayakody-->

<DOCTYPE html>
    <html>
        <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>
                    Admin
                </title>
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="Styles/R_index.css">
        </head>
        <body>
            <div>
            <div>
            <fieldset>
                <legend>New Employee Information</legend>
                <form method="post" action="R_insert.php" >
                    <table>
                     
                     <tr><td> Designation:</td><td><input type ="text" name="designation" class="in1" placeholder="Employee Designation..."><td></tr>
                     <tr><td>Name:</td><td><input type ="text" name="name" class="in1" placeholder="Employee Name..."><td></tr>
                     <tr><td> Email:</td><td><input type ="email" name="email" class="in1" placeholder="Employee Email..."><td></tr>
                     <tr><td> Contact:</td><td><input type ="tel" name="contact" class="in1" placeholder="Employee Contact..."><td></tr>
                    </table>
                    <input type="submit" value="submit" class="in">
                    
                </form>
            </feildset>
            </div>
            <div>
            <fieldset>
                <legend>Update Employee Information</legend>
                <form method="post"  action="R_update.php">
                <table>
                     <tr><td>ID:</td><td><input type ="text" name="id" class="in1" placeholder="Employee ID..."><td></tr>
                     <tr><td> Designation:</td><td><input type ="text" name="designation" class="in1" placeholder="Employee Designation..."><td></tr>
                     <tr><td>Name:</td><td><input type ="text" name="name" class="in1" placeholder="Employee Name..."><td></tr>
                     <tr><td> Email:</td><td><input type ="email" name="email" class="in1" placeholder="Employee Email..."><td></tr>
                     <tr><td> Contact:</td><td><input type ="tel" name="contact" class="in1" placeholder="Employee Contact..."><td></tr>
                    </table>
                    
                    <input type="submit" value="Update" class="in">
                </form>
            </feildset>
            </div>
            <div>
                <fieldset>
                    <form method="post" action="R_delete.php">
                        <table>
                        <tr><td>ID:</td><td><input type="text" name="id" class="in1" placeholder="Empolyee ID..."></td></tr>
                        </table>
                        <input type="submit" value="Delete" class="in">
                    </form>
                <legend>Delete Employee Information</legend>
                </feildset>
            </div>
            <div>
                <fieldset>
                <legend>Read Employee Information</legend>
                    <form method="post" action="R_read.php">
                    <table>
                    <tr><td>ID:</td><td><input type="text" name="id" class="in1" placeholder="ID/All..." ></td></tr>
                    </table>
                        <input type="submit" value="Show" class="in">
                    </form>
                </feildset>
            </div>
        </body>
    </html>
    
    