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




?><!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Product 1 Title">
    <meta name="description" content="">
    <title>Product_item</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Product_item.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.2.4, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    <style>
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Product_item">
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
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.php">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Product.php" >Product</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
        <p class="u-text u-text-1">&nbsp;Second Hand Electronics <span style="font-weight: 700;"></span>Store
        </p>
       
      </div></header>
    <section class="u-clearfix u-grey-10 u-section-1" id="sec-044e">
      <div class="u-clearfix u-sheet u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-valign-middle-xs u-sheet-1"><!--product--><!--product_options_json--><!--{"source":""}--><!--/product_options_json--><!--product_item-->
        <div class="u-container-style u-expanded-width u-product u-white u-product-1">
          <div class="u-container-layout u-valign-middle-md u-valign-top-xs u-container-layout-1"><!--product_image-->
            <img alt="" class="u-image u-image-default u-product-control u-image-1" data-image-width="2000" data-image-height="1333" src="<?php echo $image; ?>"><!--/product_image--><!--product_title-->
            <h2 class="u-product-control u-text u-text-default u-text-1">
              <a class="u-product-title-link" href="#"><!--product_title_content--><?php echo $name; ?><!--/product_title_content--></a>
            </h2><!--/product_title--><!--product_price-->
            <div class="u-product-control u-product-price u-product-price-1">
              <div class="u-price-wrapper u-spacing-10"><!--product_old_price-->
                <div class="u-hide-price u-old-price" style="text-decoration: line-through !important;"><!--product_old_price_content-->$20.00<!--/product_old_price_content--></div><!--/product_old_price--><!--product_regular_price-->
                <div class="u-price u-text-palette-2-base" style="font-size: 1.875rem; font-weight: 700;"><!--product_regular_price_content--><?php echo "RM"." ".$price; ?><!--/product_regular_price_content--></div><!--/product_regular_price-->
              </div>
            </div><!--/product_price--><!--product_content-->
            <div class="u-product-control u-product-desc u-text u-text-2"><!--product_content_content-->
              <p>Quantity: <?php echo $quantity;  ?></p><!--/product_content_content-->
            </div><!--/product_content-->
            <div class="u-product-control u-product-desc u-text u-text-2"><!--product_content_content-->
              <p>Description: <?php echo $desc;  ?></p><!--/product_content_content-->
            </div><!--/product_content-->
            <div class="u-product-control u-product-desc u-text u-text-2"><!--product_content_content-->
              <p>Condition:  <?php echo $condition;  ?></p><!--/product_content_content-->
            </div><!--/product_content-->
             <div class="u-product-control u-product-desc u-text u-text-2"><!--product_content_content-->
              <a href="Product.php" class="button">Back</a><!--/product_content_content-->
            </div><!--/product_content-->
          </div>
        </div><!--/product_item--><!--/product-->
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-8e2f"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">&nbsp;Copyright 2023 @&nbsp;Second Hand Electronics Store</p>
      </div></footer>
    
  
</body></html>