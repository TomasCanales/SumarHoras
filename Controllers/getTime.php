<?php

	function getArrival($minibus_id){
		$query = new Queries();
		$data = $query->getTime($minibus_id);
    $time1 = $data['test_departuretime'];
    $time2 = $data['test_delaytime'];
		$a = new DateTime($time1);
    $b = new DateInterval((new DateTime($time2))->format('\P\TH\Hi\Ms\S'));
    $a->add($b);
    $result = $a->format('H:i:s');
    echo "<p>Hora de Salida: ".$time1."</p>";
    echo "<p>Tiempo de Demora: ".$time2."</p>";
    echo "<p>Hora de Llegada: ".$result."</p>";
	}

?>
