<include href="header.php" />

<div class="row">
	<h2 class="center-align">Eboard</h2>
</div>

<div class="row">
	<div class="container">
		<div class="col m6">
			<form action="home.php" method="post">
				<label>Username:</label>
				<input type="text" name="username">
				<label>Password:</label>
				<input type="password" name="password">
				<button type="submit" class="btn btn-default">Login</button>
				<a href="{{ @BASE }}/register" class="btn btn-default">Create an account</a>
			</form>
		</div>
	</div>
</div>

<include href="footer.php" />