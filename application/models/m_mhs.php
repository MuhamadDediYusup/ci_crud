<?php

class M_mhs extends CI_model
{
    function ambil_data()
    {
        $this->db->order_by('id','ASC');
        $query = $this->db->get('tb_mahasiswa');
        return $query->result();
    }
    function tambah_data($data)
    {
        $this->db->insert('tb_mahasiswa',$data);
        return;
    }
    function delete_row()
    {
    $this->db->where('id', $this->uri->segment(3));
    $this->db->delete('tb_mahasiswa');
    }
    function edit_data($where,$table){		
    return $this->db->get_where($table,$where);
    }
    function update_data($where,$data,$table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }
    
}


?>
