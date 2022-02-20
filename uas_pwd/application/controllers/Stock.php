<?php 

class Stock extends CI_Controller{

	function __construct(){
		parent::__construct();

	}
	public function index(){
		$data['judul'] = 'STOCK';
		$data['nama'] = 'Destianis Ocktavia Subarnas';
		$data['data_stock'] = $this->Stock_M->All()->result_array();
		$data['total']= $this->Stock_M->jumlah_nilai('jumlah');
		$data['nilai']=$this->Stock_M->jumlah_nilai('nilai_persedian');
	    $this->load->view('stock/index',$data);	
	}
	public function tambah(){
		$data = array();
		$data['kelas'] = $this->Model_action->htrim($this->input->post('kelas'));
		$data['jumlah'] = $this->Model_action->htrim($this->input->post('jumlah'));
		$data['harga'] = $this->Model_action->htrim($this->input->post('harga'));
		$data['nilai_persedian'] = $data['jumlah'] * $data['harga'] ;
		
		$tambah = $this->Model_action->Insert('stock',$data);
		if ($tambah > 0) {
			$this->session->set_flashdata('result', $this->Model_main->Berhasil_alert('Berhasil!.'));
			echo '<script>window.location.href = "'.base_url().'";</script>';
		}else{
			$this->session->set_flashdata('result', $this->Model_main->Gagal_alert('Gagal!.'));
			echo '<script>window.location.href = "'.base_url().'";</script>';
		}
	}
	public function ubah($id){
		$data['judul'] = 'STOCK';
		$data['nama'] = 'Destianis Ocktavia Subarnas';
		$data['query']=$this->Stock_M->getData($id)->row_array();
		$this->load->view('stock/edit',$data);
	}
	public function update($id){
		$data = array();
		$data['kelas'] = $this->Model_action->htrim($this->input->post('kelas'));
		$data['jumlah'] = $this->Model_action->htrim($this->input->post('jumlah'));
		$data['harga'] = $this->Model_action->htrim($this->input->post('harga'));
		$data['nilai_persedian'] = $data['jumlah'] * $data['harga'] ;
		$Ubah = $this->Model_action->Update('stock',$data,$id,'id');
		if ($Ubah) {
			$this->session->set_flashdata('result', $this->Model_main->Berhasil_alert('Berhasil!.'));
			echo '<script>window.location.href = "'.base_url().'";</script>';
		}else{
			$this->session->set_flashdata('result', $this->Model_main->Gagal_alert('Gagal!.'));
			echo '<script>window.location.href = "'.base_url().'";</script>';
		}
	}
	public function hapus($id){
		$data = array('id' => $id);
		$this->db->where($data);
	    $this->db->delete('stock');
		header("location:".$_SERVER['HTTP_REFERER']);
    }
    public function cek(){
		$data['judul'] = 'STOCK';
		$data['nama'] = 'Destianis Ocktavia Subarnas';
		$data['data_stock'] = $this->Stock_M->All()->result_array();
	    $this->load->view('stock/cek',$data);	
	}
	


}