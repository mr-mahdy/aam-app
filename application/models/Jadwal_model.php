<?php

class Jadwal_model extends CI_Model
{
    function fetch_all_event()
    {
        $this->db->order_by('id');
        return $this->db->get('kalender_ceramah');
    }

    public function getEventById($id)
    {
        return $this->db->get_where('kalender_ceramah', ['id' => $id])->row_array();
    }

    function insert_event($data)
    {
        $this->db->insert('kalender_ceramah', $data);
    }

    function update_event($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('kalender_ceramah', $data);
    }

    function delete_event($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('kalender_ceramah');
    }

    public function autodelete()
    {
        $this->db->query("DELETE FROM kalender_ceramah WHERE DATEDIFF(CURDATE(), date_created) > 3 AND status_jadwal = 'Belum dikonfirmasi'");
    }
}
