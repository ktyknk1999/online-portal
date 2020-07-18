<html>
    <head>
        <title>SignUp</title>
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
            }
            .form label::after
            {
                content: "";
                position: absolute;
                left: 0px;
                bottom: -1px;
                height: 100%;
                width: 100%;
                
                transform: translateX(-100%);
                transition: transform 0.3s ease;
            }
            .content-name{
                position: absolute;
                bottom: 0px;
                left: 0px;
                transition: all 0.3s ease;
                
            }
            .form input:focus + .label-name .content-name,
            .form input:valid + .label-name .content-name{
                transform: translateY(-140%);
                font-size: 14px;
               
            }
            
            .sbtn
            {
                height: 30px;
                width: 200px;
                background-image: linear-gradient(to right, red , purple);
                border-radius: 25px;
                border: none;
                color: white;
                transition: 0.3s ease-in-out;
                outline: none;
            }
            .sbtn:hover
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
                background-image: url("https://images.pexels.com/photos/592392/pexels-photo-592392.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940");
                background-repeat: no-repeat;
                background-size : 100% 100%;
                background-attachment : fixed;
            }
                
           
            
            
        </style>
      
    </head>
    <body>
        
        
        <div id="two" class="dtwo">
            <div class="jumbotron" style="background-color:transparent;">
                <div class="container text-center">
                    <h1>Sign Up</h1>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        
                            <center><form class="form-group" action="dbloginprac.php" method="POST">
                            
                                <div class="panel form">
                                    <input type="text" name="names" id="names" autocomplete="off" required  />
                                    <label for="names" class="label-name">
                                        <span class="content-name">Name</span>
                                    </label></div>
                                <div class="panel form">
                                <input type="text" name="emails" id="emails" autocomplete="off" required  />
                                <label for="emails" class="label-name">
                                    <span class="content-name">Email</span>
                                </label></div>
                                <div class="panel form">
                                <input type="password" name="passwords" id="passwords" autocomplete="off" required />
                                <label for="Passwords" class="label-name">
                                    <span class="content-name">Password</span>
                                </label></div>
                                <div class="panel form">
                                    <input type="password" name="cpasswords" id="cpasswords" autocomplete="off" required />
                                    <label for="CPasswords" class="label-name">
                                        <span class="content-name">Confirm Password</span>
                                    </label></div><br>
                                <div class="panel">
                                    <input class="sbtn" type="submit"  value="Create Account" name="sub">
                                </div>
                                <div class="panel">Already have an account? - <a class="ques" href="loginpageprac.php">Log In</a></div>
    
                            </form></center>
                            
                                            
                    </div>
                </div>
            </div>
        </div>
        
    </body>
</html>