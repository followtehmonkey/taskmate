﻿<?php
// session_start();
// include_once 'functions/User.class.php';
// $user = new User();
// if ($user->get_session()) {
	// header("location:index.php");
// }

?>

<form method="POST" action="functions/registration.php" name='reg' >
<p>Full Name</p>
<input type="text" name="name"/>
<p>Username</p>
<input type="text" name="username"/>
<p>Password</p>
<input type="password" name="password1"/>
<p>Repeat Password </p>
<input type="password" name="password2"/>
<p>Email</p>
<input type="text" name="email"/>
<button type="submit" value="Register">Register</button>
</form> 