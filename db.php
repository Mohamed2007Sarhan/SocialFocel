<!-- <div class="link"><p>The site was built by <span style="font-weight: bold; color: blue;"><a href="http://profile-muhammad-sarhan.eb2a.com/" style="font-weight: bold; color: blue;">Hamed Sarhan</a></span></p></div> -->

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "like";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
