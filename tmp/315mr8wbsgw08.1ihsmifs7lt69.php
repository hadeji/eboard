<?php echo $this->render('header.php',$this->mime,get_defined_vars(),0); ?>

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
				<a href="<?php echo $BASE; ?>/register" class="btn btn-default">Create an account</a>
			</form>
		</div>
	</div>
</div>

<?php echo $this->render('footer.php',$this->mime,get_defined_vars(),0); ?>