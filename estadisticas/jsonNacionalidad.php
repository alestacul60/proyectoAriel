<?php



include('../con_db.php');


//query to get data from the table
$query = sprintf("SELECT descrip_nacionalidad, count(victima_nacionalidad) as cuenta
                  FROM basegenero.datos
                  left join nacionalidad on idNacion = victima_nacionalidad
                  group by victima_nacionalidad");



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