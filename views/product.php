<main>
<div class="bcontainer">
<div class="row">

<repeat group="{{ @product }}" value="{{ @p }}">
</repeat>

<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-9">
		
			<div class="card z-depth-0">
            	<div class="col-xs-12 col-sm-12 col-md-4"><br><br><br>

              <switch expr="{{ @p.categoryID }}">
                  <case value="{{ 1 }}" break="">
                      <img width="76px" height="256px" src="{{ @BASE }}/{{ @p.productThumb }}" class="materialboxed" data-caption="{{ @p.productName }}">
                  </case>
                  <case value="{{ 2 }}" break="">
                      <img width="76px" height="256px" src="{{ @BASE }}/{{ @p.productThumb }}" class="materialboxed" data-caption="{{ @p.productName }}">
                  </case>
                  <case value="{{ 3 }}" break="">
                      <img width="233px" height="159px" src="{{ @BASE }}/{{ @p.productThumb }}" class="materialboxed" data-caption="{{ @p.productName }}">
                  </case>
                  <case value="{{ 4 }}" break="">
                      <img width="172px" height="250px" src="{{ @BASE }}/{{ @p.productThumb }}" class="materialboxed" data-caption="{{ @p.productName }}">
                  </case>
                  <case value="{{ 5 }}" break="">
                      <img width="250px" height="250px" src="{{ @BASE }}/{{ @p.productThumb }}" class="materialboxed" data-caption="{{ @p.productName }}">
                  </case>
              </switch>

                <p>Click on the image to enlarge.</p>
            	</div>
            	<div class="col-xs-12 col-sm-12 col-md-8">
            		<h5>{{ @p.productName }}</h5>
                <span><b>Price:</b> P {{ @p.listPrice }}</span> | <span><b>Discount:</b> {{ @p.discountPercent }}%</span>
                  <hr>
                  
                      <div class="col-xs-12 col-sm-12 col-md-12">
                      <label class="black-text">Quantity</label>
                      <form action="{{ @BASE }}/product/{{ @p.productCode }}/addtocart" method="post">
                        <div class="input-field col-md-6">
                          <input type="range" min="1" max="20" name="quantity">
                        </div>
                        &nbsp&nbsp&nbsp
                        <button type="submit" class="btn amber waves-effect waves-light">Add to cart</button>
                      </form>
                      </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                      <a href="{{ @BASE }}" class="btn blue-grey waves-effect waves-light">Continue shopping</a>
                      <a href="{{ @BASE }}/cart" class="btn teal waves-effect waves-light">View cart</a>
                    </div>
              		<textarea class="materialize-textarea" readonly>{{ @p.description | raw }}</textarea>
            	</div>
            </div>

	</div>
	<div class="col-xs-12 col-sm-12 col-md-3">
		<h5 class="center"></h5>
		<div class="card-panel">
			<p>Acoustix! Are you looking for aesthetically carved, quality and inexpensive guitars, basses or drums? Then you've landed to the right place.</p>
      <p>Tshirts and Smartphones are also available.</p>
		</div>
	</div>
</div>


</div>
</main>