<html>
<head>
<title>Music Store</title>
<link rel="stylesheet" type="text/css" href="../css/main.css"/>
</head>

<body style="margin:0px; background-color:#262626;">
<div id="body_wrapper">
		<div id="nav">
        	<div id="login">
            <?php
				session_start();
				if (isset($_SESSION['username'])){
					$username = $_SESSION['username'];
					echo '<form> Hi! '.$username.' <a href="php/shopping_cart.php"><input type="button" id="lg" value="view cart"></a> <a href="account.php"><input type="button" id="lg" value="Account"></a> <a href="sign_out.php"><input id="lg" type="button" value="Logout"></a></form>';	
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
                    <li><a href="../html/contact_us.html">Contact Us</a></li>
                </ul>
           	  </nav>
            </div>
        </div>
        <div id="footer"></div>
    	<div id="cont" style="height:620px;">
        	<div id="lp">
            	
            <?php
			require 'connect.inc.php';
			$album=$_POST['a'];
			$view="SELECT * FROM `album` WHERE `name`='$album'";
			$run = mysql_query($view);
				$aid = mysql_result($run,0,'a_id');
				$aname = mysql_result($run,0,'name');
				$url = mysql_result($run,0,'img_url');
				$ar = mysql_result($run,0,'artist');
				$price = mysql_result($run,0,'price');
				$artt="SELECT * FROM `artist` WHERE `artist_id`=$ar";
				$run2 = mysql_query($artt);
				$artist = mysql_result($run2,0,'name');
				echo '<table><tr><td><img src="../'.$url.'"></td>';
				echo '<td style="font-size:20px">Album : '.$album.'<br>Artist : '.$artist.'<br>Price : RS '.$price.'.00</td>';
				if(isset($_SESSION[$aname])){
						echo '<td style="padding:10px;" ><input type="button" id="lg" value="added" disabled></td>';
					}else if(!isset($_SESSION['username'])){
						echo '<td style="padding:10px;" ><input type="button" id="lg" value="add to cart" disabled>  <input type="button" id="lg" value="Buy" disabled></td>';
					}else{
						echo '<td style="padding:10px;" ><form action="add_to_cart.php" method="post"><input type="hidden" name="a" value="'.$aname.'"><input type="submit" id="lg" value="add to cart"></form></td><td><form action="" method="post"><input type="hidden" name="a" value=""><input type="submit" id="lg" value="Buy now"></form></td></tr></table>';	
					}
				$query="SELECT * FROM `product` WHERE `album_id`=$aid";
				$result=mysql_query($query);
				$rows = mysql_num_rows($result);
				echo '<table id="m_list">';
				for($x=0;$x<$rows;$x++){
					$trac=mysql_result($result,$x,'name');
					echo '<tr><td id="nm" style="font-size:20px">'.$trac.'</td></tr>';
				}
				echo '</table>';
			?>
                
            </div>
            <div id="rp">
            	<form id="search" style="margin-top:20px; margin-left:30px;" action="" >
                	<input type="radio" value="song" name="searchby" checked>Song &nbsp; <input type="radio" value="artist" name="searchby">Artist <br><br>
                	<input type="text" id="searcht"> &nbsp;<input type="submit" value="Search" id="lg">
                    
                </form>
                
                <h2 style="color:#262626; margin-left:10px;">Latest Music</h2>
                <div style="margin-left:60px; margin-top:10px;">
                <table id="">
                <?php
				require 'connect.inc.php';
				$query="SELECT * FROM `product` LIMIT 0, 10 ";
				$run = mysql_query($query);
				for($x=0;$x<2;$x++){
					$name = mysql_result($run,$x,'name');
					$iurl = mysql_result($run,$x,'img_url');
					$url = mysql_result($run,$x,'sng_url');
					echo '<tr>
							  <td id=""><a href="../'.$url.'" target="_blank"><img src="../'.$iurl.'"></a></td>
						  </tr>
						  <tr>
							  <td id=""><a href="../'.$url.'" target="_blank">'.$name.'</a></td>
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
                    <li><a style="color:#FFF" href="../index.php">Home</a></li>
                    <li><a style="color:#FFF" href="downloads.php">Downloads</a></li>
                    <li><a style="color:#FFF" href="albums.php">Albums</a></li>
                    </ul>
                    </div>
                    <div id="f2">
                    <ul id="ul1">
                    <?php
					if (isset($_SESSION['username'])){
                    	echo '<li><a style="color:#FFF" href="account.php">My Account</a></li><li><a style="color:#FFF" href="account.php">My Orders</a></li><li><a style="color:#FFF" href="shopping_cart.php">View Shopping Cart</a></li><li><a style="color:#FFF" href="sign_out.php">Sign out</a></li>';
					}else{
						echo '<li><a style="color:#FFF" href="html/login.html">Sign in</a></li><li><a style="color:#FFF" href="">Sign up</a></li>';	
					}
					?>
                    </ul>
                    </div>
                    <div id="f3">
                    <ul id="ul1">
                    <li><a style="color:#FFF" href="../html/contact_us.html">Contact Us</a></li>
                    <li><a style="color:#FFF" href="../html/about_us.html">About Us</a></li>
                    <li><a style="color:#FFF" href="../about_us.html">Privacy Policy</a></li>
                    <li><a style="color:#FFF" href="../html/about_us.html">Disclaimer</a></li>
                    <li><a style="color:#FFF" href="../html/about_us.html">Terms & Conditions</a></li>
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
