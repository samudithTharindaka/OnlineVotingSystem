
<head>
		<!-- link main css -->
	<link rel="stylesheet" type="text/css" href="src/css/main.css">
		<!-- footerlink -->
	<link rel="stylesheet" type="text/css" href="src/css/footer.css"> 


		<!-- meta data -->
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


		<!-- -----------------BOOSTRAP----------------------------------------------- -->
		<!-- link the bootsrap css -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
		<!-- link the bootstrap js -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
		<!-- ------------------------------------------------------------------------- -->



		<!-----google fonts link--->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2? family=Work+Sans:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

		<!-----boxicons link--->
	<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
	<style type="text/css">



	/*adding icon to tab*/

	<style type="text/css">

	  	html {
   			 scroll-behavior: smooth;
  	 	}


/*menu*/
      	.navbar {
  				overflow: hidden;
  				background-color: #333;
  				position: fixed; /
  				top: 0; 
  				width: 100%; 
  				
			}
/* Links inside the navbar */
		.navbar a {
  				float: left;
 				 display: block;
 				 color: #f2f2f2;
  				text-align: center;
  				padding: 14px 16px;
  				text-decoration: none;
			}
/* Change background on mouse-over */
		.navbar a:hover {
  				background: #ddd;
  				color: black;
		}

/* Main content */
		.main {
  				margin-top: 30px; 
			}

		a{
			text-decoration: none;
		}

    	.bg{
    		background-color: black;
    		height: 100vh;
    	}
   		.Topic{
			color: white!important;
			

		}

		.button {
			display: inline-block;
			padding: 10px 20px;
			background-color: #ff1a66;
			color: white;
			text-align: center;
			text-decoration: none;
			font-size: 16px;
			border-radius: 5px;
			border: none;
			cursor: pointer;
			margin-left: 45%;
			margin-top: 2%;
		}

		.button:hover {
			background-color: #A80038;
			transition: 0.3s;
            transform: scale(0.8);
		}


/*nav*/

		ul{
    		list-style-type: none;
    		padding: 5px;
   			overflow: hidden;
    		background-color: #FD0054;
		}

		.ul li {
   			 float:left;
		}


		.ul li a {
   			display: block;
    		text-align: center;
    		padding: 14px;
    		color: white;
    		text-decoration: none;
		}

		.ul li a:hover{
    		background-color:  #FBF9FA;
    		color: black;
    		transition: 0.2s;
		}

		.navbardp
		{
   		 	border-radius: 50%; 
		}


		.bg{

			background-color: #2B2024;
			height: 100vh;
		}

/*end nav*/
		.banner{
			background-image: url('src/images/bg1.png');
			background-repeat: no-repeat;
			background-size: cover;
			padding: 0;
			margin:0 0 0 0;
			height: 25vh;
			padding-left: 20%;
			padding-top: 2%;

		}
		.lead{
			color: #FD0054;
			font-size: 2rem;
		}
	
		.section-4{
			background-color:#030D18;
			height: 85vh;
			padding: 0 0 0 3%;
			margin:0;
			text-align: center;
		}
		.imageIn{
			background-image: url("src/images/showabout.jpg");
			height: 70%;
			
			padding:0;
			background-size: cover;
			margin-bottom: 3%;

		}
		.showAboutImg{
			height: 400px;
			width: 250px;object-fit: cover;
			border-radius: 20%;
			box-shadow: 0px 15px 10px rgba(0, 0, 0, 0.3);
			border:solid 3px #030D18;
		}
		.upper1{
			position: absolute;
			z-index: 10;
			margin-left: 2%;
			transition: 0.3s;
		}	
		.down1{
			position: absolute;
			z-index: 9;
			margin-left: 2%;
			transition: 0.3s;
		}
		.hoverImageAnimate{
			transition: 0.3s;
			filter: grayscale(80%);

		}
		.hoverImageAnimate:hover{
			transition: 0.3s;
			margin-top:-10%;
		}

		.icons a>i{
			color:white;
			transition: 0.25%;
			
		}
		.hi-100{
			display: flex;
  			align-items: center;
			height: 100%;
			width: 100%;
			padding:0 0 0 55%;
			margin: 0;
		}




/*admin dashbord*/
		.adminDashbord>li{
			width: 100%;
			display: inline-block;
			background-color: black;
			height: 80px;
			text-align: center;
			display: flex;
			justify-content: center;
			padding-top: 10%;
		}

		.adminDashbord>li>a{
			color: white;
		}

		.adminDashbord>li:hover{
			transition: 0.3s;
			background-color: #A80038;
		}



		.admin-bg{
			height: 100vh;
			margin:0;
			padding:0;
			background-color: #FBF9FA;
			/*background-color: #2B2024;*/
		}
		.col-4{
			background-color: #FBF9FA;
			height: 100%;
			display: block;
			align-items: center;
		}
		.container-admin{
			height: 300px;
			width: 90%;
			box-shadow: 0px 15px 10px rgba(0, 0, 0, 0.3);
			border-radius: 15%;
			margin-top: 15%;
			background-color: #f5f0f2;
			padding: 5% 4% 2% 4%;
		}
		.display-2{
			font-size: 200%;
		}

		.logoutBtn{
			color: 
		}
/*graph...............*/
		.graphImage{

				width: 60px;
				height:60px;
				bottom: -70px;
				margin-left: -10%;
				display: block;
				border-radius: 30%;
				position: absolute;
				transition: 0.3s;
		}

		.clicked {
    		/*background-color: #45a049;*/
    		transform: scale(1.2);
		}

		.graphImage:hover{
			transition: 0.3s;
			transform: scale(1.1);
		}	
		.graphImage:active{
			transition: 0.3s;
			transform: scale(1.3);
		}
		.contestantName{
			display: block;
			position: absolute;
			bottom: -100px;
			padding-left: 20px;
		}
		.contestant-Details{
			transition: 0.3s;
			display: none;
			background-color:  #A80038;
			height: 200px;
			width: 400px;
			border-radius: 20px;
			/*padding-left: 2%;*/
			padding-top:1%;
			position: absolute;
			z-index: 5;
			margin-top: -5%;
			margin-left: 40%;
			text-align: center;
			border:solid 2px #2B2024;
			box-shadow: 0px 15px 10px rgba(0, 0, 0, 0.5);
		}
		.contestant-Details>p{
			line-height: 30px;
			color: #2B2024;
		}
		.contestant-Details>a{
			background-color: #FBF9FA;
			border:none;
			color: #2B2024;
			width: 130px;
			border-radius: 10px;
		}
		.contestant-Details>a:hover{
			background-color:#2B2024;
			color: #fff;
		}
		.contestant-Details>#name{
			text-transform: uppercase;
			font-size: 2rem;
			font-weight: 800;
		}



		.padding{
			padding-top: 3%;
		}

		.icon-section{
	
			width: 100vw !important;
			/*bottom: 0;*/
		}



		.proPic{

			height: 150px;
			width: 150px;
		}		

		body, html {
 			 overflow-x: hidden;
		}

		.footer-content>img{
			height:100px;
			width:100px;
			margin-left: 25%;
		}



	</style>

</head>
