<?php require("view/home/header.php")?>


<script>
$(document).ready(function(){
 
  
  $("#successmessage").on('hide.bs.modal', function(){
location.reload();
  });
});

function getXMLHttpRequest() {
var xhr = null;
try
{
xhr = new ActiveXObject("Microsoft.XMLHTTP"); // Essayer IE
}
catch(e) // Echec, utiliser l'objet standard
{
xhr = new XMLHttpRequest();
}
return xhr;
}
function ajout(str) {
	
			
				var xhr = new XMLHttpRequest();
				xhr.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
						document.getElementById("resultat").innerHTML = this.responseText;
					
						
					}
				};
				xhr.open("GET", 'index.php?action=ajoutproduit&&reference='+str+"&controller=Panier" , true);
				xhr.send();
			
			}
		

  </script>
		

		<!-- Breadcrumbs -->
		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="bread-inner">
							<ul class="bread-list">
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
		
		<!-- Product Style -->
		<section class="product-area shop-sidebar shop section">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-4 col-12">
						<div class="shop-sidebar">
								<!-- Single Widget -->
								<div class="single-widget category">
									<h3 class="title">Categories</h3>
									<ul class="categor-list">
									<li>
				<a href="index.php?action=getAlldress&&designation='Dress'&controller=ProdFemme">dress</a></li>
								<li>
			<a href="index.php?action=getAllskirt&&designation='skirt'&controller=ProdFemme">skirt</a></li>
								<li>
			<a href="index.php?action=getAllTshirt&&designation='T-shirt'&controller=ProdFemme">T-shirt</a></li>
								<li>
								<a href="index.php?action=getAllshirt&&designation='shirt'&controller=ProdFemme">
								shirt</a></li>
								<li><a href="index.php?action=getAlljeans&&designation='jeans'&controller=ProdFemme">jeans</a>
									</li>
									</ul>
								</div>
								<!--/ End Single Widget -->
								<!-- Shop By Price -->
									<div class="single-widget range">
										<h3 class="title"> Price</h3>
										<div class="price-filter">
											<div class="price-filter-inner">
												<div id="slider-range"></div>
													<div class="price_slider_amount">
													<div class="label-input">
														<span>Range:</span>
														<p><span>99.00dt-300.00dt</span></p>
													</div>

												</div>
											</div>
										</div>
								    </div>
									<!--/ End Shop By Price -->
								
								
						</div>
					</div>
					<div class="col-lg-9 col-md-8 col-12">
						<div class="row">
							<div class="col-12">
								
							</div>
						</div>
						<div class="row">
							<?php foreach($produits as $p){ ?>
							<div class="col-lg-4 col-md-6 col-12">
								<div class="single-product">
									<div class="product-img">
									
										<a href="">
<?php echo "<img  class=\"default-img\" src=\"uploads/products/$p->photo\"  alt=\"#\">";?>
<?php echo "<img  class=\"hover-img\" src=\"uploads/products/$p->photo\"  alt=\"#\"  >";?>
										</a>
										
										<div class="button-head">
										
											<div class="product-action-2"><a title="Add to cart" 
											href=""></a>
											
											<form>
    <br>
	<a data-toggle="modal" data-target="#successmessage" title="Quick View" href="" 
													onclick="ajout(<?php echo $p->reference ?>)">
													<span>Add to cart</span></a>	

    </form>
  
	</div>
											
										
										</div>
									</div>
									<div class="product-content">
										<h6> <?php echo $p->designation ?></h6>
										<div class="product-price">
											<span><?php echo $p->prix ?>DT</span>
											
										</div>
										
										
									</div>
								
									
								</div>
							</div>			
							
									
								
							
							<?php  } ?>
							
							<div id="resultat">
							<div class="modal fade" id="successmessage" style="
							max-height:300px;height:300px;width=40%;max-width=40%;    
							overflow-y:hidden;"tabindex="-1" role="dialog">
				                <div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button"
							 class="close" data-dismiss="modal" aria-label="Close">
							 <span class="ti-close" aria-hidden="true"></span></button>
						</div>
						<div class="modal-body">
						
                               <h3 style="color:orange;text-align:center;">product added</h3>
							   <p style="text-align:center;"> Continue your Shopping ! </p>
						<div class="row no-gutters">
							
									
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Modal end -->
			<!-- Modal end -->
							</div>
				
												
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Product Style 1  -->	
	
	
		
		<!-- Start Footer Area -->
		<?php require("view/home/footer.php")?>