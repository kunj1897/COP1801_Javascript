<p>&nbsp;</p>
<p>&nbsp;</p>
<div><img class="saffron-215932_1920" src="C:\Users\nkjrpatel\Downloads\saffron-215932_1920.jpg" alt="n" width="300" height="200" /></div>
<div>
<h1>SAFFRON RESTAURANT</h1>
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
</div>
<p>&nbsp;</p>
<p>
  <a href="#home">Home</a>
  <a href="#Menu">Menu</a>
  <a href="#about">About</a>
  <a href="#contact Us">Contact Us</a>
</p>
<h2>Ham and cheese</h2>
<p>Regular ham, cheese (swiss, provolone, American), vegetables</p>
<div><img class="sandwich-451403_1920" src="C:\Users\nkjrpatel\Downloads\sandwich-451403_1920.jpg" alt="s" width="300" height="200" /></div>
<h2>Turkey and cheese</h2>
<p>Regular plain turkey, cheese (swiss, provolone, American), vegetables</p>
<h2>Cuban</h2>
<p>Fresh pork, Salami, Regular ham/ Spicy ham, Swiss cheese, mustard and pickles</p>
<div><img class="food-3204516_1920" src="C:\Users\nkjrpatel\Downloads\food-3204516_1920.jpg" alt="s" width="300" height="200" /></div>
<h2>Triple decker club</h2>
<p>Regular Ham, Plain turkey, cheese (American, provolone etc), Bacon and vegetables</p>
<h2>Starvin Marvin</h2>
<p>Spicy ham, salsalito turkey, Pepperoni, Salami, Cajun turkey, Bacon, Cheese, vegetables</p>
<h2>Spicy Italian</h2>
<p>Pepperoni, Salami, Spicy ham, provolone cheese and vegetables</p>
<div><img class="submarine-sandwich-702802_1920" src="C:\Users\nkjrpatel\Downloads\submarine-sandwich-702802_1920.jpg" alt="s" width="300" height="200" /></div>
<p>Menu</p>
