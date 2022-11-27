<?php
include("mysqlconnect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
</style>
<body>
    <form action="" method="post">
            <table>
                <tr>
                    <td>
                        <p>Identifier:</p>
                    </td>
                    <td>
                        <input type="number" name="Identifier" id="" placeholder = "Input identifier here." required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Customer Name:</p>
                    </td>
                    <td>
                        <input type="text" name="CustomerName" id="" placeholder = "Input customer name here." required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Phone Number:</p>
                    </td>
                    <td>
                        <input type="text" name="PhoneNumber" id="" maxlength="11" minlength="11" pattern="\d*" placeholder = "Input phone number here." title="Numbers only." required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Delivery Address:</p>
                    </td>
                    <td>
                        <input type="text" name="DeliveryAddress" id="" placeholder = "Input delivery address here." required>
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Register Customer" name="register_customer">
                    </td>
                </tr>
            </table>
    </form>
<?php
    if(isset($_POST['register_customer'])){
        $identifier = trim($_POST['Identifier']);
        $customerName = trim($_POST['CustomerName']);
        $phoneNumber = trim($_POST['PhoneNumber']);
        $deliveryAddress = trim($_POST['DeliveryAddress']);

        $sequel = "INSERT INTO customers (Identifier, Customer_Name, Phone_Number, Delivery_Address) VALUES ('$identifier', '$customerName', '$phoneNumber', '$deliveryAddress');";
        $outcome = mysqli_query($mysqli, $sequel);

        if($outcome == TRUE){
            echo "<script>alert('Customer has been successfully registered to the database'); window.location='list_customers.php'</script>";
        }else{
            echo "<script>alert('The customer was unable to register')</script>";
        }
    }
?>
</body>
</html>