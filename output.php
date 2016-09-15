<?php 
if($_POST['username']=="test@gmail.com" && $_POST['password']=="123"){
	header('Location: http://localhost/work/result.html');
}
else{
	header('Location: http://localhost/work/bstraplgin.html');
}
die();
?> 