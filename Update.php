<?php 
include_once 'database_conn.php';

$sql = "select * from product where product_id='" . $_GET["userid"] . "'";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($result))
{
        $id = $row["product_id"];
   $name = $row["product_name"];
$image = $row["product_image"];
$desc=$row["product_desc"];
$quantity = $row["product_quantity"];
$condition= $row["product_condition"];
$price = $row["product_price"];
}



?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Update</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Update.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.2.4, nicepage.com">
    <meta name="referrer" content="origin">

    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Update">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode" data-lang="en"><header class="u-clearfix u-header u-header" id="sec-7bb5"><div class="u-clearfix u-sheet u-sheet-1">
        <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#" style="padding: 10px 20px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#" target="_blank" style="padding: 10px 20px;">Product</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="#">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="#" target="_blank">Product</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
        <p class="u-text u-text-1">&nbsp;Second Hand Electronics <span style="font-weight: 700;"></span>Store
        </p>
              </div></header>
    <section class="u-clearfix u-section-1" id="carousel_29d5">
      <div class="u-clearfix u-sheet u-valign-top-xs u-sheet-1">
        <div class="u-form u-form-1">
         <form action="/Second-Hand-Electronics-Store/Update_Process.php" method="post" enctype="multipart/form-data" >
             <div>
              <img style= "width: 100%; height:100%"; src="<?php echo $image;?>">
                 <label style= "margin: auto 40%" ><?php echo $image;?></label>
                 <div> 
                 <div>
              <input type="hidden" placeholder="" id="product_id" name="product_id" value="<?php echo $id;?>" >
            </div>
            <div>
              <label >Product Name</label>
              <input type="text" placeholder="" id="product_name" name="product_name" value="<?php echo $name;?>" >
            </div>
            <div >
              <label >Product Image</label>
              <input type="file" placeholder="" id="product_image" name="product_image" value=""></input>
            </div>
            <div >
              <label  class="u-label u-label-2">Product Price</label>
              <input type="text" placeholder="" id="product_price" name="product_price" value="<?php echo $price;?>">
            </div>
           
            <div>
              <label class="u-label u-label-3">Product Quantity</label>
              <input type="text" placeholder="" id="product_quantity" name="product_quantity"  value="<?php echo $quantity;?>">
            </div>
            <div>
              <label class="u-label u-label-4">Product Condition</label>
              <input type="text" placeholder="" id="product_condition" name="product_condition" value="<?php echo $condition;?>">
            </div>
            <div >
              <label>Product Description</label>
              <textarea rows="4" cols="50" id="product_desc" name="product_desc"   ><?php echo $desc;?></textarea>
            </div>
                <input type="submit" name="submit" value="Upload"/>
          </form>
        </div>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-8e2f"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">&nbsp;Copyright 2023 @&nbsp;Second Hand Electronics Store</p>
      </div></footer>
   
  
</body></html>
