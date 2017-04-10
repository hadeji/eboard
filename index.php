<?php

// Kickstart the framework
$f3 = require('lib/base.php');
//Get config file
$f3->config('config.ini');
//Connect to database
$f3->set('DB', $db = new DB\SQL(
    $f3->get('DSN'),
    $f3->get('UNAME'),
    $f3->get('PASS')
));

//Routes

$f3->route('GET @store: /', 'HomeController->home');
$f3->route('GET @register: /register', 'HomeController->register');
// $f3->route('GET @login: /login', 'CustomersController->login');
$f3->route('POST /register-account', 'AccountsController->register_account');
// $f3->route('POST /login-account', 'CustomersController->login_account');
// $f3->route('GET|POST /@username/logout', 'CustomersController->log_out');
// $f3->route('GET|POST @userprofile: /user/@username', 'CustomersController->user_profile');
// $f3->route('POST /user/update-account', 'CustomersController->update_account');
// $f3->route('GET|POST /user/@username/delete', 'CustomersController->delete_account');
// $f3->route('GET @products: /products', 'ProductsController->view_products');
// $f3->route('GET /products/new', 'ProductsController->add_new_product');
// $f3->route('POST /products/add', 'ProductsController->add_product');
// $f3->route('GET @product: /products/edit/@productCode', 'ProductsController->edit_product');
// $f3->route('POST|GET /products/delete/@id', 'ProductsController->delete_product');
// $f3->route('POST|GET /products/update/@id', 'ProductsController->update_product');
// $f3->route('GET @customers: /customers', 'CustomersController->all_customers');
// $f3->route('POST|GET /customers/delete/@id', 'CustomersController->delete_customer');
// $f3->route('GET @userprofile: /customers/edit/@id', 'CustomersController->edit_customer');
// $f3->route('POST /customers/update', 'CustomersController->update_customer');
// $f3->route('GET /product/@pcode', 'ProductsController->view_product');
// $f3->route('GET @cart: /cart', 'CartController->view_cart');
// $f3->route('GET|POST /product/@pcode/addtocart', 'CartController->add_to_cart');
// $f3->route('GET|POST /cart/empty', 'CartController->empty_cart');
// $f3->route('GET|POST /cart/remove/@pid', 'CartController->remove_item');
// $f3->route('GET|POST /cart/checkout', 'CartController->checkout');
// $f3->route('GET|POST /cart/placeorder', 'OrderController->placeorder');
// $f3->route('POST /cart/quantity/@pid', 'ProductsController->change_quantity');
// $f3->route('GET @categories: /categories', 'CategoriesController->view_categories');
// $f3->route('POST /categories/add', 'CategoriesController->add_category');
// $f3->route('POST|GET /categories/delete/@cid', 'CategoriesController->delete_category');
// $f3->route('GET /categories/edit/@cid', 'CategoriesController->edit_category');
// $f3->route('POST /categories/update', 'CategoriesController->update_category');
// $f3->route('GET @orders: /orders', 'OrderController->view_orders');
// $f3->route('GET /orders/delete/@oid', 'OrderController->delete_order');


$f3->run();
