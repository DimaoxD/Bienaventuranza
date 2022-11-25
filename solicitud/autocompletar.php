<?php

include_once 'database.php';

class Autocompletar extends Database{

    function buscar($texto){
        $res = array();
        $query = $this->connect()->prepare("SELECT * FROM diagnosticos WHERE Nombre_Diagnosticos COLLATE utf8_general_ci LIKE  :texto LIMIT 3");
        $query->execute(['texto' =>$texto . '%']);

        if($query->rowCount()){
            while($r = $query->fetch()){
                array_push($res, $r['Nombre_Diagnosticos']);
            }
        }
        return $res;
    }
}

?>