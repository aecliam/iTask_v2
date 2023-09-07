<?php 
	//include "manager_sidebar.php";
?><!-- new_project.php -->


<!DOCTYPE html>
<html>
<head>
    <title>New Project</title>
</head>
<body>
<link rel="stylesheet" href="/itask_v2/css/new_project.css">

<!--h1>New Project</h1-->

<div>
	<form action="n_project.php" method="POST">
		<table width="100%">
			<th colspan="2">
			<tr>
				<td colspan="1">
					<div>
						<label for="name">Project Name:</label>
						<input type="text" id="name" name="name" required>
					</div>
				<td colspan="1">
					<div>	
						<label for="status">Status:</label>
							<input type="text" id="status" name="status" value="Pending" required readonly>
					</div>
			<tr>
				<!--td colspan="2">
					<div>	
						<label for="priority">Priority:</label>
						<select id="priority" name="priority" required>
								<option value="">    		</option>
								<option value="High">High</option>
								<option value="Medium">Medium</option>
								<option value="Low">Low</option>
							</select><br><br>		
					</div-->
			<tr>
				<td colspan="1">
					<div>
						<label for="start_date">Start Date:</label>
							<input type="date" id="start_date" name="start_date" required><br><br>
					</div>
				</td>
				<td colspan="1">
					<div>	
						<label for="end_date">End Date:</label>
							<input type="date" id="end_date" name="end_date" required><br><br>
					</div>
			<tr>
				<td colspan="1">
					<div>	
						<label for="project_manager">Project Manager:</label>
						<select id="project_manager" name="manager_id" required>
					    	   <option value="">    		</option>
								<option value="1">Manager 1</option>
								<option value="2">Manager 2</option>
								<option value="3">Manager 3</option>
							</select><br><br>		
					</div>
				<td colspan="1">
					<div>	
						<label for="project_team">Project Team Members:</label>
							<select id="project_team" name="user_ids" required>
								<option value="">    		</option>
								<option value="Aedia">Aedia</option>
								<option value="Cathlyn">Cathlyn</option>
								<option value="Manuel">Manuel</option>
								<option value="Marijo">Marijo</option>
							</select><br><br>
					</div>
			<tr>
				<td colspan="2">
					<div>
						<label for="description">Description:</label>
							<textarea id="description" name="description" rows="4" cols="50"></textarea><br><br>
					</div>
			<tr>
				<td colspan="2">
					<div>	
						<input class="button" type="submit" name="save" value="Add Project">
						<input class="button" type="submit" value="Cancel">
					</div>
		</table>
	</form>
</div>

<?php 
	include 'db_connect.php';

		if(isset($_POST['save'])){
			$name = $_POST['name'];
            $status = $_POST['status'];
            //$priority = $_POST['priority'];
            $start_date = $_POST['start_date'];
            $end_date = $_POST['end_date'];
            $manager_id = $_POST['manager_id'];
            $user_ids = $_POST['user_ids']; 
            $description = $_POST['description'];

			$sql = "Insert into project_list (name, status, description, start_date, end_date, manager_id, user_ids) VALUES ('$name', '$status', '$description', '$start_date', '$end_date', '$manager_id', '$user_ids')"; 

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
