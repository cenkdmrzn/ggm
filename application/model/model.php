<?php

class Model
{
    /**
     * @param object $db A PDO database connection
     */
    function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }


    public function getAllList(){

        $sql = "SELECT id, ser_name FROM ggm_service";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();

    }

}
