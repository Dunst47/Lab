
<hmtl>
<head>

<title>Sign up
</title>
<script type="text/javascript" src="validate.js"></script>
<link rel="stylesheet" type="text/css" href="validate.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script type="text/javascript" src="timezone.js"></script>
</head>
<body>
<form method="post" name="user_details" id="user_details" onsubmit="return validateForm()" enctype="multipart/form-data" action="<?=$_SERVER['PHP_SELF']?>">
<table align="center">
<tr>
<td>
<div id="form_errors">
<?php
session_start();
if(!empty($_SESSION['form_errors'])){
echo " " . $_SESSION['form_errors'];
unset($_SESSION['form_errors']);
}
?>
</div>
</td>
</tr>
<tr>
<td><input type="text" name="first_name" placeholder="First Name"></td>
</tr>
<tr>
<td><input type="text" name="last_name"  placeholder="Last Name"></td>
</tr>
<tr>
<td><input type="text" name="username"  placeholder="Username"></td>
</tr>
<tr>
<td><input type="text" name="city_name"  placeholder="City"></td>
</tr>

<tr>
<td><button type="submit" name="btn-save"><strong>SAVE</strong></button></td>
</tr>
<tr>
<td><a href="login.php">Login</a></td>
</tr>
<tr>
<td><input type="text" hidden name="utc_timestamp" id="utc_timestamp" value=""></td>
</tr>
<tr>
<td><input type="text" hidden name="time_zone_offset" id="time_zone_offset" value=""></td>
</tr>
<!--<tr>
<td><button type="submit" name="btn-display"><strong>DISPLAY</strong></button></td>
</tr>
-->
</table>
</form>
</body>
</html>