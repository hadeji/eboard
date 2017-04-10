<main>
<div class="bcontainer">
<br>
<div class="row">
	<div class="col s12 m9">
		<div class="center">
			<div class="loginmessage">
				<check if="{{ @message }}">
					<h5 class="red-text">{{ @message }}</h5>
				</check>
			</div>
			<h5>Login</h5>
			<form action="{{ @BASE }}/login-account" method="post" id="loginForm">
				<div class="input-field col s12 m6 offset-m3">
					<input type="text" name="username" id="username">
					<label class="black-text">Username:</label>
				</div>
				<div class="input-field col s12 m6 offset-m3">
					<input type="password" name="password" id="password">
					<label class="black-text">Password:</label>
				</div>
				<div class="input-field col s12 m6 offset-m3">
					<button type="submit" class="btn btn-large green" id="login">Login</button>
				</div>
			</form>
		</div>
	</div>
	<div class="col s12 m3">
		<h5 class="center"></h5>
		<div class="card-panel">
			<p>Acoustix! Are you looking for aesthetically carved, quality and inexpensive guitars, basses or drums? Then you've landed to the right place.</p>
			<p>Tshirts and Smartphones are also available.</p>
		</div>
	</div>
</div>


</div>
</main>