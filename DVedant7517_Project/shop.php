 <?php

session_start();
$a = $_SESSION['s1'];

define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');
define('DB_NAME', 'bookstorecreator');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die('Could not connect to MySQL: ' . mysqli_connect_error() );
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
	<title>Checkout</title>
</head>
<body>
    <section class="headershop">
    <nav>
            <a href="index.html"><img src="images/logo2.png"></a>
            <div class="nav-links">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="store.php">List Of Books</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
        </nav>
<?php

$query = "SELECT quantity FROM bookdetails WHERE book_name='$a'";
$result = mysqli_query($dbc,$query);

if (mysqli_num_rows($result) > 0){
	while($row = $result->fetch_assoc()){
	$i=$row["quantity"];
	}
	$i--;
}

$query1 = "UPDATE bookdetails SET quantity='$i' WHERE book_name='$a'";
mysqli_query($dbc,$query1);

if (mysqli_query($dbc, $query1)) {
  echo "<center><div class='txt'>Stay Safe <br><br>Thank You for shopping with us!<br><br>Order was Placed Successfully, soon you will receive information regarding your delivery status.<br> </div></center>";
} else {
  echo "<center>Order is not placed successfully.</center>";
}


session_destroy();
?>
    </section>
    </body>
</html>