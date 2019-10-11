<?php

    function get_to_shop($name_product, $price, $quantity, $tag) {

        $html .= '<div class="card">';
        $html .=    '<div class="card_title">';
        $html .=        $name_product;
        $html .=    '</div>';
        $html .=    '<img src="../lib/img/' . $name_product . '.jpg" alt="' . $name_product . '"/>';
        $html .=    '<div class="price_quantity">';
        $html .=        '<p id="price">' . $price . '</p>';
        $html .=        '<p id="quantity">' . $quantity . '</p>';
        $html .=        '<p id="tag">' . $tag . '</p>';
        $html .=    '</div>';
        $html .=    '<div class="card_footer">';
        $html .=        '<button class="card_button">+</button>';
        $html .=        '<button class="card_button">-</button>';
        $html .=        '<button class="card_button">buy</button>';
        $html .=    '</div>';
        $html .= '</div>';

        return $html;
    }

    // For admin
    function add_to_shop() {

        $html .= '<div class="container">';
        $html .=    '<form action="#" method="POST">';
        $html .=        '<input class="input_shop" type="text" name="product_name" placeholder="product name"';
        $html .=        '<input class="input_shop" type="text" name="product_name" placeholder="product name"';
        $html .=        '<input class="input_shop" type="text" name="product_name" placeholder="product name"';
        $html .=        '<input class="input_shop" type="text" name="price" placeholder="price"';
        $html .=        '<input class="input_shop" type="text" name="quantity" placeholder="quantity"';
        $html .=    '</form>';
        $html .= '</div>';

        return $html;
    }