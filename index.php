<html>
<head>
<title>Music Store</title>
<link rel="stylesheet" type="text/css" href="css/main.css"/>
</head>

<body style="margin:0px; background-color:#262626;">
<div id="body_wrapper">
		<div id="nav">
        	<div id="login">
            <?php
				session_start();
				if (isset($_SESSION['username'])){
					$username = $_SESSION['username'];
					echo '<form> Hi! '.$username.' <a href="php/shopping_cart.php"><input type="button" id="lg" value="view cart"></a> <a href=""><input type="button" id="lg" value="Account"></a> <a href="php/sign_out.php"><input id="lg" type="button" value="Logout"></a></form>';	
				}else{
					echo '<form><a href="html/login.html"><input type="button" id="lg" value="Sign in"></a> Or <a href="html/sign_up.html"><input id="lg" type="button" value="Sign up"></a></form>';
				}
			?>	
            </div>
        	<div id="menu">
       		  <nav>
            	<ul>
                	<li><a href="#"><img src="images/home.png" style=" width:25px; height:20px; border:none;"/></a></li>
                    <li><a href="php/downloads.php">Downloads</a></li>
                    <li><a href="php/albums.php">Albums</a></li>
                    <li><a href="php/contact_us.php">Contact Us</a></li>
                </ul>
           	  </nav>
            </div>
        </div>
   	  <div id="slide">
      	<div id="thumb">
        	<script language="JavaScript">
				var i = 0;
				var path = new Array();
				path[0] = "images/cover_1.jpg";
				path[1] = "images/cover_2.jpg";
				path[2] = "images/cover_3.jpg";

				function swapImage()
				{
  					document.slide.src = path[i];
   					if(i < path.length - 1) i++; else i = 0;
   					setTimeout("swapImage()",5000);
				}
				window.onload=swapImage;
			</script>
			<img height="380" name="slide" src="images/cover_1.jpg" width="980" />
        </div>
        <div id="det">
        </div>
      </div>
    	<div id="cont" style="height:620px;">
        	<div id="lp">
            	<h2 style="color:#262626; margin-left:2px;">Top 10</h2>
                <table id="m_list">
                <?php
				require 'php/connect.inc.php';
				$query="SELECT * FROM `product` ORDER BY ratings DESC LIMIT 0, 10 ";
				$run = mysql_query($query);
				$rows = mysql_num_rows($run);
				for($x=0;$x<$rows;$x++){
					$name = mysql_result($run,$x,'name');
					$url = mysql_result($run,$x,'sng_url');
					echo '<tr>
							  <td id="nm">'.$name.'</td>
							  <td id="dl"><a id="lk" href="'.$url.'" download>download</a></td>
							  <td id="ls"><a href="'.$url.'" target="_blank" >play</a></td>
						  </tr>';
				}
				?>
                </table>
            </div>
            <div id="rp">
            	<form id="search" style="margin-top:20px; margin-left:30px;">
                	<input type="radio" value="song" name="searchby" checked>Song &nbsp; <input type="radio" value="artist" name="searchby">Artist <br><br>
                	<input type="text" id="searcht"> &nbsp;<input type="submit" value="Search" id="lg">
                </form>
                
                <h2 style="color:#262626; margin-left:10px;">Latest Music</h2>
                <div style="margin-left:60px; margin-top:10px;">
                <table id="">
                <?php
				require 'php/connect.inc.php';
				$query="SELECT * FROM `product` LIMIT 0, 3 ";
				$run = mysql_query($query);
				for($x=0;$x<2;$x++){
					$name = mysql_result($run,$x,'name');
					$iurl = mysql_result($run,$x,'img_url');
					$url = mysql_result($run,$x,'sng_url');
					echo '<tr>
							  <td id=""><a href="'.$url.'" target="_blank"><img src="'.$iurl.'"></a></td>
						  </tr>
						  <tr>
							  <td id=""><a href="'.$url.'" target="_blank">'.$name.'</a></td>
						  </tr> <br>';
				}
				?>
                </table>
                </div>
                </div>
        </div>
    	<div id="footer_wrapper">
        	<div id="footer">
            	 <div id="f1">
                    <ul id="ul1">
                    <li><a style="color:#FFF" href="">Home</a></li>
                    <li><a style="color:#FFF" href="">Downloads</a></li>
                    <li><a style="color:#FFF" href="">Albums</a></li>
                    </ul>
                    </div>
                    <div id="f2">
                    <ul id="ul1">
                    <?php
					if (isset($_SESSION['username'])){
                    	echo '<li><a style="color:#FFF" href="php/my_account.php">My Account</a></li><li><a style="color:#FFF" href="php/my_account.php">My Orders</a></li><li><a style="color:#FFF" href="php/shopping_cart.php">View Shopping Cart</a></li><li><a style="color:#FFF" href="php/sign_out.php">Sign out</a></li>';
					}else{
						echo '<li><a style="color:#FFF" href="html/login.html">Sign in</a></li><li><a style="color:#FFF" href="html/sign_up.html">Sign up</a></li>';	
					}
					?>
                    </ul>
                    </div>
                    <div id="f3">
                    <ul id="ul1">
                    <li><a style="color:#FFF" href="php/contact_us.php">Contact Us</a></li>
                    <li><a style="color:#FFF" href="php/about_us.php">About Us</a></li>
                    <li><a style="color:#FFF" href="php/about_us.php">Privacy Policy</a></li>
                    <li><a style="color:#FFF" href="php/about_us.php">Disclaimer</a></li>
                    <li><a style="color:#FFF" href="php/about_us.php">Terms & Conditions</a></li>
                    </ul>
                    </div>
                    </div>
                    </div>
                    <br>
                    <div id="footer"></div>
            </div>
        	<div id="footer_menu">
        	<p style="text-align:center; color:#FFF; padding:10px; bottom:0; position:relative; clear:both;">Copyright &copy; Bhathiya Lokuketagoda .2014-All rights reserved.</p>
        </div>
            </div>
            </div>
</div>
</body>
</html>
