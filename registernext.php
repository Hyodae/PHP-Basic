<?php
//include('connection.php');

echo "here<br>";

/*
// test to see if username is alphanumeric
$testname = $_POST['username'];

if(!preg_match('/[^A-Za-z0-9]/i', $testname)){
    
    // test for duplicate names
    $query = "SELECT * FROM game_table WHERE username = '$_POST[\'username\']'";
    $result = mysql_query($query);
    $num = mysql_num_rows($result);
    
    if ($num == 0) {
        ;
    }
    else {
        header("Location:nameinuser.html");
    }
    
}
else {
    header("Location:invalidname.html");
}

*/

?>