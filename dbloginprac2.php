<html>
    <head>
        <title>portal</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style>
            .pd 
            {
                height: 200px;
                width: 200px;
                border: 1px solid black;
                border-radius: 50%;
                float: center;
                overflow: hidden;

            }
            .jumbotron
            {
                background-color: transparent;
                padding-top: 90px;
                padding-bottom: 10px;
                height: 200px;
            }
            .col-sm-6 
            {
                height: 300px;
            }
            .navbar-header
            {
                height: 60px;
                padding: auto;
                background-color: #2c3e50;
                color: white;
                
            }
            .col-sm-12
            {
                height: 200px;
            }
            .option 
            {
                word-spacing: 50px;
            }
            .ebtn 
            {
                width: 150px;
                height: 30px;
                border-radius: 7px;
                border: none;
                outline: none;
                color: white;
                transition: 0.3s ease-in-out;
                background-color: #2ecc71;
            }
            .ebtn:hover 
            {
                transform: scale(1.3,1.3);
                transition: 0.3s ease-in-out;
            }
            .lbtn 
            {
                width: 150px;
                height: 30px;
                border-radius: 7px;
                border: none;
                outline: none;
                color: white;
                transition: 0.3s ease-in-out;
                background-color: #2980b9;
            }
            .lbtn:hover 
            {
                transform: scale(1.3,1.3);
                transition: 0.3s ease-in-out;
            }
            .dbtn 
            {
                width: 150px;
                height: 30px;
                border-radius: 7px;
                border: none;
                outline: none;
                color: white;
                transition: 0.3s ease-in-out;
                background-color: #e74c3c;
            }
            .dbtn:hover 
            {
                transform: scale(1.3,1.3);
                
                transition: 0.3s ease-in-out;
                
            }
            .col-sm-2
            {
                height: 60px;
                margin-left: 5%;
            }
            .navbar
            {
                background-color: #2c3e50;
                text-align: center;
            }
        </style>
    </head>
    <body>

        <?php
            
            session_start();
            if(isset($_REQUEST['log']))
            {
                $e = $_REQUEST['emaill'];
                $p = $_REQUEST['passwordl'];
                
                $con = mysqli_connect("localhost", "root","","l");
                if($con)
                {
                    $q = "select * from login where password='$p' and email='$e'";
                    $r = mysqli_query($con,$q);
                    if($r)
                    {
                        if (mysqli_num_rows($r) == 1)

                            {
                                $re = mysqli_fetch_assoc($r);
                                $em = $re['email'];
                                $fn = $re['image'];
                                $resu = $re['resume'];
                                if($resu=="")
                                {
                                    $showr = "";
                                }
                                else
                                {
                                    $showr = "<a href='resume/$resu' target='_blank'>Your Resume</a>";
                                }
                                
                                

                            }
                        else
                            {
                                echo "<script> alert('EMAIL OR PASSWORD NOT FOUND')</script>";
                                echo "<script> window.location.href = 'loginpageprac.php';</script>";
                            }
                        
                        
                    }
                    else
                    {
                        echo mysqli_error($con);
                    }
                }
            }
            
            


        ?>

        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header ">
                    
                    <center><font class="navlogoname "><h2>PORTAL</h2></font></center>

                </div>
                
            </div>
        </nav>
        <div class="jumbotron">
            <div class="container text-center">
                <h1> Welcome <?php echo $re['name'] ?></h1>      
                
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">

                    

                    <h3>ABOUT</h3><hr><br>
                    <p><b>Name:</b> <?php echo $re['name'] ?></p>
                    <p><b>Email Address:</b> <?php echo $re['email'] ?></p>
                    <p><b>Phone Number:</b> <?php echo $re['ccode']."-".$re['pno'] ?></p>
                    <p><b>Address:</b> <?php echo $re['address1']." ".$re['address2'] ?></p>
                    <p><b>Pincode:</b> <?php echo $re['pincode'] ?></p>
                    <p><b>Resume:</b> <?php echo $showr; ?></p>


                    
                </div>

                <div class="col-sm-6">

                    
                    <h3>PROFILE IMAGE</h3><hr><br>
                    <center>
                    <div class="pd"><?php echo "<img src='pimage/$fn' height='200px' width='200px'>"; ?><div></center><br>
                    

                    
                </div>

            </div>
            <div class="row">
                <div class="col-sm-12">
                    <hr><h3>MORE OPTIONS</h3><hr>
                        
                        <div class="col-sm-2">
                        <button onclick="logout()" class='lbtn'>log out</button></div>
                        <div class="col-sm-2">
                        <?php echo"<a href='editprofile.php?email=$em'><button name='ep' class='ebtn'>edit profile</button></a>"; ?></div>
                        <div class="col-sm-2">
                        <?php echo"<a href='removeprofile.php?email=$em'><button name='ep' class='dbtn'>Delete profile</button></a>"; ?></div>
                        
                </div>
            </div>

        </div>
        




        <script>
            function logout()
            {
                window.location="logoutprac.php";

            }
        </script>
    </body>
</html>