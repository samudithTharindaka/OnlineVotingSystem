


<!-- ----------------------------------------------------------------------------------------------- -->


<!DOCTYPE html>
<?php   session_start();?>    <!-- handling sessions -->


<?php
  
  include 'backend/sqlConnect.php';   //connenct to the database
  include 'header.php';
  $id = $_SESSION['user_id'];

  $sql="SELECT * FROM registered_user where userId ='$id';";    //select query from db
  $connOK = connectDB();

  $result = $connOK->query($sql);   //execute query

  $user= $result->fetch_assoc();    //fetch result




?>

<html>
    <head>

    <link rel="icon" href="src/images/logo.jpeg" type="image/x-icon">
    <title>UserAccount</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="src/css/UserAccount.css"/>
    <link href="npm i -g @ionic/cli">
   <!--- <link href="https://fontawesome.com/icons/font-awesome?f=classic&s=solid"> -->

    <style type="text/css">
      
      .edit{
        background-color: #FD0054;
      }
    </style>
    </head>

    <body style="background: #34495E;"> 
<!-- Menu -->
    <ul class="ul" style="margin-bottom: -5%;position: absolute;z-index: 5;padding-left: 0;width: 25%" >
      <li><a href="">HOME</a></li>
      <li><a href="result.php">RESULTS</a></li>
      <li><a href="userFunctions/inquiry.php?result=h">INQUIRIES </a></li>
      <li><a href="userFunctions/seeNotices.php">NOTICE</a></li>
      <li><a href="userFunctions/vote.php?vresult=h">VOTE</a></li>
      
    </ul>

        <div class="bg_div_1">
            <div class="bg_div_1_1">
                <center><img class="img" src="src/images/proPic/profile.png" alt="User Picture"></center>

            </div>

            <div class="bg_div_1_2">
                <h1 class="bg_div_1_2_h"><center> <?php echo $user["First_Name"]." ".$user["Last_Name"]?></center></h1>
                <p class="bg_div_1_2_t"><?php echo $user["Email"];?></p>

            </div>

            <div class="bg_div_1_3">
                
                    <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                    <a href="backend/logout.php"><button type="submit" class="logout btn"  style="background-color: #FD0054"> Logout</button></a>
            </div>
        </div>

        <div class="bg_div_2">
        
            <div class="bg_div_2_0" style="margin-left: 35%;color: white">
                <h1>User Portal</h1>
            </div>

            <div class="bg_div_2_1" >
              
                <div class="bg_div_2_1_2">
                    <div class="bg_div_2_1_1">
                        <h1>Edit Personal Details</h1>
                    </div>
                    
                      <div class ="wrapper">
                        <div class="form-box">
                            
                            <form action="backend/editUser_be.php" class="form" method="post">
                                
                                <div class="input-box">
                                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                                    <input type="text" name="fname" required>
                                    <label><?php echo $user["First_Name"];?></label>
                                </div>
                                <div class="input-box">
                                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                                    <input type="text" name="sname" required>
                                    <label><?php echo $user["Last_Name"];?></label>
                                </div>
                                <div class="input-box">
                                    <span class="icon"><ion-icon name="location"></ion-icon></span>
                                    <input type="email"  name="" disabled value=""> 
                                  
                                    <label><?php echo $user["Email"];?></label>
                                </div>


                                  <input type="hidden"  name="mail"  value="<?php echo $user["Email"];?>">
                                <input type="submit" class="btn edit" >
                                  </form>
                        </div>
                      </div>
                   
                
                </div>
                <div class="bg_div_2_1_3">

                    <div>
                    <img class="img" src="src/images/proPic/profile.png" alt="User Picture"  style="margin-top: 10%;margin-left: 25%;">
                  </div>
                    <a href="backend/deleteUser_be.php" class="btn edit" style="margin-top: 20%;margin-left: 60%;">Delete Account</a><br>
                    
                </div>
            </div>
            <div class="bg_div_2_2">
                <div class="bg_div_2_2_1">
                    <h4>Add your Socials</h4>
                </div>
                

                <div class="col"> 

                <div class="input-box">
                    <span class="icon"><ion-icon name="logo-facebook"></ion-icon></span>
                    <a href="https://www.facebook.com/" class="fb btn23">
                      <i class="fa fa-facebook fa-fw">
                      </i>Facebook<label class="lab">|   Share</label>
                     </a>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="logo-twitter"></ion-icon></span>
                    <a href="https://twitter.com/" class="twitter btn23">
                        <i class="fa fa-twitter fa-fw"></i> Twitter<label class="lab">|   Share</label>
                      </a>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="logo-instagram"></ion-icon></span>
                    <a href="https://www.instagram.com/" class="google btn23"><i class="cc fa fa-google fa-fw">
                    </i>Instergram<label class="lab">|   Share</label>
                  </a>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="logo-linkedin"></ion-icon></span>
                    <a href="https://www.linkedin.com/" class="linkedin btn23"><i class="ln fa-google fa-fw">
                    </i> Linkedin<label class="lab">|   Share</label>
                  
                </a>
                </div>
                </div>               
            </div>
        </div>

        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>