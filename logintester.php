<?php
	session_start();
	if(isset($_SESSION['userid']))
	{
		echo "You are logged in. <a href='./services/logout.php'>Logout</a>";
	}
	else
	{
		echo "You are not logged in. <a href='login860.php'>Login</a>";
	}

?>