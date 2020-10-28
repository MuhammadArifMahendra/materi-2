<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/d0ee1fa2b0.js" crossorigin="anonymous"></script>  
<link rel="stylesheet" type="text/css" href="views/style.css">
    <title>Sugoi Store</title>
  </head>
  <body>

		<nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
			<div class="container">

		  <a class="navbar-brand font-weight-bold" href="#">SUGOI STORE</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav ml-auto mr-4">
		      <li class="nav-item active">
		        <a class="nav-link" href="#">Beranda <span class="sr-only">(current)</span></a>
		      </li>
		         <li class="nav-item active">
		        <a class="nav-link" href="#">Reseller <span class="sr-only">(current)</span></a>
		      </li>
		           <li class="nav-item active">
		        <a class="nav-link" href="#">Hubungi Kami <span class="sr-only">(current)</span></a>
		      </li>
		         <li class="nav-item active">
		        <a class="nav-link" href="login">Bantuan Login <span class="sr-only">(current)</span></a>
		      </li>
		    
		    
		    </ul>
		    <form class="form-inline my-2 my-lg-0">
		      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
		      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		    </form>
		    <div class="icon">
		    	<h5>
		    		<i class="fas fa-cart-plus ml-3 mr-3"></i>
		    		<i class="fas fa-envelope mr-3"></i>
		    		<i class="fas fa-bell mr-3"></i>
		    		<i class="far fa-user"></i>
		    	</h5>
		    </div>
		  </div>
		  </div>
		</nav>

		<div class="row mt-5 no-gutters">
			<div class="col-md-2 bg-light">
			<ul class="list-group list-group-flush p-2 pt-3">
			  <li class="list-group-item bg-warning"><i class="fas fa-list"></i> KATAGORI PRODUK</li>
			  <li class="list-group-item"><i class="fas fa-angle-right"></i> Headphone Best Seller</li>
			  <li class="list-group-item"><i class="fas fa-angle-right"></i> Laptop Best Seller</li>
			  <li class="list-group-item"><i class="fas fa-angle-right"></i> Kamera Best Seller</li>
			  <li class="list-group-item"><i class="fas fa-angle-right"></i> Jaket Best Seller</li>
			</ul>
		</div>
		<div class="col-md-10">
			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img src="public/slide2.jpg" class="d-block w-100" alt="...">
			    </div>
			    <div class="carousel-item">
			      <img src="public/slide1.jpg" class="d-block w-100" alt="...">
			    </div>
			    <div class="carousel-item">
			      <img src="public/slide3.jpg" class="d-block w-100" alt="...">
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>

			<h4 class="text-center font-weight-bold m-4">PRODUK TERBARU</h4>

			<div class="row mx-auto">
				<div class="card mr-2 ml-2" style="width: 16rem;">
				  <img src="public/jacket.jpg" class="card-img-top" alt="...">
				  <div class="card-body">
				    <h5 class="card-title">Jaket Kulit</h5>
				      <p class="card-text">Jaket Kulit Best Reseller.</p>
				  	  <i class="fas fa-star"></i>
				 	  <i class="fas fa-star"></i>
				  	  <i class="fas fa-star"></i>
				      <i class="fas fa-star"></i>
				      <i class="fas fa-star"></i><br>
				    <a href="#" class="btn btn-primary" data-target="#produk1" data-toggle="modal" >Detail</a>
				    <a href="#" class="btn btn-danger">Rp. 900.000</a>
				  </div>
				</div>
					<div class="row mx-auto">
				<div class="card mr-2 ml-2" style="width: 16rem;">
				  <img src="public/headphone.jpg" class="card-img-top" alt="...">
				  <div class="card-body">
				    <h5 class="card-title">Headphone</h5>
				      <p class="card-text">Headphone Best Reseller.</p>
				  	  <i class="fas fa-star"></i>
				 	  <i class="fas fa-star"></i>
				  	  <i class="fas fa-star"></i>
				      <i class="fas fa-star"></i>
				      <i class="fas fa-star"></i><br>
				    <a href="#" class="btn btn-primary" data-target="#produk2" data-toggle="modal">Detail</a>
				    <a href="#" class="btn btn-danger">Rp. 300.000</a>
				  </div>
				</div>
					<div class="row mx-auto">
				<div class="card mr-2 ml-2" style="width: 16rem;">
				  <img src="public/laptop.jpg" class="card-img-top" alt="...">
				  <div class="card-body">
				    <h5 class="card-title">Laptop</h5>
				      <p class="card-text">Laptop Best Reseller.</p>
				  	  <i class="fas fa-star"></i>
				 	  <i class="fas fa-star"></i>
				  	  <i class="fas fa-star"></i>
				      <i class="fas fa-star"></i>
				      <i class="fas fa-star"></i><br>
				    <a href="#" class="btn btn-primary" data-target="#produk3" data-toggle="modal">Detail</a>
				    <a href="#" class="btn btn-danger">Rp. 2.900.000</a>
				  </div>
				</div>
					<div class="row mx-auto">
				<div class="card mr-2 ml-2" style="width: 16rem;">
				  <img src="public/kamera.jpg" class="card-img-top" alt="...">
				  <div class="card-body">
				    <h5 class="card-title">Kamera Dslr</h5>
				      <p class="card-text">Kamera Dslr Best Reseller.</p>
				  	  <i class="fas fa-star"></i>
				 	  <i class="fas fa-star"></i>
				  	  <i class="fas fa-star"></i>
				      <i class="fas fa-star"></i>
				      <i class="fas fa-star"></i><br>
				    <a href="#" class="btn btn-primary" data-target="#produk4" data-toggle="modal">Detail</a>
				    <a href="#" class="btn btn-danger">Rp. 4.900.000</a>
				  </div>
				</div>
							<!-- Modal -->
				<div class="modal fade" id="produk1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Detail Produk</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <div class="row">
				        	<div class="col-md-6"></div>
				        	<img src="public/jacket.jpg">
				        	<div class="col-md-6"></div>
				        	<table class="table table-borderless">
				        		<tr>
				        			<th>Nama Produk</th>
				        			<td>Jacket</td>
				        		</tr>	
				        		<tr>
				        			<th>Stock</th>
				        			<td>155</td>
				        		</tr>	
				        	</table>
				        </div>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				        <button type="button" class="btn btn-primary">Save changes</button>
				      </div>
				    </div>
				  </div>
				</div>
								<div class="modal fade" id="produk2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Detail Produk</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <div class="row">
				        	<div class="col-md-6"></div>
				        	<img src="public/headphone.jpg">
				        	<div class="col-md-6"></div>
				        	<table class="table table-borderless">
				        		<tr>
				        			<th>Nama Produk</th>
				        			<td>Headphone</td>
				        		</tr>	
				        		<tr>
				        			<th>Stock</th>
				        			<td>200</td>
				        		</tr>	
				        	</table>
				        </div>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				        <button type="button" class="btn btn-primary">Save changes</button>
				      </div>
				    </div>
				  </div>
				  	<div class="modal fade" id="produk3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Detail Produk</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <div class="row">
				        	<div class="col-md-6"></div>
				        	<img src="public/laptop.jpg">
				        	<div class="col-md-6"></div>
				        	<table class="table table-borderless">
				        		<tr>
				        			<th>Nama Produk</th>
				        			<td>Laptop</td>
				        		</tr>	
				        		<tr>
				        			<th>Stock</th>
				        			<td>100</td>
				        		</tr>	
				        	</table>
				        </div>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				        <button type="button" class="btn btn-primary">Save changes</button>
				      </div>
				    </div>
				  </div>
				  	<div class="modal fade" id="produk4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Detail Produk</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <div class="row">
				        	<div class="col-md-6"></div>
				        	<img src="public/kamera.jpg">
				        	<div class="col-md-6"></div>
				        	<table class="table table-borderless">
				        		<tr>
				        			<th>Nama Produk</th>
				        			<td>Kamera</td>
				        		</tr>	
				        		<tr>
				        			<th>Stock</th>
				        			<td>50</td>
				        		</tr>	
				        	</table>
				        </div>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				        <button type="button" class="btn btn-primary">Save changes</button>
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
</div>
</div>
	<footer class="bg-dark text-white p-5">
		<div class="row">
			<div class="col-md-3"></div>
			<h5>LAYANAN PELANGGAN</h5>
			<ul>
				<li>Pusat Bantuan</li>
				<li>Cara Pembelian</li>
				<li>Pengiriman</li>
				<li>Cara Pengembalian</li>
			</ul>
		</div>
	</footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>