<main>
<div class="bcontainer">
<br><br>
<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-9">
    
    <table class="bordered highlight responsive-table">
        <thead>
          <tr>
            <th>Customer ID</th>
            <th>Order Date</th>
            <th>Total Due</th>
            <th>Card Number</th>
            <th>Card Expiry</th>
            <th>Card CVV</th>
            <th>Card Type</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
          <repeat group="{{ @orders }}" value="{{ @o }}">
            <tr>
              <td>{{ @o.customerID }}</td>
              <td>{{ @o.orderDate,time() | format }}</td>
              <td>P {{ @o.totalDue }}</td>
              <td>{{ @o.cardNumber }}</td>
              <td>{{ @o.cardExpires }}</td>
              <td>{{ @o.cardCVV }}</td>
              <td>{{ @o.cardType }}</td>
              <td>
                <a href="" onclick="showDelete{{ @o.orderID }}()" class="tooltipped" data-position="top" data-delay="50" data-tooltip="Delete order">
                  <i class="mdi mdi-delete mdi-18px"></i>
                </a>
                <script type="text/javascript">
                    var showDelete{{ @o.orderID }} = function () {
                      var $toastContent = $('<span>Do you really want to delete this order? Toast will dismiss in 5 seconds. <a href="orders/delete/{{ @o.orderID }}" class="blue-text bold"> <i class="mdi mdi-check"></i> Yes</a></span>');
                      Materialize.toast($toastContent, 5000, 'rounded');
                    }
                  </script>
              </td>
            </tr>
          </repeat>
        </tbody>
      </table>

  </div>
  <div class="col-xs-12 col-sm-12 col-md-3">
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