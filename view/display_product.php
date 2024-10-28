<?php
    echo("<a href=./?action=edit&id=$id>Edit</a>");
    
    $oneProduct = getProduct($id);
    echo ("<h1>$oneProduct[productCode]</h1><h2>$oneProduct[productName]</h2><p>$oneProduct[listPrice]</p>");

?>

<div><a href="."> Show all Products</div>