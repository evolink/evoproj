<?php
	$lifeTime = 3600;
	session_set_cookie_params($lifeTime);
	session_start();
	$_SESSION['nom']=(isset($_POST['nom']))?$_POST['nom']:((isset($_SESSION['nom']))?$_SESSION['nom']:"");
	$_SESSION['prenom']=(isset($_POST['prenom']))?$_POST['prenom']:((isset($_SESSION['prenom']))?$_SESSION['prenom']:"");
	$_SESSION['sex']=(isset($_POST['sex']))?$_POST['sex']:((isset($_SESSION['sex']))?$_SESSION['sex']:"");
	$_SESSION['e_mail']=(isset($_POST['e_mail']))?$_POST['e_mail']:((isset($_SESSION['e_mail']))?$_SESSION['e_mail']:"");
	$_SESSION['password1']=(isset($_POST['password1']))?$_POST['password1']:((isset($_SESSION['password1']))?$_SESSION['password1']:"");
	$_SESSION['password2']=(isset($_POST['password2']))?$_POST['password2']:((isset($_SESSION['password2']))?$_SESSION['password2']:"");
	$action=(isset($_POST['act']))?$_POST['act']:"";
		
?>
<HTML><HEAD><TITLE>Administration</TITLE>
<META http-equiv=Content-Type content="text/html; charset=utf-8">
<META content="MSHTML 6.00.6001.18099" name=GENERATOR>
 <link rel="stylesheet" type="text/css" href="css/style.css" />
<SCRIPT language=javascript1.1>
<!--
function check()
 {
   if(this.document.personal.prenom.value=="")
   {
    alert("Please input the prenom!");
	this.document.personal.prenom.focus();
	return false;
   }
   if(this.document.personal.nom.value=="")
   {
    alert("Please input the nom!");
	this.document.personal.nom.focus();
	return false;
   }
   if(this.document.personal.e_mail.value=="")
   {
    alert("Please input the e_mail!");
	this.document.personal.e_mail.focus();
	return false;
   }
      if(this.document.personal.password1.value=="")
   {
    alert("Please input the password!");
	this.document.personal.password1.focus();
	return false;
   }
      return true;
 }
 </SCRIPT>
</HEAD>
<BODY bottomMargin=0 leftMargin=0 topMargin=0 rightMargin=0 marginwidth="0" marginheight="0">
<TABLE cellSpacing=0 cellPadding=0 width="95%" border=0 align="center" style="margin-top:100px;">
        <TBODY>
        <TR>
          <TD vAlign=top height=138><BR>
            <FORM name=personal onSubmit="return check();" action="sign_up.php" method=post>
            <TABLE height=159 cellSpacing=0 cellPadding=0 width=268 align=center 
            bgColor=#ffff99 border=0>
              <TBODY>
              <TR>
                <TD align=middle width=234 height=43><IMG height=113 
                  src="images/sign_up.gif" width=359></TD></TR>
              <TR>
                <TD align=middle background=images/loginbg.gif bgColor=#fafafa height=180>
                  <TABLE width=250 border=0>
                    <TBODY>
                    <TR>
                      <TD colspan=2 align=middle height=25 width=100%> <FONT 
                        color=#ff0000>Create a account</FONT></TD></TR>
					<TR>
                      <TD align=left align=left align=middle width=40%>
							Prenom: 
					  </TD>
					  <td width=60%>
							<INPUT tabIndex=2 type=text maxLength=20 size=15 name=prenom value="<?php if(isset($_SESSION['prenom'])) echo $_SESSION['prenom'];else echo ""; ?>">
					  </td>
					<TR>
						<TD align=left align=left align=middle>
							Nom: 
						</TD>
						<td width=40%>
							<INPUT tabIndex=2 type=text maxLength=20 size=15 name=nom value="<?php if(isset($_SESSION['nom'])) echo $_SESSION['nom'];else echo ""; ?>">
						</td>
					</TR>
					<TR>
						<TD align=left align=middle>Sex: 
						</TD>
						<td>
							<select name="sex" value="<?php if(isset($_SESSION['sex'])) echo $_SESSION['sex'];else echo "M"; ?>">
							<option value="M">M.</option>
							<option value="Mme">Mme</option>
							</select>
						</td>
					</TR>
                    <TR>
						<TD align=left align=middle height=25>
							E-mail: 
						</TD>
						<td>
							<INPUT tabIndex=2 type=text size=20 name=e_mail value="<?php if(isset($_SESSION['e_mail'])) echo $_SESSION['e_mail'];else echo ""; ?>">
						</td>
					</TR>
					<tr>
						<td colspan=2 align=center>
							<FONT color=#ff0000>Votre email est votre Login nom!</FONT>
						</td>
					</tr>
                    <TR>
						<TD align=left align=middle>
							Mot de pass: 
						</TD>
						<td>
							<INPUT tabIndex=2 type=password maxLength=20 size=15 name=password1 value="<?php if(isset($_SESSION['password1'])) echo $_SESSION['password1'];else echo ""; ?>">
						</td>
					</TR>
					<TR>
						<TD align=left align=middle>
							Resaisir MDP: 
						</TD>
						<td>
							<INPUT tabIndex=2 type=password maxLength=20 size=15 name=password2 value="<?php if(isset($_SESSION['password2'])) echo $_SESSION['password2'];else echo ""; ?>">
						</td>
					</TR>
					
                    <TR>
						<TD colspan=2 align=middle height=25>
							<input type="hidden" name="act" value="sign_up">
							<INPUT id=login_manager style="BORDER-RIGHT: 0px; BORDER-TOP: 0px; BACKGROUND-IMAGE: url(images/signupbutton.gif); BORDER-LEFT: 0px; WIDTH: 52px; CURSOR: hand; BORDER-BOTTOM: 0px; HEIGHT: 18px" type=submit value=" " name=login_manager> 
							
						</TD>
					</TR>
                    <TR>
                      <TD align=middle>
                        </TD></TR></TBODY></TABLE></TD></TR>
              <TR>
                <TD align=middle background=images/loginend.gif 
                height=5></TD></TR></TBODY></TABLE></FORM></TD></TR></TBODY></TABLE>
