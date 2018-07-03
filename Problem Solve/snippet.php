<?php 


// 	$date = DateTime::createFromFormat('g:i A | d/m/Y', '5:48 pm | 21/03/2017');

// 	$date = DateTime::createFromFormat('g:i A d/m/Y', '5:48 pm 21/03/2017');

// 	echo $date->format('Y-m-d H:i:s');
// var_dump($date);

?>

<?php
// $connection = mysqli_connect("127.0.0.1", "root", "", "hm_system_refactor");

// function convert($date,$connection,$id){

// 	$con = date('Y-m-d H:i:s',strtotime($date));
// 	//$con = $date->format('Y-m-d H:i:s');
// 	// $query = "UPDATE inspections SET iended = '$con' WHERE inspecid = $id";
// 	// $data = mysqli_query($connection, $query);
// 	// if ($data) {
//  //    echo "Record updated successfully";
// 	// }
// 	//echo $con;
// 	//return $con;
// }

// $sql = "SELECT inspecid,iended FROM `inspections` WHERE `iended` != 'NULL'";
// $result = mysqli_query($connection, $sql);
// while ($row = $result->fetch_assoc()) {//var_dump($row['iended']);
//      //$date=DateTime::createFromFormat('g:i A | d/m/Y', '5:48 pm | 21/03/2017');
//      $date=str_replace(" |","",$row['iended']);
//      $date = DateTime::createFromFormat('g:i A m/d/Y', $date);
//     var_dump($date) ;
//     // $date = $date->format('Y-m-d H:i:s');
     
//      convert($date,$connection,$row['inspecid']);

// }
?>
<?php

$handle = fopen ("php://stdin", "r");
function timeConversion($s) {
    $time = timestamp('H:i:s', $s);
    return $time;
}

fscanf($handle, "%s",$s);
$result = timeConversion($s);
echo $result . "\n";

?>