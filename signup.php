<?php
$id = md5(rand(6000,PHP_INT_MAX));
?>
<?
include('geturl.php');
?>
<? $subdomain = $_GET['subdomain']; ?>
<!doctype html>

<html lang="en"> 

 <head> 

<link href="data:image/x-icon;base64,AAABAAEAEBACAAAAAACwAAAAFgAAACgAAAAQAAAAIAAAAAEAAQAAAAAAQAAAAAAAAAAAAAAAAgAAAAAAAAAAAAAAHtRtAAAAAAAH4AAAD/AAABw4AAA4HAAAOBwAADgcAAA4HAAAOBwAADgcAAA4HAAAOBwAABw4AAAP8AAAB+AAAAAAAAD//wAA+B8AAPAPAADjxwAAx+MAAMfjAADH4wAAx+MAAMfjAADH4wAAx+MAAMfjAADjxwAA8A8AAPgfAAD//wAA" rel="icon" type="image/x-icon">

  <meta charset="UTF-8"> 

  <title><?echo $yourdomain;?> - Free Web Hosting with Free Subdomain Name.</title> 

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no"> 

<script type="text/javascript">
var searchWinHref = window.location.href;
   if(searchWinHref.indexOf("?i") > -1) { 
   window.location.href = window.location.href.split('?')[0];
   }
</script>

<style>
html { max-width: 500px; background-color: lightgray; border: 5px gray solid; margin: 5px; margin-left: auto; margin-right: auto; text-align: center; }
hr { border: 2px gray solid; }
h3 { background-color: white; border: 5px gray solid; }
div { background-color: gray; color: black; }
</style>

 </head> 

 <body>

<form action="http://order.<?echo $yourdomain;?>/register2.php" method="post"> 

<h3>Sign Up</h3>

<div>

       <input type="text" placeholder="Subdomain" name=username value="<?echo $subdomain;?>" pattern="[a-z0-9]{4,16}" maxlength="16" oninvalid="this.setCustomValidity('Enter sub-domain name')" oninput="setCustomValidity('')" required><br>

       <input type="password" placeholder="Password" name=password pattern=".{6,16}" maxlength="16" oninvalid="this.setCustomValidity('Enter password')" oninput="setCustomValidity('')" required><br>

       <input type="email" placeholder="E-mail Address" name=email value="" oninvalid="this.setCustomValidity('Enter e-mail')" oninput="setCustomValidity('')" required><br>

      <input type=hidden name=id value="<?PHP echo $id; ?>">
<img alt="captcha" src="http://order.<? echo $yourdomain;?>/image.php?id=<?PHP echo $id; ?>"><br>

       <input size="10" type=text pattern=".{5,5}" placeholder="Code" name=number oninvalid="this.setCustomValidity('Enter security code')" oninput="setCustomValidity('')" required><br>

       <input type="submit" value="Register"><br>

</div>

      </form>

<hr>

(c) 2025

 </body>

</html>
