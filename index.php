<?
include('geturl.php');
?>
<!doctype html>

<html lang="en"> 

 <head> 

<link href="data:image/x-icon;base64,AAABAAEAEBACAAAAAACwAAAAFgAAACgAAAAQAAAAIAAAAAEAAQAAAAAAQAAAAAAAAAAAAAAAAgAAAAAAAAAAAAAAHtRtAAAAAAAH4AAAD/AAABw4AAA4HAAAOBwAADgcAAA4HAAAOBwAADgcAAA4HAAAOBwAABw4AAAP8AAAB+AAAAAAAAD//wAA+B8AAPAPAADjxwAAx+MAAMfjAADH4wAAx+MAAMfjAADH4wAAx+MAAMfjAADjxwAA8A8AAPgfAAD//wAA" rel="icon" type="image/x-icon">

  <meta charset="UTF-8"> 

  <title><?echo $yourdomain;?> - Free Web Hosting with Free Subdomain Name.</title> 

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="description" content="Free Web Hosting with Free Subdomain Name"> 

<script type="text/javascript">
var searchWinHref = window.location.href;
   if(searchWinHref.indexOf("?i") > -1) { 
   window.location.href = window.location.href.split('?')[0];
   }
</script>

 </head> 

 <body>

<form action="http://cpanel.<?echo $yourdomain;?>/login.php" method="post"> 

<h3>Client Login</h3>

       <input type="text" placeholder="Username" name="uname" maxlength="30" oninvalid="this.setCustomValidity('Enter username')" oninput="setCustomValidity('')" required><br>

       <input type="password" placeholder="Password" name="passwd" maxlength="30" oninvalid="this.setCustomValidity('Enter password')" oninput="setCustomValidity('')" required><br>

<a href="http://cpanel.<?echo $yourdomain;?>/lostpassword.php">Reset Password</a><br>

       <input type="submit" value="Login"> 

      </form>
<hr>
<form method="GET" action="http://<?echo $yourdomain;?>/signup.php">

<h3>Registration</h3>

<input type="text" placeholder="Enter sub-domain name" value="" pattern="[a-z0-9]{4,16}" maxlength="16" name="subdomain">.<?echo $yourdomain;?> 

<input type="submit" value="Register">

</form>

 </body>

</html>
