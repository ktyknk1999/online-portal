<?php

    
    $n = $_REQUEST['name'];
    $e = $_REQUEST['email'];
    $pn = $_REQUEST['phone'];
    $op = $_REQUEST['opassword'];
    $np = $_REQUEST['npassword'];
    $cc = $_REQUEST['ccode'];
    $a1 = $_REQUEST['address1'];
    $a2 = $_REQUEST['address2'];
    $pcode = $_REQUEST['pin'];
    $re = $_FILES['resume']['name'];
    $rup = $_FILES['resume']['tmp_name'];
    $fn = $_FILES['imgInp']['name'];
    $img = $_FILES['imgInp']['tmp_name'];
    move_uploaded_file($img,'pimage/'.$fn);
    move_uploaded_file($rup,'resume/'.$re);
    $con = mysqli_connect("localhost", "root","","l");
    $pc = "select * from login where password='$op' and email='$e'";
    $r=mysqli_query($con,$pc);
    if(mysqli_num_rows($r) == 1)
    {
        $f=mysqli_fetch_assoc($pc);
        
            
            $i = $f['image'];
            $ri = $f['resume'];
            if($ri=="" && $re=="")
            {
                if($np =="")
                {   
                    if($i=="" && $fn=="")
                    {
                        $p = "update login set name='$n', pno='$pn',ccode='$cc',address1='$a1',address2='$a2',pincode='$pcode' where email='$e'";
                            $pr = mysqli_query($con,$p);
                            echo "<script> window.location.href = 'portal.php?email=$e';</script>";
                        
                    }
                    elseif($i!="" && $fn=="")
                    {
                        $p = "update login set name='$n', pno='$pn',ccode='$cc',address1='$a1',address2='$a2',pincode='$pcode' where email='$e'";
                            $pr = mysqli_query($con,$p);
                            echo "<script> window.location.href = 'portal.php?email=$e';</script>";
                        
                    }
                    elseif($i=="" && $fn!="")
                    {
                        $p = "update login set name='$n', pno='$pn',image='$fn',ccode='$cc',address1='$a1',address2='$a2',pincode='$pcode' where email='$e'";
                            $pr = mysqli_query($con,$p);
                            echo "<script> window.location.href = 'portal.php?email=$e';</script>";
                        
                    }
                    elseif($i!="" && $fn!="")
                    {
                        $p = "update login set name='$n', pno='$pn',image='$fn',ccode='$cc',address1='$a1',address2='$a2',pincode='$pcode' where email='$e'";
                            $pr = mysqli_query($con,$p);
                            echo "<script> window.location.href = 'portal.php?email=$e';</script>";
                        
                    }
                }
            
                elseif($np!="")
                {
                    if($i=="" && $fn=="")
                    {
                        $pnr = "update login set name='$n', pno='$pn', password='$np',ccode='$cc',address1='$a1',address2='$a2',pincode='$pcode' where email='$e'";
                            $nprq = mysqli_query($con,$pnr);
                            echo "<script> window.location.href = 'portal.php?email=$e';</script>";
                        
                    }
                    if($i!="" && $fn=="")
                    {
                        $pnr = "update login set name='$n', pno='$pn', password='$np',ccode='$cc',address1='$a1',address2='$a2',pincode='$pcode' where email='$e'";
                            $nprq = mysqli_query($con,$pnr);
                            echo "<script> window.location.href = 'portal.php?email=$e';</script>";
                        
                    }
                    if($i=="" && $fn!="")
                    {
                        $pnr = "update login set name='$n', pno='$pn', password='$np', image='$fn',ccode='$cc',address1='$a1',address2='$a2',pincode='$pcode' where email='$e'";
                            $nprq = mysqli_query($con,$pnr);
                            echo "<script> window.location.href = 'portal.php?email=$e';</script>";
                        
                    }
                    if($i!="" && $fn!="")
                    {
                        $pnr = "update login set name='$n', pno='$pn', password='$np', image='$fn',ccode='$cc',address1='$a1',address2='$a2',pincode='$pcode' where email='$e'";
                            $nprq = mysqli_query($con,$pnr);
                            echo "<script> window.location.href = 'portal.php?email=$e';</script>";
                        
                    }
                    
                    
                }
            }
            elseif($ri!="" && $re=="")
            {
                if($np =="")
                {   
                    if($i=="" && $fn=="")
                    {
                        $p = "update login set name='$n', pno='$pn',ccode='$cc',address1='$a1',address2='$a2',pincode='$pcode' where email='$e'";
                            $pr = mysqli_query($con,$p);
                            echo "<script> window.location.href = 'portal.php?email=$e';</script>";
                        
                    }
                    elseif($i!="" && $fn=="")
                    {
                        $p = "update login set name='$n', pno='$pn',ccode='$cc',address1='$a1',address2='$a2',pincode='$pcode' where email='$e'";
                            $pr = mysqli_query($con,$p);
                            echo "<script> window.location.href = 'portal.php?email=$e';</script>";
                        
                    }
                    elseif($i=="" && $fn!="")
                    {
                        $p = "update login set name='$n', pno='$pn',image='$fn',ccode='$cc',address1='$a1',address2='$a2',pincode='$pcode' where email='$e'";
                            $pr = mysqli_query($con,$p);
                            echo "<script> window.location.href = 'portal.php?email=$e';</script>";
                        
                    }
                    elseif($i!="" && $fn!="")
                    {
                        $p = "update login set name='$n', pno='$pn',image='$fn',ccode='$cc',address1='$a1',address2='$a2',pincode='$pcode' where email='$e'";
                            $pr = mysqli_query($con,$p);
                            echo "<script> window.location.href = 'portal.php?email=$e';</script>";
                        
                    }
                }
            
                elseif($np!="")
                {
                    if($i=="" && $fn=="")
                    {
                        $pnr = "update login set name='$n', pno='$pn', password='$np',ccode='$cc',address1='$a1',address2='$a2',pincode='$pcode' where email='$e'";
                            $nprq = mysqli_query($con,$pnr);
                            echo "<script> window.location.href = 'portal.php?email=$e';</script>";
                        
                    }
                    if($i!="" && $fn=="")
                    {
                        $pnr = "update login set name='$n', pno='$pn', password='$np',ccode='$cc',address1='$a1',address2='$a2',pincode='$pcode' where email='$e'";
                            $nprq = mysqli_query($con,$pnr);
                            echo "<script> window.location.href = 'portal.php?email=$e';</script>";
                        
                    }
                    if($i=="" && $fn!="")
                    {
                        $pnr = "update login set name='$n', pno='$pn', password='$np', image='$fn',ccode='$cc',address1='$a1',address2='$a2',pincode='$pcode' where email='$e'";
                            $nprq = mysqli_query($con,$pnr);
                            echo "<script> window.location.href = 'portal.php?email=$e';</script>";
                        
                    }
                    if($i!="" && $fn!="")
                    {
                        $pnr = "update login set name='$n', pno='$pn', password='$np', image='$fn',ccode='$cc',address1='$a1',address2='$a2',pincode='$pcode' where email='$e'";
                            $nprq = mysqli_query($con,$pnr);
                            echo "<script> window.location.href = 'portal.php?email=$e';</script>";
                        
                    }
                    
                    
                }
            }
            elseif($ri=="" && $re !="")
            {
                if($np =="")
                {   
                    if($i=="" && $fn=="")
                    {
                        $p = "update login set name='$n', pno='$pn',ccode='$cc',address1='$a1',address2='$a2',pincode='$pcode', resume='$re' where email='$e'";
                            $pr = mysqli_query($con,$p);
                            echo "<script> window.location.href = 'portal.php?email=$e';</script>";
                        
                    }
                    elseif($i!="" && $fn=="")
                    {
                        $p = "update login set name='$n', pno='$pn',ccode='$cc',address1='$a1',address2='$a2',pincode='$pcode', resume='$re' where email='$e'";
                            $pr = mysqli_query($con,$p);
                            echo "<script> window.location.href = 'portal.php?email=$e';</script>";
                        
                    }
                    elseif($i=="" && $fn!="")
                    {
                        $p = "update login set name='$n', pno='$pn',image='$fn',ccode='$cc',address1='$a1',address2='$a2',pincode='$pcode', resume='$re' where email='$e'";
                            $pr = mysqli_query($con,$p);
                            echo "<script> window.location.href = 'portal.php?email=$e';</script>";
                        
                    }
                    elseif($i!="" && $fn!="")
                    {
                        $p = "update login set name='$n', pno='$pn',image='$fn',ccode='$cc',address1='$a1',address2='$a2',pincode='$pcode', resume='$re' where email='$e'";
                            $pr = mysqli_query($con,$p);
                            echo "<script> window.location.href = 'portal.php?email=$e';</script>";
                        
                    }
                }
            
                elseif($np!="")
                {
                    if($i=="" && $fn=="")
                    {
                        $pnr = "update login set name='$n', pno='$pn', password='$np',ccode='$cc',address1='$a1',address2='$a2',pincode='$pcode', resume='$re' where email='$e'";
                            $nprq = mysqli_query($con,$pnr);
                            echo "<script> window.location.href = 'portal.php?email=$e';</script>";
                        
                    }
                    if($i!="" && $fn=="")
                    {
                        $pnr = "update login set name='$n', pno='$pn', password='$np',ccode='$cc',address1='$a1',address2='$a2',pincode='$pcode', resume='$re' where email='$e'";
                            $nprq = mysqli_query($con,$pnr);
                            echo "<script> window.location.href = 'portal.php?email=$e';</script>";
                        
                    }
                    if($i=="" && $fn!="")
                    {
                        $pnr = "update login set name='$n', pno='$pn', password='$np', image='$fn',ccode='$cc',address1='$a1',address2='$a2',pincode='$pcode', resume='$re' where email='$e'";
                            $nprq = mysqli_query($con,$pnr);
                            echo "<script> window.location.href = 'portal.php?email=$e';</script>";
                        
                    }
                    if($i!="" && $fn!="")
                    {
                        $pnr = "update login set name='$n', pno='$pn', password='$np', image='$fn',ccode='$cc',address1='$a1',address2='$a2',pincode='$pcode' resume='$re' where email='$e'";
                            $nprq = mysqli_query($con,$pnr);
                            echo "<script> window.location.href = 'portal.php?email=$e';</script>";
                        
                    }
                    
                    
                }
            }
            elseif($ri!="" && $re!="")
            {
                if($np =="")
                {   
                    if($i=="" && $fn=="")
                    {
                        $p = "update login set name='$n', pno='$pn',ccode='$cc',address1='$a1',address2='$a2',pincode='$pcode', resume='$re' where email='$e'";
                            $pr = mysqli_query($con,$p);
                            echo "<script> window.location.href = 'portal.php?email=$e';</script>";
                        
                    }
                    elseif($i!="" && $fn=="")
                    {
                        $p = "update login set name='$n', pno='$pn',ccode='$cc',address1='$a1',address2='$a2',pincode='$pcode', resume='$re' where email='$e'";
                            $pr = mysqli_query($con,$p);
                            echo "<script> window.location.href = 'portal.php?email=$e';</script>";
                        
                    }
                    elseif($i=="" && $fn!="")
                    {
                        $p = "update login set name='$n', pno='$pn',image='$fn',ccode='$cc',address1='$a1',address2='$a2',pincode='$pcode', resume='$re' where email='$e'";
                            $pr = mysqli_query($con,$p);
                            echo "<script> window.location.href = 'portal.php?email=$e';</script>";
                        
                    }
                    elseif($i!="" && $fn!="")
                    {
                        $p = "update login set name='$n', pno='$pn',image='$fn',ccode='$cc',address1='$a1',address2='$a2',pincode='$pcode', resume='$re' where email='$e'";
                            $pr = mysqli_query($con,$p);
                            echo "<script> window.location.href = 'portal.php?email=$e';</script>";
                        
                    }
                }
            
                elseif($np!="")
                {
                    if($i=="" && $fn=="")
                    {
                        $pnr = "update login set name='$n', pno='$pn', password='$np',ccode='$cc',address1='$a1',address2='$a2',pincode='$pcode', resume='$re' where email='$e'";
                            $nprq = mysqli_query($con,$pnr);
                            echo "<script> window.location.href = 'portal.php?email=$e';</script>";
                        
                    }
                    if($i!="" && $fn=="")
                    {
                        $pnr = "update login set name='$n', pno='$pn', password='$np',ccode='$cc',address1='$a1',address2='$a2',pincode='$pcode', resume='$re' where email='$e'";
                            $nprq = mysqli_query($con,$pnr);
                            echo "<script> window.location.href = 'portal.php?email=$e';</script>";
                        
                    }
                    if($i=="" && $fn!="")
                    {
                        $pnr = "update login set name='$n', pno='$pn', password='$np', image='$fn',ccode='$cc',address1='$a1',address2='$a2',pincode='$pcode', resume='$re' where email='$e'";
                            $nprq = mysqli_query($con,$pnr);
                            echo "<script> window.location.href = 'portal.php?email=$e';</script>";
                        
                    }
                    if($i!="" && $fn!="")
                    {
                        $pnr = "update login set name='$n', pno='$pn', password='$np', image='$fn',ccode='$cc',address1='$a1',address2='$a2',pincode='$pcode', resume='$re' where email='$e'";
                            $nprq = mysqli_query($con,$pnr);
                            echo "<script> window.location.href = 'portal.php?email=$e';</script>";
                        
                    }
                    
                    
                }
            }
            
        
        
    }
    else
        {
            echo "<script>alert('Wrong password!!')</script>";
            echo "<script> window.location.href = 'editprofile.php?email=$e';</script>";
        }

    
    

?>