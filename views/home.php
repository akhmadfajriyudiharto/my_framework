<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<title>Integra Sevima</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <!-- font Awesome -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Rancho" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/main.css" type="text/css">
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-default">
	  	<div class="container">
	    	<div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                    aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
	    		<div class="navbar-brand">Integra Sevima</div>
	    	</div>
		    <div class="collapse navbar-collapse" id="myNavbar">
		    	<ul class="nav navbar-nav navbar-right">
		        	<li><a href="#beranda">BERANDA</a></li>
		        	<li><a href="#kategori">PROFILE</a></li>
		        	<li><a href="<?=BASE_URL.'login/keluar'?>">LOGOUT</a></li>
		      	</ul>
		    </div>
	  	</div>
	</nav>

	<div class="container">
		<div class="row">
			<form>
		    	<div class="col-md-8 col-xs-12">
		    		<!--contentt-->
		    		<div class="row">
		    			<div class="col-md-12">
				    		<div class="content">
				    			<div class="row">
				    				<div class="col-md-12">
				    					<div class="content-title">DETAIL PENGIRIMAN</div>
				    				</div>
				    			</div>
				    			<hr>
				    			<div class="row">
					    			<div class="col-md-6">
										<div class="form-group">
											<label for="alamat">Alamat Pengiriman</label>
					  						<textarea class="form-control" rows="4" id="comment"  placeholder="Masukkan alamat pengiriman anda"></textarea>
										</div>
										<div class="form-group">
											<label for="kota">Kota</label>
										  	<select class="form-control" id="kota">
										    	<option>Pilih Kota</option>
										    	<option>Sumenep</option>
										    	<option>Sumenep</option>
										    	<option>Sumenep</option>
											</select>
										</div>
										<div class="form-group">
											<label for="kecamatan">Kecamatan</label>
										  	<select class="form-control" id="kecamatan">
										    	<option>Pilih Kecamatan</option>
										    	<option>Kalianget</option>
										    	<option>Kalianget</option>
										    	<option>Kalianget</option>
											</select>
										</div>
										<div class="form-group">
											<label for="kelurahan">Kelurahan</label>
										  	<select class="form-control" id="kelurahan">
										    	<option>Pilih Kelurahan</option>
										    	<option>Kalimook</option>
										    	<option>Kalimook</option>
										    	<option>Kalimook</option>
											</select>
										</div>
										<div class="form-group">
											<label for="kodepos">Kode Pos</label>
											<input class="form-control" id="kodepos" type="text" placeholder="Masukkan kode pos">
										</div>
					    			</div>
					    			<div class="col-md-6">
										<div class="form-group">	
											<label for="kodepos">Pilih Kurir</label>
			                                <div class="radio-kurir">
			                                    <label class="col-md-12">
			                                        <div class="cards-pilih-kurir-aktif">
			                                            <div class="row">
			                                                <div class="col-md-1">
			                                        			<input type="radio" name="kurir">
			                                                </div>
			                                                <div class="col-md-3">
			                                                    <div class="kurir" style="background-image: url(img/jne.png)"></div>
			                                                </div>
			                                                <div class="col-md-7">
			                                                    <div class="kurir-name">JNE REG</div>
			                                                </div>
			                                            </div>
			                                        </div>
			                                    </label>
			                                </div>
			                                <div class="radio-kurir">
			                                    <label class="col-md-12">
			                                        <div class="cards-pilih-kurir">
			                                            <div class="row">
			                                                <div class="col-md-1">
			                                        			<input type="radio" name="kurir">
			                                                </div>
			                                                <div class="col-md-3">
			                                                    <div class="kurir" style="background-image: url(img/jnt.gif)"></div>
			                                                </div>
			                                                <div class="col-md-7">
			                                                    <div class="kurir-name">J&T EXPRESS</div>
			                                                </div>
			                                            </div>
			                                        </div>
			                                    </label>
			                                </div>
			                                <div class="radio-kurir">
			                                    <label class="col-md-12">
			                                        <div class="cards-pilih-kurir">
			                                            <div class="row">
			                                                <div class="col-md-1">
			                                        			<input type="radio" name="kurir">
			                                                </div>
			                                                <div class="col-md-3">
			                                                    <div class="kurir" style="background-image: url(img/pos.png)"></div>
			                                                </div>
			                                                <div class="col-md-7">
			                                                    <div class="kurir-name">PAKET KILAT KHUSUS</div>
			                                                </div>
			                                            </div>
			                                        </div>
			                                    </label>
			                                </div>
										</div>
					    			</div>
					    		</div>
				    		</div>
				    	</div>
				    </div>
		    		<!--contentt-->

		    	</div>
		    	<div class="col-md-4 col-xs-12">
		    		
		    		<!--contentt-->
		    		<div class="row">
		    			<div class="col-md-12">
				    		<div class="content">
				    			<div class="row">
				    				<div class="col-md-12">
				    					<div class="content-title">Profile Anda</div>
				    				</div>
				    			</div>
				    			<hr>
				    			<div class="row">
					    			<div class="col-md-7 label-barang">
					    				Harddisk WD Green 2 TB
					    			</div>
					    			<div class="col-md-5 label-harga">
					    				Rp. 1.075.000
					    			</div>
					    		</div>
				    		</div>
				    	</div>
				    </div>
		    		<!--contentt-->
		    	</div>
		    </form>
	    </div>
	</div>
	<div class="footer"></div>
</body>
</html>