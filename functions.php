<?php

function formatPrice($price) {
    return "Rs. " . number_format($price);
}

function getProductsByCategory($products, $category) {
    return array_filter(
        $products,
        fn($product) => $product["category"] === $category
    );
}

function getProductSummaries($products) {
    return array_map(
        fn($product) => $product["title"] . " (" . formatPrice($product["price"]) . ")",
        $products
    );
}

function getTotalPrice($products) {
    return array_reduce(
        $products,
        fn($total, $product) => $total + $product["price"],
        0
    );
}