﻿<?php include ("blocks/bd.php"); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
	<title>E-COR</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,500,700|Nunito:400,600,700" rel="stylesheet">
	<!-- Theme CSS -->  
	<link id="theme-style" rel="stylesheet" href="css/theme.css">
	<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>
		function isNull(param){
			var isnull = false;
			if(param != null && param != undefined && param != '')
				isnull = true;
			return isnull;
		}
		//$("#addEdit #save").click("button",function(e){
		function save(){
			$("#save").attr("disabled", true);
			var region = $("#region").val();
			var district = $("#district").val();
			var organization = $("#organization").val();
			var name = $("#name").val();
			var description = $("#description").val();
			var type = "web";
			var dataString = 'region=' + region + '&district=' + district + '&organization=' + organization + '&name=' + name + '&description=' + description+ '&type=' + type;
			if(isNull(region) && isNull(district) && isNull(organization)){
					$.ajax({
						type: 'post',
						url: 'reception/index.php',
						data: dataString,
						success: function (result){
							alert(result);
							//$("#success").show();
							//$("#msgSuccess").html(result);
							$("#save").attr("disabled", false);
						}
					});
			}else{
				$("#save").attr("disabled", false);
				alert("Заполните все поля формы!!!");
			}
		}
		//});
	</script>
	</head>
	<body>
		<header class="header">
			
				<div class="branding">
						
						<div class="container position-relative">

				<nav class="navbar navbar-expand-lg">
					<h1 class="site-logo"><a class="navbar-brand" href=""><img class="logo-icon" src="images/logo-icon.svg" alt="logo" style="width:35px"> <span class="logo-text">E-COR <span class="alt rounded">Beta</span></span></a></h1>
					<button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
					
					<div class="navbar-collapse p-1 p-lg-0 collapse" id="navigation" style="">
						<ul class="navbar-nav ms-lg-auto">
							
							<li class="nav-item me-lg-4">
								<a class="nav-link" href="?rate">Korrupsiya reytingi</a>
							</li>
							<li class="nav-item me-0">
								<a class="nav-link" href="?rate">To'liq statistika</a>
							</li>
						</ul>
					</div>
				</nav>
				
				<!-- // Free Version ONLY -->
				<ul class="social-list list-inline mb-0 position-absolute d-none">
					<li class="list-inline-item"><a class="text-dark" href="#"><svg class="svg-inline--fa fa-twitter fa-w-16 fa-fw" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg><!-- <i class="fab fa-twitter fa-fw"></i> Font Awesome fontawesome.com --></a></li>
						<li class="list-inline-item"><a class="text-dark" href="#"><svg class="svg-inline--fa fa-facebook-f fa-w-10 fa-fw" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path></svg><!-- <i class="fab fa-facebook-f fa-fw"></i> Font Awesome fontawesome.com --></a></li>
						<li class="list-inline-item"><a class="text-dark" href="#"><svg class="svg-inline--fa fa-instagram fa-w-14 fa-fw" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg><!-- <i class="fab fa-instagram fa-fw"></i> Font Awesome fontawesome.com --></a></li>
						<li class="list-inline-item"><a class="text-dark" href="#"><svg class="svg-inline--fa fa-youtube fa-w-18 fa-fw" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="youtube" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"></path></svg><!-- <i class="fab fa-youtube fa-fw"></i> Font Awesome fontawesome.com --></a></li>
				</ul><!--//social-list-->	            
						</div><!--//container-->            
				</div><!--//branding-->
		</header>
		<section class="hero-section">
			<div class="container">
				<div class="row figure-holder">
					<div class="col-12 col-md-6 pt-3 pt-md-4">
						<h2 class="site-headline font-weight-bold mt-lg-5 pt-lg-5">Korrupsiya holatiga duch keldingizmi?</h2>
						<div class="site-tagline mb-3">Hoziroq murojaat qiling! Korrupsiya holati haqida xabar yuborib, jamiyatda korrupsiyani kamaytirishga o'z hissangizni qo'shing</div>
						<div class="cta-btns">
							<div class="mb-4"><a class="btn btn-primary font-weight-bold theme-btn" href="#">Telegram bot</a></div>
							<ul class="app-stores list-unstyled list-inline mx-auto mx-md-0 d-inline-block">
								<li class="list-inline-item me-3"><a href="#"><img class="ios" src="images/appstore-apple.svg" alt="app-store"></a></li>
								<li class="list-inline-item"><a href="#"><img class="android" src="images/appstore-android.svg" alt="google play"></a></li>
							</ul>
						</div>
					</div>
				</div><!--//row-->
			</div>
		</section>
		
		<div class="container-fluid" id="success" style="display: none">
				<div class="alert alert-success">
						<button class="close" data-dismiss="alert">&times;</button>
						<strong id="msgSuccess">Murojaatingiz yuborildi!</strong>
				</div>
		</div>
		
		<section class="features-section py-5">
			<div class="container py-lg-5 position-relative">
				<h3 class="mb-3 text-center font-weight-bold section-heading">Murojaat</h3>
				
				<div class="row">
					<div class="col-12 col-md-12">
						<div class="card rounded border-0 shadow-lg  mb-5">
							<div class="card-body p-4">
							
							<form id="add" method="POST" >
							<fieldset>
									
								<div class="form-group">
									<label for="region" class="form-label mt-4">Viloyatni tanlang</label>
									<select class="form-select" id="region" name="region">
										<?php
										$result = mysql_query("SELECT id,name_1 FROM regions",$db);
											if ($result){
												if (mysql_num_rows($result) > 0){
													$myrow = mysql_fetch_array($result);
													do {
														printf('<option value="%s">%s</option>', $myrow["id"], $myrow["name_1"]);
													}while ($myrow = mysql_fetch_array($result));
												}
											}
										?>
									</select>
								</div>
									
								<div class="form-group">
									<label for="district" class="form-label mt-4">Tumanni tanlang</label>
									<select class="form-select" id="district" name="district">
										<?php
										$result = mysql_query("SELECT id,name_1 FROM districts",$db);
											if ($result){
												if (mysql_num_rows($result) > 0){
													$myrow = mysql_fetch_array($result);
													do {
														printf('<option value="%s">%s</option>', $myrow["id"], $myrow["name_1"]);
													}while ($myrow = mysql_fetch_array($result));
												}
											}
										?>
									</select>
								</div>
								
								<div class="form-group">
									<label for="organization" class="form-label mt-4">Tashkilotni kiriting</label>
									<input type="text" class="form-control" id="organization" name="organization" placeholder="Enter text">
								</div>
								
								<div class="form-group">
									<label for="name" class="form-label mt-4">Korrupsiya oluvchining ismi</label>
									<input type="text" class="form-control" id="name" name="name" placeholder="Enter text">
								</div>
								
								<div class="form-group">
									<label for="description" class="form-label mt-4">Qo'shimcha ma'lumotlar uchun</label>
									<textarea class="form-control" id="description" name="description" rows="3"></textarea>
								</div>
								
								<div class="btnSubmit">
									<button type="button" onClick="save()" class="btn btn-primary">Jo'natish</button>
								</div>

							</fieldset>
							</form>
							</div>
						</div>
						
					</div>
				 
				</div>
			</div><!--//container-->
		</section>
		
		<footer class="footer theme-bg-primary">
			<div class="container"><hr></div>
			<div class="download-area py-4">
				<div class="container text-center">
					<div class="section-intro mb-4 single-col-max-width mx-auto">
						Ushbu loyiha murojaatlarni statistikasini avtomatik hosil qilib, korrupsiya holati bo'yicha reytinglarni e'lon qilib boradi.
					</div>
					<h3 class="mb-3">Mobil ilovalarni yuklab oling</h3>
					<ul class="app-stores list-unstyled list-inline mx-auto  d-inline-block">
						<li class="list-inline-item me-3"><a href="#"><img class="ios" src="images/appstore-apple.svg" alt="app-store"></a></li>
						<li class="list-inline-item"><a href="#"><img class="android" src="images/appstore-android.svg" alt="google play"></a></li>
					</ul>
				</div><!--//container-->
			</div><!--//download-area-->
		</footer>
</body>
</html>