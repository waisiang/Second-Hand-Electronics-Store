<?php 
include_once 'database_conn.php';
$sql = "SELECT * FROM product";
$result = $conn->query($sql);
define("IMAGES_PATH", "http://localhost/image/");


?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Product</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Product.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.2.4, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Product">
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
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Home.php" style="padding: 10px 20px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Product.php" style="padding: 10px 20px;">Product</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.php">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="product.php">Product</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
        <p class="u-text u-text-1">&nbsp;Second Hand Electronics <span style="font-weight: 700;"></span>Store
        </p>
      
      </div></header>
    
    <section class="u-align-center u-clearfix u-palette-5-base u-section-1" id="carousel_5772">
      <div class="u-clearfix u-sheet u-sheet-1">
         
        <a href="Add-New.php" class="u-border-2 u-border-grey-75 u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-1">ADD NEW PRODUCT</a>
        <div class="u-expanded-width u-table u-table-responsive u-table-1">
          <table class="u-table-entity u-table-entity-1">
            <colgroup>
              <col width="16.6%">
              <col width="16.6%">
              <col width="16.5%">
              <col width="16.7%">
              <col width="16.89999999999999%">
              <col width="16.59999999999999%">
            </colgroup>
            <thead class="u-palette-5-dark-2 u-table-header u-table-header-1">
              <tr>
                <th class="u-align-center u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-5-dark-1 u-table-cell">Name </th>
                <th class="u-align-center u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-5-dark-1 u-table-cell">Image </th>
                <th class="u-align-center u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-5-dark-1 u-table-cell">Quantity</th>
                <th class="u-align-center u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-5-dark-1 u-table-cell">Price (RM)</th>
                <th class="u-align-center u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-5-dark-1 u-table-cell">Condition</th>
                <th class="u-align-center u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-5-dark-1 u-table-cell">Description</th>
                 <th class="u-align-center u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-5-dark-1 u-table-cell"></th>
                  <th class="u-align-center u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-5-dark-1 u-table-cell"></th>
                   <th class="u-align-center u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-5-dark-1 u-table-cell"></th>
              </tr>
            </thead>
            <tbody class="u-palette-5-dark-3 u-table-body u-table-body-1">
                <?php while($row = $result->fetch_assoc()) { ?>
              <tr>
                <td class="u-align-center u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-7"><?php echo $row["product_name"];?></td>
                <td class="u-align-center u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-8"><img style= "width: 100%; height:100px"; src="<?php echo $row['product_image'];?>"></td>
                
                <td class="u-align-center u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-10"><?php echo $row["product_quantity"];?></td>
                  <td class="u-align-center u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-10"><?php echo $row["product_price"];?></td>
                    <td class="u-align-center u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-10"><?php echo $row["product_condition"];?></td>
                      <td class="u-align-center u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-10"><?php echo $row["product_desc"];?></td>
                <td class="u-align-center u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-11"><a href="Update.php?userid=<?php echo $row["product_id"]; ?>">Edit</a></td>
                <td class="u-align-center u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-12"><a href="delete.php?userid=<?php echo $row["product_id"]; ?>&product_image=<?php echo $row["product_image"]; ?>">Delete</a></td>
                 <td class="u-align-center u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-12"><a href="Product_item.php?userid=<?php echo $row["product_id"]; ?>; ?>">Detail</a></td>
                <?php }
                $conn->close();
                ?>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-8e2f"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">&nbsp;Copyright 2023 @&nbsp;Second Hand Electronics Store</p>
      </div></footer>
   
  
</body></html>