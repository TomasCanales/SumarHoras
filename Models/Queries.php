<?php

class Queries {

  public function getTime($minibus_id){
    $data = new Connection();
    $connection = $data->get_connection();
    $sql = "SELECT * FROM test WHERE test_id = :minibusid";
    $statement = $connection->prepare($sql);
    $statement->bindParam(':minibusid', $minibus_id);
    $statement->execute();
    $result = $statement->fetch();
    return $result;
  }

}

?>
