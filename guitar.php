<?php
    $dsn = "mysql:host=localhost;dbname=my_guitar_shop2";
    $username = "root";
    $password = "";

    try {
        $db = new PDO($dsn, $username, $password);
        echo("Connected to database");
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        echo ("Error connecting to database: $error_message");
        exit();
    }

    $qry = "SELECT * FROM customers, addresses WHERE customers.customerID = addresses.customerID; ";
    $result = $db->query($qry);
    // print_r($result);
    $aryCustomers = $result->fetchAll();
    // print_r($aryCustomers);

    foreach($aryCustomers as $cust)
    {
        echo ("$cust[firstName] $cust[lastName]");
    }
    $qry = null;
    $result = null;