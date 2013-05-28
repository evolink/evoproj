<?php
	$lifeTime = 3600;
	session_set_cookie_params($lifeTime);
	session_start();
	$evenement = "Match de football";
	$organisateurs = "www.marseillexuelian.com";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title><?php echo $evenement;?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="description" content="Match de football" />
		<meta name="keywords" content="zhen, Match, football, provence, marseille, aix-en-provence"/>
		<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<script src="js/cufon-yui.js" type="text/javascript"></script>
		<script src="js/ChunkFive_400.font.js" type="text/javascript"></script>
		<script type="text/javascript">
			Cufon.replace('h1',{ textShadow: '1px 1px #000'});
			Cufon.replace('h2',{ textShadow: '1px 1px #000'});
			Cufon.replace('.footer',{ textShadow: '1px 1px #000'});
			Cufon.replace('.pxs_loading',{ textShadow: '1px 1px #000'});
		</script>
		<!-- The JavaScript -->
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="js/jquery.control.1.js"></script>
    </head>
    <body>
			<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
				<tr>
					<td>
						<div>
						<h1><?php echo $evenement;?></h1>
						</div>
					</td>
					<!--
					<td width=30%>
					</td>
					<td width=40%>
						<div>
						<h1 align="center"><?php echo $evenement;?></h1>
						</div>
					</td>
					<td width=10%>
					</td>
					<td width=20%>
						<table align=center>
							<tr>
							<?php
								if(!isset($_SESSION['si_login'])||$_SESSION['si_login']==""){
									echo "";
									echo "<td align=center><a href=\"client/login.php\" target=cadre2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;->login<-</a></td>";
								}else{
									echo "<td height=40 >&nbsp;</td></tr>";
									echo "<tr><td align=center valign=bottom>Welcome ".$_SESSION['prenom']." ".$_SESSION['nom']."<a href=\"client/logout.php\"> &nbsp; <-logout-></a></td>";
								}
							?>
							</tr>
						</table>
					</td>
					-->
				</tr>
			</table>

		<div id="pxs_container" class="pxs_container">
			<div class="pxs_bg">
				<div class="pxs_bg1"></div>
				<div class="pxs_bg2"></div>
				<div class="pxs_bg3"></div>
			</div>
			<div class="pxs_loading">Loading images...</div>
			<div class="pxs_slider_wrapper">
				<ul class="pxs_slider">
					<li><img src="images/1.jpg" alt="First Image" /></li>
					<li><img src="images/2.jpg" alt="Second Image" /></li>
					<li><img src="images/3.jpg" alt="Third Image" /></li>
					<li><img src="images/4.jpg" alt="Forth Image" /></li>
					<li><img src="images/5.jpg" alt="Fifth Image" /></li>
					<li><img src="images/6.jpg" alt="Sixth Image" /></li>
				</ul>
				<div class="pxs_navigation">
					<span class="pxs_next"></span>
					<span class="pxs_prev"></span>
				</div>
				<ul class="pxs_thumbnails">
					<li><a href="cadre_1.php" target=cadre2><img src="images/thumbs/football_256.png" alt="Page1" /></a></li>
					<li><a href="cadre_2.php" target=cadre2><img src="images/thumbs/football_256.png" alt="Page2" /></a></li>
					<li><a href="cadre_3.php" target=cadre2><img src="images/thumbs/football_256.png" alt="Page3" /></a></li>
					<li><a href="cadre_4.php" target=cadre2><img src="images/thumbs/football_256.png" alt="Page4" /></a></li>
					<li><a href="cadre_5.php" target=cadre2><img src="images/thumbs/football_256.png" alt="Page5" /></a></li>
					<li><a href="cadre_6.php" target=cadre2><img src="images/thumbs/football_256.png" alt="Contact" /></a></li>
				</ul>
			</div>
		</div>
		<table width="1000"  border="0" align="center" cellpadding="0" cellspacing="0">
			<tr>
				<div class="pxs_cadre">
					<IFRAME style="border:0px solid #000000; " name='cadre2' align=center valign=middle src="cadre_1.php" frameBorder=1 noResize width=1000 height=850 target="_self" border="1"></IFRAME>
				</div>
			</tr>
		</table>
		

		
		<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
			<tr>
				<div class="footer">
					<a href="#">To the top</a>
				</div>
			</tr>
			<tr height=25>
				<td align="center" valign="top" background="images/foot_m.gif" class="footer"><?php echo $organisateurs;?> 2012  &nbsp; adress: Marseille   téléphone: 0033 (0)6 49 84 09 64 </td>
			</tr>
		</table>
    </body>
</html>