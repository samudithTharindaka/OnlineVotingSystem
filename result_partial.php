<!DOCTYPE html>
<html>
<head>
  <title></title>

    <!-- link js -->
   <script type="text/javascript" src="src/js/result.js"></script>


  <style>
        .graph-container {
            width: 100%;
            margin:0;
            height: 100vh;
            background-color: #2B2024;
            border-radius: 15px;
            padding: 10% 8% 0 8%;
            box-shadow: 0px 15px 10px rgba(0, 0, 0, 0.3);
           

        }

        .bar {
            display: inline-block;
            width: 40px;
            margin-right: 25px;
            background-color: #FD0054;
            /*text-align: center;*/
            color: white;
            position: relative;
            vertical-align: bottom;

        }

        .bar-label {
            margin-top: -60%;
            margin-left: -55%;
            position: absolute;
        }

        .bg-vote{
           background-color:#584149;
        }

        .contestant-Details{
            margin-top: 5%;
            margin-left: 10%;
        }





    </style>

</head>
<body>

<?php 

    //include common files
    include 'header.php';
    include 'backend/sqlConnect.php';

    $connOk = connectDb();//db connection

    //sql
    $sql ="SELECT * FROM contestant;";
    $sqlCheckTotalVotes = "SELECT SUM(votes) from contestant;";

    //execute
    $result=$connOk->query($sql);
    $result1=$connOk->query($sqlCheckTotalVotes);// getting total votes

    //fetching results
    $totalVotesGot =$result1->fetch_assoc();
    $totalVotes=$totalVotesGot['SUM(votes)'];
    
   ?>




<div class="graph-container">
 			<center style="height: 100%;position: relative;padding-bottom: 0;">


		  		<?php
        			// Fetch and display data in the graph
        			if ($result->num_rows > 0) 
        			{
           				while ($row = $result->fetch_assoc()) {
            				$number=(($row['votes']/$totalVotes)*100);
            				$formattedNumber = number_format($number, 2);

            				echo "<div class='bar' style='height:" . (($row['votes'] / $totalVotes) * 100) . "%;'><img src='../src/images/proPic/user.png' class='graphImage hover-container clickable-button' onclick='clicked(this," . $row['Contestant_Id'] . ",\"" . $row['Name'] . "\"," . $row['votes'] . ")'><span class='bar-label'>" . $formattedNumber . "%</span><span class='contestantName'>" . $row['Contestant_Id'] . "</span></div>";

            				

            			}
        			} 
        			else 
        			{
           			
           			 echo "No data available";
        			}
        		?>



       		
       		
   			</center>
   		</div>


<!-- end graph -->


<!-- --------------------------------------------------------------------------------------- -->
<script type="text/javascript">
        

   function clicked(element, id, name, votes) {
            
 // Setting the clicked effect on images
        var divAppear = document.getElementById('datHidden');
        var nameElement = document.getElementById('name');
        var ageElement = document.getElementById('idnum');
        var numElement = document.getElementById('votes');
        var btn = document.getElementById('voteBtnNum');

        var buttons = document.getElementsByClassName('clickable-button');
        for (var i = 0; i < buttons.length; i++) {
            buttons[i].classList.remove('clicked');
            divAppear.style.display = "none";
        }
        element.classList.add('clicked');
        divAppear.style.display = "block";

        // Update the details in the hidden div
        nameElement.innerHTML =  name;
        ageElement.innerHTML =  id;
        numElement.innerHTML = "Votes:" + votes;
     



        // Set a timeout
          setTimeout(function() {
              divAppear.style.display = "none";
          }, 20000);
        }



  </script>


</body>
</html>