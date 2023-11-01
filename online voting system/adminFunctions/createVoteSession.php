<!DOCTYPE html>
<html>
<head>
    <title>Handle Vote Sessions</title>

    <!-- Include external files -->
    <?php include '../header.php';?>

    <link rel="stylesheet" type="text/css" href="../src/css/forms.css">
    <link rel="icon" href="../src/images/logo.jpeg" type="image/x-icon">

    <style type="text/css">
        .bg {
            background-color: #2B2024;
            height: 100vh;
            padding: 0;
            margin: 0;
            color: white;
        }

        .button {
            margin: 0;
        }
    </style>

</head>
<body style="padding: 0;margin: 0;">

    <div class="bg">
        <!-- Vote session status -->
        <?php
        // Include common files
        include '../backend/sqlConnect.php';

        $connOk = connectDB(); // DB connection

        // SQL
        $sql2 = "SELECT * FROM session;";

        // Execute
        $result2 = $connOk->query($sql2);

        // Fetching results
        if ($result2->num_rows > 0) {
            $sStatus = $result2->fetch_assoc();
            $status = $sStatus['status'];
            echo "<h1 style='text-align:center;'>Session is $status</h1>";

            if ($status == 'on') {
                echo "<center><a href='../backend/offSession_be.php' class='button'>Turn off Session</a></center>";
            } else {
                echo "<form action='../backend/OnSession_be.php' method='POST' class='form-all'>
                    <input type='text' name='sessionName' placeholder='Enter Session Name'><br>
                    <input type='submit' value='Turn on Session'>
                </form>";
            }
        } else {
            echo "No sessions found.";
        }
        ?>
    </div>

</body>
</html>
