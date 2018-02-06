<?php
$connection = mysqli_connect("127.0.0.1", "root", "", "hm_system_refactor");

function convert($date,$connection,$id){

	$condate = date('Y-m-d H:i:s',strtotime($date));
	$query = "UPDATE inspections SET iended = '$condate' WHERE inspecid = $id";
	$data = mysqli_query($connection, $query);
	if ($data) {
    echo "Record updated successfully";
	}
	return $condate;
}

$sql = "SELECT inspecid,iended FROM `inspections` WHERE `iended` != 'NULL'";
$result = mysqli_query($connection, $sql);
while ($row = $result->fetch_assoc()) {
    $date=str_replace(" |","",$row['iended']);
    $con1 = str_replace('/', '-', $date);
    $con2 = str_replace(':', '-', $con1);
    $con3 = str_replace(' ', '-', $con2);
    $tempArr=explode('-',$con3);
    $convertdate = date("m/d/y", mktime(0,0,0, $tempArr[4], $tempArr[3], $tempArr[5]));
    $con = $tempArr[0].':'.$tempArr[1].' '.$tempArr[2].' '.$convertdate;
    convert($con,$connection,$row['inspecid']);
}

?>













<!-- 2:27 pm | 21/06/2017

SELECT STR_TO_DATE(iended, '%h:%i %p %d%m%Y PDT') AS new_time
FROM inspections
WHERE `inspecid` = 4;

'%H:%i:%s %b %d, %Y PDT'
17:16:28 Sep 13, 2011 
new_time
2011-09-13 17:16:28


SELECT STR_TO_DATE(`iended`, '%h:%i:%s %p %d/%m/%Y PDT') AS new_time
FROM `inspections`
WHERE `inspecid` = 4; -->