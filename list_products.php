<?php
    include('mysqlconnect.php');

    $mysequel = "SELECT * FROM product;";
    $query = mysqli_query($mysqli, $mysequel);
    $productNumber = mysqli_num_rows($query);

    function Products(){
        GLOBAL $mysqli;
        $mysequel = "SELECT * FROM product ORDER BY product_name ASC";
        $query = mysqli_query($mysqli, $mysequel);
        
    while($product = mysqli_fetch_array($query)){
        echo "<tr>";
        echo "<td>" . $product['Unique_ID'] . "</td>";
        echo "<td>" . $product['Product_Name'] . "</td>";
        echo "<td>" . $product['Description'] . "</td>";
        echo "<td>" . $product['Price_Tag'] . "</td>";
        echo "</tr>";
    }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Number of Products Registered in Database: <?php echo $productNumber; ?></h1>
    <table align="center" border="1">
        <tr>
            <th>
                <p>Unique ID</p>
            </th>
            <th>
                <p>Product Name</p>
            </th>
            <th>
                <p>Description</p>
            </th>
            <th>
                <p>Price Tag</p>
            </th>
        </tr>
        <?php
            Products();
        ?>
    </table>
</body>
</html>