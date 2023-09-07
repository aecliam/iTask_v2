<!--e_project.php at e_project_final.php na ang gamit-->

<?php
include 'db_connect.php';
$qry = $conn->query("SELECT * FROM project_list where id = ".$_GET['id'])->fetch_array();
foreach($qry as $k => $v){
	$$k = $v;
}
include 'n_project.php';
?>

<header>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"-->
    <link rel="stylesheet" type="text/css" href="css/edit_project.css"/>
    
</header>