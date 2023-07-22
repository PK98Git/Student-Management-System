
<?php
    // Include the db_config.php file
    include 'config.php';    
    error_reporting(0);
    session_start();
    session_destroy();

    
        $sql="SELECT * from teacher";
        $result=mysqli_query($data,$sql);


        $sql1="SELECT * from course";
        $result1=mysqli_query($data,$sql1);

        $sql="SELECT COUNT('id') AS totad FROM admission;";

        $result=mysqli_query($data,$sql);
        $row=$result->fetch_assoc();

        $sql1 = "SELECT COUNT('c.courseID') AS coursetot FROM course c;";
        $result1=mysqli_query($data,$sql1);
        $row1=$result1->fetch_assoc();

        $sql2 = "SELECT COUNT('t.id') AS teatot FROM teacher t;";
        $result2=mysqli_query($data,$sql2);
        $row2=$result2->fetch_assoc();
        
        $sql3 = "SELECT COUNT('id') AS stcount FROM user WHERE usertype='student';";
        $result3=mysqli_query($data,$sql3);
        $row3=$result3->fetch_assoc();


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>
    <!-- Bootstrap CSS CDN -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="./css/dashboard.css">
            <?php
        include 'admin_css.php';
        ?>
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>

    <div class="wrapper">
        <!-- import navbar to all pages  -->
           <?php

        include 'admin_sidebar.php';

    ?>
        <!-- Page Content  -->
        <div id="content">
            
    <!-- *****Create your content inside the below div**** -->
              <div>
                <div class="container mt-5 ">
                    <div class="row">
                        <div class="col-md-4 col-xl-3">
                            <div class="card bg-c-blue order-card">
                                <div class="card-block">
                                    <h1 class="m-b-20 pb-2">Total Admissions</h1>
                                    <h2 class="text-right"><i class="fas fa-users f-left"></i><span ><?php echo $row['totad']; ?></span></h2>                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xl-3">
                            <div class="card bg-c-green order-card">
                                <div class="card-block">
                                    <h6 class="m-b-20 pb-2">Available Courses</h6>
                                    <h2 class="text-right"><i class="bi bi-book f-left"></i><span><?php echo $row1['coursetot']; ?></span></h2>      
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xl-3">
                            <div class="card bg-c-yellow order-card">
                                <div class="card-block">
                                    <h6 class="m-b-20 pb-2">Teachers</h6>
                                    <h2 class="text-right"><i class="bi bi-people-fill f-left"></i><span><?php echo $row2['teatot']; ?></span></h2>      
                                </div>
                            </div>
                        </div>                   
                        <div class="col-md-4 col-xl-3">
                            <div class="card bg-c-pink order-card">
                                <div class="card-block">
                                    <h6 class="m-b-20 pb-2">Registered Students</h6>
                                    <h2 class="text-right"><i class="bi bi-person-check-fill f-left"></i><span><?php echo $row3['stcount']; ?></span></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
          
             </div>
            <!-- *****End of editing div**** -->
        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>
