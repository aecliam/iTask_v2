<?php
	include 'db_connect.php';
?>

<header>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"-->
    <link rel="stylesheet" type="text/css" href="css/user_list.css"/>
    
</header>

<div> <!--class="col-lg-12"-->
	<div> <!--class="card card-outline card-success"-->
		<div> <!--class="card-header"-->
			<div> <!--class="card-tools"-->
				<!--class="btn btn-block btn-sm btn-default btn-flat border-primary"-->
				<a href="./index.php?page=new_user"><!--i class="fa fa-plus"></i--> Add New User</a>
			</div>
		</div>
		<div> <!--class="card-body"-->
			<!-- class="table tabe-hover table-bordered"-->
			<table id="list">
				<thead>
					<tr>
						<th class="text-center">#</th>
						<th>Name</th>
						<th>Email</th>
						<th>Role</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$i = 1;
					$type = array('',"Admin","Project Manager","Employee");
					$qry = $conn->query("SELECT *,concat(firstname,' ',lastname) as name FROM users order by concat(firstname,' ',lastname) asc");
					while($row= $qry->fetch_assoc()):
					?>
					<tr>
						<th class="text-center"><?php echo $i++ ?></th>
						<td><b><?php echo ucwords($row['name']) ?></b></td>
						<td><b><?php echo $row['email'] ?></b></td>
						<td><b><?php echo $type[$row['type']] ?></b></td>
						<td class="text-center">
							<button type="button" class="btn btn-default btn-sm btn-flat border-info wave-effect text-info dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
		                      Action
		                    </button>
		                    <div style="">
							<!--class="dropdown-menu"-->
							<!--class="dropdown-item view_user" -->
							<!--javascript:void(0)" data-id="-->
		                      <a href="./index.php?page=view_user&id=<?php echo $row['id'] ?>">View</a>
		                      <div> <!--class="dropdown-divider"--></div>
							  <!--class="dropdown-item"-->
		                      <a href="./index.php?page=edit_user&id=<?php echo $row['id'] ?>">Edit</a>
		                      <div> <!--class="dropdown-divider"--></div>
							  <!-- class="dropdown-item delete_user"-->
		                      <a href="javascript:void(0)" data-id="<?php echo $row['id'] ?>">Delete</a>
		                    </div>
						</td>
					</tr>	
				<?php endwhile; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<script>
	$(document).ready(function(){
		$('#list').dataTable()
	$('.view_user').click(function(){
		//<i class='fa fa-id-card'></i>
		uni_modal(" User Details","view_user.php?id="+$(this).attr('data-id'))
	})
	$('.delete_user').click(function(){
	_conf("Are you sure to delete this user?","delete_user",[$(this).attr('data-id')])
	})
	})
	function delete_user($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_user',
			method:'POST',
			data:{id:$id},
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully deleted",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	}
</script>