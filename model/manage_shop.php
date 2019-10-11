<?php

    function get_product($db) {

        $stmt = mysqli_query($db, "SELECT * FROM product");
        while ($res = mysqli_fetch_row($stmt)) {
            $name = res[1];
            $price = res[2];
            $quantity = res[3];
            $tag = res[4];
            $products .= get_to_shop($name, $price, $quantity, $tag);
        }

        return homeContent($products);
    }

    function add_product($db) {
       
        if (isset($_POST['product_name']) && isset($_POST['price']) && isset($_POST['quantity']) && isset($_POST['tag'])) {
            
            $stmt = mysqli_prepare($db, "INSERT INTO product VALUES (?, ?, ?, ?)");     
            mysqli_stmt_bind_param($stmt, "siis", $_POST['product_name'], $_POST['price'], $_POST['quantity'], $_POST['tag']);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
            
            return get_product($db);
        } else {
            return error_("invalid datas !") . add_to_shop();
        }
    }