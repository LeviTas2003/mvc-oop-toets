<?php
// Dit is de model country die hoort bij de Countries controller


class Country
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getCountries()
    {
        $this->db->query('SELECT * FROM Country');
        $result = $this->db->resultSet();
        return $result;
    }

    public function getSingleCountry($id)
    {
        $this->db->query("SELECT * FROM country WHERE id = :id");
        $this->db->bind(':id', $id, PDO::PARAM_INT);
        return $this->db->single();
    }

    public function updateCountries($post)
    {
        $this->db->query("UPDATE country
                          SET name = :name,
                              capitalCity = :capitalCity,
                              continent = :continent,
                              population = :population
                          WHERE id = :id");

        $this->db->bind(':id', $post["id"], PDO::PARAM_INT);
        $this->db->bind(':name', $post["name"], PDO::PARAM_STR);
        $this->db->bind(':capitalCity', $post["capitalCity"], PDO::PARAM_STR);
        $this->db->bind(':continent', $post["continent"]);
        $this->db->bind(':population', $post["population"], PDO::PARAM_INT);

        return $this->db->execute();
    }

    public function createCountries($post)
    {
        $this->db->query("INSERT INTO country
                            SET name = :name,
                              capitalCity = :capitalCity,
                              continent = :continent,
                              population = :population
                            ");

        $this->db->bind(':name', $post["name"], PDO::PARAM_STR);
        $this->db->bind(':capitalCity', $post["capitalCity"], PDO::PARAM_STR);
        $this->db->bind(':continent', $post["continent"]);
        $this->db->bind(':population', $post["population"], PDO::PARAM_INT);

        return $this->db->execute();
    }

    public function deleteCountry($id)
    {
        $this->db->query('DELETE FROM `country` WHERE `id` = :id');
        $this->db->bind(':id', $id);
        return $this->db->execute();
    }
}
