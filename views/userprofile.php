<repeat group="{{ @profile }}" value="{{ @p }}">
<check if="{{ @p.accountType == 'user'}}">
<true>

<main>
<br><br>
	<div class="bcontainer">
		<div class="row">
			<div class="col s12 m9">
			
				<h5>Hey {{ @p.firstName }}! Here is your profile information.</h5>
				<a href="#"><i class="mdi mdi-table-edit mdi-18px" id="edit"></i></a>
				<br><br>
					<form action="{{ @BASE }}/user/update-account" method="post" id="updateForm">
					<input type="hidden" name="id" value="{{ @p.customerID }}">
					<div class="input-field col s12 m6">
						<input type="text" name="firstName" id="fname" class="validate" value="{{ @p.firstName }}">
						<label class="black-text">Firstname:</label>
					</div>
					<div class="input-field col s12 m6">
						<input type="text" name="lastName" id="lname" class="validate" value="{{ @p.lastName}}">
						<label class="black-text">Lastname:</label>
					</div>
					<div class="input-field col s12 m6">
						<input type="text" name="userName" id="uname" class="validate" value="{{ @p.userName }}">
						<label class="black-text">Username:</label>
					</div>
					<div class="input-field col s12 m6">
						<input type="email" name="emailAddress" id="email" class="validate" value="{{ @p.emailAddress }}"> 
						<label class="black-text">Email:</label>
					</div>
					<div class="input-field col s12 m6">
						<input type="text" class="datepicker" id="bdate" name="birthDate" value="{{ @p.birthDate}}">
						<label class="black-text">Birthdate:</label>
					</div>
					<div class="input-field col s12 m6">
						<textarea class="materialize-textarea validate" id="shipbilladdress" name="shippingBillingAddress">{{ @p.shippingBillingAddress }}</textarea>
						<label class="black-text">Shipping/Billing Address:</label>
					</div>
					<div class="input-field col s12 m6">
						<button type="submit" class="btn purple white-text waves-effect" id="update">Update Profile</button>
						<button type="button" class="btn red white-text waves-effect" id="delete" onclick="showDelete()">Delete Profile</button>
						<script type="text/javascript">
						  	var showDelete = function () {
						      var $toastContent = $('<span>Do you really want to delete your account? Toast will dismiss in 5 seconds. <a href="{{ @p.userName }}/delete" class="blue-text bold"> <i class="mdi mdi-check"></i> Yes</a></span>');
						      Materialize.toast($toastContent, 5000, 'rounded');
						    }
						  </script>
					</div>	
				</form>
			</div>
			<div class="col s12 m3">
				<div class="card-panel">

				</div>
			</div>
		</div>
	</div>
</main>
</true>
<false>

<main>
<br><br>
	<div class="bcontainer">
		<div class="row">
			<div class="col s12 m9">
			
				<h5>Hey {{ @p.firstName }}! Here is your profile information.</h5>
				<a href="#"><i class="mdi mdi-table-edit mdi-18px" id="edit"></i></a>
				<br><br>
					<form action="{{ @BASE }}/user/update-account" method="post" id="updateForm">
					<input type="hidden" name="id" value="{{ @p.customerID }}">
					<div class="input-field col s12 m6">
						<input type="text" name="firstName" id="fname" class="validate" value="{{ @p.firstName }}">
						<label class="black-text">Firstname:</label>
					</div>
					<div class="input-field col s12 m6">
						<input type="text" name="lastName" id="lname" class="validate" value="{{ @p.lastName}}">
						<label class="black-text">Lastname:</label>
					</div>
					<div class="input-field col s12 m6">
						<input type="text" name="userName" id="uname" class="validate" value="{{ @p.userName }}">
						<label class="black-text">Username:</label>
					</div>
					<div class="input-field col s12 m6">
						<input type="email" name="emailAddress" id="email" class="validate" value="{{ @p.emailAddress }}"> 
						<label class="black-text">Email:</label>
					</div>
					<div class="input-field col s12 m6">
						<input type="text" class="datepicker" id="bdate" name="birthDate" value="{{ @p.birthDate}}">
						<label class="black-text">Birthdate:</label>
					</div>
					<div class="input-field col s12 m6">
						<textarea class="materialize-textarea validate" id="shipbilladdress" name="shippingBillingAddress">{{ @p.shippingBillingAddress }}</textarea>
						<label class="black-text">Shipping/Billing Address:</label>
					</div>
					<div class="input-field col s12 m6">
						<button type="submit" class="btn purple white-text waves-effect" id="update">Update Profile</button>
						<button type="button" class="btn red white-text waves-effect" id="delete" onclick="showDelete()">Delete Profile</button>
						<script type="text/javascript">
						  	var showDelete = function () {
						      var $toastContent = $('<span>Do you really want to delete your account? Toast will dismiss in 5 seconds. <a href="{{ @p.userName }}/delete" class="blue-text bold"> <i class="mdi mdi-check"></i> Yes</a></span>');
						      Materialize.toast($toastContent, 5000, 'rounded');
						    }
						  </script>
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

</false>

</check>
</repeat>