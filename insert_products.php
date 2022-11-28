<?php
   include('mysqlconnect.php');
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
    <form action="" method="post">
        <table>
            <tr>
                <td>
                    <p>Unique ID</p>
                </td>
                <td>
                    <input type="number" name="unique_id" id="" placeholder = "input unique id here." required>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Product name</p>
                </td>
                <td>
                    <input type="text" name="product_name" id="" placeholder = "Input product name here." required>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Description</p>
                </td>
                <td>
                    <input type="text" name="description" id="" placeholder = "Input description here." required>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Price Tag</p>
                </td>
                <td>
                    <input type="number" name="price_tag" id="" placeholder = "Input price tag here." step = "any" required>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Register Product" name="register_product">
                </td>
            </tr>
        </table>
    </form>

    <?php
        if(isset($_POST['register_product'])){
            $uniqueID = trim($_POST['unique_id']);
            $productName = trim($_POST['product_name']);
            $description = trim($_POST['description']);
            $priceTag = trim(round($_POST['price_tag'], 2));
        
            $sequel = "INSERT INTO product (Unique_ID, Product_Name, Description, Price_Tag) VALUES ('$uniqueID', '$productName', '$description', '$priceTag');";
            $outcome = mysqli_query($mysqli, $sequel);
            
            if($outcome == TRUE){
                echo "<script>alert('Product has been successfully registered to the database'); window.location='list_products.php'</script>";
            }else{
                echo "<script>alert('The product was unable to register to the database.')</script>";
            }
        }
    ?>
</body>
</html>