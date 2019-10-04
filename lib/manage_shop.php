<?php

  function get_article_in_shop($db) {
    $stmt = mysqli_query($db,"SELECT * from article");
    while ($res = mysqli_fetch_row($stmt)) {
      $product = [
          'name' => $res[1],
          'price' => $res[2],
          'quantity' => $res[3],
        ];
      $products .= form_get_article($product);
      }
    return homeContent($products);
  }

  function set_article_in_shop($db) {
    $message = '';
    if (isset($_POST['product_name']) && isset($_POST['price']) && isset($_POST['stock'])) {
      $stmt = mysqli_prepare($db, "INSERT INTO article(name_product, price_product, stock_product) VALUES (?, ?, ?)");
      mysqli_stmt_bind_param($stmt, 'ssi', $_POST['product_name'], $_POST['price'], $_POST['stock']);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_close($stmt);
      $message = 'article added';
      return get_article_in_shop();
    } else {
      $message = 'invalid data';
      return formulaire_add_article();
    }
    return $message;
  }




?>
