<?php 

class Distribusi extends CI_Controller{

	function __construct(){
		parent::__construct();

	}
	public function index(){
		$data['judul'] = 'Distribusi';
		$data['nama'] = 'Destianis Ocktavia Subarnas';
		$data['data_stock'] = $this->Distribusi_M->All()->result_array();
	    $this->load->view('dis/index',$data);	
	}
	public function tambah(){
		$kelas =$this->input->post('kelas');
		$stk  = $this->db->query("select * from stock where kelas = '$kelas'");
		if($stk->num_rows() > 0){
			$stock = $stk->row_array();
			if($stock['jumlah'] >= $this->input->post('jumlah')){
				$data = array();
				$data['nama_sekolah'] = $this->Model_action->htrim($this->input->post('nama_sekolah'));
				$data['kelas'] = $this->Model_action->htrim($this->input->post('kelas'));
				$data['jumlah'] = $this->Model_action->htrim($this->input->post('jumlah'));
				$data['harga'] = $stock['harga'];
				$data['total_bayar'] = $data['jumlah'] * $data['harga'] ;
				$tambah = $this->Model_action->Insert('distribusi',$data);
				if ($tambah > 0) {
					$up_jml = $stock['jumlah'] - $data['jumlah'];
					$data2 = array();
					$data2['jumlah'] = $up_jml;
					$data2['nilai_persedian'] = $up_jml * $stock['harga'];
					$Ubah = $this->Model_action->Update('stock',$data2,$stock['id'],'id');
					if ($Ubah) {
						$this->session->set_flashdata('result', $this->Model_main->Berhasil_alert('Berhasil!.'));
						echo '<script>window.location.href = "'.base_url('Distribusi').'";</script>';
					}else{
						$this->session->set_flashdata('result', $this->Model_main->Gagal_alert('Gagal!.'));
						echo '<script>window.location.href = "'.base_url('Distribusi').'";</script>';
					}
				}else{
					$this->session->set_flashdata('result', $this->Model_main->Gagal_alert('Gagal!.'));
					echo '<script>window.location.href = "'.base_url('Distribusi').'";</script>';
				}
			}else{
				$this->session->set_flashdata('result', $this->Model_main->Gagal_alert('Stock Stock!.'));
				echo '<script>window.location.href = "'.base_url('Distribusi').'";</script>';
			}
		}else{
			$this->session->set_flashdata('result', $this->Model_main->Gagal_alert('Tidak Ada Stock!.'));
			echo '<script>window.location.href = "'.base_url('Distribusi').'";</script>';
		}
		
	}
	public function ubah($id){
		$data['judul'] = 'Distribusi';
		$data['nama'] = 'Destianis Ocktavia Subarnas';
		$data['query']=$this->Distribusi_M->getData($id)->row_array();
		$this->load->view('dis/edit',$data);
	}
	public function update($id){
		$kelas =$this->input->post('kelas');
		$stk  = $this->db->query("select * from stock where kelas = '$kelas'")->row_array();
		$data = array();
		$data['nama_sekolah'] = $this->Model_action->htrim($this->input->post('nama_sekolah'));
		$data['kelas'] = $this->Model_action->htrim($this->input->post('kelas'));
		$data['jumlah'] = $this->Model_action->htrim($this->input->post('jumlah'));
		$data['harga'] = $stock['harga'];
		$data['total_bayar'] = $data['jumlah'] * $data['harga'] ;
		$Ubah = $this->Model_action->Update('distribusi',$data,$id,'id');
		if ($Ubah) {
			$this->session->set_flashdata('result', $this->Model_main->Berhasil_alert('Berhasil!.'));
			echo '<script>window.location.href = "'.base_url('Distribusi').'";</script>';
		}else{
			$this->session->set_flashdata('result', $this->Model_main->Gagal_alert('Gagal!.'));
			echo '<script>window.location.href = "'.base_url('Distribusi').'";</script>';
		}
	}
	public function hapus($id){
		$data = array('id' => $id);
		$this->db->where($data);
	    $this->db->delete('distribusi');
		header("location:".$_SERVER['HTTP_REFERER']);
    }
	


}