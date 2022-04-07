<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>  
 <form action ="site.php" method="get">
   color: <input type ="text"  name ="color"> <br />
   plural Noun: <input type ="text" name ="pluralNoun"> <br />
   celebrity: <input type ="text"  name ="celebrity"> <br />
   <input type="submit">
</form>
<br><br>


 <?php 

 if(!empty($_GET)){
   $color = $_GET["color"];
   $pluralNoun = $_GET["pluralNoun"];
   $celebrity = $_GET["celebrity"];
   echo "Roses are $color <br>";
   echo "$pluralNoun are blue <br>";
   echo "I love $celebrity <br>";
 } 
?>

</body>
</html>






















<!-- <form action ="site.php" method="get">

   <input type="number" name ="num1">
   <br>
   <input type="number" name ="num2">
   <input type="submit" value="submit"> 
      </form>
Answer:
//  echo ($_GET["num1"] + $_GET["num2"]) -->