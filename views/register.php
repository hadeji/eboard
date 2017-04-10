<include href="header.php" />

<div class="row">
	<h2 class="center-align">Eboard</h2>
</div>

<div class="row">
	<div class="container">
		<div class="col m6">
			<form action="{{ @BASE }}/register-account" method="post">
				<label>Firstname:</label>
				<input type="text" name="firstname" required="">
				<label>Lastname:</label>
				<input type="text" name="lastname" required="">
				<label>Username:</label>
				<input type="text" name="username" required="">
				<label>Email address:</label>
				<input type="email" name="email" required="">
				<label>Confirm email address:</label>
				<input type="email" name="confirm_email" required="">
				<label>Password:</label>
				<input type="password" name="password" required="">
				<label>Confirm Password:</label>
				<input type="password" name="confirm_password" required="">
				<button type="submit" class="btn btn-default">Register</button>
				<a href="{{ @BASE }}/" class="btn btn-default">Login</a>
			</form>
		</div>
	</div>
</div>

<include href="footer.php" />