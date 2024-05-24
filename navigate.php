<?php
include 'function.php';
include_once 'session.php';
session::init();

$function = new Functions();


	//Add User
	if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['btn-add-user'])){
		
		$flag = $function->addUser($_POST);
			if($flag==1){
			    Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i> A new User has been added! </center> </div><br><script>
                setTimeout(function() {
                    window.location.href = '/inventory_greenware/admin/users.php';
                }, 2000); // 1000 milliseconds = 1 second
            </script>");
			}
			else{
			    Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>");
			}
		
		header("Location: /inventory_greenware/admin/users.php");
	}

	//Edit User
	if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['btn-edit-user'])){		
		$id = $_GET['user_id'];
		
			$flag = $function->UpdateUser($_POST, $id);
			if($flag==1){
			    Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i> User has been changed! </center> </div><br><script>
                setTimeout(function() {
                    window.location.href = '/inventory_greenware/admin/users.php';
                }, 2000); // 1000 milliseconds = 1 second
            </script>");
			}
			else{
			    Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>");
			}
		header("Location: /inventory_greenware/admin/users.php");
	}

//Delete Users
		if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['btn-delete-user'])){		
	
		if (isset($_POST['user_id'])) {
	        $user_id = $_POST['user_id'];
	        $flag = $function->DeleteUser($user_id);
	        if ($flag == 1) {
	            $_SESSION["msg"] = "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i>User has been deleted! </center> </div><br><script>
                setTimeout(function() {
                    window.location.href = '/inventory_greenware/admin/users.php';
                }, 1000); // 1000 milliseconds = 1 second
            </script>";
	        } else {
	            $_SESSION["msg"] = "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>";
	        }
		    } else {
		        $_SESSION["msg"] = "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Invalid request! </center> </div><br>";
		    }
		header("Location: /inventory_greenware/admin/users.php");
	}



		//Add Product
    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['btn-add-product'])){
        
        $flag = $function->addProduct($_POST);
            if($flag==1){
                Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i> A new Product has been added! </center> </div><br><script>
                setTimeout(function() {
                    window.location.href = '/inventory_greenware/admin/products.php';
                }, 2000); // 1000 milliseconds = 1 second
            </script>");
            }
            else{
                Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>");
            }
        
        header("Location: /inventory_greenware/admin/products.php");
    }

    //Edit Product
    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['btn-edit-product'])){       
        $product_id = $_GET['product_id'];
        
            $flag = $function->UpdateProduct($_POST, $product_id);
            if($flag==1){
                Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i> product has been changed! </center> </div><br><script>
                setTimeout(function() {
                    window.location.href = '/inventory_greenware/admin/products.php';
                }, 2000); // 1000 milliseconds = 1 second
            </script>");
            }
            else{
                Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>");
            }
        header("Location: /inventory_greenware/admin/products.php");
    }

//Delete Product
        if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['btn-delete-product'])){     
    
        if (isset($_POST['product_id'])) {
            $product_id = $_POST['product_id'];
            $flag = $function->DeleteProduct($product_id);
            if ($flag == 1) {
                $_SESSION["msg"] = "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i>Product has been deleted! </center> </div><br><script>
                setTimeout(function() {
                    window.location.href = '/inventory_greenware/admin/products.php';
                }, 1000); // 1000 milliseconds = 1 second
            </script>";
            } else {
                $_SESSION["msg"] = "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>";
            }
            } else {
                $_SESSION["msg"] = "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Invalid request! </center> </div><br>";
            }
        header("Location: /inventory_greenware/admin/products.php");
    }


	//Add Category
	if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['btn-add-category'])){
		
		$flag = $function->addCategory($_POST);
			if($flag==1){
			    Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i> A new Category has been added! </center> </div><br><script>
                setTimeout(function() {
                    window.location.href = '/inventory_greenware/admin/category.php';
                }, 2000); // 1000 milliseconds = 1 second
            </script>");
			}
			else{
			    Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>");
			}
		
		header("Location: /inventory_greenware/admin/category.php");
	}


