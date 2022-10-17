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
        $this->db->query('SELECT * FROM RichestPeople ORDER BY Networth DESC');
        $result = $this->db->resultSet();
        return $result;
    }

    public function deleteRichestPeople($id)
    {
        $this->db->query('DELETE FROM `RichestPeople` WHERE `id` = :id');
        $this->db->bind(':id', $id);
        return $this->db->execute();
    }
}
