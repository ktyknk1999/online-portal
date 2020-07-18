
<?php
            
    $n = $_REQUEST['names'];
    $e = $_REQUEST['emails'];
    $p = $_REQUEST['passwords'];
    $cp = $_REQUEST['cpasswords'];
    if($p != $cp)
        {
            echo "<script> alert('passwords do not match')</script>";
                  
            echo "<script> window.location.href = 'loginpageprac2.php';</script>";
        }
    else
    {
        
        $con = mysqli_connect("localhost", "root","","l");
        if($con)
        {
            $q = "insert into login values('$n','$e','$p','','','','','','','')";
            $r = mysqli_query($con,$q);
            if($r)
            {
                echo "<script> alert('Account successfully created!!...You will be redirected to the login page')</script>";
                echo "<script> window.location.href = 'loginpageprac.php';</script>";
            }
        }
    }
                
            
?>