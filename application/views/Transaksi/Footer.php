<!-- footer -->
		<footer id="colorlib-footer" role="contentinfo" style="background-color: rgb(50, 50, 50)">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-lg-2">
					</div>
					<div class="col-lg-3 colorlib-widget">
						<h4><p class="txt-foot">Our Web</p></h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#" style="color: grey; font-size: 16px;">Home</a></li>
								<li><a href="#" style="color: grey; font-size: 16px;">Shop</li>
								<li><a href="#" style="color: grey; font-size: 16px;">Offline Store</a></li>
								<li><a href="#" style="color: grey; font-size: 16px;">1968</a></li>
								<li><a href="#" style="color: grey; font-size: 16px;">Contact</a></li>
								<!-- <li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li> -->
							</ul>
						</p>
					</div>
					<div class="col-lg-3 colorlib-widget">
						<h4><p class="txt-foot">EXPERIENCE</p></h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="<?php echo site_url('Home/faq');?>" style="color: grey; font-size: 16px;">FAQ</a></li>
								<li><a href="#" style="color: grey; font-size: 16px;">Returns / Shipping</a></li>
								<li class="active"><a href="<?php echo site_url('Home/storepolicy');?>" style="color: grey; font-size: 16px;">Store Policy</a></li>
								<li><a href="<?php echo site_url('Home/payment');?>" style="color: grey; font-size: 16px;">Payment Methods</a></li>
							</ul>
						</p>
					</div>

					<div class="col-lg-3 colorlib-widget">
						<h4 ><p class="txt-foot">FOLLOW US</p></h4>
						<ul class="colorlib-social-icons">
							<li><a href="https://www.facebook.com/embajeansid/" target="_blank" style="color: grey; font-size: 16px;"><i class="icon-facebook"></i></a></li>
							<li><a href="https://www.instagram.com/embajeans/" target="_blank" style="color: grey; font-size: 16px;"><i class="icon-instagram"></i></a></li>
							<li><a href="https://www.youtube.com/channel/UCdifDj9A6WToN6L6ZMw1bKQ" target="_blank" style="color: grey; font-size: 16px;"><i class="icon-youtube"></i></a></li>
						</ul>
					</div>

						<!-- <div class="row">
							<div class="col-lg-3">
						<h4><p class="txt-foot">Join Our Letter</p></h4>
							<div class="row">
									<?php
									$letter = array(
										'name' => 'email',
										'placeholder' => 'embajeans@embajeans.com',
										'class' => 'form-control',
										'type' => 'email',
									);
									$btn = array(
												'class' => 'btn btn-warning',
												'value' => 'Subscribe Now',
												'style' => 'size : 15px;',
												);
										echo '<div class="col-lg-12">';
										echo form_open();
											echo form_input($letter);
										echo '</div>';
										echo '<div class="col-md-4 col-md-offset-2" id="subscribe">';
											echo form_submit($btn);
										echo form_close();
										echo '</div>';
									?>
								
							</div>
						</div>
						</div> -->
					</div>

				</div>
		</footer>
		<div class="copy foot">
				<div class="row">
					<div class="col-md-12 col-lg-12 col-xs-12">
						<p class="text-center copyright">
							
							<span class="block"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							&copy;<script>document.write(new Date().getFullYear());</script> by EmbaJeans
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
						</p>
					</div>
				</div>
			</div>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="<?php echo base_url('assets/store/');?>js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo base_url('assets/store/');?>js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url('assets/store/');?>js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?php echo base_url('assets/store/');?>js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="<?php echo base_url('assets/store/');?>js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="<?php echo base_url('assets/store/');?>js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="<?php echo base_url('assets/store/');?>js/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo base_url('assets/store/');?>js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="<?php echo base_url('assets/store/');?>js/bootstrap-datepicker.js"></script>
	<!-- Stellar Parallax -->
	<script src="<?php echo base_url('assets/store/');?>js/jquery.stellar.min.js"></script>
	<!-- Main -->
	<script src="<?php echo base_url('assets/store/');?>js/main.js"></script>

	<script>
		<?php
		$user_id = empty($user->id) ? null : $user->id;
		?>
		$(document).ready(function() {
			$('#btn-user').click(function() {
				var email = $('#frm-email').val();
				var namadepan = $('#frm-namadepan').val();
				var namabelakang = $('#frm-namabelakang').val();
				var telephon = $('#frm-no').val();
				var date = $('#frm-date').val();
				var jk = $("#frm-jk").val();
				var img = $('#frm-img').val();
				var id = '<?php echo $user_id;?>';
				//console.log(email, namadepan, namabelakang, telphon, date, jk, img);

				$.ajax({
					url: '<?php echo site_url('User/update');?>',
					type: 'POST',					
					data: {email : email, namadepan : namadepan, namabelakang : namabelakang, telephon : telephon, date : date, jk : jk, img : img, id : id},
				})
				.done(function() {
					console.log("success");
				})
				.fail(function() {
					console.log("error");
				})
				.always(function() {
					console.log("complete");
				});
				

			});

		});

	  var PreviewImage = function(event) {
        var output = document.getElementById('uploadPreview');
        output.src = URL.createObjectURL(event.target.files[0]);
        //console.log(output);
      };

	$('#myprofile').hide();
	$(document).ready(function() {
		$("#btn-akun").click(function() {
			$('#belanjaku').hide();
			$('#myprofile').show();
			console.log('akun');
		});
		$("#btn-belanja").click(function() {
			$('#myprofile').hide(100);
			$('#belanjaku').show();
			console.log('belanja');
		});


		$("#modal-detail").on('show.bs.modal', function(e){
            var rowid = $(e.relatedTarget).data('id');
            //get data
            console.log(rowid);
            $.ajax({
                type : "POST",
                url : "<?php echo site_url('Ordering/get_data_detail');?>",
                data : 'rowid='+rowid,
                success : function(data){
                    $('#mod_get_detail_trans').html(data);
                }
            })
        });


	});
	</script>