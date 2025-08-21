<!--IT23157132 J.A.S.R.Jayakody-->

<?php
require 'config.php';

$eid=$_POST["id"];

if($eid=="All"||$eid=="all"){

    $que1="SELECT ID,Designation,Name,Email,Contact from admin ";

    $result=$con->query($que1);
    
    if($result->num_rows>0)
    {
        echo "<center><b>Details of All Employees<b></center><br><br>";
        echo "<table border='1' width=100% style='font-size: 16px;'>";
        echo"<tr style='background-color:gray;'><th>Employee ID</th><th>Employee Name</th><th>Employee Designation</th><th>Employee Email</th><th>Employee Contact</th></tr>";
        while($row=$result->fetch_assoc())
        {
            echo "<tr>";
            echo "<td>".$row["ID"]."</td>"."<td>".$row["Designation"]."</td>"."<td>".$row["Name"]."</td>"."<td>".$row["Email"]."</td>"."<td>".$row["Contact"]."</td>";
            echo "</tr>";
        }
       echo "<table>";
    }
    else
    {
        echo "No Data";
    }
}

else{
    $que1="SELECT ID,Designation,Name,Email,Contact from admin WHERE ID='$eid'";

    $result=$con->query($que1);

    if($result->num_rows>0)
    {
        echo"<b><center>Details of Employee ID:$eid</center><b><br><br>";
        echo "<table border='1' width=100% style='font-size: 16px;'>";
        echo"<tr style='background-color:gray;'><th>Employee ID</th><th>Employee Name</th><th>Employee Designation</th><th>Employee Email</th><th>Employee Contact</th></tr>";
        while($row=$result->fetch_assoc())
        {
            echo "<tr>";
            echo "<td>".$row["ID"]."</td>"."<td>".$row["Designation"]."</td>"."<td>".$row["Name"]."</td>"."<td>".$row["Email"]."</td>"."<td>".$row["Contact"]."</td>";
            echo "</tr>";
        }
    echo "<table>";
    }
    else
    {
        echo "No Data";
    }
}
$con->close();
?>