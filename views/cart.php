<main>
<div class="bcontainer">
<div class="row">

<repeat group="{{ @product }}" value="{{ @p }}">
</repeat>

<div class="row">
	<div class="col s12 m9">
		
			<div class="card z-depth-0">
          <a onclick="showEmpty()" class="btn btn-rounded red waves-effect waves-light">
            Empty cart
          </a>
          <a href="{{ @BASE }}" class="btn blue-grey waves-effect waves-light btn-rounded">Continue shopping</a>
          <script type="text/javascript">
              var showEmpty = function () {
                var $toastContent = $('<span>Do you really want to empty cart? Toast will dismiss in 5 seconds. <a href="{{ @BASE }}/cart/empty" class="blue-text bold"> <i class="mdi mdi-check"></i> Yes</a></span>');
                Materialize.toast($toastContent, 5000, 'rounded');
              }
            </script>
        <hr>
            <table class="bordered highlight responsive-table centered">
              <thead>
                <tr>
                  <th>ProductID</th>
                  <th>Item Price</th>
                  <th>Discount Amount</th>
                  <th>Quantity</th>
                  <th>Subtotal</th>
                  <th>Remove</th>
                </tr>
              </thead>
              <tbody>
                <repeat group="{{ @orderitems }}" value="{{ @o }}">
                  <tr>
                    <td>{{ @o.productID }}</td>
                    <td>P {{ round(@o.itemPrice, 2) }}</td>
                    <td>P {{ round(@o.discountAmount, 2) }}</td>
                    <td>
                    <form action="{{ @BASE }}/cart/quantity/{{ @o.productID }}" method="post">
                      <div class="input-field">
                        <input type="range" min="1" max="20" name="quantity" value="{{ @o.quantity }}">
                        <button type="submit" class="btn btn-rounded white black-text">Change</button>
                      </div>
                      </form>
                    </td>
                    <td>P {{ round((@o.itemPrice * @o.quantity), 2) }}</td>
                    <td>
                    <a onclick="showDelete{{ @o.productID }}()" class="tooltipped" data-position="top" data-delay="50" data-tooltip="Remove item">
                      <i class="mdi mdi-delete red-text"></i>
                    </a>
                    <script type="text/javascript">
                    var showDelete{{ @o.productID }} = function () {
                      var $toastContent = $('<span>Do you really want to delete this item? Toast will dismiss in 5 seconds. <a href="{{ @BASE }}/cart/remove/{{ @o.productID }}" class="blue-text bold"> <i class="mdi mdi-check"></i> Yes</a></span>');
                      Materialize.toast($toastContent, 5000, 'rounded');
                    }
                  </script>
                    </td>
                  </tr>
                </repeat>
              </tbody>
            </table>
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-6">
                <p>Total items ordered: {{ @total_items }}</p>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-6">
              <check if="{{ @total_items == 0 }}">
                <true>
                </true>
                <false>
                  <p class="green-text right darken-3">Total amount due: P <b>{{ round(@total_sum, 2) }}</b><br><small>A shipping fee of P 125.00 for every orders less than P 1,500.00 is applied.</small></p>
                </false>
              </check>
              </div>
            </div>
            <hr>
            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
              <check if="{{ @total_items == 0 }}">
                <true>
                   <a onclick="showCheckout()" class="btn indigo btn-rounded right disabled">
                      Checkout
                    </a>
                </true>
                <false>
                  <a onclick="showCheckout()" class="btn indigo btn-rounded right">
                      Checkout
                    </a>
                    <script type="text/javascript">
                    var showCheckout = function () {
                      var $toastContent = $('<span>Do you really want to checkout? Toast will dismiss in 5 seconds. <a href="{{ @BASE }}/cart/checkout" class="blue-text bold"> <i class="mdi mdi-check"></i> Yes</a></span>');
                      Materialize.toast($toastContent, 5000, 'rounded');
                    }
                  </script>
                </false>
              </check>
            </div>
            </div>

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