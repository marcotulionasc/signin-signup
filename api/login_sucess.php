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
        }

        .product-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .product-row {
            width: 100%;
            box-sizing: border-box;
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .product {
            width: 23%;
            box-sizing: border-box;
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }

        .product img {
            max-width: 100%;
            height: auto;
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
                ['name' => 'Product 1', 'price' => 10.99, 'image' => 'letter-m.png'],
                ['name' => 'Product 2', 'price' => 19.99, 'image' => 'letter-m.png'],
                ['name' => 'Product 3', 'price' => 14.99, 'image' => 'letter-m.png'],
                ['name' => 'Product 4', 'price' => 9.99, 'image' => 'letter-m.png'],
                ['name' => 'Product 5', 'price' => 12.99, 'image' => 'letter-m.png'],
                ['name' => 'Product 6', 'price' => 17.99, 'image' => 'letter-m.png'],
                ['name' => 'Product 7', 'price' => 8.99, 'image' => 'letter-m.png'],
                ['name' => 'Product 8', 'price' => 15.99, 'image' => 'letter-m.png'],
            ];

            // Loop through products and display them
            $count = 0;
            foreach ($products as $product) {
                if ($count % 4 == 0) {
                    echo '<div class="product-row">';
                }
                echo '<div class="product">';
                echo '<img src="../' . $product['image'] . '" alt="' . $product['name'] . '">';
                echo '<h3>' . $product['name'] . '</h3>';
                echo '<p>preço: $' . $product['price'] . '</p>';
                echo '</div>';
                $count++;
                if ($count % 4 == 0) {
                    echo '</div>';
                }
            }
            if ($count % 4 != 0) {
                echo '</div>';
            }
            ?>
        </div>
    </div>
</body>
</html>