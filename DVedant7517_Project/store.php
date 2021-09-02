<?php

define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');
define('DB_NAME', 'bookstorecreator');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die('Could not connect to MySQL: ' . mysqli_connect_error() );

?>
<!DOCTYPE html>
<html>
    <head><link rel="stylesheet" href="style.css"></head>
<body>
    <section class="headerstore">
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
$query = "SELECT * FROM bookdetails";
$result = mysqli_query($dbc,$query);

echo "<center><table class='content-table' border='2' height='300' width='500' <thead><tr><th>Name of Books</th><th>Quantity</th></tr></thead></center>";
if (mysqli_num_rows($result) > 0){
	while($row = $result->fetch_assoc()){
	$j=$row["book_name"];
	echo "<tbody><tr><td><a href='checkout.php?id=$j'><center>".$row["book_name"]."</a></center></td><td><center>".$row["quantity"]."</cener></td></tr></tbody>"	;
	}
}

echo "</table>";

?>
        <div class="info">*******Note : Please click on book name to purchase the book.*******</div>
    </section>
</body>
</html>