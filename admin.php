<!DOCTYPE html>
<html>
    <head>
        <title>HTML Sign In</title>
        <meta name = "viewport" content = "width=device-width, initial-scale=1" />
        <meta charset = "uft-8" />
        <link rel = "stylesheet" href = "css/signup.css" />
    </head>
    <body>
        <div class = "topnav">
           <a href="./">Home</a>
        <a href="">About us</a>
        <a href="">Product</a>
        <a href="">Search</a>
        <a href="contactus.html">Contact Us</a>
            
            <div class = "topnav-right">
                <a href = "signup.html" >Sign Up</a>
                <a href = "signin.html" >Sign In</a>
            </div>
        </div>
<center>
<table background: url('4ankleboots.jpg'); border="20" height="100" width="100" cellspacing="10" cellpadding="10" bordercolor='#21DBD9' bgcolor='#E5F4F4' >
<TR>
<TD>
<center><input type="button" style="height:50px;width:200px" value="Add Seller" onclick="window.location ='enroll.php'">
</TD>
<TD>
<center><input type="button" style="height:50px;width:200px" value="Edit Buyer/Seller Details" onclick="window.location ='view_adm.php'">
</TD>
</TR>

<TR>
<TD>
<center><input type="button" style="height:50px;width:200px" value="View Seller Details" onclick="window.location ='view_adm.php'">
</TD>
<TD>
<center><input type="button" style="height:50px;width:200px" value="Delete SellerDetails" onclick="window.location ='deladmin.php'">
</TD>
</TR>
</table>
</center>
</body>
<!-- <?php
ob_end_flush();
?>
<?php
unset($_SESSION['maspwd2']);
?> -->
</div>
</body>
</html>