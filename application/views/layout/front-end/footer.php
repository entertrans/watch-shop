<!-- FOOTER -->
<!-- footer -->  
<footer id="aa-footer">
	<!-- footer bottom -->
	<div class="aa-footer-top" style="padding-top: 10px; padding-bottom: 20px;">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="aa-footer-top-area">
						<div class="row">
							<div class="col-md-4 col-sm-6">
								<div class="aa-footer-widget">
									<h3>Patner</h3>
									<ul class="aa-footer-nav">
										<li><a href="#">Home</a></li>
										<li><a href="#">Our Services</a></li>
										<li><a href="#">Our Products</a></li>
										<li><a href="#">About Us</a></li>
										<li><a href="#">Contact Us</a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-4 col-sm-6">
								<div class="aa-footer-widget">
									<div class="aa-footer-widget">
										<h3>Info Pengiriman</h3>
										<ul class="aa-footer-nav">
											<li><a href="#">Delivery</a></li>
											<li><a href="#">Returns</a></li>
											<li><a href="#">Services</a></li>
											<li><a href="#">Discount</a></li>
											<li><a href="#">Special Offer</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6">
								<div class="aa-footer-widget">
									<div class="aa-footer-widget">
										<h3>Info Pembayaran</h3>
										<address>
											<p> 25 Astor Pl, NY 10003, USA</p>
											<p><span class="fa fa-phone"></span>+1 212-982-4589</p>
											<p><span class="fa fa-envelope"></span>dailyshop@gmail.com</p>
										</address>
										<div class="aa-footer-social">
											<a href="#"><span class="fa fa-facebook"></span></a>
											<a href="#"><span class="fa fa-twitter"></span></a>
											<a href="#"><span class="fa fa-google-plus"></span></a>
											<a href="#"><span class="fa fa-youtube"></span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</footer>
<!-- / footer -->
</main>

</body>

</html>

<!-- <script src="<?= base_url('assets/front-end/jquery/jquery.min.js') ?>"></script>
	<script src="<?= base_url('assets/front-end/vendor/bootstrap-4.4.1/js/bootstrap.min.js') ?>"></script> -->

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="<?= base_url('assets/daily-shop-theme/js/bootstrap.js') ?>"></script>  
	<!-- SmartMenus jQuery plugin -->
	<script type="text/javascript" src="<?= base_url('assets/daily-shop-theme/js/jquery.smartmenus.js') ?>"></script>
	<!-- SmartMenus jQuery Bootstrap Addon -->
	<script type="text/javascript" src="<?= base_url('assets/daily-shop-theme/js/jquery.smartmenus.bootstrap.js') ?>"></script>  
	<!-- To Slider JS -->
	<script src="<?= base_url('assets/daily-shop-theme/js/sequence.js') ?>"></script>
	<script src="<?= base_url('assets/daily-shop-theme/js/sequence-theme.modern-slide-in.js') ?>"></script>  
	<!-- Product view slider -->
	<script type="text/javascript" src="<?= base_url('assets/daily-shop-theme/js/jquery.simpleGallery.js') ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/daily-shop-theme/js/jquery.simpleLens.js') ?>"></script>
	<!-- slick slider -->
	<script type="text/javascript" src="<?= base_url('assets/daily-shop-theme/js/slick.js') ?>"></script>
	<!-- Price picker slider -->
	<script type="text/javascript" src="<?= base_url('assets/daily-shop-theme/js/nouislider.js') ?>"></script>
	<!-- Custom js -->
	<script src="<?= base_url('assets/daily-shop-theme/js/custom.js') ?>"></script> 

	<script>
		
		function scrolto() {
			$("html, body").animate({ scrollTop: $("#aa-product").offset().top }, 500);
		}
	</script>
	
	<script>
		$(document).ready(function(){

			$("#propinsi_asal").click(function(){
				$.post("<?php echo base_url(); ?>index.php/rajaongkir/getCity/"+$('#propinsi_asal').val(),function(obj){
					$('#origin').html(obj);
				});
				
			});

			$("#propinsi_tujuan").click(function(){
				$.post("<?php echo base_url(); ?>index.php/rajaongkir/getCity/"+$('#propinsi_tujuan').val(),function(obj){
					$('#destination').html(obj);
				});
				
			});

	/*
	$("#cari").click(function(){
		$.post("<?php echo base_url(); ?>index.php/rajaongkir/getCost/"+$('#origin').val()+'&dest='+$('#destination').val()+'&berat='+$('#berat').val()+'&courier='+$('#courier').val(),function(obj){
			$('#hasil').html(obj);
		});
	});

	*/	
});
</script>