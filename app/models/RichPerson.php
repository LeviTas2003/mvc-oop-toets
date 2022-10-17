<?php
// Dit is de model RichestPeople die hoort bij de RichestPeople controller


class RichPerson

{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getRichestPeople()
    {
        $this->db->query('SELECT * FROM RichestPeople');
        $result = $this->db->resultSet();
        return $result;
    }

    public function getSingleRichestPeople($id)
    {
        $this->db->query("SELECT * FROM RichestPeople WHERE id = :id");
        $this->db->bind(':id', $id, PDO::PARAM_INT);
        return $this->db->single();
    }

    public function deleteRichestPeople($id)
    {
        $this->db->query('DELETE FROM `RichestPeople` WHERE `id` = :id');
        $this->db->bind(':id', $id);
        return $this->db->execute();
    }
}
