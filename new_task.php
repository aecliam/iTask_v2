<?php

    include "db_connect.php";

    if (!$conn -> connect_error) {
           echo ""; /* Connected */
    }

        //$id = $_GET ['id'];
        //where id = '$id'

      /*  $task = $_POST['task'];
        $description = $_POST['description'];
        $status = $_POST['status'];
        $name = $_POST['name'];*/

        $sql = "SELECT id from project_list WHERE project_id = '$id'";
                    
        $result = $conn -> QUERY ($sql);

        $row = $result -> FETCH_ASSOC ();

        $name = $row ['id'];    
            
        $conn -> close ();

        

?>


<!DOCTYPE html>
<html>
<head>
    <title>New Task</title>
</head>
<body>
<link rel="stylesheet" href="/itask_v2/css/new_project.css">

<div>
	<form action="new_task.php" method="POST">
		<table width="100%">
			<th colspan="2">
			<tr>
				<td colspan="1">
					<div>
						<label for="name">Task Name:</label>
						<input type="text" id="task" name="task" required>
					</div>
            <tr>
				<td colspan="1">
					<div>	
						<label for="description">Description:</label>
							<textarea id="description" name="description" required></textarea>
					</div>
			<tr>
                <td colspan="1">
					<div>	
						<label for="status">Status:</label>
							<select type="text" id="status" name="status">
                                <option value="Pending"> Pending </option>
                                <option value="On-Progress"> On-Progress </option>
                                <option value="Done"> Done </option>
                            </select>
					</div>
			<tr>
				<td colspan="2">
					<div>	
						<input class="button" type="submit" name="save" value="Add Task">
						<input class="button" type="submit" value="Cancel">
					</div>
		</table>
	</form>
</div>

<?php 
	include 'db_connect.php';

		if(isset($_POST['save'])){
			$task = $_POST['task'];
            $description = $_POST['description'];
            $status = $_POST['status'];

			$sql = "INSERT into task_list (task, description, status) VALUES ('$task', '$description',  '$status')"; 

                    $insert = $conn -> QUERY ($sql);
					
                    if($insert == true){
							$alert = '<script>alert("Successfully Added!")</script>';
							echo $alert;
                    }else{ 
                        echo $conn->error;
                    }
		}
?>

</body>
</html>
