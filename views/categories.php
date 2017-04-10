<main>
<div class="bcontainer">
<br><br>
<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-9">
  <check if="{{ @edit == True }}">
    <true>
    <repeat group="{{ @cat }}" value="{{ @c }}">
    </repeat>
      <form action="{{ @BASE }}/categories/update" method="post">
      <div class="input-field">
        <input type="hidden" name="cid" value="{{ @c.categoryID }}">
        <input type="text" name="category" value="{{ @c.categoryName }}">
        <label class="black-text">Category name</label>
      </div>
      <button type="submit" class="btn indigo waves-light waves-effect ">Update category</button>
      </form>
    </true>
    <false>
      <form action="{{ @BASE }}/categories/add" method="post">
      <div class="input-field">
        <input type="text" name="category">
        <label class="black-text">Category name</label>
      </div>
      <button type="submit" class="btn indigo waves-light waves-effect ">Add category</button>
      </form>
    </false>
  </check>
    <hr>

    <table class="bordered highlight responsive-table">
        <thead>
          <tr>
            <th>Category ID</th>
            <th>Category Name</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <repeat group="{{ @categories }}" value="{{ @c }}">
            <tr>
              <td>{{ @c.categoryID}}</td>
              <td>{{ @c.categoryName}}</td>
              <td>
                <a href="{{ @BASE }}/categories/edit/{{ @c.categoryID }}"><i class="mdi mdi-table-edit mdi-18px"></i></a>
                <a href="" onclick="showDelete{{ @c.categoryID }}()" class="tooltipped" data-position="top" data-delay="50" data-tooltip="Delete category">
                  <i class="mdi mdi-delete mdi-18px"></i>
                </a>
                <script type="text/javascript">
                    var showDelete{{ @c.categoryID }} = function () {
                      var $toastContent = $('<span>Do you really want to delete this category? Toast will dismiss in 5 seconds. <a href="categories/delete/{{ @c.categoryID }}" class="blue-text bold"> <i class="mdi mdi-check"></i> Yes</a></span>');
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