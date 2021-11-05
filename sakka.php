<!DOCTYPE html>
<html>
<body>

<?php

// echo "My first PHP script!";
// $x = 5;
// $y = 4;
// echo $x + $y;
// $txt = "PHP";
// echo "I love " . $txt . "!";


// $x = 10.365;
// var_dump($x);

// //strings methode
// echo strpos("Hello world!", "world"); // outputs 6
// echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!


// $t = date("H");

// if ($t < "10") {
//   echo "Have a good morning!";
// } elseif ($t < "20") {
//   echo "Have a good day!";
// } else {
//   echo "Have a good night!";
// }




// $favcolor = "red";

// switch ($favcolor) {
//   case "red":
//     echo "Your favorite color is red!";
//     break;
//   case "blue":
//     echo "Your favorite color is blue!";
//     break;
//   case "green":
//     echo "Your favorite color is green!";
//     break;
//   default:
//     echo "Your favorite color is neither red, blue, nor green!";
// }



// $x = 1;

// while($x <= 5) {
//   echo "The number is: $x <br>";
//   $x++;
// }

// for ($x = 0; $x <= 100; $x+=10) {
//     echo "The number is: $x <br>";
// }


// $colors = array("red", "green", "blue", "yellow");

// foreach ($colors as $value) {
//   echo "$value <br>";
// }


// $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

// foreach($age as $x => $val) {
//   echo "$x = $val<br>";
// }



// function writeMsg() {
//     echo "Hello world!<br/>";
// }

// writeMsg(); // call the function


// function familyName($fname) {
//     echo "$fname Refsnes.<br>";
// }

// familyName("Jani");
// familyName("Hege");
// familyName("Stale");
// familyName("Kai Jim");
// familyName("Borge");



// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "formation";

// try {
//   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);



//   if(isset($_POST["fname"])){
//     $sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('$_POST[fname]', '$_POST[lname]', '$_POST[email]')";
//   // use exec() because no results are returned
//     echo $sql;
//     $conn->exec($sql);
//   }
  
 //   $last_id = $conn->lastInsertId();
//   echo "New record created successfully. Last inserted ID is: " . $last_id;

  //more secure
//   $stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email)
//   VALUES (:firstname, :lastname, :email)");
//   $stmt->bindParam(':firstname', $firstname);
//   $stmt->bindParam(':lastname', $lastname);
//   $stmt->bindParam(':email', $email);

//   // insert a row
//   $firstname = "John";
//   $lastname = "Doe";
//   $email = "john@example.com";
//   $stmt->execute();

//   // insert another row
//   $firstname = "Mary";
//   $lastname = "Moe";
//   $email = "mary@example.com";
//   $stmt->execute();

//   // insert another row
//   $firstname = "Julie";
//   $lastname = "Dooley";
//   $email = "julie@example.com";
//   $stmt->execute();

//    $query = "SELECT * FROM MyGuests";

//   $stmt = $conn->prepare($query);
//   $stmt->execute();
//   $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

//   var_dump($data);

// } catch(PDOException $e) {
//   echo $sql . "<br>" . $e->getMessage();
// }


$conn = null;



include_once "db.class.php";




if(isset($_POST["fname"])) {
?>

    
    Welcome <?= $_POST["fname"]; ?><br>
Your email address is: <?= $_POST["email"]; ?>

<?php } ?>
<form action="" method="post">
FName: <input type="text" name="fname"><br>
LName: <input type="text" name="lname"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>


</body>
</html>