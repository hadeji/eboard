<?php

class CartController {

	public function add_to_cart(){
		new Session();
		$f3 = Base::instance();
		$db = F3::get('DB');
		if($f3->get('SESSION.isLoggedIn') == True){
			$pcode = $f3->get('PARAMS.pcode');
			$c = new OrderItems($db);
			$p = new ProductsDB($db);
			$product = $p->get_product_by_code_in_cart($pcode);
			$product_id = $product['productID'];
			$discount = $product['listPrice']*($product['discountPercent']/100);
			$item_price = $product['listPrice'] - $discount;
			$quantity = filter_input(INPUT_POST, 'quantity');
			if($quantity == 0){
				$quantity = 1;
			}else{
				$quantity = filter_input(INPUT_POST, 'quantity');
			}
			$c->add_to_cart($product_id, $item_price, $discount, $quantity);
			$f3->reroute('@cart');
		}else{
			$f3->reroute('@login');
		}
	}

	public function view_cart(){
		$f3 = Base::instance();
		$db = F3::get('DB');
		new Session();

		$o = new OrderItems($db);
		$basket = new Basket('orderitems');
		$p = new ProductsDB($db);
		
		$f3->mset(array(
			'page_title'=>'Cart',
			'orderitems'=>$o->get_all_order_items(),
			'total_items'=>$basket->count(),
			'total_sum'=>$o->get_total_amount(),
			'content'=>'cart.php'
		));
		echo \Template::instance()->render('layout.php');
	}

	public function empty_cart(){
		$f3 = Base::instance();
		$db = F3::get('DB');
		new Session();
		$basket = new Basket('orderitems');
		$basket->drop();
		$f3->reroute('@store');
	}

	public function remove_item(){
		new Session();
		$f3 = Base::instance();
		$pid = $f3->get('PARAMS.pid');
		$basket = new Basket('orderitems');
		$basket->erase('productID', $pid);
		$f3->reroute('@cart');
	}

	public function checkout(){
		new Session();
		$f3 = Base::instance();
		$db = $f3->get('DB');
		$basket = new Basket('orderitems');
		$o = new OrderItems($db);
		$f3->mset(array(
			'page_title'=>'Checkout',
			'content'=>'checkout.php',
			'orderitems'=>$o->get_all_order_items(),
			'total_sum'=>$o->get_total_amount(),
			'total_items'=>$basket->count()
		));
		echo \Template::instance()->render('layout.php');
	}

}

?>