//Edit Category
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['btn-edit-category'])){     
    $category_id = $_GET['category_id'];
    
    $flag = $function->UpdateCategory($_POST, $category_id); 
    if($flag==1){
        Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i> Category has been changed! </center> </div><br><script>
        setTimeout(function() {
            window.location.href = '/inventory_greenware/admin/category.php';
        }, 2000); // 1000 milliseconds = 1 second
        </script>");
    }
    else{
        Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>");
    }
    header("Location: /inventory_greenware/admin/category.php");
}
//Delete Category
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['btn-delete-category'])){		
	
	if (isset($_POST['category_id'])) {
        $category_id = $_POST['category_id'];
        $flag = $function->DeleteCategory($category_id); // Corrected function call
        if ($flag == 1) {
            $_SESSION["msg"] = "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i>Category has been deleted! </center> </div><br>";
        } else {
            $_SESSION["msg"] = "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>";
        }
    } else {
        $_SESSION["msg"] = "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Invalid request! </center> </div><br>";
    }
	header("Location: /inventory_greenware/admin/category.php");
}



	//Add Brand
	if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['btn-add-brand'])){
		
		$flag = $function->addBrand($_POST);
			if($flag==1){
			    Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i> A new Brand has been added! </center> </div><br><script>
                setTimeout(function() {
                    window.location.href = '/inventory_greenware/admin/brand.php';
                }, 2000); // 1000 milliseconds = 1 second
            </script>");
			}
			else{
			    Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>");
			}
		
		header("Location: /inventory_greenware/admin/brand.php");
	}


//Edit Brand
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['btn-edit-brand'])){     
    $brand_id = $_GET['brand_id'];
    
    $flag = $function->UpdateBrand($_POST, $brand_id); 
    if($flag==1){
        Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i> Brand has been changed! </center> </div><br><script>
        setTimeout(function() {
            window.location.href = '/inventory_greenware/admin/brand.php';
        }, 2000); // 1000 milliseconds = 1 second
        </script>");
    }
    else{
        Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>");
    }
    header("Location: /inventory_greenware/admin/brand.php");
}
//Delete Brand
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['btn-delete-brand'])){		
	
	if (isset($_POST['brand_id'])) {
        $brand_id = $_POST['brand_id'];
        $flag = $function->DeleteBrand($brand_id); // Corrected function call
        if ($flag == 1) {
            $_SESSION["msg"] = "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i>Brand has been deleted! </center> </div><br>";
        } else {
            $_SESSION["msg"] = "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>";
        }
    } else {
        $_SESSION["msg"] = "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Invalid request! </center> </div><br>";
    }
	header("Location: /inventory_greenware/admin/brand.php");
}

	//Add SalesTransaction
	if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['btn-add-saletransaction'])){
		
		$flag = $function->addSalesTransaction($_POST);
			if($flag==1){
			    Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i> A new Transaction has been added! </center> </div><br><script>
                setTimeout(function() {
                    window.location.href = '/inventory_greenware/admin/salestrans.php';
                }, 2000); // 1000 milliseconds = 1 second
            </script>");
			}
			else{
			    Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>");
			}
		
		header("Location: /inventory_greenware/admin/salestrans.php");
	}
//Edit SalesTransaction
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['btn-edit-saletransaction'])){     
    $saletransaction_id = $_GET['saletransaction_id'];
    
    $flag = $function->UpdateSaleTransaction($_POST, $saletransaction_id); 
    if($flag==1){
        Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i> Brand has been changed! </center> </div><br><script>
        setTimeout(function() {
            window.location.href = '/inventory_greenware/admin/salestrans.php';
        }, 2000); // 1000 milliseconds = 1 second
        </script>");
        
        header("Location: /inventory_greenware/admin/salestrans.php"); // Move inside the if block
    }
    else{
        Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>");
    }
}


//Delete SalesTransaction
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['btn-delete-saletransaction'])){		
	if (isset($_POST['saletransaction_id'])) {
        $saletransaction_id = $_POST['saletransaction_id'];
        $flag = $function->DeleteSalesTransaction($saletransaction_id); // Corrected function call
        if ($flag == 1) {
            $_SESSION["msg"] = "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i>Transaction has been deleted! </center> </div><br>";
        } else {
            $_SESSION["msg"] = "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>";
        }
    } else {
        $_SESSION["msg"] = "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Invalid request! </center> </div><br>";
    }
	header("Location: /inventory_greenware/admin/salestrans.php");

}


		//Add Stock
	if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['btn-add-stock'])){
		
		$flag = $function->addStock($_POST);
			if($flag==1){
			    Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i> A new Stock has been added! </center> </div><br><script>
                setTimeout(function() {
                    window.location.href = '/inventory_greenware/admin/stocks.php';
                }, 2000); // 1000 milliseconds = 1 second
            </script>");
			}
			else{
			    Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>");
			}
		
		header("Location: /inventory_greenware/admin/stocks.php");
	}

//Edit Stock
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['btn-edit-stock'])){     
    $stock_id = $_GET['stock_id'];
    
    $flag = $function->UpdateStock($_POST, $stock_id); // Pass product_id here
    if($flag==1){
        Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i> Stock has been changed! </center> </div><br><script>
        setTimeout(function() {
            window.location.href = '/inventory_greenware/admin/stocks.php';
        }, 2000); // 1000 milliseconds = 1 second
        </script>");
    }
    else{
        Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>");
    }
    header("Location: /inventory_greenware/admin/stocks.php");
}

