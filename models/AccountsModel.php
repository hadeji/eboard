<?php

class AccountsModel extends DB\SQL\Mapper {

	public function __construct(DB\SQL $db) {
        parent::__construct($db,'accounts');
    }

    public function check_account_by_email($email){
    	try{
    		$this->load(array('email=?', $email));
            return $this->query;
    	}catch(PDOException $e){
    		echo $e->getMessage();
    	}
    }

    public function register_account($fname, $lname, $uname, $email, $pass){
        try{
            $this->reset();
            $this->firstName = $fname;
            $this->lastName = $lname;
            $this->userName = $uname;
            $this->emailAddress = $email;
            $this->password = sha1($pass);
            $this->save();
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function get_account_by_username($uname){
        try{
            $this->load(array('username=?', $uname));
            return $this->query;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function get_customer_profile($uname){
        $f3 = Base::instance();
        $db = $f3->get('DB');
        try{
            $stmnt = $db->prepare("SELECT * FROM customers WHERE userName = :uname");
            $stmnt->execute(array(':uname'=>$uname));
            $result = $stmnt->fetchAll();
            $stmnt->closeCursor();
            return $result;
        }catch(PDOException $e){
            $e->getMessage();
        }
    }

    public function update_account($fname, $lname, $uname, $email, $bdate, $sbaddress, $id){
        $f3 = Base::instance();
        $db = $f3->get('DB');
        try {
            $stmnt = $db->prepare("UPDATE customers SET firstName = :fname, lastName = :lname, userName = :uname, emailAddress = :email, birthDate = :bdate, shippingBillingAddress = :sbaddress WHERE customerID = :id");
            $stmnt->execute(array(':fname'=>$fname, ':lname'=>$lname,  ':uname'=>$uname, ':email'=>$email, ':bdate'=>$bdate, ':sbaddress'=>$sbaddress, ':id'=>$id));
            $stmnt->closeCursor();
        }catch(PDOException $e){
            $e->getMessage();
        }
    }

    public function delete_account($uname){
        try{
            $this->load(array('userName=?', $uname));
            $this->erase();
        }catch(PDOException $e){
            $e->getMessage();
        }
    }

    public function get_all_customers(){
        try{
            $this->load();
            return $this->query;
        }catch(PDOException $e){
            $e->getMessage();
        }
    }

    public function delete_customer($id){
        try{
            $this->load(array('customerID=?', $id));
            $this->erase();
        }catch(PDOException $e){
            $e->getMessage();
        }
    }

    public function get_customer_by_id($id){
        try{
            $this->load(array('customerID=?', $id));
            return $this->query;
        }catch(PDOException $e){
            $e->getMessage();
        }
    }

    public function update_customer($id, $fname, $lname, $uname, $email, $bdate, $sbaddress, $type){
        $db = F3::get('DB');
        try{
            $db->exec("UPDATE customers SET emailAddress = ?, firstName = ?, lastName = ?, userName = ?, birthDate = ?, shippingBillingAddress = ?, accountType = ? WHERE customerID = ?", array(1=>$email, 2=>$fname, 3=>$lname, 4=>$uname, 5=>$bdate, 6=>$sbaddress, 7=>$type, 8=>$id));
        }catch(PDOException $e){
            $e->getMessage();
        }
    }

}

?>