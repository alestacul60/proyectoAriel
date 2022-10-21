<?php



include('../con_db.php');


//query to get data from the table
$query = sprintf("SELECT descripVinculoVicAgre, count(victima_vinculo_agresor) as cuenta2
                    FROM basegenero.datos
                    left join victima_vinculo_agresor on idVVA = victima_vinculo_agresor
                    group by victima_vinculo_agresor");



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