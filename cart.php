<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<h1>My cart</h1>
<?php
// Get session variables
echo "The session ID is " . session_id();
echo "<pre>";
print_r($_SESSION["cart"]);
echo "</pre>";
?>

</body>
</html>