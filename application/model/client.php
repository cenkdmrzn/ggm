<?php

class Client{

    public $db;

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
        $sql = "SELECT * FROM ggm_client";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();

    }


    public function addClient($client_name, $client_password, $client_email, $client_website, $client_type)
    {
        $sql = "INSERT INTO ggm_client (client_name, client_password, client_email, client_website, client_type) VALUES (:client_name, md5(:client_password), :client_email, :client_website, :client_type)";
        $query = $this->db->prepare($sql);
        $parameters = array(
            ':client_name' => $client_name,
            ':client_password' => $client_password,
            ':client_email' => $client_email,
            ':client_website' => $client_website,
            ':client_type' => $client_type
        );

       // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);

    }


    public function getClient($id)
    {
        $sql = "SELECT * FROM ggm_client WHERE id= :id LIMIT 1";
        $query = $this->db->prepare($sql);
        $parameters = array(':id' => $id);
        $query->execute($parameters);

        return $query->fetch();

    }


    public function updateClient($id, $client_name, $client_password, $client_email, $client_website, $client_type)
    {
        $sql = "UPDATE ggm_client SET client_name =:client_name, client_password =md5(:client_password), client_email =:client_email, client_website =:client_website, client_type =:client_type, client_updated= current_timestamp WHERE id = :id";
        $query = $this->db->prepare($sql);
        $parameters = array(
            ':id' => $id,
            ':client_name' => $client_name,
            ':client_password' => $client_password,
            ':client_email' => $client_email,
            ':client_website' => $client_website,
            ':client_type' => $client_type
        );

        $query->execute($parameters);

    }


}