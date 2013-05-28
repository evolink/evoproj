<?php
	$lifeTime = 3600;
	session_set_cookie_params($lifeTime);
	session_start();
?>
<HTML><HEAD><TITLE>Administration</TITLE>
<META http-equiv=Content-Type content="text/html; charset=utf-8">
<META content="MSHTML 6.00.6001.18099" name=GENERATOR>
 <link rel="stylesheet" type="text/css" href="css/style.css" />
<SCRIPT language=javascript1.1>
<!--
function check()
 {
   if(this.document.personal.e_mail.value=="")
   {
    alert("Please input the username!");
	this.document.personal.e_mail.focus();
	return false;
   }
      if(this.document.personal.password.value=="")
   {
    alert("Please input the password!");
	this.document.personal.password.focus();
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
            <FORM name=personal onSubmit="return check();" action="checklogin.php" method=post>
            <TABLE height=159 cellSpacing=0 cellPadding=0 width=268 align=center 
            bgColor=#ffff99 border=0>
              <TBODY>
              <TR>
                <TD align=middle width=234 height=43><IMG height=113 
                  src="images/login.gif" width=359></TD></TR>
              <TR>
                <TD align=middle background=images/loginbg.gif 
                bgColor=#fafafa height=180>
                  <TABLE width=250 border=0>
                    <TBODY>
                    <TR>
                      <TD align=middle height=25><FONT 
                        color=#ff0000>Sorry, you didn't logined</FONT></TD></TR>
                    <TR>
                      <TD align=middle height=25>Username：&nbsp; <INPUT tabIndex=1 
                        maxLength=20 size=15 name=e_mail></TD></TR>
                    <TR>
                      <TD align=middle>password：&nbsp; <INPUT tabIndex=2 
                        type=password maxLength=20 size=15 name=password></TD>
					</TR>
					<TR>
                      <div class=""><TD align=middle>Not on our site? <a href="sign_up.php">Sign Up</a></TD></div>
					</TR>
                    <TR>
						<TD align=middle height=25>
							<input type="hidden" name="act" value="login">
							<INPUT id=login_manager style="BORDER-RIGHT: 0px; BORDER-TOP: 0px; BACKGROUND-IMAGE: url(images/loginbutton.gif); BORDER-LEFT: 0px; WIDTH: 52px; CURSOR: hand; BORDER-BOTTOM: 0px; HEIGHT: 18px" type=submit value=" " name=login_manager> 
							<INPUT id=login_member2 style="BORDER-RIGHT: 0px; BORDER-TOP: 0px; BACKGROUND-IMAGE: url(images/loginbutton2.gif); BORDER-LEFT: 0px; WIDTH: 52px; CURSOR: hand; BORDER-BOTTOM: 0px; HEIGHT: 18px" type=reset value=" " name=login_member2>
						</TD>
					</TR>
                    <TR>
                      <TD align=middle>
                        </TD></TR></TBODY></TABLE></TD></TR>
              <TR>
                <TD align=middle background=images/loginend.gif 
                height=5></TD></TR></TBODY></TABLE></FORM></TD></TR></TBODY></TABLE>
</BODY></HTML>
