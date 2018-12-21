<!--modal-->
            <div class="modal fade" id="modal-upload" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="largeModalLabel">Upload Bukti Transfer</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                           
                           		<form action="<?php echo site_url('Ordering/upbukti/'.$id_transaksi);?>" method="post" enctype="multipart/form-data">
                           			<img src="<?php echo base_url('assets/Gambar/Blank-profile.png');?>" id="uploadPreviewBukti" class="img-responsive">
                                        <label>Gambar Depan <p style="color:red">(max 200kb)</p></label>
                                        <input id="uploadImageUpload" type="file" required="" name="gambar" onchange="PreviewImageUpload();">
                                        <input type="submit" class="btn btn-primary" value="Upload">
                           		</form>
                           	</div>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- end modal -->

<div class="colorlib-shop main-page" id="shop-page">
			<div class="container">
				<div class="row row-pb-lg">
					<div class="col-md-10 col-md-offset-1">
						<div class="process-wrap">
							<div class="process text-center active">
								<p><span>01</span></p>
								<h3>Shopping Cart</h3>
							</div>
							<div class="process text-center active">
								<p><span>02</span></p>
								<h3>Checkout</h3>
							</div>
							<div class="process text-center active">
								<p><span>03</span></p>
								<h3>Order Complete & Transfer bukti</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-10 col-md-offset-1 text-center">
						<!-- <span class="icon"><i class="icon-shopping-cart"></i></span> -->
						<p>Batas Pembayaran</p>
						<?php
							if(!empty($countDown)){
								echo '<p id="limittime"></p>';
							}else{
								echo "<p id='demo'></p>";
							}
						?>
						<h4>Jumlah Tagihan :<br>
							<p><br>Rp. <?php echo number_format($totalharga,2);?></p>
							<p>Nomor Rekening</p>
							<p>0113135112</p>
							<p>An : Kasih Karunia Sejati PT</p>
							<span><img src="<?php echo base_url('assets/gambar/BCA.png');?>" style="height : 50px; padding-left: 400px;" class="img img-responsive"></span>
							
								<button class="btn btn-primary"><i class="fa fa-plus-circle" data-toggle="modal" data-target="#modal-upload"> Upload Bukti</i></button>

						</h4>
						<!-- <p>
							<a href="index.html"class="btn btn-primary">Home</a>
							<a href="shop.html"class="btn btn-primary btn-outline">Continue Shopping</a>
						</p> -->
					</div>
				</div>
			</div>
		</div>


<script>
// Set the date we're counting down to
//var countDownDate = new Date("Jan 5, 2019 15:37:25").getTime();
	var tomorrow2 = new Date("<?php echo $countDown;?>").getTime();
	


// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = tomorrow2 - now;
  //var distance2 = tomorrow2 - now;


  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  if(tomorrow2 != 0){

  	document.getElementById("limittime").innerHTML = hours + "Jam "
  + minutes + "menit " + seconds + "s ";	

	  if(distance < 0){
	  	clearInterval(x);
	    document.getElementById("limittime").innerHTML = "EXPIRED";	
	  }

	  console.log(tomorrow2);

  }else{

	  	document.getElementById("demo").innerHTML = hours + "Jam "
	  + minutes + "menit " + seconds + "s ";

	  

	  // If the count down is finished, write some text 
	  if (distance < 0) {
	    clearInterval(x);
	    document.getElementById("demo").innerHTML = "EXPIRED";
	  }

	  console.log(tomorrow);

  }

  

}, 1000);



	function PreviewImageUpload() {
		var oFReader = new FileReader();
		oFReader.readAsDataURL(document.getElementById("uploadImageUpload").files[0]);
		oFReader.onload = function (oFREvent){
			document.getElementById("uploadPreviewBukti").src = oFREvent.target.result;
		};
	};




</script>