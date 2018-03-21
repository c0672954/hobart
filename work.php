<?php
include('header.php');

?>

<div>
	<form action="search.php" method ="post">
		<input type="text" name="search"/>  
		<input type="hidden" name="type" value="book"/>  
		<input type="submit" name="Submit"/>
	</form>
</div>
		
      
        <!-- BEGIN SALE PRODUCT & NEW ARRIVALS -->
        <div class="row margin-bottom-40">
          <!-- BEGIN SALE PRODUCT -->
          <div class="col-md-12 sale-product">
            <h2>Books In Library</h2>

  


            <div class="owl-carousel owl-carousel5">
					<?php 
						include_once('connection.php');
						
							$sth = $myPDO->prepare("SELECT * FROM `products` WHERE category_id=7");
							$sth->execute();
							$result = $sth->fetchAll(PDO::FETCH_ASSOC);
						   
							//print_r($result);
							
			for ($x = 0; $x < count($result); $x++) { ?> 
              <div>
			   
                <div class="product-item">
                  <div class="pi-img-wrapper">
				 
                    <img src="assets/frontend/pages/img/products/<?php echo $result[$x]['product_image']; ?>" class="img-responsive" alt="Berry Lace Dress" >
                    <div>
                      <a href="assets/frontend/pages/img/products/<?php echo $result[$x]['product_image']; ?>" class="btn btn-default fancybox-button">Zoom</a>
                      <a href="#product-pop-up<?php echo $x; ?>" class="btn btn-default fancybox-fast-view">View</a>
                    </div>
                  </div>
                  <h3><a href="item.php?id=<?php echo $result[$x]['id']; ?>"> <?php echo $result[$x]['product_name']; ?></a></h3>
                  <div class="pi-price">In-Stock</div>
                  <a href="bookissue.php?id=<?php echo $result[$x]['id']; ?>" class="btn btn-default add2cart">Click To Issue</a>
                  <!--<div class="sticker sticker-sale"></div> -->
                </div>
              </div>
			  
			  
			  
            <?php 
			} 
			?>   
            </div>
    
         
    
          </div>
          <!-- END SALE PRODUCT -->
        </div>
        <!-- END SALE PRODUCT & NEW ARRIVALS -->
<!-- BEGIN fast view of a book library -->
    <?php 
							$sth = $myPDO->prepare("SELECT * FROM `products` WHERE category_id=7");
							$sth->execute();
							$result = $sth->fetchAll(PDO::FETCH_ASSOC);
						   
							
    		 for ($x = 0; $x < count($result); $x++) {
				 ?>
	<div id="product-pop-up<?php echo $x; ?>" style="display: none; width: 700px;">
		 
            <div class="product-page product-pop-up">
              <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-3">
                  <div class="product-main-image">
                    <img src="assets/frontend/pages/img/products/<?php echo $result[$x]['product_image']; ?>" alt="Cool green dress with red bell" class="img-responsive">
                  </div>
                  
                </div>
                <div class="col-md-6 col-sm-6 col-xs-9">
                  <h2><?php echo $result[$x]['product_name']; ?></h2>
                  <div class="price-availability-block clearfix">
                    <div class="price">
                      <h6>By Raman Sandhu</h6>
                      <!--<em>$<span>62.00</span></em> -->
                    </div>
                    <div class="availability">
                      Availability: <strong>In Stock</strong>
                    </div>
                  </div>
                  <div class="description">
                    <p><?php echo $result[$x]['product_desc']; ?></p>
                  </div>
                 
                    <a href="bookissue.php?id=<?php echo $result[$x]['id']; ?>" button class="btn btn-primary" type="submit">Click To Issue</button>
                    <a href="bookrate.php?id=<?php echo $result[$x]['id']; ?>" class="btn btn-default">More details</a>
                  </div>
                </div>

               
              </div>
			     
            </div>
    </div>
	<?php 
			} 
			?>
    <!-- END fast view of a product -->


<?php
include('footer.php');

?>