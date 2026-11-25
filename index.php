<?php
require_once 'functions.php';
require_once 'functions.php';

$products = [
    [
        "title" => "Oversized T-Shirt",
        "description" => "Comfortable cotton t-shirt.",
        "image" => "images/tshirt.jpg",
        "alt" => "Black t-shirt",
        "category" => "Men",
        "price" => 1200
    ],
    [
        "title" => "Classic Hoodie",
        "description" => "Perfect for everyday wear.",
        "image" => "images/hoodie.jpg",
        "alt" => "Grey hoodie",
        "category" => "Men",
        "price" => 2500
    ],
    [
        "title" => "Denim Jeans",
        "description" => "Classic straight fit jeans.",
        "image" => "images/jeans.jpg",
        "alt" => "Blue jeans",
        "category" => "Men",
        "price" => 2800
    ],
    [
        "title" => "Denim Jacket",
        "description" => "Stylish and comfortable jacket.",
        "image" => "images/jacket.jpg",
        "alt" => "Denim jacket",
        "category" => "Women",
        "price" => 3200
    ],
    [
        "title" => "Cargo Pants",
        "description" => "Relaxed fit casual pants.",
        "image" => "images/cargo.jpg",
        "alt" => "Beige cargo pants",
        "category" => "Women",
        "price" => 2400
    ],
    [
        "title" => "Casual Sweatshirt",
        "description" => "Soft and comfortable sweatshirt.",
        "image" => "images/sweatshirt.jpg",
        "alt" => "White sweatshirt",
        "category" => "Women",
        "price" => 1800
    ]
];

$men = getProductsByCategory($products, "Men");
$women = getProductsByCategory($products, "Women");
$summaries = getProductSummaries($products);
$total = getTotalPrice($products);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UrbanWear</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header id="home">
        <h1>URBANWEAR</h1>
        <p>Wear your style.</p>
    </header>

    <nav>
        <a href="#home">Home</a>
        <a href="#men">Men</a>
        <a href="#women">Women</a>
        <a href="#collection">Collection</a>
        <a href="#about">About Us</a>
        <a href="#contact">Contact</a>
    </nav>

    <main>

        <section class="banner">
            <h2>New Collection 2026</h2>
            <p>Discover comfortable and stylish clothing for everyday wear.</p>
            <a href="#collection">Explore Collection</a>
        </section>

        <div class="layout">

            <section id="collection">

                <h2 id="men">Men's Collection</h2>

                <div class="products">

                    <?php foreach ($men as $product): ?>

                        <article class="card">
                            <figure>
                                <img src="<?= $product["image"] ?>" alt="<?= $product["alt"] ?>">
                                <figcaption><?= $product["title"] ?></figcaption>
                            </figure>

                            <p><?= $product["description"] ?></p>
                            <h3><?= formatPrice($product["price"]) ?></h3>
                        </article>

                    <?php endforeach; ?>

                </div>

                <h2 id="women">Women's Collection</h2>

                <div class="products">

                    <?php foreach ($women as $product): ?>

                        <article class="card">
                            <figure>
                                <img src="<?= $product["image"] ?>" alt="<?= $product["alt"] ?>">
                                <figcaption><?= $product["title"] ?></figcaption>
                            </figure>

                            <p><?= $product["description"] ?></p>
                            <h3><?= formatPrice($product["price"]) ?></h3>
                        </article>

                    <?php endforeach; ?>

                </div>

            </section>

            <aside>

                <h2>Categories</h2>

                <ul>
                    <li><a href="#men">Men's Clothing</a></li>
                    <li><a href="#women">Women's Clothing</a></li>
                    <li><a href="#collection">Latest Collection</a></li>
                </ul>

                <h2>Special Offers</h2>
                <p>Get up to 20% off selected products.</p>

                <h2>Available Sizes</h2>

                <ul>
                    <li>Small (S)</li>
                    <li>Medium (M)</li>
                    <li>Large (L)</li>
                    <li>Extra Large (XL)</li>
                </ul>

                <h2>Delivery</h2>
                <p>Delivery available across Nepal.</p>

                <h2>Product Price List</h2>

                <ul>
                    <?php foreach ($summaries as $summary): ?>
                        <li><?= $summary ?></li>
                    <?php endforeach; ?>
                </ul>

                <p>Total Products: <?= count($products) ?></p>
                <p>Total Product Value: <?= formatPrice($total) ?></p>

            </aside>

        </div>

        <section class="multimedia">

            <h2>Discover Our Brand</h2>

            <div class="media">

                <article class="media-box">
                    <h3>Fashion Collection Video</h3>

                    <video controls>
                        <source src="media/fashion.mp4" type="video/mp4">
                    </video>
                </article>

                <article class="media-box">
                    <h3>Listen to Our Brand Story</h3>

                    <audio controls>
                        <source src="media/brand.mp3" type="audio/mpeg">
                    </audio>
                </article>

            </div>

        </section>

        <section class="about" id="about">
            <h2>About UrbanWear</h2>

            <p>UrbanWear is a clothing brand that focuses on simple,
                comfortable and affordable fashion. Our goal is to provide
                quality clothing for people who want to express their
                personal style.</p>
        </section>

    </main>

    <footer id="contact">
        <h2>URBANWEAR</h2>
        <p>Kathmandu, Nepal</p>
        <p>Contact: info@urbanwear.example</p>

        <a href="https://www.instagram.com/">Instagram</a>
        <a href="https://www.facebook.com/">Facebook</a>

        <p>&copy; 2026 UrbanWear. All rights reserved.</p>
    </footer>

</body>
</html>