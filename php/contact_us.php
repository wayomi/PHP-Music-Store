<!DOCTYPE html>
<html>
<head>
<title>Contact us</title>
<link rel="stylesheet" type="text/css" href="../css/main.css"/>
</head>

<body style="margin:0px; background-color:#262626;">
<div id="body_wrapper">
	<div>
		<div id="nav">
        	<div id="login">
            	<?php
				session_start();
				if (isset($_SESSION['username'])){
					$username = $_SESSION['username'];
					echo '<form> Hi! '.$username.' <a href="shopping_cart.php"><input type="button" id="lg" value="view cart"></a> <a href="account.php"><input type="button" id="lg" value="Account"></a> <a href="sign_out.php"><input id="lg" type="button" value="Logout"></a></form>';	
				}else{
					echo '<form><a href="../html/login.html"><input type="button" id="lg" value="Sign in"></a> Or <a href="../html/sign_up.html"><input id="lg" type="button" value="Sign up"></a></form>';
				}
			?>	
            </div>
        	<div id="menu">
       		  <nav>
            	<ul>
                	<li><a href="../index.php"><img src="../images/home.png" style=" width:25px; height:20px; border:none;"/></a></li>
                    <li><a href="downloads.php">Downloads</a></li>
                    <li><a href="albums.php">Albums</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
           	  </nav>
            </div>
        </div>
        <div id="footer"></div>
    	<div id="cont" style="height:600px">
        	<div id="lp">
            <h2>Leave a Feedback</h2>
            <table>
            	<form action="add_contact_us.php" method="post">
            	<tr>
                	<td>Name</td>
                    <td><input type="text"  name="cname"></td>
                </tr>
                <tr>
                	<td>E-mail</td>
                    <td><input type="text" name="cmail">*</td>
                </tr>
                <tr>
                	<td>Comment</td>
                    <td><textarea rows="10" cols="50" name="ccomment"></textarea></td>
                </tr>
                <tr>
                	<td></td>
                    <td><input type="submit" value="submit"></td>
                </tr>
                </form>
            </table>
            	<h2 style="color:#262626; margin-left:2px;">We Are</h2>
                <p>Let the vibes of sri Lankan music take you to a higher level of consciousness.<br><br>

Music does bring people together; it allows us to experience the same emotions. People everywhere are the same in heart and spirit. No matter what language we speak, what color we are, the form of our politics or the expression of our love and our faith, music proves we are the same.<br><br></p>
            	
            </div>
            <div id="rp">
            	<h3>&nbsp;&nbsp;&nbsp;&nbsp;Contact Us</h3>
                <h4>&nbsp;&nbsp;&nbsp;&nbsp;Tel: 037-1234567 / 037-7654321</h4>
                <h4>&nbsp;&nbsp;&nbsp;&nbsp;E-mail: musicstore@123.com</h4>
            </div>
        </div>
    	<div id="footer_wrapper">
        	<div id="footer">
            	 <div id="f1">
                    <ul id="ul1">
                    <li><a style="color:#FFF" href="../index.php">Home</a></li>
                    <li><a style="color:#FFF" href="albums.php">Albums</a></li>
                    <li><a style="color:#FFF" href="downloads.php">Downloads</a></li>\
                    </ul>
                    </div>
                    <div id="f2">
                    <ul id="ul1">
                    <?php
					if (isset($_SESSION['username'])){
                    	echo '<li><a style="color:#FFF" href="account.php">My Account</a></li><li><a style="color:#FFF" href="account.php">My Orders</a></li><li><a style="color:#FFF" href="shopping_cart.php">View Shopping Cart</a></li><li><a style="color:#FFF" href="sign_out.php">Sign out</a></li>';
					}else{
						echo '<li><a style="color:#FFF" href="../html/login.html">Sign in</a></li><li><a style="color:#FFF" href="../html/sign_up.html">Sign up</a></li>';	
					}
					?>
                    </ul>
                    </div>
                    <div id="f3">
                    <ul id="ul1">
                    <li><a style="color:#FFF" href="#">Contact Us</a></li>
                    <li><a style="color:#FFF" href="about_us.php">About Us</a></li>
                    <li><a style="color:#FFF" href="about_us.php">Privacy Policy</a></li>
                    <li><a style="color:#FFF" href="about_us.php">Disclaimer</a></li>
                    <li><a style="color:#FFF" href="about_us.php">Terms & Conditions</a></li>
                    </ul>
                    </div>
                    </div>
                    </div>
                    <br>
                    <br>
            </div>
        	<div id="footer_menu">
        	<p style="text-align:center;bottom:0; position:relative; clear:both;">Copyright &copy; Bhathiya Lokuketagoda .2014-All rights reserved.</p>
        </div>
        </div>
	</div>
</div>
</body>
</html>
