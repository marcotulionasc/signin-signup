<!DOCTYPE html>
<html>
<head>
    <title>E-commerce</title>
    <style>

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
            display: flex;
            flex-direction: column;
        }

        .product img {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
        }

        .product-info {
            flex-grow: 1;
        }

        .add-to-cart-btn {
            background: linear-gradient(to bottom, #001f3f, #003366); /* Gradiente linear azul escuro */
            color: white;
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .add-to-cart-btn:hover {
            background: linear-gradient(to bottom, #001a33, #00264d); /* Gradiente linear azul escuro alterado ao passar o mouse */
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
            echo '<p>preço: R$' . number_format($product['price'], 2, ',', '.') . '</p>';
            echo '<button class="add-to-cart-btn" onclick="addToCart(\'' . $product['name'] . '\', ' . $product['price'] . ')">Adicionar ao Carrinho</button>';
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
    <script>
        function addToCart(productName, productPrice) {
            
            alert('Produto adicionado ao carrinho: ' + productName + ' - $' + productPrice);
        }
    </script>


</body>
</html>