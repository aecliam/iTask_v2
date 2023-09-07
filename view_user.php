<?php include 'db_connect.php' ?>
<?php
//session_start();
if(isset($_GET['id'])){
	$type_arr = array('',"Admin","Project Manager","Employee");
	$qry = $conn->query("SELECT *,concat(firstname,' ',lastname) as name FROM users where id = ".$_GET['id'])->fetch_array();
foreach($qry as $k => $v){
	$$k = $v;
}
}
?>

<header>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"-->
    <link rel="stylesheet" type="text/css" href="css/view_user.css"/>
    
</header>

<div> <!--class="container-fluid"-->
	<div> <!--class="card card-widget widget-user shadow"-->
      <div> <!--class="widget-user-header bg-dark"-->
        <h3> <!--class="widget-user-username"--><?php echo ucwords($name) ?></h3>
        <h5> <!--class="widget-user-desc"--><?php echo $email ?></h5>
      </div>
      <div> <!--class="widget-user-image"-->
      	<?php if(empty($avatar) || (!empty($avatar) && !is_file('assets/uploads/'.$avatar))): ?>
			 <!--class="brand-image img-circle elevation-2 d-flex justify-content-center align-items-center bg-primary text-white font-weight-500"-->
      	<span style="width: 90px;height:90px"><h4><?php echo strtoupper(substr($firstname, 0,1).substr($lastname, 0,1)) ?></h4></span>
      	<?php else: ?>
			<!--class="img-circle elevation-2"-->
        <img src="assets/uploads/<?php echo $avatar ?>" alt="User Avatar"  style="width: 90px;height:90px;object-fit: cover">
      	<?php endif ?>
      </div>
      <div> <!--class="card-footer"-->
        <div> <!--class="container-fluid"-->
        	<dl>
        		<dt>Role</dt>
        		<dd><?php echo $type_arr[$type] ?></dd>
        	</dl>
        </div>
    </div>
	</div>
</div>
<div> <!--class="modal-footer display p-0 m-0"-->
			<!--class="btn btn-secondary" -->
        <button type="button" data-dismiss="modal">Close</button>
</div>
<style>
	#uni_modal .modal-footer{
		display: none
	}
	#uni_modal .modal-footer.display{
		display: flex
	}
</style>