<?php

class CategoryDB extends DB\SQL\Mapper {

	public function __construct(DB\SQL $db){
		parent::__construct($db, 'categories');
	}

	public function get_all_categories(){
		$db = F3::get('DB');
		try{
			$result = $db->exec("SELECT * FROM categories");
			return $result;
		}catch(PDOException $e){
			echo $e->getMessage();
		}
	}

	public function get_category_by_id($cid){
		try{
			$this->load(array('categoryID', $cid));
			return $this->query;
		}catch(PDOException $e){
			echo $e->getMessage();
		}
	}

	public function add_category($cat){
		try{
			$this->reset();
			$this->categoryName = $cat;
			$this->save();
		}catch(PDOException $e){
			echo $e->getMessage();
		}
	}

	public function delete_category($cid){
		try{
			$this->load(array('categoryID=?', $cid));
			$this->erase();
		}catch(PDOException $e){
			echo $e->getMessage();
		}
	}

	public function update_category($cname, $cid){
		try{
			$db = F3::get('DB');
			$db->exec("UPDATE categories SET categoryName = ? WHERE categoryID = ?", array(1=>$cname, 2=>$cid));
		}catch(PDOException $e){
			echo $e->getMessage();
		}
	}

}

?>