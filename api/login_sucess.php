<!DOCTYPE html>
<html>
<head>
    <title>Welcome Page</title>
    <style>
        /* CSS styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            text-align: center;
        }

        p {
            color: #666;
            line-height: 1.5;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Products</h2>
        <div class="product-list">
            <?php
            // Array of products
            $products = [
                ['name' => 'Product 1', 'price' => 10.99],
                ['name' => 'Product 2', 'price' => 19.99],
                ['name' => 'Product 3', 'price' => 14.99],
            ];

            // Loop through products and display them
            foreach ($products as $product) {
                echo '<div class="product">';
                echo '<h3>' . $product['name'] . '</h3>';
                echo '<p>Price: $' . $product['price'] . '</p>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
</body>
</html>