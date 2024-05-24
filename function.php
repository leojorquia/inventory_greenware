  <?php
include 'conn.php';

Class Functions
{
	private $db;
	public function __construct(){
		$this->db = new conn(); 
}


//Create User
public function addUser($data){		

	$sql ="INSERT INTO tbl_user (position, last_name, first_name, middle_name, suffix, date, email, phone, region, province, municipality, barangay, street, zipcode) VALUES (:position, :last_name, :first_name, :middle_name, :suffix, :date, :email, :phone, :region, :province, :municipality, :barangay, :street, :zipcode)";
		$stmt = $this->db->conn->prepare($sql);
		$r = $stmt->execute([ ':position' => $data['position'],
							  ':last_name' => $data['last_name'],
							  ':first_name' => $data['first_name'],
							  ':middle_name' => $data['middle_name'],
							  ':suffix' => $data['suffix'],
							  ':date' => $data['date'],
							  ':email' => $data['email'],
							  ':phone' => $data['phone'],
							  ':region' => $data['region'],
							  ':province' => $data['province'],
							  ':municipality' => $data['municipality'],
							  ':barangay' => $data['barangay'],
							  ':street' => $data['street'],
							  ':zipcode' => $data['zipcode']
							]);
														
		if($r){
			// success!!!
			return 1;
			
		}else{
			// something wrong with queries
			return 0;
		}
							
	}

//Create Product
public function addProduct($data){		

	$sql ="INSERT INTO tbl_product (product_name, category_name, brand_name, price) VALUES (:product_name, :category_name, :brand_name, :price)";
		$stmt = $this->db->conn->prepare($sql);
		$r = $stmt->execute([ ':product_name' => $data['product_name'],
							  ':category_name' => $data['category_name'],
							  ':brand_name' => $data['brand_name'],
							  ':price' => $data['price'],
							]);
														
		if($r){
			// success!!!
			return 1;
			
		}else{
			// something wrong with queries
			return 0;
		}
							
	}

        //Create Category
public function addCategory($data){		

	$sql ="INSERT INTO tbl_category (category_name) VALUES (:category_name)";
		$stmt = $this->db->conn->prepare($sql);
		$r = $stmt->execute([ ':category_name' => $data['category_name']
							]);
														
		if($r){
			// success!!!
			return 1;
			
		}else{
			// something wrong with queries
			return 0;
		}
							
	}


        //Create Brand
public function addBrand($data){		

	$sql ="INSERT INTO tbl_brand (brand_name) VALUES (:brand_name)";
		$stmt = $this->db->conn->prepare($sql);
		$r = $stmt->execute([ ':brand_name' => $data['brand_name']
							]);
														
		if($r){
			// success!!!
			return 1;
			
		}else{
			// something wrong with queries
			return 0;
		}
							
	}

		//Create Salestransaction
public function addSalesTransaction($data){		

	$sql ="INSERT INTO tbl_sale_transaction (product, category, brand, customer, date, reference, total, biller) VALUES (:product, :category, :brand, :customer, :date, :reference, :total, :biller)";
		$stmt = $this->db->conn->prepare($sql);
		$r = $stmt->execute([ ':product' => $data['product'],
							  ':category' => $data['category'],
							  ':brand' => $data['brand'],
							  ':customer' => $data['customer'],
							  ':date' => $data['date'],
							  ':reference' => $data['reference'],
							  ':total' => $data['total'],
							  ':biller' => $data['biller']
							]);
														
		if($r){
			// success!!!
			return 1;
			
		}else{
			// something wrong with queries
			return 0;
		}
							
	}



		//Create Stocks
public function addStock($data){		

	$sql ="INSERT INTO tbl_stock (product, category, brand, available_stock, unit_cost, total_cost) VALUES (:product, :category, :brand, :available_stock, :unit_cost, :total_cost)";
		$stmt = $this->db->conn->prepare($sql);
		$r = $stmt->execute([ ':product' => $data['product'],
							  ':category' => $data['category'],
							  ':brand' => $data['brand'],
							  ':available_stock' => $data['available_stock'],
							  ':unit_cost' => $data['unit_cost'],
							  ':total_cost' => $data['total_cost']
							]);
														
		if($r){
			// success!!!
			return 1;
			
		}else{
			// something wrong with queries
			return 0;
		}
							
	}


			//Create Supplier
public function addSupplier($data){		

	$sql ="INSERT INTO tbl_supplier (company_name, contact_person, email, phone) VALUES (:company_name, :contact_person, :email, :phone)";
		$stmt = $this->db->conn->prepare($sql);
		$r = $stmt->execute([ ':company_name' => $data['company_name'],
							  ':contact_person' => $data['contact_person'],
							  ':email' => $data['email'],
							  ':phone' => $data['phone']
							]);
														
		if($r){
			// success!!!
			return 1;
			
		}else{
			// something wrong with queries
			return 0;
		}
							
	}


			//Create SupplierTransaction
public function addSupplierTransaction($data){		

	$sql ="INSERT INTO tbl_supplier_transaction (supplier, product, category, brand, date, quantity_ordered, unit_cost, total_cost) VALUES (:supplier, :product, :category, :brand, :date, :quantity_ordered, :unit_cost, :total_cost)";
		$stmt = $this->db->conn->prepare($sql);
		$r = $stmt->execute([ ':supplier' => $data['supplier'],
							  ':product' => $data['product'],
							  ':category' => $data['category'],
							  ':brand' => $data['brand'], 
							  ':date' => $data['date'], 
							  ':quantity_ordered' => $data['quantity_ordered'],
							  ':unit_cost' => $data['unit_cost'], 
							  ':total_cost' => $data['total_cost']
							]);
														
		if($r){
			// success!!!
			return 1;
			
		}else{
			// something wrong with queries
			return 0;
		}
							
	}

//Read All Users
	public function GetAllUsers(){
		$sql = 'SELECT * FROM tbl_user ORDER BY user_id ASC';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute();
		$data = $stmt->fetchAll();
		return $data;
	}

	//Read All Products
	public function GetAllProducts(){
		$sql = 'SELECT * FROM tbl_product ORDER BY product_id ASC';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute();
		$data = $stmt->fetchAll();
		return $data;
	}

		//Read All Categories
	public function GetAllCategories(){
		$sql = 'SELECT * FROM tbl_category ORDER BY category_id ASC';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute();
		$data = $stmt->fetchAll();
		return $data;
	}

			//Read All Brands
	public function GetAllBrands(){
		$sql = 'SELECT * FROM tbl_brand ORDER BY brand_id ASC';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute();
		$data = $stmt->fetchAll();
		return $data;
	}


			//Read All Sales Transaction
	public function GetAllSalesTransaction(){
		$sql = 'SELECT * FROM tbl_sale_transaction ORDER BY saletransaction_id ASC';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute();
		$data = $stmt->fetchAll();
		return $data;
	}

				//Read All Stocks
	public function GetAllStocks(){
		$sql = 'SELECT * FROM tbl_stock ORDER BY stock_id ASC';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute();
		$data = $stmt->fetchAll();
		return $data;
	}


				//Read All Supplier
	public function GetAllSupplier(){
		$sql = 'SELECT * FROM tbl_supplier ORDER BY supplier_id ASC';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute();
		$data = $stmt->fetchAll();
		return $data;
	}


				//Read All SupplierTransaction
	public function GetAllSupplierTransaction(){
		$sql = 'SELECT * FROM tbl_supplier_transaction ORDER BY sup_transaction_id ASC';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute();
		$data = $stmt->fetchAll();
		return $data;
	}


				//Read All Feedbacks
	public function GetAllFeedbacks(){
		$sql = 'SELECT * FROM tbl_feedback ORDER BY feedback_id ASC';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute();
		$data = $stmt->fetchAll();
		return $data;
	}

//Read Only User
	public function GetUserInfo($id){
		$sql = 'SELECT * FROM tbl_user WHERE user_id=:user_id';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute([':user_id' => $id]);
		$data = $stmt->fetch(PDO::FETCH_OBJ);
		return $data;
	}

	//Read Only Product
	public function GetProductInfo($product_id){
		$sql = 'SELECT * FROM tbl_product WHERE product_id=:product_id';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute([':product_id' => $product_id]);
		$data = $stmt->fetch(PDO::FETCH_OBJ);
		return $data;
	}

		//Read Only Category
	public function GetCategoryInfo($Category_id){
		$sql = 'SELECT * FROM tbl_category WHERE Category_id=:Category_id';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute([':Category_id' => $Category_id]);
		$data = $stmt->fetch(PDO::FETCH_OBJ);
		return $data;
	}

			//Read Only Brand
	public function GetBrandInfo($brand_id){
		$sql = 'SELECT * FROM tbl_brand WHERE brand_id=:brand_id';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute([':brand_id' => $brand_id]);
		$data = $stmt->fetch(PDO::FETCH_OBJ);
		return $data;
	}

				//Read Only Sales Transaction
	public function GetSalesTransactionInfo($saletransaction_id){
		$sql = 'SELECT * FROM tbl_sale_transaction WHERE saletransaction_id=:saletransaction_id';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute([':saletransaction_id' => $saletransaction_id]);
		$data = $stmt->fetch(PDO::FETCH_OBJ);
		return $data;
	}

				//Read Only Stock
	public function GetStockInfo($stock_id){
		$sql = 'SELECT * FROM tbl_stock WHERE stock_id=:stock_id';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute([':stock_id' => $stock_id]);
		$data = $stmt->fetch(PDO::FETCH_OBJ);
		return $data;
	}

					//Read Only Supplier
	public function GetSupplierInfo($supplier_id){
		$sql = 'SELECT * FROM tbl_supplier WHERE supplier_id=:supplier_id';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute([':supplier_id' => $supplier_id]);
		$data = $stmt->fetch(PDO::FETCH_OBJ);
		return $data;
	}

						//Read Only SupplierTransaction
	public function GetSupplierTransactionInfo($sup_transaction_id){
		$sql = 'SELECT * FROM tbl_supplier_transaction WHERE sup_transaction_id=:sup_transaction_id';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute([':sup_transaction_id' => $sup_transaction_id]);
		$data = $stmt->fetch(PDO::FETCH_OBJ);
		return $data;
	}


	//Update User
	public function UpdateUser($data, $id){
		$sql = 'UPDATE tbl_user SET position=:position, last_name=:last_name, first_name=:first_name, middle_name=:middle_name, suffix=:suffix, date=:date, email=:email, phone=:phone, region=:region, province=:province, municipality=:municipality, barangay=:barangay, street=:street, zipcode=:zipcode WHERE user_id = :user_id';
		$stmt = $this->db->conn->prepare($sql);
		$r = $stmt->execute([ ':position' => $data['position'],
							  ':last_name' => $data['last_name'],
							  ':first_name' => $data['first_name'],
							  ':middle_name' => $data['middle_name'],
							  ':suffix' => $data['suffix'],
							  ':date' => $data['date'],
							  ':email' => $data['email'],
							  ':phone' => $data['phone'],
							  ':region' => $data['region'],
							  ':province' => $data['province'],
							  ':municipality' => $data['municipality'],
							  ':barangay' => $data['barangay'],
							  ':street' => $data['street'],
							  ':zipcode' => $data['zipcode'],
							  ':user_id' => $id
							]);
		if($r){
			return 1;
		}else{
			return 0;
		}
	}

	//Update Product
	public function UpdateProduct($data, $product_id){
		$sql = 'UPDATE tbl_product SET product_name=:product_name, category_name=:category_name, brand_name=:brand_name, price=:price WHERE product_id = :product_id';
		$stmt = $this->db->conn->prepare($sql);
		$r = $stmt->execute([ ':product_name' => $data['product_name'],
							  ':category_name' => $data['category_name'],
							  ':brand_name' => $data['brand_name'],
							  ':price' => $data['price'],
							  ':product_id' => $product_id
							]);
		if($r){
			return 1;
		}else{
			return 0;
		}
	}

public function UpdateCategory($data, $category_id){
    $sql = 'UPDATE tbl_Category SET category_name=:category_name WHERE category_id = :category_id';
    $stmt = $this->db->conn->prepare($sql);
    $r = $stmt->execute([
        ':category_name' => $data['category_name'],
        ':category_id' => $category_id 
    ]);
    if($r){
        return 1;
    }else{
        return 0;
    }
}

public function UpdateBrand($data, $brand_id){
    $sql = 'UPDATE tbl_brand SET brand_name=:brand_name WHERE brand_id = :brand_id';
    $stmt = $this->db->conn->prepare($sql);
    $r = $stmt->execute([
        ':brand_name' => $data['brand_name'],
        ':brand_id' => $brand_id 
    ]);
    if($r){
        return 1;
    }else{
        return 0;
    }
}


public function UpdateSaleTransaction($data, $saletransaction_id){
    $sql = 'UPDATE tbl_sale_transaction SET product=:product, category=:category, brand=:brand, customer=:customer, date=:date, reference=:reference, total=:total, biller=:biller WHERE saletransaction_id = :saletransaction_id';
    $stmt = $this->db->conn->prepare($sql);
    $r = $stmt->execute([ ':product' => $data['product'],
							  ':category' => $data['category'],
							  ':brand' => $data['brand'],
							  ':customer' => $data['customer'],
							  ':date' => $data['date'],
							  ':reference' => $data['reference'],
							  ':total' => $data['total'],
							  ':biller' => $data['biller'],
							  ':saletransaction_id' => $saletransaction_id
							]);
    if($r){
        return 1;
    }else{
        return 0;
    }
}

public function UpdateStock($data, $stock_id){
    $sql = 'UPDATE tbl_stock SET product=:product, category=:category, brand=:brand, available_stock=:available_stock, unit_cost=:unit_cost, total_cost=:total_cost WHERE stock_id = :stock_id';
    $stmt = $this->db->conn->prepare($sql);
    $r = $stmt->execute([ ':product' => $data['product'],
							  ':category' => $data['category'],
							  ':brand' => $data['brand'],
							  ':available_stock' => $data['available_stock'],
							  ':unit_cost' => $data['unit_cost'],
							  ':total_cost' => $data['total_cost'],
							  ':stock_id' => $stock_id
							]);
    if($r){
        return 1;
    }else{
        return 0;
    }
}

public function UpdateSupplier($data, $supplier_id){
    $sql = 'UPDATE tbl_supplier SET company_name=:company_name, contact_person=:contact_person, email=:email, phone=:phone WHERE supplier_id = :supplier_id';
    $stmt = $this->db->conn->prepare($sql);
    $r = $stmt->execute([ ':company_name' => $data['company_name'],
							  ':contact_person' => $data['contact_person'],
							  ':email' => $data['email'],
							  ':phone' => $data['phone'],
							  ':supplier_id' => $supplier_id
							]);
    if($r){
        return 1;
    }else{
        return 0;
    }
}

public function UpdateSupplierTransaction($data, $sup_transaction_id){
    $sql = 'UPDATE tbl_supplier_transaction SET supplier=:supplier, product=:product, category=:category, brand=:brand, date=:date, quantity_ordered=:quantity_ordered, unit_cost=:unit_cost, total_cost=:total_cost WHERE sup_transaction_id = :sup_transaction_id';
    $stmt = $this->db->conn->prepare($sql);
    $r = $stmt->execute([ ':supplier' => $data['supplier'],
							  ':product' => $data['product'],
							  ':category' => $data['category'],
							  ':brand' => $data['brand'], 
							  ':date' => $data['date'], 
							  ':quantity_ordered' => $data['quantity_ordered'],
							  ':unit_cost' => $data['unit_cost'], 
							  ':total_cost' => $data['total_cost'],
							  ':sup_transaction_id' => $sup_transaction_id
							]);
    if($r){
        return 1;
    }else{
        return 0;
    }
}



	//Delete User
	public function DeleteUser($user_id){
		$sql = 'DELETE FROM tbl_user WHERE user_id = :user_id';
		$stmt = $this->db->conn->prepare($sql);
		$r = $stmt->execute([':user_id' => $user_id]);
		if($r){
			return 1;
		}else{
			return 0;
		}
  }

		//Delete product
	public function DeleteProduct($product_id){
		$sql = 'DELETE FROM tbl_product WHERE product_id=:product_id';
		$stmt = $this->db->conn->prepare($sql);
		$r = $stmt->execute([':product_id' => $product_id]);
		if($r){
			return 1;
		}else{
			return 0;
		}
	}


		//Delete Category
	public function DeleteCategory($category_id){
		$sql = 'DELETE FROM tbl_category WHERE category_id=:category_id';
		$stmt = $this->db->conn->prepare($sql);
		$r = $stmt->execute([':category_id' => $category_id]);
		if($r){
			return 1;
		}else{
			return 0;
		}
	}

				//Delete Brand
	public function DeleteBrand($brand_id){
		$sql = 'DELETE FROM tbl_brand WHERE brand_id=:brand_id';
		$stmt = $this->db->conn->prepare($sql);
		$r = $stmt->execute([':brand_id' => $brand_id]);
		if($r){
			return 1;
		}else{
			return 0;
		}
	}

					//Delete SalesTransaction
	public function DeleteSalesTransaction($saletransaction_id){
		$sql = 'DELETE FROM tbl_sale_transaction WHERE saletransaction_id=:saletransaction_id';
		$stmt = $this->db->conn->prepare($sql);
		$r = $stmt->execute([':saletransaction_id' => $saletransaction_id]);
		if($r){
			return 1;
		}else{
			return 0;
		}
	}

						//Delete Stock
	public function DeleteStock($stock_id){
		$sql = 'DELETE FROM tbl_stock WHERE stock_id=:stock_id';
		$stmt = $this->db->conn->prepare($sql);
		$r = $stmt->execute([':stock_id' => $stock_id]);
		if($r){
			return 1;
		}else{
			return 0;
		}
	}

							//Delete Supplier
	public function DeleteSupplier($supplier_id){
		$sql = 'DELETE FROM tbl_supplier WHERE supplier_id=:supplier_id';
		$stmt = $this->db->conn->prepare($sql);
		$r = $stmt->execute([':supplier_id' => $supplier_id]);
		if($r){
			return 1;
		}else{
			return 0;
		}
	}

								//Delete SupplierTransaction
	public function DeleteSupplierTransaction($sup_transaction_id){
		$sql = 'DELETE FROM tbl_supplier_transaction WHERE sup_transaction_id=:sup_transaction_id';
		$stmt = $this->db->conn->prepare($sql);
		$r = $stmt->execute([':sup_transaction_id' => $sup_transaction_id]);
		if($r){
			return 1;
		}else{
			return 0;
		}
	}

									//Delete Feedback
	public function DeleteFeedback($feedback_id){
		$sql = 'DELETE FROM tbl_feedback WHERE feedback_id=:feedback_id';
		$stmt = $this->db->conn->prepare($sql);
		$r = $stmt->execute([':feedback_id' => $feedback_id]);
		if($r){
			return 1;
		}else{
			return 0;
		}
	}
}


?>