//Delete Stock
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['btn-delete-stock'])){		
	
	if (isset($_POST['stock_id'])) {
        $stock_id = $_POST['stock_id'];
        $flag = $function->DeleteStock($stock_id); // Corrected function call
        if ($flag == 1) {
            $_SESSION["msg"] = "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i>Stock has been deleted! </center> </div><br>";
        } else {
            $_SESSION["msg"] = "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>";
        }
    } else {
        $_SESSION["msg"] = "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Invalid request! </center> </div><br>";
    }
	header("Location: /inventory_greenware/admin/stocks.php");
}


		//Add Supplier
	if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['btn-add-supplier'])){
		
		$flag = $function->addSupplier($_POST);
			if($flag==1){
			    Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i> A new Supplier has been added! </center> </div><br><script>
                setTimeout(function() {
                    window.location.href = '/inventory_greenware/admin/supplier.php';
                }, 2000); // 1000 milliseconds = 1 second
            </script>");
			}
			else{
			    Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>");
			}
		
		header("Location: /inventory_greenware/admin/supplier.php");
	}

//Edit Supplier
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['btn-edit-supplier'])){     
    $supplier_id = $_GET['supplier_id'];
    
    $flag = $function->UpdateSupplier($_POST, $supplier_id); // Pass product_id here
    if($flag==1){
        Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i> Supplier has been changed! </center> </div><br><script>
        setTimeout(function() {
            window.location.href = '/inventory_greenware/admin/supplier.php';
        }, 2000); // 1000 milliseconds = 1 second
        </script>");
    }
    else{
        Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>");
    }
    header("Location: /inventory_greenware/admin/supplier.php");
}

//Delete Supplier

if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['btn-delete-supplier'])){		
	
	if (isset($_POST['supplier_id'])) {
        $supplier_id = $_POST['supplier_id'];
        $flag = $function->DeleteSupplier($supplier_id); // Corrected function call
        if ($flag == 1) {
            $_SESSION["msg"] = "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i>Supplier has been deleted! </center> </div><br>";
        } else {
            $_SESSION["msg"] = "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>";
        }
    } else {
        $_SESSION["msg"] = "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Invalid request! </center> </div><br>";
    }
	header("Location: /inventory_greenware/admin/supplier.php");
}



		//Add SupplierTransaction
	if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['btn-add-suppliertransaction'])){
		
		$flag = $function->addSupplierTransaction($_POST);
			if($flag==1){
			    Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i> A new transaction has been added! </center> </div><br><script>
                setTimeout(function() {
                    window.location.href = '/inventory_greenware/admin/suppliertrans.php';
                }, 2000); // 1000 milliseconds = 1 second
            </script>");
			}
			else{
			    Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>");
			}
		
		header("Location: /inventory_greenware/admin/suppliertrans.php");
	}

//Edit SupplierTransaction
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['btn-edit-suppliertransaction'])){     
    $sup_transaction_id = $_GET['sup_transaction_id'];
    
    $flag = $function->UpdateSupplierTransaction($_POST, $sup_transaction_id); // Pass product_id here
    if($flag==1){
        Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i> Transaction has been changed! </center> </div><br><script>
        setTimeout(function() {
            window.location.href = '/inventory_greenware/admin/suppliertrans.php';
        }, 2000); // 1000 milliseconds = 1 second
        </script>");
    }
    else{
        Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>");
    }
    header("Location: /inventory_greenware/admin/suppliertrans.php");
}

//Delete SupplierTransaction

if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['btn-delete-suppliertransaction'])){		
	
	if (isset($_POST['sup_transaction_id'])) {
        $sup_transaction_id = $_POST['sup_transaction_id'];
        $flag = $function->DeleteSupplierTransaction($sup_transaction_id); // Corrected function call
        if ($flag == 1) {
            $_SESSION["msg"] = "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i>Transaction has been deleted! </center> </div><br>";
        } else {
            $_SESSION["msg"] = "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>";
        }
    } else {
        $_SESSION["msg"] = "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Invalid request! </center> </div><br>";
    }
	header("Location: /inventory_greenware/admin/suppliertrans.php");
}

//Delete Feedback

if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['btn-delete-feedback'])){		
	
	if (isset($_POST['feedback_id'])) {
        $feedback_id = $_POST['feedback_id'];
        $flag = $function->DeleteFeedback($feedback_id); // Corrected function call
        if ($flag == 1) {
            $_SESSION["msg"] = "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i>Feedback has been deleted! </center> </div><br>";
        } else {
            $_SESSION["msg"] = "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>";
        }
    } else {
        $_SESSION["msg"] = "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Invalid request! </center> </div><br>";
    }
	header("Location: /inventory_greenware/admin/feedbacks.php");
}


	?>