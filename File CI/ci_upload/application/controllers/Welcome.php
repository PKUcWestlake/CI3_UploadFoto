<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('M_User');
	}

	public function index()
	{
		$queryUser = $this->M_User->getDataUser();
		$DATA = array("queryUser" => $queryUser);
		$this->load->view('hal_home', $DATA);
	}

	public function hal_tambah()
	{
		$this->load->view('hal_tambah');
	}

	public function fungsiUploadGambar()
	{
		$username = $this->input->post('username');
        $password = $this->input->post('password');
        $nama = $this->input->post('nama');
        $base64Gambar = $_FILES["gambar"]["tmp_name"];
        $jurusan = $this->input->post('jurusan');
        $status = $this->input->post('status');

        $Path = "upload/";
        $ImagePath = $Path . $username. "_logoku.png";
        move_uploaded_file($base64Gambar, $ImagePath);

        $dataArr = array(
            'username' => $username,
            'password' => $password,
            'nama' => $nama,
            'jurusan' => $jurusan,
            'status' => $status,
            'gambar' => base_url() . $ImagePath,
        );

		echo "<pre>";
		print_r ($dataArr);
		echo "</pre>";

		$this->M_User->insertDataUser($dataArr);
        redirect(base_url(), 'refresh');
	}
}
