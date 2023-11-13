<?php

namespace Daw;

class Users {

    public $sql;

    public function __construct($sql){
        $this->sql = $sql;
    }

    public function getAll(){
        $tasks = array();
        $query = "SELECT Nom, Contrasenya FROM usuari;";
        foreach ($this->sql->query($query, \PDO::FETCH_ASSOC) as $task) {
            $tasks[] = $task;
        }

        print_r($tasks);
        return $tasks;
    }

    public function addUser($nom, $cognoms, $tel, $email, $tarjeta, $rol, $contrasenya) {
        $stm = $this->sql->prepare('INSERT INTO usuari (id, Nom, Cognoms, Tel, Email, tarjeta, rol, Contrasenya) 
            VALUES (:id, :nom, :cognoms, :tel, :email, :tarjeta, :rol, :contrasenya);');
        
        $result = $stm->execute([
            ':id' => $id,
            ':nom' => $nom,
            ':cognoms' => $cognoms,
            ':tel' => $tel,
            ':email' => $email,
            ':tarjeta' => $tarjeta,
            ':rol' => $rol,
            ':contrasenya' => $contrasenya,
        ]);
    }
    public function login($user, $pass){
        $stm = $this->sql->prepare('SELECT id, Nom, Contrasenya FROM usuari WHERE Nom = :user');
        $stm->execute(['user' => $user]); 
        $result = $stm->fetch(\PDO::FETCH_ASSOC);
        if(is_array($result) && $result["Contrasenya"] == $pass){
            return $result;
        } else {
            return false;
        }
    }
}