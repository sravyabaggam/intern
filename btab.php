<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
</head>
<body>


<ul>
<h3> Personal Details: </h3>
<li>  Name:
<strong><?php echo $_POST['name']; ?></strong>
</li>
<li>Age:
<strong><?php echo $_POST['age']; ?></strong>
</li>
<li>Gender:
<strong><?php echo $_POST['gender']; ?></strong>
</li>
<br> 
<br>
<h3> Contact Details: </h3>

<li> Phonenumber::
<strong><?php echo $_POST['pnumber']; ?></strong>
</li>
<li> Landline:
<strong><?php echo $_POST['lline']; ?></strong>
</li>
<li>Email :
<strong><?php echo $_POST['email']; ?></strong>
</li>
<li>Companyemail :
<strong><?php echo $_POST['cemail']; ?></strong>
</li>
<br>
<br>
<h3> Address Details: </h3>

<li>Line1:
<strong><?php echo $_POST['line']; ?></strong>
</li>
<li>Line2:
<strong><?php echo $_POST['linee']; ?></strong>
</li>

</ul>
<a target="right" href="btab1.htm">ok</a>
</body>
</html>