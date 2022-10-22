<?php



include('../con_db.php');


//query to get data from the table
$query = sprintf("SELECT llamado_fecha, count(codigo) as cantidad FROM basegenero.datos
                  group by month(llamado_fecha) order by llamado_fecha");



//execute query
$result = $conex->query($query);

//loop through the returned data
$data = array();
foreach ($result as $row) {
	$data[] = $row;
}


//free memory associated with result
$result->close();

//close connection
$conex->close();

//now print the data
print json_encode($data);