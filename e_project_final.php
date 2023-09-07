<?php

    include "db_connect.php";

    if(isset($_POST['update'])){

    $name = $_POST ['name'];  
    $description = $_POST ['description'];  
    $status = $_POST ['status'];  
    $start_date = $_POST ['start_date'];  
    $end_date = $_POST ['end_date'];  
    $manager_id = $_POST ['manager_id'];  
    $user_ids = $_POST ['user_ids'];  

    $sql = "UPDATE project_list set name = '$name', description = '$description', status = '$status', start_date = '$start_date', end_date = '$end_date', manager_id = '$manager_id', user_ids = '$user_ids' where name = '$name'";

    $insert = $conn -> QUERY ($sql);
               
    if($insert == true){
?>
    <script>
        alert("Successfully Updated!")
    </script>
<?php
    header("refresh:0;url=project_list.php");
                   echo ""; /* Succesfully */
    }else{ 
        echo $conn->error;
    }
            
                echo "<table border=1>";

                    echo "<tr>";
                        echo "<th colspan=4> PROJECT";
                    echo "</tr>";

                    echo "<tr>";
                        echo "<td class=flabel colspan=2> Name: ".$name;
                        echo "<td class=flabel colspan=2> Status: ".$status;
                    echo "</tr>";

                    echo "<tr>";
                        echo "<td class=flabel colspan=2> Start Date: " .$start_date;
                        echo "<td class=flabel colspan=2> End Date: " .$end_date;
                    echo "</tr>";

                    echo "<tr>";
                        echo "<td class=flabel colspan=2> Prohect Manger: " .$manager_id;
                        echo "<td class=flabel colspan=2> Members: " .$user_ids;
                    echo "</tr>";

                    echo "<tr>";
                        echo "<td class=room colspan=4> Description" .$description;
                    echo "</tr>";

                echo "</table>"; 
            
            } 
        ?>  