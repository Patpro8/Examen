<?php

namespace Emeset;

class Alumnes {
    public $sql;
    public function __construct($sql){
        $this->sql = $sql;
    }
    public function getAll(){
        $alumnes = array();
        $query = "SELECT * FROM alumne;";
        foreach ($this->sql->query($query, \PDO::FETCH_ASSOC) as $alumne) {
            $alumnes[] = $alumne;
        }

        return $alumnes;
    }
    public function addalumnes($nom, $cognoms, $data_de_naixament, $carrer, $numero, $ciutat, $codi_postal) {
        $stm = $this->sql->prepare('INSERT INTO examen (nom, cognoms, data_de_naixement, carrer, numero, ciutat, codi_postal) 
            VALUES (:nom, :cognoms, :data_de_naixement, :carrer, :numero, :ciutat, :codi_postal);');
        
        $result = $stm->execute([
            ':nom' => $nom,
            ':cognoms' => $cognoms,
            ':data_de_naixement' => $data_de_naixament,
            ':carrer' => $carrer,
            ':numero' => $numero,
            ':ciutat' => $ciutat,
            ':codi_postal' => $codi_postal,
        ]);
        $rowCount = $stm->rowCount();

    }
}
