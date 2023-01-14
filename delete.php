<?php 
include_once 'database_conn.php';

$sql = "DELETE FROM product WHERE product_id='" . $_GET["userid"] . "'";

$image_link=strval(trim($_GET["product_image"]," "));


unlink($image_link);



if (mysqli_query($conn, $sql)) {
    $title="Delete! ";
    $message="Record deleted successfully";
} 
mysqli_close($conn);
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
