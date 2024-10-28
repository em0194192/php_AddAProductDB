<?php

    $dsn = "mysql:host=localhost;dbname=my_guitar_shop2";
    $username = "root";
    $password = "";

    try {
        $db = new PDO($dsn, $username, $password);
        // echo("Connected to database");
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        echo ("Error connecting to database: $error_message");
        exit();
    }

    function getProducts()
    {
       global $db;
       $qry = "Select * from products";
       $pdoStatement = $db->query($qry);
       $products = $pdoStatement->fetchAll();

        // print_r($products);
        return $products;
    }
    

    function getProduct($id)
    {
        
        global $db;
        $query = "SELECT * FROM products WHERE products.productID = $id; ";
        // echo($query);
        $obj = $db->query($query);
        return $obj->fetch();

    }

    function addProducts($id, $name, $price)
    {
        if ($id === null || $name === null || $price === null) {
            // If any parameter is null, return false
            return false;
        }
       
        $query = "INSERT INTO `products` ( `categoryID`, `productCode`, `productName`, `description`, `listPrice`, `discountPercent`, `dateAdded`) VALUES ( '1', '$id', '$name', 'The coolest guitar on the planet', '$price', '0.00', '2024-10-21 16:40:32.000000'); ";
        echo($query);

        global $db;
        $db->query($query);
        return true; 
        
        
    }

    function saveChanges($id, $price, $prodName)
    {
        global $db;
        $sql = "UPDATE products SET productName = '$prodName', listPrice = $price WHERE products.productID = $id; ";
        echo($sql);
    }
    
?>