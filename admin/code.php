<?php

session_start();

include('../config/dbcon.php');
include('../functions/myfunction.php');


if (isset($_POST['category_btn'])) {
	
	$category_name  = $_POST['category_name'];
	$category_slug  = $_POST['category_slug'];
	$category_des   = $_POST['category_des'];
	$status         = isset($_POST['status']) ? '1' : '0';
	$popular         = isset($_POST['popular']) ? '1' : '0';
	$meta_title     = $_POST['meta_title'];
	$meta_des       = $_POST['meta_des'];
	$meta_keywords  = $_POST['meta_keywords'];



	$image = $_FILES['image']['name'];

	$path = "../uploads";

	$image_ex = pathinfo($image, PATHINFO_EXTENSION);
	$filename = time().'.'.$image_ex;


	$cat_query = "INSERT INTO categories (category_name,category_slug,category_des,meta_title,meta_des,meta_keywords,status,popular,image) VALUES('$category_name','$category_slug','$category_des','$meta_title','$meta_des','$meta_keywords','$status','$popular','$filename')";

	$cat_query_run = mysqli_query($con, $cat_query);

	if ($cat_query_run) {
	    move_uploaded_file($_FILES['image']['tmp_name'], $path."/".$filename);
	    redirect('addcategory.php','Category Added Successfully');
	}
	else{
		redirect('addcategory.php','Something went wrong');
	}


}





?>