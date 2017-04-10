<main>
<br><br>
	<div class="bcontainer">
		<div class="row">
			<div class="col s12 m9">
			<a class="btn pink" href="{{ @BASE }}/products/new">Add a new product</a><hr>
			<table class="bordered highlight responsive-table">
				<thead>
					<tr>
						<th>Product Name</th>
						<th>Product Code</th>
						<th>Product Category</th>
						<th>List Price</th>
						<th>Product Description</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<repeat group="{{ @products }}" value="{{ @p }}">
						<tr>
							<td>{{ @p.productName }}</td>
							<td>{{ @p.productCode }}</td>
							<td>{{ @p.categoryName }}</td>
							<td>P {{ @p.listPrice }}</td>
							<td>{{ @p.Descr }}</td>
							<td>
								<a href="{{ @BASE }}/products/edit/{{ @p.productCode }}"><i class="mdi mdi-table-edit mdi-18px"></i></a>
								<a onclick="showDelete{{ @p.productID }}()" class="tooltipped" data-position="top" data-delay="50" data-tooltip="Delete product">
									<i class="mdi mdi-delete mdi-18px"></i>
								</a>
								<script type="text/javascript">
								  	var showDelete{{ @p.productID }} = function () {
								      var $toastContent = $('<span>Do you really want to delete this product? Toast will dismiss in 5 seconds. <a href="products/delete/{{ @p.productID }}" class="blue-text bold"> <i class="mdi mdi-check"></i> Yes</a></span>');
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