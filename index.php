<!DOCTYPE html>
<html>
<head>
	<title>Online Voting System</title>
	<?php include 'header.php';?>

<!-- inline css -->
		<style type="text/css">
			.voteBtn{
					border: solid 4px #FD0054;
					border-radius: 30px;
					background-color: transparent;
					width: 150px;
					height: 50px;
					color:  #FD0054;
					font-weight: 600;
					margin-top: 3%;

			}
			.voteBtn:hover{
				background-color: #FD0054;
				border: solid 0px #FD0054;
				transition: 0.3s;
				
			}
			a:hover{
				color:  #FD0054 !important;
				
				
			}
			.section-2{
				background-color: #030D18;
				height: 60vh;
				padding: 5% 18% 10% 18%;
				display: flex;
				width: 100%;
  				justify-content: space-between;
  				margin: 0 0 0 0;
  				
			}
			.outer{
				
				width: 25%;
				background-color:#061324;
				box-shadow: 0px 15px 10px rgba(0, 0, 0, 0.3);
				height: 100%;
				padding-top: 4.5%;
				border-radius: 20%;
				padding-left:0px;
				padding-right: 0px;

			}


			.inner{
				width:100%;
				background-color:  #06152B;
				height: 100%;
				border-top-right-radius: 40% !important;
				border-top-left-radius: 40% !important;
				border-radius: 20%;
				text-align: center;		
			}
			.circle{
				border-radius: 50%;
				background-color: #f3f3f1;
				height: 55%;
				width: 60%;
				align-items: center;
				margin-top: -10%;
				display: flex;
  				justify-content: center;

			}

			.inner-Num1{
				font-size: 4rem;
				color:#FD0054;
				font-weight: 700;
			}
			
			.down-text{
				margin-top: -10%;
				display: block;
				font-size: 280%;
				color:#FD0054;
				font-weight: 400;
				text-transform: uppercase;
			}
			.imageHolder{

				background-image: url("src/images/showabout.jpg") ;
				height: 100%;
				position: relative;
				
				background-size: cover;
				box-shadow: 0px 15px 10px rgba(0, 0, 0, 0.3);
				border-radius: 20%;
				padding: 0;
				z-index: 5;
			}
			 .section-3{
			 	margin: 0;
			 	padding: 2% 0% 2% 10%;
    			height: 70vh;
    			background: linear-gradient(to top, #A80038 1%, #030D18 99%);
    		}

    		.overlay{
    			background-color: rgba(3,13,24,0.2);
    			border-radius:20%;
    			height: 100%;
    			width: 100%;
    		}

    			.overlay:hover{
    				background-color: rgba(3,13,24,0.2);
    				transition: 0.4s;
    				border-radius: 20%;
    			}
    		.aboutText{
    			height: 50vh;
    			width: 65vW;
    			background-color: rgba(3,13,24,0.8);
    			margin-left: -15%;
    			margin-top:3%;
    			padding-top: 2%;
    			padding-left: 15%;
    			padding-right:  8%;
    			z-index: 1;
    			position: absolute;
    			box-sizing: border-box;

    		}

			.hidden {
  				opacity: 0;
  				transform: translateY(20px);
  				transition: opacity 0.3s ease, transform 0.3s ease;
			}

			.visible {
  				opacity: 1;
 				transform: translateY(0);
  				transition: opacity 0.3s ease, transform 0.3s ease;
			}
			.showResult{
				background-color: #2B2024;
			}
			 .showResults {
      			overflow: hidden;
    		}

    		.imageHolder {
      			height: 100%;
    		}

    		.section-3,
    		.section-4 {
     			 overflow: hidden;
    		}

		</style>

			

 


	 <link rel="icon" href="src/images/logo.jpeg" type="image/x-icon">
</head>
<body>

	<!-- Landing content -->
		<div class="landing-content ">
			<!-- top nav starts -->
				<div class="nav1">
						<a href="#home" class="hover-text" > HOME </a> |
						<a href="#sect-2" class="hover-text"> FEATURES</a> |
						<a href="#sect-5" class="hover-text"> CONTACT US</a> |
						<a href="#sect-4" class="hover-text"> BEST PERFORMANCES</a>
				</div>
			<!-- TOP NAV ENDS -->

			<div class=" div-padding">
				<h1>SL GOT TALENTS</h1>
				<p class="lead">Thrilling talent competition showcasing diverse skills,<br>from singing to magic, where contestants vie for stardom</p>
				 <a href="login/login.php?failed=h" class="voteBtn btn btn-primary" style="padding: 1.0% 3% 1.0% 3%"> Login</a>&nbsp;&nbsp;&nbsp;&nbsp;
				 <button class="voteBtn btn btn-primary" id="voteBtnid">vote</Button>
			</div>
		</div>
	<!-- landing content ends -->

	

	<!-- features card section -->
<div class="section-2 row" id="sect-2">
		<div class="outer col-3 col-sm-12 visible" id="m1">
			<div class="inner">
					<p id="inner-Num" class="inner-Num1">19K+</p>
					<p class="down-text">USERS</p>	
			</div>		
		</div>
	<div class="outer col-3 col-sm-12 visible" id="m2" >
		<div class="inner">
				<p id="inner-Num" class="inner-Num1">20+</p>
				<p class="down-text">AWARDS</p>		
			</div>	
		</div>
	<div class="outer col-3 col-sm-12 visible" id="m3">
		<div class="inner">	
				<p id="inner-Num" class="inner-Num1">40M+</p>
				<p class="down-text">VOTES</p>	
		</div>
	</div>
</div>

	<!-- features card section ends -->


<!-- about section -->
<div class="section-3 row" id="sect-3">
			<div class="col-4"id="aboutImage" style="background-color: transparent;">
				<div class="imageHolder " >
					<div class="overlay">
						

					</div>
						
				</div>
				
			</div>

			<div class="col-8">
				<div class="aboutText">
					<h1 class="display-1 Topic" style="">
						About
					</h1>
					<p class="lead" style="margin-top: 20px;">Prepare to be dazzled by extraordinary talent as our talent contest show brings together the best performers in a stunning display of skill, creativity, and passion. Don't miss the chance to witness stars in the making!</p>		
				</div>		
			</div>	
</div>
<!-- about section end -->

<!-- leaving free space -->

<div class="showResults">
<iframe src="result_partial2.php" title="Example Site" width="100%" height="600px">
 
</iframe>
</div>


<!-- image section -->
<div class="section-4 row"  style="margin-top: -5%;">


	<h2 class="display-1 Topic" style="margin-top: 5%;">Plenty of contestants with much talents</h2>
	
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br > 
			<div class="col-3 " style="margin-top: 15%" id="sect-4" >
				<div class="hi-100">
						<img src="src/images/circus.jpg" class="showAboutImg upper1 hoverImageAnimate" style="margin-left: 0%" >
						<img src="src/images/circus2.jpg" class="showAboutImg upper1 hoverImageAnimate" style="height: 420px;width: 260px">
						<img src="src/images/singer1.jpg" class="showAboutImg upper1 hoverImageAnimate" style="height: 440px;width: 270px;margin-left: 8%">
						<img src="src/images/tribe dance.jpg" class="showAboutImg upper1 hoverImageAnimate" style="height: 460px;width: 280px;margin-left: 15%">
						<img src="src/images/yaiyai yai.jpg" class="showAboutImg upper1 hoverImageAnimate" style="height: 480px;width: 290px;margin-left: 20%">
						<img src="src/images/judgeCover.jpg" class="showAboutImg upper1 hoverImageAnimate" style="height: 500px;width: 300px;margin-left: 25%">
						<img src="src/images/magic.jpg" class="showAboutImg down1 hoverImageAnimate" style="height: 480px;width: 290px;margin-left: 30%;">
						<img src="src/images/logo.jpeg" class="showAboutImg down1 hoverImageAnimate" style="height: 460px;width: 280px;margin-left: 35%;z-index: 8;">
						<img src="src/images/image3.jpg" class="showAboutImg down1 hoverImageAnimate" style="height: 440px;width: 270px;margin-left: 42%;z-index: 7">
						<img src="src/images/image1.png" class="showAboutImg upper1 hoverImageAnimate" style="height: 420px;width: 260px;margin-left: 48%;z-index: 6">
						<img src="src/images/showabout.jpg" class="showAboutImg upper1 hoverImageAnimate" style="margin-left: 50%;z-index: 5">
				</div>	
			</div>

			<div class="col-6"></div>
			<div class="col-3 hi-100"></div>
</div>
<!-- image section ends -->

<!-- --------------------------------------footer---------------------------------------------------------------- -->

		<section class="footer" id="sect-5">

			<div class="footer-content">
				<img src="src/images/logo.jpeg">
				<p>This is the official website of SLGT</p>

				
				
			</div>

			<div class="footer-content">
				<h4>Contact</h4>
				<li><a href="#">New Kandy Road,</a></li>
				<li><a href="#">Malabe</a></li>
				<li><a href="#">+94 1234 567</a></li>
				<li><a href="#">+94 9876 543</a></li>

			</div>

			<div class="footer-content">
				<h4>Menu</h4>
				<li><a href="#">Home</a></li>
				<li><a href="#">Vote</a></li>
				<li><a href="#">Best Performances</a></li>
				<li><a href="#">Contact Us</a></li>

			</div>

			<div class="footer-content">
				<h4>Site Information</h4>
				<li><a href="#">Terms & Conditions</a></li>
				<li><a href="#">Accessibility</a></li>
				<li><a href="#">Cookie Policy</a></li>
				<li><a href="#">Privacy Notices</a></li>

			</div>
		</section>
		
		<div class="icon-section">
			<div class="icons">
					<a href="#"><i class='bx bxl-facebook-square' ></i></a>
					<a href="#"><i class='bx bxl-instagram-alt' ></i></a>
					<a href="#"><i class='bx bxl-tiktok' ></i></a>
					<a href="#"><i class='bx bxl-youtube' ></i></a>
					<a href="#"><i class='bx bxl-whatsapp-square'></i></a>
					
			 </div>
		</div>

<!-- script to alert when click on vote button  -->
<script>
  document.getElementById('voteBtnid').addEventListener('click', function() {
    alert('Please Login to mark your vote!');
  });

</script>
</body>
</html>





