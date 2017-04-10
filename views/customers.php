<main>
<br><br>
	<div class="bcontainer">
		<div class="row">
			<div class="col s12 m9">
			<hr>
			<table class="bordered highlight responsive-table">
				<thead>
					<tr>
						<th>Name</th>
						<th>Username</th>
						<th>Email</th>
						<th>Birthdate</th>
						<th>Shipping/Billing Address</th>
						<th>Account Type</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<repeat group="{{ @customers }}" value="{{ @c }}">
						<tr>
							<td>{{ @c.firstName }} {{ @c.lastName }}</td>
							<td>{{ @c.userName }}</td>
							<td>{{ @c.emailAddress }}</td>
							<td>{{ @c.birthDate }}</td>
							<td>{{ @c.shippingBillingAddress }}</td>
							<td>{{ @c.accountType }}</td>
							<td>
								<a href="#" onclick="showDelete{{ @c.customerID }}()" class="tooltipped" data-position="top" data-delay="50" data-tooltip="Delete customer">
									<i class="mdi mdi-delete mdi-18px"></i>
								</a>
								<a href="customers/edit/{{ @c.customerID }}" class="tooltipped" data-position="top" data-delay="50" data-tooltip="Edit customer details">
									<i class="mdi mdi-table-edit mdi-18px"></i>
								</a>
								<script type="text/javascript">
								  	var showDelete{{ @c.customerID }} = function () {
								      var $toastContent = $('<span>Do you really want to delete this customer? Toast will dismiss in 5 seconds. <a href="customers/delete/{{ @c.customerID }}" class="blue-text bold"> <i class="mdi mdi-check"></i> Yes</a></span>');
								      Materialize.toast($toastContent, 5000, 'rounded');
								    }
								  </script>
							</td>
						</tr>
					</repeat>
				</tbody>
				</table>

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