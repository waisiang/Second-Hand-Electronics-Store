<?php
include_once 'database_conn.php';
        
        if((isset($_POST['submit'])) && ($_FILES['product_image']['name'] !=""))
        {
	        $product_id = $_POST['product_id'];
	        $product_name = $_POST['product_name'];
	        $product_desc = $_POST['product_desc'];
	        $product_price = $_POST['product_price'];
	        $product_quantity = $_POST['product_quantity'];
	        $product_condition = $_POST['product_condition'];
	        $img_name = $_FILES['product_image']['name'];
	        $img_size = $_FILES['product_image']['size'];
	        $tmp_name = $_FILES['product_image']['tmp_name'];
	        $error = $_FILES['product_image']['error'];

	        if ($error === 0) {
		        if ($img_size > 500000) {
		            $title = "Fail! "; 
			        $message = "Sorry, your file is too large.";
		        }else {
			        $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			        $img_ex_lc = strtolower($img_ex);
			        $allowed_exs = array("jpg", "jpeg", "png"); 

			    if (in_array($img_ex_lc, $allowed_exs)) {
				    $new_img_name =$img_ex_lc;
				    $img_upload_path = "image/".$img_name;
			        $sql_name_data = "image/".$img_name;
				    move_uploaded_file($tmp_name, $img_upload_path);

			        $sql = "UPDATE product SET product_name='$product_name', product_image='$sql_name_data', product_desc='$product_desc', product_price='$product_price', product_quantity='$product_quantity',product_condition='$product_condition' WHERE product_id='$product_id'";
			
			     if (mysqli_query($conn, $sql)) {
			        $title = "Successfully!";
            	    $message = "Updated created successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
			
	        }else {
			        $title = "Fail!";
				    $message = "You can't upload files of this type";
			}
		}
	}else {
	    $title = "Fail!";
		$message = "unknown error occurred!";}
}else{
            $product_id = $_POST['product_id'];
	        $product_name = $_POST['product_name'];
	        $product_desc = $_POST['product_desc'];
	        $product_price = $_POST['product_price'];
	        $product_quantity = $_POST['product_quantity'];
	        $product_condition = $_POST['product_condition'];
             $sql = "UPDATE product SET product_name='$product_name', product_desc='$product_desc', product_price='$product_price', product_quantity='$product_quantity',product_condition='$product_condition' WHERE product_id= '$product_id'";
             
              if (mysqli_query($conn, $sql)) {
			        $title = "Successfully!";
            	    $message = "Updated created successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
}



?>
<!DOCTYPE html>
<html>
<title><?php echo "Uploading;" ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
div {
  margin-bottom: 15px;
  padding: 4px 12px;
}

.danger {
  background-color: #ffdddd;
  border-left: 6px solid #f44336;
}

.success {
  background-color: #ddffdd;
  border-left: 6px solid #04AA6D;
}

.info {
  background-color: #e7f3fe;
  border-left: 6px solid #2196F3;
}


.warning {
  background-color: #ffffcc;
  border-left: 6px solid #ffeb3b;
}
</style>

<body class="w3-container w3-auto">
<div class="success">
  <p><strong><?php echo $title; ?></strong><?php echo $message; ?></p>
  <a href="Product.php" style="border-style: none;padding: 0;width: 150px; color: #fff !important;background-color: #f44336 !important; border: none; display: inline-block; padding: 8px 16px; vertical-align: middle; overflow: hidden; text-decoration: none; text-transform: none; text-align: center; cursor: pointer; white-space: nowrap;margin:0 50%;">Back</a>
</div>


</body>
</html>
