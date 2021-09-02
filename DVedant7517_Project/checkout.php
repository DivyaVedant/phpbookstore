<?php
session_start();
$id = $_GET['id'];
$_SESSION['s1']=$id;
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
	<title>Checkout</title>
</head>
<body>
    <section class="header">
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

    <div class="frm">
	<form method="post" action="shop.php">
        <div class="frm1">
		First Name :- <input type="text" name="fname"><br/><br/>
		Last Name :- <input type="text" name="lname"><br/><br/>
		Payment Option :- <input type="radio" name="p1" value="cash">Cash On Delivery<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="p1" value="Credit Card/Debit Card">Credit Card/Debit Card<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="p1" value="Internet Banking">Internet Banking<br/><br/>
		<input type="submit" value="submit" name="Submit" id="submit"></div>
	</form>
        </div>
    </section>
</body>
</html>