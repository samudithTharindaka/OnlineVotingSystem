<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="../src/images/logo.jpeg" type="image/x-icon">
    <?php
    session_start();
    $uid=$_SESSION['user_id'];



      //include common files
        include '../header.php';
        include '../backend/sqlConnect.php';

        $connOk = connectDb();//db connection


        //select sql query
        $sqlSelect="SELECT * FROM registered_user where userId='$uid';";

            $result3=$connOk->query($sqlSelect);    //execute query and get result     
            $row = $result3->fetch_assoc();
                    $voteAttemptsRemaining = $row['voteAttempts'];

    ?>
    <style>
        .body-div{
            padding-right: 8%;
            padding-left: 8%;
            background-color: #3b2b31;
            width: 100vw;
        }
        ::-webkit-scrollbar {
            height: 12px;
        }

        ::-webkit-scrollbar-track {
            background-color: #2B2024;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #FD0054;
        }
        .scroll-container {
            height: auto;
            background-color: transparent;
            overflow-x: scroll; /* Enable horizontal scrolling */
            white-space: nowrap;
            padding: 10px;
            display: flex; /* Add flex display for horizontal arrangement */
        }

        .data-container {
            flex: 0 0 auto; /* Prevent items from shrinking */
            margin-right: 10px; /* Add space between items */
            background-color: #2B2024;
            border-radius: 20px;
            box-shadow: 0px 15px 10px rgba(0, 0, 0, 0.3);
            width: 300px;
            height: 95%;
            padding-top: 2%;
            margin-bottom: 2%;
            margin-top: 1.5%;
        }

        .data-container p{
            color: white;
            font-weight: 500;

        }



        .data-container img {
            height: 200px;
            width: 200px;
        }
        .banner{
            height: 20vh;
            background-color: #FD0054;
            padding-left: 0 !important;
            padding-top: 1%;
        }

        .btn-primary{
            background-color: #FBF9FA !important;
            border:none !important;
            color: #2B2024 !important;
            width: 130px;
            border-radius: 10px;
        }
        .btn-primary:hover{
            background-color:#e0d1d9 !important;
            color: #fff !important;
        }
        .col-4{
            background-color: transparent !important;
        }


    </style>

    <link rel="stylesheet" type="text/css" href="../src/css/footer.css">
</head>
<body>
    <!-- nav -->
    <ul class="ul" style="margin-bottom: -1%;">
      <li><a href="../user.php">HOME</a></li>
      <li><a href="../result.php">RESULTS</a></li>
      <li><a href="../userFunctions/inquiry.php?result=h">INQUIRIES </a></li>
      <li><a href="../userFunctions/seeNotices.php">NOTICE</a></li>
      <li><a href="vote.php?vresult=h">VOTE</a></li>
      
    </ul>

<!-- end nav -->

    <div class="banner row">
        <div class="col-4">
            
        </div>  
         <div class="col-4">
            <center>
            <?php

                   if ($_GET['vresult']=='done') {
                         echo "
                        <div style='background-color: #A80038; width: 100%;height: 50px;padding-top: 0%;color: white;''>
                         <p class='lead'> Successfully voted !</p></div>";
                    }elseif($_GET['vresult']=='fail') {
                        echo " <div style='background-color: #A80038; width: 100%;height: 50px;padding-top: 0%;color: white;''>
                         <p class='lead'> Vote Unsuccessful! !</p></div>";
                    }       

            ?>
           
            </center>
            <h1 class="display-2 padding" style="text-align: center;font-weight: 800;font-size: 4rem"> Vote</h1>
            <h3 class="lead" style="margin-top: -20px; text-align:center;color: #A80038;">Remaining attempts :<?php echo $voteAttemptsRemaining; ?></h3>
        </div>  
         <div class="col-4">
            
        </div>

        
    </div>

    <div class="body-div">
    <div class="scroll-container">

        <?php



      

        //sql
        $sql ="SELECT * FROM contestant;";

        //execute
        $result=$connOk->query($sql);
        
        if ($result->num_rows > 0) 
            {
            while ($row = $result->fetch_assoc()) {  //get results 
                $name =$row['Name'];
                $votes =$row['votes'];
                $cid =$row['Contestant_Id'];

        ?>

        <!-- Display results -->
        <div class="data-container">
         <center>   <img src="../src/images/proPic/user.png" alt="User Image 1">
            <div>
                <p class="lead"><?php echo $name;  ?> </p>
                <p class="lead"><?php echo $votes;  ?> votes </p>
                <a href="../backend/addVote_be.php?cid=<?php echo $cid;?>" class="btn btn-primary ">Vote for <?php echo $cid;?></a>
                <br>
                <br>
                <br>
                <br>
                
         
            </div>
        </center>
        </div>

        <?php

             }}

        ?>


        
    </div>

    </div>

    <!-- --------------------------------------footer---------------------------------------------------------------- -->

        <section class="footer" id="sect-5">

            <div class="footer-content">
                <img src="../src/images/logo.jpeg">
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


    



<!-- --javascript- -->
</body>
</html>
