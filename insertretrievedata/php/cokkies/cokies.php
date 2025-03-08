<?php
// Set a cookie named "user" with value "John" that expires in 1 hour
setcookie("user", "John", time() + 3600, "/"); 
echo "Cookie has been set!";
?>
<?php
if(isset($_COOKIE["user"])) {
    echo "Welcome, " . $_COOKIE["user"]; 
} else {
    echo "No cookie found!";
}
?>
<?php
setcookie("user", "", time() - 3600, "/"); // Set past time to delete
echo "Cookie has been deleted!";
?>
