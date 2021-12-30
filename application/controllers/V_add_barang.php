<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class V_add_barang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('v_addbarang_model','person');
	}

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('back/sibanpem/vendor/barang_view');
	}

	public function ajax_list()
	{
		$this->load->helper('url');

		$list = $this->person->get_datatables($this->session->userdata('id_users'));
		$data = array();
		$no=0;
		$no = $_POST['start'];
		foreach ($list as $person) {
			$no++;$kategori='';
			$row = array();
			if($person->kategori_barang==1){
				$kategori="Alsintan";
			}
			elseif($person->kategori_barang==2){
				$kategori="Benih";
			}
			elseif($person->kategori_barang==3){
				$kategori="Pupuk";
			}
			elseif($person->kategori_barang==4){
				$kategori="Pengendali DPI";
			}
			elseif($person->kategori_barang==5){
				$kategori="Pengendali OPT";
			}
			elseif($person->kategori_barang==6){
				$kategori="Perlengkapan";
			}
			elseif($person->kategori_barang==7){
				$kategori="Sarana/Prasarana";
			}
			$row[] = $kategori;
			$row[] = $person->nama_barang;
			$row[] = $person->deskripsi;
			$row[] = $person->spek_barang;
			$row[] = $person->harga_satuan;
			$row[] = $person->qty_barang;
			if($person->photo_barang!=null){
				$row[] = base_url('assets/images/barang/'.$person->photo_barang);
			}else{
				$row[] = base_url('assets/images/barang/no_image.jpg');
			}
			//add html for action
			$row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_person('."'".$person->id."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
				  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_person('."'".$person->id."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
		
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->person->count_all($this->session->userdata('id_users')),
						"recordsFiltered" => $this->person->count_filtered($this->session->userdata('id_users')),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_edit($id)
	{
		$data = $this->person->get_by_id($id);
		//$data->dob = ($data->dob == '0000-00-00') ? '' : $data->dob; // if 0000-00-00 set tu empty for datepicker compatibility
		echo json_encode($data);
	}

	public function ajax_add()
	{
		$this->_validate();
		$deskripsina ='';
		$spekna='';
		$kategori_barang = $this->input->post('kategori_barang');
		if($kategori_barang == 1)
		{
			$deskripsina = "KATEGORI : ALSINTAN MERK : ".$this->input->post('merk_barang')." Jenis Alat/Mesin : ".$this->input->post('jenis_barang');
			$spekna ="Type/Model : ".$this->input->post('type_barang')." Dimensi : ".$this->input->post('dimensi_barang')." Data Lainnya: ".$this->input->post('data_lain_barang');
		}
		elseif($kategori_barang == 2)
		{
			$deskripsina = "KATEGORI : BENIH KOMODITAS : ".$this->input->post('komoditas_barang')." VARIETAS : ".$this->input->post('varietas_barang');
			$spekna ="KELAS BENIH : ".$this->input->post('kelas_barang')." JENIS BENIH : ".$this->input->post('Jenis_benih')." Data Lainnya: ".$this->input->post('data_lain_barang_benih');
		}
		elseif($kategori_barang == 3)
		{
			$deskripsina = "KATEGORI : PUPUK JENIS PUPUK : ".$this->input->post('jenis_pupuk')." MERK : ".$this->input->post('merk_pupuk');
			$spekna ="BENTUK PUPUK : ".$this->input->post('bentuk_barang')." KANDUNGAN PUPUK : ".$this->input->post('kandungan_pupuk')." KEMASAN: ".$this->input->post('kemasan_pupuk')." Data Lainnya: ".$this->input->post('data_lain_pupuk');
		}
		elseif($kategori_barang == 4)
		{
			$deskripsina = "KATEGORI : JENIS PENGENDALI OPT : ".$this->input->post('jenis_pengendali')." MERK : ".$this->input->post('merk_pupuk_pengendali');
			$spekna ="BENTUK : ".$this->input->post('bentuk_opt_pengendali')." KANDUNGAN : ".$this->input->post('kandungan_opt_pengendali')." KEMASAN: ".$this->input->post('kemasan_opt_pengendali')." Data Lainnya: ".$this->input->post('data_lain_pengendali');
		}
		elseif($kategori_barang == 5)
		{
			$deskripsina = "KATEGORI : JENIS PENGENDALI DPI : ".$this->input->post('jenis_pengendali_dpi')." MERK : ".$this->input->post('merk_pengendali_dpi');
			$spekna ="BENTUK : ".$this->input->post('bentuk_pengendali_dpi')." UKURAN : ".$this->input->post('ukuran_pengendali_dpi')." Data Lainnya: ".$this->input->post('data_lain_dpi');
		}
		elseif($kategori_barang == 6)
		{
			$deskripsina = "KATEGORI : JENIS PERLENGKAPAN : ".$this->input->post('jenis_perlengkapan')." MERK : ".$this->input->post('merk_perlengkapan');
			$spekna ="DATA / SPESIFIKASI LAIN : ".$this->input->post('data_lain_perlengkapan');
		}
		elseif($kategori_barang == 7)
		{
			$deskripsina = "KATEGORI : JENIS SARANA/PRASARANA : ".$this->input->post('jenis_sarana')." KAPASITAS : ".$this->input->post('kapasitas_sarana');
			$spekna ="DATA / SPESIFIKASI LAIN : ".$this->input->post('data_lain_sarana');
		}
		$data = array(
				'id_vendor' => $this->session->userdata('id_users'),
				'kategori_barang' => $this->input->post('kategori_barang'),
				'nama_barang' => $this->input->post('nama_barang'),
				'deskripsi' => $deskripsina,
				'spek_barang' => $spekna,
				'harga_satuan' => $this->input->post('harga_satuan'),
				'qty_barang' => $this->input->post('qty_barang'),
				'satuan' => $this->input->post('satuan'),
			);

		if(!empty($_FILES['photo_barang']['name']))
		{
			$upload = $this->_do_upload();
			$data['photo_barang'] = $upload;
		}

		$insert = $this->person->save($data);

		echo json_encode(array("status" => TRUE));
	}

	public function ajax_update()
	{
		$this->_validate();
		$deskripsina ='';
		$spekna='';
		$kategori_barang = $this->input->post('kategori_barang');
		if($kategori_barang == 1)
		{
			$deskripsina = "KATEGORI : ALSINTAN MERK : ".$this->input->post('merk_barang')." Jenis Alat/Mesin : ".$this->input->post('jenis_barang');
			$spekna ="Type/Model : ".$this->input->post('type_barang')." Dimensi : ".$this->input->post('dimensi_barang')." Data Lainnya: ".$this->input->post('data_lain_barang');
		}
		elseif($kategori_barang == 2)
		{
			$deskripsina = "KATEGORI : BENIH KOMODITAS : ".$this->input->post('komoditas_barang')." VARIETAS : ".$this->input->post('varietas_barang');
			$spekna ="KELAS BENIH : ".$this->input->post('kelas_barang')." JENIS BENIH : ".$this->input->post('Jenis_benih')." Data Lainnya: ".$this->input->post('data_lain_barang_benih');
		}
		elseif($kategori_barang == 3)
		{
			$deskripsina = "KATEGORI : PUPUK JENIS PUPUK : ".$this->input->post('jenis_pupuk')." MERK : ".$this->input->post('merk_pupuk');
			$spekna ="BENTUK PUPUK : ".$this->input->post('bentuk_barang')." KANDUNGAN PUPUK : ".$this->input->post('kandungan_pupuk')." KEMASAN: ".$this->input->post('kemasan_pupuk')." Data Lainnya: ".$this->input->post('data_lain_pupuk');
		}
		elseif($kategori_barang == 4)
		{
			$deskripsina = "KATEGORI : JENIS PENGENDALI OPT : ".$this->input->post('jenis_pengendali')." MERK : ".$this->input->post('merk_pupuk_pengendali');
			$spekna ="BENTUK : ".$this->input->post('bentuk_opt_pengendali')." KANDUNGAN : ".$this->input->post('kandungan_opt_pengendali')." KEMASAN: ".$this->input->post('kemasan_opt_pengendali')." Data Lainnya: ".$this->input->post('data_lain_pengendali');
		}
		elseif($kategori_barang == 5)
		{
			$deskripsina = "KATEGORI : JENIS PENGENDALI DPI : ".$this->input->post('jenis_pengendali_dpi')." MERK : ".$this->input->post('merk_pengendali_dpi');
			$spekna ="BENTUK : ".$this->input->post('bentuk_pengendali_dpi')." UKURAN : ".$this->input->post('ukuran_pengendali_dpi')." Data Lainnya: ".$this->input->post('data_lain_dpi');
		}
		elseif($kategori_barang == 6)
		{
			$deskripsina = "KATEGORI : JENIS PERLENGKAPAN : ".$this->input->post('jenis_perlengkapan')." MERK : ".$this->input->post('merk_perlengkapan');
			$spekna ="DATA / SPESIFIKASI LAIN : ".$this->input->post('data_lain_perlengkapan');
		}
		elseif($kategori_barang == 7)
		{
			$deskripsina = "KATEGORI : JENIS SARANA/PRASARANA : ".$this->input->post('jenis_sarana')." KAPASITAS : ".$this->input->post('kapasitas_sarana');
			$spekna ="DATA / SPESIFIKASI LAIN : ".$this->input->post('data_lain_sarana');
		}
		$data = array(
				'id_vendor' => $this->session->userdata('id_users'),
				'kategori_barang' => $this->input->post('kategori_barang'),
				'nama_barang' => $this->input->post('nama_barang'),
				'deskripsi' => $deskripsina,
				'spek_barang' => $spekna,
				'harga_satuan' => $this->input->post('harga_satuan'),
				'qty_barang' => $this->input->post('qty_barang'),
				'satuan' => $this->input->post('satuan'),
			);

		if($this->input->post('remove_photo')) // if remove photo checked
		{
			if(file_exists('assets/images/barang/'.$this->input->post('remove_photo')) && $this->input->post('remove_photo'))
				unlink('assets/images/barang/'.$this->input->post('remove_photo'));
			$data['photo_barang'] = '';
		}

		if(!empty($_FILES['photo_barang']['name']))
		{
			$upload = $this->_do_upload();
			
			//delete file
			$person = $this->person->get_by_id($this->input->post('id'));
			if(file_exists('assets/images/barang/'.$person->photo_barang) && $person->photo_barang)
				unlink('assets/images/barang/'.$person->photo_barang);

			$data['photo_barang'] = $upload;
		}

		$this->person->update(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_delete($id)
	{
		//delete file
		$person = $this->person->get_by_id($id);
		if(file_exists('assets/images/barang/'.$person->photo_barang) && $person->photo_barang)
			unlink('assets/images/barang/'.$person->photo_barang);
		
		$this->person->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}

	private function _do_upload()
	{
		$config['upload_path']          = 'assets/images/barang//';
        $config['allowed_types']        = 'gif|jpg|png|jpeg|bmp';
        $config['max_size']             = 2048; //set max size allowed in Kilobyte
        $config['max_width']            = 1000; // set max width image allowed
        $config['max_height']           = 1000; // set max height allowed
        $config['file_name']            = round(microtime(true) * 1000); //just milisecond timestamp fot unique name

        $this->load->library('upload', $config);

        if(!$this->upload->do_upload('photo_barang')) //upload and validate
        {
            $data['inputerror'][] = 'photo_barang';
			$data['error_string'][] = 'Upload error: '.$this->upload->display_errors('',''); //show ajax error
			$data['status'] = FALSE;
			echo json_encode($data);
			exit();
		}
		return $this->upload->data('file_name');
	}

	private function _validate()
	{
		$data = array();
		$data['error_string'] = array();
		$data['inputerror'] = array();
		$data['status'] = TRUE;

		if($this->input->post('nama_barang') == '')
		{
			$data['inputerror'][] = 'nama_barang';
			$data['error_string'][] = 'Nama Barang Harus Diisi';
			$data['status'] = FALSE;
		}

		if($this->input->post('harga_satuan') == '')
		{
			$data['inputerror'][] = 'harga_satuan';
			$data['error_string'][] = 'Harga Satuan Harus Diisi';
			$data['status'] = FALSE;
		}

		if($this->input->post('kategori_barang') == '')
		{
			$data['inputerror'][] = 'kategori_barang';
			$data['error_string'][] = 'Silahkan Pilih Kategori Barang';
			$data['status'] = FALSE;
		}

		if($data['status'] === FALSE)
		{
			echo json_encode($data);
			exit();
		}
	}

}
