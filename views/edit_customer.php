<repeat group="{{ @customer}}" value="{{ @c }}">
</repeat>

<main>
<br><br>
	<div class="bcontainer">
		<div class="row">
			<div class="col s12 m9">
			
				<h5>Modify customer's details</h5>
					<form action="{{ @BASE }}/customers/update" method="post">
					<input type="hidden" name="id" value="{{ @c.customerID }}">
					<div class="input-field col s12 m6">
						<input type="text" name="firstName" id="fname" class="validate" value="{{ @c.firstName }}">
						<label class="black-text">Firstname:</label>
					</div>
					<div class="input-field col s12 m6">
						<input type="text" name="lastName" id="lname" class="validate" value="{{ @c.lastName}}">
						<label class="black-text">Lastname:</label>
					</div>
					<div class="input-field col s12 m6">
						<input type="text" name="userName" id="uname" class="validate" value="{{ @c.userName }}">
						<label class="black-text">Username:</label>
					</div>
					<div class="input-field col s12 m6">
						<input type="email" name="emailAddress" id="email" class="validate" value="{{ @c.emailAddress }}"> 
						<label class="black-text">Email:</label>
					</div>
					<div class="input-field col s12 m6">
						<input type="text" class="datepicker" id="bdate" name="birthDate" value="{{ @c.birthDate}}">
						<label class="black-text">Birthdate:</label>
					</div>
					<div class="input-field col s12 m6">
						<textarea class="materialize-textarea validate" id="shipbilladdress" name="shippingBillingAddress">{{ @c.shippingBillingAddress }}</textarea>
						<label class="black-text">Shipping/Billing Address:</label>
					</div>

					<div class="input-field col s12 m6">
						<select name="accountType">
							<option value="" disabled selected>Select account type</option>
								<option value="user" {{ @c.accountType == 'user'?'selected="selected"':'' }}>user</option>
								<option value="admin" {{ @c.accountType == 'admin'?'selected="selected"':'' }}>admin</option>
						</select>
					</div>

					<div class="input-field col s12 m6">
						<button type="submit" class="btn purple white-text waves-effect" id="update">Update Profile</button>
					</div>	
				</form>
			</div>
			<div class="col s12 m3">
				<ul class="collection card-panel">
				<a href="{{ @BASE }}/user/{{ @SESSION.userName }}" class="collection-item black-text">Manage Profile</a>
				<a href="{{ @BASE }}/categories" class="collection-item black-text">Manage Categories</a>
			      <a href="{{ @BASE }}/products" class="collection-item black-text">Manage Products</a>
			        <a href="{{ @BASE }}/customers" class="collection-item black-text">Manage Customers</a>
			        <a href="{{ @BASE }}/orders" class="collection-item black-text">Manage Orders</a>
			    </ul>
			</div>
		</div>
	</div>
</main>