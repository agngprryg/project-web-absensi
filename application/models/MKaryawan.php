<?php

class MKaryawan extends CI_Model
{
    public function get_all($table)
    {
        return $this->db->get($table)->result();
    }

    public function get_status_active($table)
    {
        return $this->db->where('status', 'aktif')->get($table)->result();
    }

    public function get_by_id($table, $id)
    {
        return $this->db->get_where($table, ['id' => $id])->row();
    }

    public function store($table, $data)
    {
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }

    public function update($table, $data, $id)
    {
        $this->db->where('id', $id);
        return $this->db->update($table, $data);
    }

    public function delete($table, $id)
    {
        $this->db->where('id', $id);
        return $this->db->delete($table);
    }

    public function count_all($table)
    {
        return $this->db->count_all($table);
    }

    public function get_data_cuti_by_id($id)
    {
        $this->db->select('
        data_cuti.*,
        ');
        $this->db->from('data_cuti');
        $this->db->where('data_cuti.id_karyawan', $id);
        return $this->db->get()->result();
    }

    public function get_data_gaji_by_id($id)
    {
        $this->db->select('
        data_gaji.*,
        ');
        $this->db->from('data_gaji');
        $this->db->where('data_gaji.id_karyawan', $id);
        return $this->db->get()->result();
    }

    public function check_in($data)
    {
        $this->db->insert('data_kehadiran', $data);
        return $this->db->affected_rows();
    }

    public function check_out($id_karyawan, $data)
    {
        $this->db->where('id_karyawan', $id_karyawan);
        $this->db->where('tanggal', date('Y-m-d'));
        $this->db->update('data_kehadiran', $data);
        return $this->db->affected_rows();
    }

    public function sudah_check_in($id_karyawan)
    {
        $this->db->where('id_karyawan', $id_karyawan);
        $this->db->where('tanggal', date('Y-m-d'));
        return $this->db->get('data_kehadiran')->row();
    }

    public function get_riwayat($id_karyawan, $limit = 7)
    {
        $this->db->where('id_karyawan', $id_karyawan);
        $this->db->order_by('tanggal', 'DESC');
        $this->db->limit($limit);
        return $this->db->get('data_kehadiran')->result();
    }
}
