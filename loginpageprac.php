<html>
    <head>
        <title>Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style>
            .form
            {
                width: 300px;
                position: relative;
                height: 60px;
                overflow: hidden;
                background-color: transparent;
            }
            .form input
            {
                width : 100%;
                height : 100%;
                color: #595f6e;
                padding-top: 20px;
                border: none;
                outline: none;
                background-color: transparent;
            }
            .form label
            {
                position: absolute;
                bottom: 0px;
                left: 0%;
                width: 100%;
                height: 100%;
                pointer-events: none;
                border-bottom: 1px solid black;
                background-color: transparent;
            }
            .form label::after
            {
                content: "";
                position: absolute;
                left: 0px;
                bottom: -1px;
                height: 100%;
                width: 100%;
                background-color: transparent;
                transform: translateX(-100%);
                transition: transform 0.3s ease;
            }
            .content-name{
                position: absolute;
                bottom: 0px;
                left: 0px;
                transition: all 0.3s ease;
                background-color: transparent;
                
            }
            .form input:focus + .label-name .content-name,
            .form input:valid + .label-name .content-name{
                transform: translateY(-140%);
                font-size: 14px;
                background-color: transparent;
               
            }
            .lbtn
            {
                height: 30px;
                width: 200px;
               
                background-image: linear-gradient(to right,#3498db ,#0be881);
                border-radius: 25px;
                border: none;
                color: white;
                transition: 0.3s ease-in-out;
                outline: none;
            }
           
            .lbtn:hover 
            {
                transform: scale(1.5,1.4);
                transition: 0.3s ease-in-out;
            }
            .panel
            {
                
                box-shadow: none;
                background-color: transparent;
            }
            .ques
            {
                color: #3498db;
                cursor: pointer;
                text-decoration: none;
            }
            .ques:hover
            {
                text-decoration: none;
                color: #3498db;

            }
            .jumbotron
            {
                padding-top: 15px;
                height: 80px;
            }
            body 
            {
                background-image: url("https://images.pexels.com/photos/959079/pexels-photo-959079.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940");
                background-repeat: no-repeat;
                background-size : 100% 100%;
                background-attachment : fixed;
            }
            
           
            
            
        </style>
        
    </head>
    <body>
        <div id="one">
        <div class="jumbotron" style="background-color:transparent;">
            <div class="container text-center">
                <h1>Login</h1>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    
                        <center><form class="form-group" action="dbloginprac2.php" method="POST"> 
                            <div class="panel form">
                            <input type="text" name="emaill" id="emaill" autocomplete="off" required  />
                            <label for="Emaill" class="label-name">
                                <span class="content-name">Email</span>
                            </label></div>
                            <div class="panel form">
                            <input type="password" name="passwordl" id="passwordl" autocomplete="off" required  />
                            <label for="Passwordl" class="label-name">
                                <span class="content-name">Password</span>
                            </label></div><br>
                            <div class="panel">
                                <input class="lbtn" type="submit" value="LogIn" name="log">
                            </div>
                            <div class="panel">Don't have an account? - <a class="ques" href="loginpageprac2.php">Create Account</a></div>

                        </form></center>
                        
                                        
                </div>
            </div>
        </div>
        </div>
       
    </body>
</html>