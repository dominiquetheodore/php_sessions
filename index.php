<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["cart"] = [
    [
        "product_id" => 1,
        "qty" => 2,
        "price" => 3.50,
        "currency" => "USD"
    ]
    ];
    
echo "Session variables are set.";
?>

</body>
</html>