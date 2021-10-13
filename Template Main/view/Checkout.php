<?php require ("view/home/header.php");?>
  
<section class="shop checkout section">
			<div class="container">
				<div class="row"> 
					<div class="col-lg-8 col-12">
						<div class="checkout-form">
							<h2>Make Your Checkout Here</h2>
 <form action="index.php?action=added&controller=Checkout" method="POST">
 
 
   
   <div class="form-group">
     <label for="des"> Date </label>
     <input type="datetime-local" class="form-control" placeholder="" name= "date">
   </div>
  
							
   <div class="form-group">
     <label for="des"> id_customer (login form!)</label>
     <input type="text" class="form-control" value=""name= "id_client">
   </div>
    <button type="submit" class="btn btn-primary" name ="submitProduit">Valider</button>
 </form>
 </div>
 </div>
 </div>
 </div>
 </section>
 <section class="shop-newsletter section">
    <div class="container">
        <div class="inner-top">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-12">
                    <!-- Start Newsletter Inner -->
                    <div class="inner">
                        <h4>Newsletter</h4>
                        <p> Subscribe to our newsletter and get <span>10%</span> off your first purchase</p>
                        <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                            <input name="EMAIL" placeholder="Your email address" required="" type="email">
                            <button class="btn">Subscribe</button>
                        </form>
                    </div>
                    <!-- End Newsletter Inner -->
                </div>
            </div>
        </div>
    </div>
</section>
 <?php require ("view/home/footer.php");?>
