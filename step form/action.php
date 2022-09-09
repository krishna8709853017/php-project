<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<div class="container" style="padding:50px 50px;">
<div class="row well alert alert-success"><?php echo "<pre>";print_R($_POST);?></div>
</div>


<?php
	include_one("connect_db.php");
	of(isset($_POST['submit'])){
		$fname=$_POST['data']['fName'];
		$lnmae=$_POST['data']['lName'];
		$email=$_POST['data']['email'];
		$address=$_POST['data']['address'];
		$mobile=$_POST['data']['mob'];

		$error=true;
		$alert_msg="";
		$resp=[];

		$sql="INSERT INTO user_info(fname,lname,email,address,mob) VALUES ('$fname', '$lname','$email','$address','mobie')";

		if (mysqli_query($conn,$sql)) {
			$resp=array('status'=>'success','message'=>"Sucessfully data store into database");
		}
		else{
			$resp=array('status'=>'failed',message=>"ERROR unable to update $sql." .mysqli_error($conn));
		}
		mysql_close($conn);
		print_r($resp); exit;
	}
?>
