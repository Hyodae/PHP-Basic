<html>
<body>

<!-- 27 - Login Box -->
<hr><h3>27 - Login Box</h3> 

<!-- log in box -->
<div id="insidebox1">

    <form name="form1" method="post" action='registernext.php'>
        <p>Username: <input type="text" name="username" size="15" maxlength="20" value=""></p>
        <p>Password: <input type="password" name="pass" size="15" maxlength="20" value=""></p>
        <p>Confirm Pass: <input type="password" name="pass2" size="15" maxlength="20" value=""></p>
        <p>Email: <input type="text" name="email" size="15" maxlength="65" value=""></p>
        <p>Confirm Email: <input type="text" name="email2" size="15" maxlength="65" value=""></p>
        <p><input type="submit" name="submit" value="register"></p>
    </form>
    
</div>
    
    
<?php
    
?>  

<!-- 24 - Connecting to MySQL Database -->
<hr><h3>24 - Connecting to MySQL Database</h3>   

<?php

/*
    
// opens connection to mysql server
$dbc = mysql_connect('52.78.207.222','root','password');
if (!$dbc) {
    die('Not connected:'.mysql_error());
}

// select database
$db_selected = mysql_select_db("game", $dbc);
if (!$db_selected) {
    die("can't connect:".mysql_error());
}

// test
$query = "UPDATE game_table SET email='hyodaekim@gmail.com' WHERE username='hyodae'";
$result = mysql_query($query);  

*/

?>

<!-- 21 - include function -->
<hr><h3>21 - include function</h3>
        
<?php include("welcome.php"); ?>

<h4> Welcome People</h4>
<p> Hey now all start</p>

<?php
// 20 - date function
echo "<hr><h3>20 - date function</h3>";
    
echo date("m-d-Y")."<br>";    
?>

<!-- 18 - Beginning Forms -->
<hr><h3>18 - Beginning Forms</h3>

<form action="18.Forms.php" method="post">
    Name: <input type="text" name="name">
    <input type="submit">
</form>        
    
<?php    
    
// 17 - Return Values
echo "<hr><h3>17 - Return Values</h3>";

function add($a,$b) {
    $total = $a + $b;
    return $total;
}

echo add(10, 32)."<br>";
echo add(11, 545)."<br>";

// 16 - Paramenters in Functions
echo "<hr><h3>16 - Paramenters in Functions</h3>";

function somefun($sub) {
    echo $sub."hoss <br>";
}

somefun("take it easy ");
somefun("I said take it easy ");

// 15 - Functions
echo "<hr><h3>15 - Functions</h3>";

function testfun() {
    echo "easy hoss!";
}

echo "take it ";
testfun();
echo "<br>"."I said take it ";
testfun();

// 14 - Foreach Array Loops
echo "<hr><h3>14 - Foreach Array Loops</h3>";

$test = array('tom', 'tony', 'greg', 'mike');
foreach ($test as $x) {
    echo $x."<br>";
}

// 13 - Arrays with Loops
echo "<hr><h3>13 - Arrays with Loops</h3>";

$test = array('tom', 'tony', 'greg', 'mike');
for ($x = 0; $x < sizeof($test); $x++) {
    echo $test[$x]."<br>";
}

// 12 - Adding and Modifying Elements in an Array
echo "<hr><h3>12 - Adding and Modifying Elements in an Array</h3>";

$name[0] = "tom";
$name[1] = "greg";
$name[2] = "mike";
echo $name[0]."<br>";

$name[] = "matt";   // automatically assign the last item of the array
echo $name[3]."<br>";

$name[0] = "hyodae";
echo $name[0]."<br>";

$name["fingers"] = "hand";


// 11 - Associative Arrays
echo "<hr><h3>11 - Associative Arrays</h3>";

$actions = array('fingers'=>'hand', 'toes'=>'foot', 'teeth'=>'mouth');
echo $actions['fingers']."<br>";
echo $actions['toes']."<br>";
echo $actions['teeth']."<br>";

// 10 - Arrays
echo "<hr><h3>10 - Arrays </h3>";

$people = array('tom','jake','tony');
echo $people[0]."<br>";
echo $people[1]."<br>";
echo $people[2]."<br>";

$people[1] = "Sarah";
echo $people[1]."<br>";

// 9 - For Loop
echo "<hr><h3>9 - For Loop </h3>";

for ($num=1; $num<=5; $num++) {
    echo $num."<br>";
}

// 8 - Do Loop
echo "<hr><h3>8 - Do Loop </h3>";

$num = 1;
do {
    echo $num."<br>";
    $num++;    
} while ($num < 5);

//  7 - While Loop
echo "<hr><h3>7 - While Loop </h3>";

$num = 1;
while ($num <= 5) {
    echo $num."<br>";
    $num++;
}

//  6 - Switch statement
echo "<hr><h3> 6 - Switch statement </h3>";

$country = "USA";
switch ($country) {
    case "USA":
        echo "you're in USA";
        break;
    case "Korea":
        echo "you're in Korea";
        break;
    case "Japan":
        echo "Are you in Japan?";
        break;
    default: 
        echo "Where are you now?";
        break;
}

// 05. if/elseif/else
echo "<hr><h3>5 - if/elseif/else </h3>";

$var = "steve";

if ($var=="steve") {
    echo "hey stevo";
}
elseif ($var=="brian") {
    echo "hey brian";
}
else {
    echo "you idiot";
}

// 04. If Else Statements
echo "<hr><h3>4 - If Else Statements</h3>";

$first = 10;
$second = 20;
$third = 30;

if ($first==$second) {
    echo "This is true";
}
else {
    echo "This is false";
}
echo "<br>";

// 03. Basic Math Functions
echo "<hr><h3>3 - Basic Math Functions</h3>";
$anything = 34;
$something = 85;

echo $anything+$something;
echo "<br>";
echo $anything-$something;
echo "<br>";
echo $anything*$something;
echo "<br>";
echo $anything/$something;
echo "<br>";

// 02. Basic Output and Variables
// print simple text
echo "<hr><h3>2 - Basic Output and Variables</h3>";
echo "Hyodae Kim";
echo "<br>";
echo 3232;
echo "<br>";

// basic variables
$sometext = "harry potter";
echo $sometext;
echo "<br>";

$somenumber = 32;
echo $sometext.$somenumber;
echo "<br>";

?>
    
</body>
</html>