<?php
include_once('connection.php');
$nome = "";

// Retrieve the nome field from the usuarios table
$query = "SELECT nome FROM usuarios";
$result = mysqli_query($conn, $query);

if ($result) {
    // Verifique se há pelo menos uma linha retornada
    if (mysqli_num_rows($result) > 0) {
        // Fetch the first row from the result set
        $row = mysqli_fetch_assoc($result);

        // Assign the value of the nome field to the $nome variable
        $nome = $row['nome'];
    }
} else {
    // Adicione algum tratamento de erro, se necessário
    echo "Erro na consulta: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>

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
        <h1>Welcome, <?php echo $nome; ?>!</h1>
        <p>This is your home page</p>
        <a href="#" class="button">Learn More</a>
    </div>
</body>
</html>