</BODY>
</HTML>
<?php
	if($action=="sign_up"){
		$checknom=preg_match('/^[a-zA-Z]+\w{1,20}$/',$_SESSION['nom']); //使用正则表达式检查用户名
		$checkprenom=preg_match('/^[a-zA-Z]+\w{1,20}$/',$_SESSION['prenom']);
		$checkadresse_mail=preg_match('/^[a-zA-Z0-9_\-\.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/',$_SESSION['e_mail']);
		require('../data/mysql.php');
		$e_mail=$_SESSION['e_mail'];
		$sql1="SELECT * FROM client where client_e_mail = '$e_mail' ";
		$query1=mysql_query($sql1);
		if($rs1=mysql_fetch_array($query1)){
			$checkadresse_mail=2;
		}
		$checkpassword=($_SESSION['password1']==$_SESSION['password1'])?1:0;
		if(strlen($_SESSION['password1'])<6){
			$checkpassword=2;
		}
		if(!$checknom)
			echo "<script>alert('\'Nom\' est faux!');location.href='sign_up.php';</script>";
		elseif(!$checkprenom)
			echo "<script>alert('\'Prenom\' est faux!');location.href='sign_up.php';</script>";
		elseif($checkadresse_mail==2)
			echo "<script>alert('L\'adresse_mail\' existe deja!');location.href='sign_up.php';</script>";
		elseif(!$checkadresse_mail)
			echo "<script>alert('\'adresse_mail\' est fausse!');location.href='sign_up.php';</script>";
		elseif($checkpassword==2)
			echo "<script>alert('La longueur de \'password\' doit etre superieur a 6!');location.href='sign_up.php';</script>";
		elseif(!$checkpassword)
			echo "<script>alert('Les deux \'password\' ne doit pas etre pareil!');location.href='sign_up.php';</script>";
		else{
			
			$sql=("INSERT INTO client (client_id,client_nom,client_prenom,client_sex,client_e_mail,client_password)
			VALUES(NULL,'$_SESSION[nom]','$_SESSION[prenom]','$_SESSION[sex]','$_SESSION[e_mail]','$_SESSION[password1]')");	
			if (!mysql_query($sql,$db))
			{
				die('Error: '.mysql_error());
			}
			else{
				$nid = mysql_insert_id();
				$_SESSION['si_login']=1;
				echo "<script>alert('1 record added; Succeed! ID of last inserted record is:$nid');location.href='../index.php';</script>";
			}
			mysql_close($db);
		}
	}
?>
