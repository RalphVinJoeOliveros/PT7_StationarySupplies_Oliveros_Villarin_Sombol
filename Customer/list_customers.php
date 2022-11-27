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
    <?php
        $sequel = "SELECT * FROM customers";
        $query = mysqli_query($mysqli, $sequel);
        $customerNumber = mysqli_num_rows($query);

        function Customer(){
            GLOBAL $mysqli;
            $mysequel = "SELECT * FROM customers ORDER BY Customer_Name ASC";
            $query = mysqli_query($mysqli, $mysequel);

            while($customer = mysqli_fetch_array($query)){
                echo "<tr>";
                echo "<td>" . $customer['Identifier'] . "</td>";
                echo "<td>" . $customer['Customer_Name'] . "</td>";
                echo "<td>" . $customer['Phone_Number'] . "</td>";
                echo "<td>" . $customer['Delivery_Address'] . "</td>";
                echo "</tr>";
            }
        }
    ?>
    <h1>Number of Customers Registered in Database: <?php echo $customerNumber; ?></h1>
    <table align="center" border="1">
        <tr>
            <th>
                <p>Identifier</p>
            </th>
            <th>
                <p>Customer Name</p>
            </th>
            <th>
                <p>Phone Number</p>
            </th>
            <th>
                <p>Delivery Address</p>
            </th>
        </tr>
        <?php
            Customer();
        ?>
    </table>
</body>
</html>