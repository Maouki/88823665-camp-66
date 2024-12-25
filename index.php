<h1>File index.php</h1>
<?php


$myvaar = "Hello world";
$myvaar = 1;
echo "<h1>".$myvaar."</h1>";
echo "<br>";

function x(){
    global $x ;
    $x = 2;
}

echo "<br>";
x();
echo $x ;
echo "<br>";

echo "10" - "1";
echo "<br>";

$my_arry = array(1,2,3,4,5);
print_r($my_arry);
echo "<br>";
$my_arry2[] = 1;
$my_arry2[] = 2;
$my_arry2[] = 3;
print_r($my_arry2)




/** FILE index.php */

?>

<?php
echo "<br>";
$my_arry = array(1,2,3,4,5);
for($i=0;$i < sizeof($my_arry); $i++){
    echo $my_arry[$i];
    echo "<br>";
}
?>