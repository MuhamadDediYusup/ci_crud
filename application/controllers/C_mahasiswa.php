<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_mahasiswa extends CI_controller {
    function __construct()
    {
    parent::__construct();
    $this->load->helper(array('form', 'url'));
    $this->load->model('m_mhs', '', TRUE);
    }

    public function index()
    {
        if  ($query = $this->m_mhs->ambil_data()){
            $data['rowrecord'] = $query;
        }
        $this->load->view('header');
        $this->load->view('mahasiswa', $data);
        $this->load->view('footer');
    }
    public function tambah_data(){
        $data = array(
            'nama' => $this->input->post('nama'),
            'nim' => $this->input->post('nim'),
            'fakultas' => $this->input->post('fakultas'),
            'programstudi' => $this->input->post('programstudi'),
            'tahunangkatan' => $this->input->post('tahunangkatan')
        );
            $this->m_mhs->tambah_data($data);
            $this->index();
    }

    function hapusdata()
    {
    $this->m_mhs->delete_row();
    $this->index();
    }

    function edit($id){
        $where = array('id' => $id);
        $data['rowrecord'] = $this->m_mhs->edit_data($where,'tb_mahasiswa')->result();
        $this->load->view('header');
        $this->load->view('edit',$data);
        $this->load->view('footer');
    }
    
    public function update()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $nim = $this->input->post('nim');
        $fakultas = $this->input->post('fakultas');
        $programstudi = $this->input->post('programstudi');
        $tahunangkatan = $this->input->post('tahunangkatan');
    
        $data = array(
            'nama' => $nama,
            'nim' => $nim,
            'fakultas' => $fakultas,
            'programstudi' => $programstudi,
            'tahunangkatan' => $tahunangkatan
        );
    
        $where = array(
            'id' => $id
        );
        $this->m_mhs->update_data($where,$data,'tb_mahasiswa');
        redirect('c_mahasiswa/index');
    }
}
?>