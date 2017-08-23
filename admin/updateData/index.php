<?php

require_once("../../inc/connect.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../../css/update-style.css?<?php echo time(); ?>" rel="stylesheet">
    </head>
    <body>  
        <div class="header" >
          <h1>Database in PHP</h1>
          <h2>Table data in database</h2>
        </div>
<div>
    <table class="update-table">
        <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Edit</th>
        </tr>
        <?php
            $sql = "select * from students";
            $result = mysqli_query($conn,$sql);

            while($row = mysqli_fetch_array($result) ){
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['password'] . "</td>";
                echo "<td><button type='button' onclick=editData("."'$row[id]'".")>Edit</button></td>";
                echo "</tr>";
            }

            mysqli_close($conn);
                ?>


        
    </table>
</div>
        



<script>
    function editData(id){
        
    }
</script>
    </body>
</html>