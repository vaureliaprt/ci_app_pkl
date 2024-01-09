<?php

class Data extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Data_model');
        $this->load->library('form_validation');
    }


    public function index()
    {
        $this->load->model('Data_model');
        $data['judul'] = 'Daftar Data';
        $data['data'] = $this->Data_model->getALLData();
        if( $this->input->post('keyword') ) {
            $data['data'] = $this->Data_model->cariData();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('Data/index');
        $this->load->view('templates/footer');

    }
    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data';

        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('Data/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Data_model->tambahData();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('data');
        }
    }

    public function hapus($id)
    {
        $this->Data_model->hapusData($id);
        $this->session->set_flashdata('flash','Dihapus');
        redirect('data');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data';
        $data['data'] = $this->Data_model->getDataById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('data/detail',$data);
        $this->load->view('templates/footer');
    }



    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data';
        $data['data'] = $this->Data_model->getDataById($id);
        $data['status'] = ['pekerja','mahasiswa'];

        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('Data/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Data_model->ubahData();
            $this->session->set_flashdata('flash','Diubah');
            redirect('data');
        }
    }
}