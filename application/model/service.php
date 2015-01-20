<?php

class Service
{
    public $db;
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


    public function getAllList()
    {
        $sql = "SELECT id, ser_name FROM ggm_service";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();

    }


    public function addService($service_name)
    {
        $sql = "INSERT INTO ggm_service (ser_name) VALUES (:ser_name)";
        $query = $this->db->prepare($sql);
        $parameters = array(':ser_name' => $service_name);

        //echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);

    }


    public function getService($id)
    {
        $sql = "SELECT id, ser_name FROM ggm_service WHERE id= :id LIMIT 1";
        $query = $this->db->prepare($sql);
        $parameters = array(':id' => $id);
        $query->execute($parameters);

        return $query->fetch();

    }


    public function updateService($id, $service_name)
    {
        $sql = "UPDATE ggm_service SET ser_name = :ser_name, ser_updated= current_timestamp WHERE id = :id";
        $query = $this->db->prepare($sql);
        $parameters = array(':ser_name' => $service_name, ':id' => $id);

        $query->execute($parameters);

    }

}
