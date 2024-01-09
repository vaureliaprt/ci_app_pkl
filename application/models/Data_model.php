<?php

class Data_model extends CI_Model {
    public function getALLData()
    {
        return $this->db->get('data')->result_array();
    }

    public function tambahData()
    {
        $data = [
            'nama'=> $this->input->post('nama', true),
            'status'=> $this->input->post('status', true),
            'alamat'=> $this->input->post('alamat', true),
            'email'=> $this->input->post('email', true)
        ];
        $this->db->insert('data', $data);
    }
    public function hapusData($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('data');
    }

    public function getDataById($id)
    {
        return $this->db->get_where('data',['id' => $id])->row_array();
    }

    public function ubahData()
    {
        $data = [
            'nama'=> $this->input->post('nama', true),
            'status'=> $this->input->post('status', true),
            'alamat'=> $this->input->post('alamat', true),
            'email'=> $this->input->post('email', true)
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('data', $data);
    }

    public function cariData()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('status', $keyword);
        $this->db->or_like('alamat', $keyword);
        $this->db->or_like('email', $keyword);
        return $this->db->get('data')->result_array();

    }
}