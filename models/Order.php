<?php

class Order extends DB\SQL\Mapper {

	public function __construct(DB\SQL $db){
		parent::__construct($db, 'orders');
	}

	public function place_order($customer_id, $card_type, $card_number, $card_cvv, $card_expiry, $total_due){
		try{
			$this->reset();
			$this->customerID = $customer_id;
			$this->orderDate = Date("Y-m-d h:i:sa");
			$this->cardType = $card_type;
			$this->cardNumber = $card_number;
			$this->cardExpires = $card_expiry;
			$this->cardCVV = $card_cvv;
			$this->totalDue = $total_due;
			$this->save();
		}catch(PDOException $e){
			echo $e->getMessage();
		}
	}

	public function get_orders(){
		try{
			$this->load();
			return $this->query;
		}catch(PDOException $e){
			echo $e->getMessage();
		}
	}

	public function delete_order($oid){
		try{
			$this->load(array('orderID=?', $oid));
			$this->erase();
		}catch(PDOException $e){
			echo $e->getMessage();
		}
	}

}

?>