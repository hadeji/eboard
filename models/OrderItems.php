<?php

class OrderItems extends DB\SQL\Mapper {

	public function __construct(DB\SQL $db){
		parent::__construct($db, 'orderitems');
	}

	public function add_to_cart($product_id, $item_price, $discount, $quantity){
		$basket = new Basket('orderitems');
		$basket->set('productID', $product_id);
		$basket->set('itemPrice', $item_price);
		$basket->set('discountAmount', $discount);
		$basket->set('quantity', $quantity);
		$basket->save();
		$basket->reset();
	}

	public function get_all_order_items(){
		try{
			$basket = new Basket('orderitems');
			$result = $basket->find();
			return $result;
		}catch(PDOException $e){
			echo $e->getMessage();
		}
	}

	public function get_total_amount(){
		try{
			$basket = new Basket('orderitems');
			$result = $basket->find();
			$total_sum = 0;
			foreach($result as $r){
				$total_sum +=$r['itemPrice']*$r['quantity'];
			}
			if($total_sum < 1500){
				$shipping_fee = 125;
			}
			else{
				$shipping_fee = 0;
			}
			$total_sum += $shipping_fee;
			return $total_sum;
		}catch(PDOException $e){
			echo $e->getMessage();
		}
	}

	public function checkout($customer_id){
		$db = F3::get('DB');
		try{
			$basket = new Basket('orderitems');
			$result = $basket->find();
			foreach($result as $r){
				$this->reset();
				$this->orderID = $customer_id;
				$this->productID = $r['productID'];
				$this->itemPrice = $r['itemPrice'];
				$this->discountAmount = $r['discountAmount'];
				$this->quantity = $r['quantity'];
				$this->save();
			}
		}catch(PDOException $e){
			echo $e->getMessage();
		}
	}

}

?>