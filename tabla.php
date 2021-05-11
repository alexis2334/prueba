<?php

$host="localhost";
$user="root";
$password="";
$db="personas";




$con = new mysqli($host,$user,$password,$db);

$con->set_charset('utf8');
$d="select * from datos";
$query=mysqli_query($con,$d);

?>


<!DOCTYPE html>

<html>
    <body>

    <table  id="refresh" class="table table-dark">
                    <tr STYLE="color:white;">
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                    <?php 
                        
                        while($view=mysqli_fetch_array($query)){                            
                        ?>
                    <tr class="text-center">
                        <td><?php echo  $view['id'];?></td>
                        <td><?php echo  $view['name'];?></td>
                        <td><?php echo $view['last']; ?></td>
                        <td><?php echo $view['num']; ?></td>


                    </tr>
                    <?php
                    }
                    ?>
                </table>
    </body>
</html>