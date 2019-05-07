<?php
include 'Module03_opendb.php';

$sql = "SELECT Menu, Meats, Cheese, Price FROM menu LIMIT 80"
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
{
while($row = mysqli_fetch_assoc($result)){
echo "Menu:" . $row["Menu"] . "<br>";
echo "Meats:" . $row["Meats"] . "<br>";
echo "Cheese:" . $row["Cheese"] . "<br>";
echo "Price:" . $row["Price"] . "<br><hr>";
}
} else {
echo "0 results";
}

mysqli_close($conn);
?>
