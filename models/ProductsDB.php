<?php

class ProductsDB extends DB\SQL\Mapper {

	public function __construct(DB\SQL $db) {
        parent::__construct($db,'products');
    }

	public function get_product($product_id){
		$db = F3::get('DB');
		try{
			$stmnt = $db->prepare("SELECT * FROM products p INNER JOIN categories c ON p.categoryID = c.categoryID WHERE productID = :p_id");
			$stmnt->execute(array(':p_id'=>$product_id));
			$rslt = $stmnt->fetchAll(PDO::FETCH_ASSOC);
			$stmnt->closeCursor();
			return $rslt;
		}catch(PDOException $e){
			echo $e->getMessage();
		}
	}

	public function get_product_by_code($product_code){
		$db = F3::get('DB');
		try{
			$stmnt = $db->prepare("SELECT * FROM products p INNER JOIN categories c ON p.categoryID = c.categoryID WHERE productCode = :p_code");
			$stmnt->execute(array(':p_code'=>$product_code));
			$rslt = $stmnt->fetchAll(PDO::FETCH_ASSOC);
			$stmnt->closeCursor();
			return $rslt;
		}catch(PDOException $e){
			echo $e->getMessage();
		}
	}

	public function get_product_by_code_in_cart($product_code){
		$db = F3::get('DB');
		try{
			$stmnt = $db->prepare("SELECT * FROM products p INNER JOIN categories c ON p.categoryID = c.categoryID WHERE productCode = :p_code");
			$stmnt->execute(array(':p_code'=>$product_code));
			$rslt = $stmnt->fetch(PDO::FETCH_ASSOC);
			$stmnt->closeCursor();
			return $rslt;
		}catch(PDOException $e){
			echo $e->getMessage();
		}
	}

	public function get_featured_products(){
		$db = F3::get('DB');
		try{
			$stmnt = $db->prepare("SELECT * FROM products ORDER BY productID DESC LIMIT 10");
			$stmnt->execute();
			$result = $stmnt->fetchAll(PDO::FETCH_ASSOC);
			$stmnt->closeCursor();
			return $result;
		}catch(PDOException $e){
			echo $e->getMessage();
		}
	}

	public function get_all_products(){
		$db = F3::get('DB');
		try{
			$result = $db->exec("SELECT productID, productName, productCode, categoryName, CONCAT(SUBSTRING(description, 1, 100), '...') AS Descr, listPrice FROM products p INNER JOIN categories c ON p.categoryID = c.categoryID");
			return $result;
		}catch(PDOException $e){
			echo $e->getMessage();
		}
	}

	public function get_product_by_category($cat_id){
		$db = F3::get('DB');
		try{
			$stmnt = $db->prepare('SELECT * FROM products WHERE categoryID = :cat_id');
			$stmnt->execute(array(':cat_id'=>$cat_id));
			$result = $stmnt->fetchAll(PDO::FETCH_ASSOC);
			$stmnt->closeCursor();
			return $result;
		}catch(PDOException $e){
			echo $e->getMessage();
		}
	}

	public function add_new_product($categoryID, $productCode, $productName, $listPrice, $discount, $description, $productThumb){
		try{
            $this->reset();
            $this->categoryID = $categoryID;
            $this->productCode = $productCode;
            $this->productName = $productName;
            $this->listPrice = $listPrice;
            $this->discountPercent = $discount;
            $this->description = $description;
            $this->dateAdded = date("Y-m-d h:i:sa");
            $this->productThumb = $productThumb;
            $this->save();
        }catch(PDOException $e){
            echo $e->getMessage();
        }
	}

	public function delete_product($id){
		try{
            $this->load(array('productID=?', $id));
			$this->erase();
        }catch(PDOException $e){
            echo $e->getMessage();
        }
	}

	public function update_product($categoryID, $productCode, $productName, $listPrice, $discount, $description, $id){
		try{
           $db = F3::get('DB');
           $db->exec("UPDATE products SET categoryID = :categoryID, productCode = :productCode, productName = :productName, listPrice = :listPrice, discountPercent = :discount, description = :description WHERE productID = :id", array(':categoryID'=>$categoryID, ':productCode'=>$productCode, ':productName'=>$productName, ':listPrice'=>$listPrice, ':discount'=>$discount, ':description'=>$description, ':id'=>$id));
        }catch(PDOException $e){
            echo $e->getMessage();
        }
	}

}

?>