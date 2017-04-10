<main>
<div class="bcontainer">
<div class="row">

<repeat group="{{ @product }}" value="{{ @p }}">
</repeat>

<div class="row">
	<div class="col s12 m9">

  <div class="row">
            <div class="card-panel z-depth-0">
              <div class="col-xs-12 col-sm-12 col-md-6">
                <p><b>Name:</b> {{ @SESSION.firstName }} {{ @SESSION.lastName }}</p>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-6">
                <p><b>Email:</b> {{ @SESSION.emailAddress }}</p>
              </div>
            </div>
            </div>
		
      <h5>Your Orders</h5>
        <hr>
            <table class="bordered highlight responsive-table centered">
              <thead>
                <tr>
                  <th>ProductID</th>
                  <th>Item Price</th>
                  <th>Discount Amount</th>
                  <th>Quantity</th>
                  <th>Subtotal</th>
                </tr>
              </thead>
              <tbody>
                <repeat group="{{ @orderitems }}" value="{{ @o }}">
                  <tr>
                    <td>{{ @o.productID }}</td>
                    <td>P {{ round(@o.itemPrice, 2) }}</td>
                    <td>P {{ round(@o.discountAmount, 2) }}</td>
                    <td>
                      {{ @o.quantity }}
                    </td>
                    <td>P {{ round(@o.itemPrice * @o.quantity, 2) }}</td>
                  </tr>
                </repeat>
              </tbody>
            </table>
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-6">
                <p>Total items ordered: {{ @total_items }}</p>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-6">
                <p class="green-text right darken-3">Total amount due: P <b>{{ round(@total_sum, 2) }}</b></p>
              </div>
            </div>
            <hr>

            <div class="row">
            <h5>Payment Method</h5>
            <ul class="collapsible popout" data-collapsible="accordion">
              <li>
                <div class="collapsible-header"><b>Cash on Delivery (COD)</b></div>
                <div class="collapsible-body">
                  <p><b>Shipping/Billing Address:</b> {{ @SESSION.shippingBillingAddress }}
                  &nbsp&nbsp<a href="{{ @BASE }}/cart/placeorder" class="btn purple">Place Order</a></p>
                </div>
              </li>
              <li>
                <div class="collapsible-header"><b>Credit/Debit Card</b></div>
                <div class="collapsible-body">
                  <div class="row">
                  <div class="col-md-12">
                  <form action="{{ @BASE }}/cart/placeorder" method="post">
                      <div class="input-field col-md-6">
                        <select name="cardType">
                          <option value="Master Card">Master Card</option>
                          <option value="Visa">Visa</option>
                          <option value="Discover">Discover</option>
                          <option value="American Express">American Express</option>
                        </select>
                      </div>
                      <div class="input-field col-md-6">
                        <input type="number" name="cardNumber">
                        <label class="black-text">Card number</label>
                      </div>
                      <div class="input-field col-md-6">
                        <input type="text" name="cardCVV">
                        <label class="black-text">Card CVV</label>
                      </div>
                      <div class="input-field col-md-6">
                        <input type="text" name="cardExpiry">
                        <label class="black-text">Card Expiry (MM/YYYY)</label>
                      </div>
                      <p><b>Shipping Address:</b> {{ @SESSION.shippingBillingAddress }}
                  &nbsp&nbsp<button type="submit" class="btn purple">Place Order</button></p>
                  </form>
                  </div>
                  </div>
                </div>
              </li>
            </ul>
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
</main>