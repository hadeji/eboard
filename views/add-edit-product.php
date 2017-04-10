<main>
<br><br>
	<div class="bcontainer">
		<div class="row">
			<div class="col s12 m9">

			<div class="addmessage">
				<check if="{{ @message }}">
					<h5 class="red-text">{{ @message }}</h5>
				</check>
			</div>

			<check if="{{ @purpose == 'edit'}}">
				<true>
				<repeat group="{{ @product }}" value="{{ @p }}">
				</repeat>
					<h5>Modify product</h5>
					<form method="post" enctype="multipart/form-data" action="{{ @BASE }}/products/update/{{ @p.productID }}" id="add-product">

						<div class="input-field col s12 m6">
							<select name="categoryID" id="categoryID">
								<option value="" disabled selected>Select product category</option>
								<repeat group="{{ @categories }}" value="{{ @c }}">
									<option value="{{ @c.categoryID }}" {{ @p.categoryID == @c.categoryID?'selected="selected"':'' }}>{{ @c.categoryName }}</option>
								</repeat>
							</select>
						</div>
						<div class="input-field col s12 m6">
							<input type="text" name="productCode" id="productCode" value="{{ @p.productCode }}">
							<label class="black-text">Product Code</label>
						</div>
						<div class="input-field col s12 m6">
							<input type="text" name="productName" id="productName" value="{{ @p.productName }}">
							<label class="black-text">Product Name</label>
						</div>
						<div class="input-field col s12 m6">
							<input type="number" name="listPrice" id="listPrice" value="{{ @p.listPrice }}">
							<label class="black-text">Product List Price</label>
						</div>
						<div class="input-field col s12 m6">
							<input type="number" name="discountPercent" id="discount" value="{{ @p.discountPercent }}">
							<label class="black-text">Discount Percent</label>
						</div>
						<div class="input-field col s12 m12">
							<textarea class="materialize-textarea" name="description" id="desc">{{ @p.description }}</textarea>
							<label class="black-text">Product Description</label>
						</div>

						<div class="input-field col s12 m12">
							<button type="submit" class="btn purple center" id="add-product-button">Update Product</button>
						</div>

					</form>
				</true>
				<false>
					<h5>Add new product</h5>
					<form method="post" enctype="multipart/form-data" action="{{ @BASE }}/products/add" id="add-product">

						<div class="input-field col s12 m6">
							<select name="categoryID" id="categoryID">
								<option value="" disabled selected>Select product category</option>
								<repeat group="{{ @categories }}" value="{{ @c }}">
									<option value="{{ @c.categoryID }}">{{ @c.categoryName }}</option>
								</repeat>
							</select>
						</div>
						<div class="input-field col s12 m6">
							<input type="text" name="productCode" id="productCode">
							<label class="black-text">Product Code</label>
						</div>
						<div class="input-field col s12 m6">
							<input type="text" name="productName" id="productName">
							<label class="black-text">Product Name</label>
						</div>
						<div class="input-field col s12 m6">
							<input type="number" name="listPrice" id="listPrice">
							<label class="black-text">Product List Price</label>
						</div>
						<div class="input-field col s12 m6">
							<input type="number" name="discountPercent" id="discount">
							<label class="black-text">Discount Percent</label>
						</div>
						<div class="input-field col s12 m12">
							<label class="black-text">Product Image</label>
						</div>
						<div class="input-field col s12 m12">
							<input type="file" class="dropify" name="productThumb" data-height="200" data-max-file-size="1M" data-max-width="500" data-min-width="500" data-min-height="300" data-max-height="300" id="thumb">
						</div>
						<div class="input-field col s12 m12">
							<textarea class="materialize-textarea" name="description" id="desc"></textarea>
							<label class="black-text">Product Description</label>
						</div>

						<div class="input-field col s12 m12">
							<button type="submit" class="btn purple center" id="add-product-button">Add Product</button>
						</div>

					</form>
				</false>
			</check>
			
			</div>
			<div class="col s12 m3">
					<ul class="collection card-panel">
					<a href="{{ @BASE }}/user/{{ @SESSION.userName }}" class="collection-item black-text">Manage Profile</a>
				      <a href="{{ @BASE }}/products" class="collection-item black-text">Manage Products</a>
				        <a href="{{ @BASE }}/customers" class="collection-item black-text">Manage Customers</a>
				        <a href="#!" class="collection-item black-text">Manage Orders</a>
				    </ul>
				</div>
		</div>
	</div>
</main>