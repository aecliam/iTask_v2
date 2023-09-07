<html>
    <head>
        <title> </title>

        <!-- --> <link rel="stylesheet" href="edit_project.css"> 
    </head>

    <body>
        
        <header>
        </header>
    
        <?php

            include "db_connect.php";

            if (!$conn -> connect_error) {
                echo ""; /* Connected */
            }

            $id = $_GET ['id'];

            $sql = "SELECT * from project_list where id = '$id'";
                    
            $result = $conn -> QUERY ($sql);

            $row = $result -> FETCH_ASSOC ();

            $id = $row ['id'];  
            $name = $row ['name'];  
            $description = $row ['description'];  
            $status = $row ['status'];  
            $start_date = $row ['start_date'];  
            $end_date = $row ['end_date'];  
            $manager_id = $row ['manager_id'];  
            $user_ids = $row ['user_ids'];  
            
            $conn -> close ();

        ?>

        <form method="POST" action="e_project_final.php">

            <table border="1">
                <!-- <tr> 
                    <td class=photo colspan=4 align=center> <img class=photo src=images/logo2.png>
                </tr> -->

                <tr>
                    <th colspan=4> EDIT PROJECT
                </tr>

                <tr>
                    <td colspan=2> Name: 
                        <input class=label type="text" name="name" value="<?php echo $name; ?>">
                    <td colspan=2> Status: 
                        <select type="text" id="status" name="status">
                            <option value="Pending"> Pending </option>
                            <option value="On-Progress"> On-Progress </option>
                            <option value="Done"> Done </option>
                        </select>
                </tr>

                <tr>
                    <td colspan="2">
                        <input class=label type="date" name="start_date" value="<?php echo $start_date; ?>">
                    <td colspan="2">
                        <input class=label type="date" name="end_date" value="<?php echo $end_date; ?>">
                </tr>

                <tr>
                    <td colspan=2> Project Manager: 
                        <input class=label type="text" name="manager_id" value="<?php echo $manager_id; ?>">
                    <td colspan=2> Project Team Members: 
                        <input class=label type="text" name="user_ids" value="<?php echo $user_ids; ?>">
                </tr>

                <tr>
                    <td colspan=4> Description:
                        <input class="label" type="text" name="description" value="<?php echo $description; ?>">
                </tr>

                <tr>
                    <td colspan="4">
                        <input class="button" type="submit" name="update" value="UPDATE">
                </tr>

            </table>

        </form>

    </body>
</html>