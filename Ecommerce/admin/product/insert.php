	<?php
	if(isset($_POST['submit']))
	{
        include("Config.php");
        $product_name = $_POST["Pname"];
		$product_price=$_POST['Pprice'];
		$product_image=$_FILES['Pimage'];
		//print_r($product_image);
		
        $image_loc = $_FILES['Pimage']['tmp_name'];
        $image_name = $_FILES['Pimage']['name'];
        $img_des = "upload/".$image_name;
        move_uploaded_file($image_loc,"upload/".$image_name);
        $product_category =$_POST['Pages'];

        //insert Product
        mysqli_query($con,"insert into product(PName,PPrice,PImage,PCategory) values('$product_name','$product_price','$img_des','$product_category')");
	}
?>