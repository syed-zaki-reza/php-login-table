<?php
    include("db.php");
    error_reporting(0);

    $query = "SELECT * FROM form";
    $data = mysqli_query($connection, $query);

    $numrowa = mysqli_num_rows($data);

    if($numrowa){
        ?>
        <h2 align="center"><mark>Total Registered Data</mark><h2>
        <table border="2" align="center">
            <tr>
                <th width="5%">ID</th>
                <th width="20%">Name</th>
                <th width="20%">Phone</th>
                <th width="20%">Email</th>
                <th width="30%">Address</th>
                <th width="10%">Operations</th>
            </tr>        

        <?php

        while($dataarray = mysqli_fetch_assoc($data)){
            echo "<tr>
                    <td>".$dataarray[id]."</td>
                    <td>".$dataarray[fname]."</td>
                    <td>".$dataarray[fphone]."</td>
                    <td>".$dataarray[femail]."</td>
                    <td>".$dataarray[faddress]."</td>
                    <td><a href='deletedata.php?id=$dataarray[id]'><input class='delete' type='submit' value='Delete' name='delete'></a></td>                              
                </tr>";
        }

    }
?>
</table>

<