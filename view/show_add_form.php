<?php
    if($id)
    {
        $productID = "";
        $productName = "";
        $listPrice = "";
        //echo($id);
        $prod = getProduct($id);
        //note the ??, handles if blank 
        $productID = htmlspecialchars($prod['productID']);
        $productName = htmlspecialchars($prod['productName']);
        $description = htmlspecialchars($prod['description']);
        $listPrice = htmlspecialchars($prod['listPrice']);
    } 
    //if id then action will be save changes, if no id then action will be save_product (this is for index.php switch-case)
    $actionValue = $id ? 'save_changes' : 'save_product';
    $heading = $id ? "Edit $productName" : "Add A Product";


?>

<h1><?=$heading?></h1>


    <form action="." method="post">
        
        <div>
        <label for="id">Product Code</label>
        <input type="hidden" name="id" id="" value="<?=$productID?>">
        </div>

        <div>
        <label for="product">product</label>
        <input type="text" name="product" value="<?=$productName?>">
        </div>

        <div>
        <label for="price">Price</label>
        <input type="text" name="price" id="" value="<?=$listPrice?>">
        </div>

        <input type="submit" value="Sumbit This">
        
        <input type="hidden" name="action" value="<?=$actionValue?>">
    

    </form>