<?php 
include('db_connect.php');
session_start();
if(isset($_GET['id'])){
$user = $conn->query("SELECT * FROM users where id =".$_GET['id']);
foreach($user->fetch_array() as $k =>$v){
	$meta[$k] = $v;
}
}
?>
<header>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"-->
    <link rel="stylesheet" type="text/css" href="css/manage_user.css"/>
    
</header>

<div> <!--class="container-fluid"-->
	<div> <!--id="msg"--></div>
	
	<form action="" id="manage-user">	
		<input type="hidden" name="id" value="<?php echo isset($meta['id']) ? $meta['id']: '' ?>">
		<div> <!--class="form-group"-->
			<label for="name">First Name</label>
			<!--class="form-control"-->
			<input type="text" name="firstname" id="firstname" value="<?php echo isset($meta['firstname']) ? $meta['firstname']: '' ?>" required>
		</div>
		<div> <!--class="form-group"-->
			<label for="name">Last Name</label>
			<!-- class="form-control"-->
			<input type="text" name="lastname" id="lastname" value="<?php echo isset($meta['lastname']) ? $meta['lastname']: '' ?>" required>
		</div>
		<div> <!--class="form-group"-->
			<label for="email">Email</label>
			<!-- class="form-control"-->
			<input type="text" name="email" id="email" value="<?php echo isset($meta['email']) ? $meta['email']: '' ?>" required  autocomplete="off">
		</div>
		<div> <!--class="form-group"-->
			<label for="password">Password</label>
			<!--class="form-control" -->
			<input type="password" name="password" id="password" value="" autocomplete="off">
			<small><i>Leave this blank if you dont want to change the password.</i></small>
		</div>
		<div> <!--class="form-group"-->
			<label for=""> <!--class="control-label"-->Avatar</label>
			<div> <!--class="custom-file"-->
			<!-- class="custom-file-input rounded-circle"-->
              <input type="file" id="customFile" name="img" onchange="displayImg(this,$(this))">
			  <!--class="custom-file-label" -->
              <label for="customFile">Choose file</label>
            </div>
		</div>
		<div> <!--class="form-group d-flex justify-content-center"-->
			<img src="<?php echo isset($meta['avatar']) ? 'assets/uploads/'.$meta['avatar'] :'' ?>" alt="" id="cimg" class="img-fluid img-thumbnail">
		</div>
		

	</form>
</div>
<style>
	img#cimg{
		height: 15vh;
		width: 15vh;
		object-fit: cover;
		border-radius: 100% 100%;
	}
</style>
<script>
	function displayImg(input,_this) {
	    if (input.files && input.files[0]) {
	        var reader = new FileReader();
	        reader.onload = function (e) {
	        	$('#cimg').attr('src', e.target.result);
	        }

	        reader.readAsDataURL(input.files[0]);
	    }
	}
	$('#manage-user').submit(function(e){
		e.preventDefault();
		start_load()
		$.ajax({
			url:'ajax.php?action=update_user',
			data: new FormData($(this)[0]),
		    cache: false,
		    contentType: false,
		    processData: false,
		    method: 'POST',
		    type: 'POST',
			success:function(resp){
				if(resp ==1){
					alert_toast("Data successfully saved",'success')
					setTimeout(function(){
						location.reload()
					},1500)
				}else{
					$('#msg').html('<div class="alert alert-danger">Username already exist</div>')
					end_load()
				}
			}
		})
	})

</script>