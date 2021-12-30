<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sibanpem extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->data['module'] = 'Sibanpem';
		$this->data['company_data']    				= $this->Company_model->company_profile();
		$this->data['layout_template']    			= $this->Template_model->layout();
		$this->data['skins_template']     			= $this->Template_model->skins();
		$this->load->model('front_model','person');
		$this->load->model('front2020_model','person20');
		$this->load->model('front2019_model','person19');
		$this->load->model('front2018_model','person18');
		$this->load->model('m_wilayah');
		$this->load->model('Depan_model');
		$this->load->model('Kontrak_model');
		$this->load->helper('url');
	}

	public function index()
	{
		$this->data['page_title'] = 'SIBANPEM';

		$this->data['get_total_menu']     			= $this->Menu_model->total_rows();
		$this->data['get_total_submenu']     		= $this->Submenu_model->total_rows();
		$this->data['get_total_user']     			= $this->Auth_model->total_rows();
		$this->data['get_total_usertype']     	= $this->Usertype_model->total_rows();
		//$this->data['get_all_data']     	= $this->Depan_model->get_all();
		//$this->data['get_all_provinsi']   = $this->Depan_model->get_all_provinsi();
		//$this->data['get_all_combobox_provinsi'] = $this->m_wilayah->get_all_provinsi();
		//$this->data['get_all_barang']   = $this->Depan_model->get_all_barang();
		//$this->data['get_all_kontrak']   = $this->Depan_model->get_all_kontrak();
		
		//$this->data['get_jumlah_uang']     	= $this->Depan_model->get_Jumlah_bantuan();
		//$this->data['get_jumlah_bantuan']   = $this->Depan_model->get_Jumlah_penerima();
		//$this->data['get_jumlah_prov']     	= $this->Depan_model->get_all_jml_provinsi();
		//$this->data['get_jumlah_kab']   = $this->Depan_model->get_all_jml_kabupaten();
		//$this->data['get_jumlah_barang']     	= $this->Depan_model->get_all_jml_barang();
		//$this->data['get_jumlah_orang']   = $this->Depan_model->get_all_jml_penerima();
		$this->data['get_provinsi_terbesar']     	= $this->person->get_provinsi_terbesar();
		$this->data['get_provinsi_terkecil']     	= $this->person->get_provinsi_terkecil();

		
		
		//$this->data['get_kontrak_uang']     	= $this->person->get_nilai_kontrak_Uang_dasboard();
		//$this->data['get_kontrak_barang']     	= $this->person->get_nilai_kontrak_Barang_dasboard();
		//$this->data['get_spm_uang']     	= $this->person->get_nilai_spm_uang_dasboard();
		//$this->data['get_spm_barang']     	= $this->person->get_nilai_spm_barang_dasboard();
		//$this->data['get_disalurkan_uang']     	= $this->person->get_nilai_disalurkan_uang_dasboard();
		//$this->data['get_disalurkan_barang']     	= $this->person->get_nilai_disalurkan_barang_dasboard();
		//$this->data['get_diterima_uang']     	= $this->person->get_nilai_diterima_uang_dasboard();
		//$this->data['get_diterima_barang']     	= $this->person->get_nilai_diterima_barang_dasboard();
		//$this->data['get_bast_uang']     	= $this->person->get_nilai_bast_uang_dasboard();
		//$this->data['get_bast_barang']     	= $this->person->get_nilai_bast_barang_dasboard();
		//$this->data['get_bast_selesai_uang']     	= $this->person->get_nilai_bast_uang_selesai_dasboard();
		//$this->data['get_bast_selesai_barang']     	= $this->person->get_nilai_bast_barang_selesai_dasboard();
		
		$this->data['get_wilayah']   = $this->m_wilayah->list_provinsi();
		$this->data['provinsi'] = [
			'name'          => 'provinsi',
			'id'            => 'provinsi',
			'class'         => 'form-control',
			'required'      => '',
			'value'         => $this->form_validation->set_value('provinsi'),
		  ];
		$this->load->view('back/sibanpem/dashboard/body', $this->data);
	}
	
	public function View_detail_prov($KodeProv)
	{
		$this->data['page_title'] = 'Detail Bantuan Provinsi';
		$this->data['get_provinsi'] = $this->m_wilayah->get_provinsi_byid($KodeProv);
		$this->load->view('back/sibanpem/provinsi/index', $this->data);
	}
	
	public function baranglist(){
    // POST data
    $postData = $this->input->post;
    $data = $this->Depan_model->getAllData($postData);

    echo json_encode($data, true);
	}
	
	function cari_bast_kegiatan($kode,$kodeprov,$namaview)
    {
        $sql=   "SELECT sum(jmlbast) as jmlbast 
                FROM $namaview
                WHERE k_kode_kegiatan='$kode' and id_provinsi='$kodeprov'";
        $data=  $this->db->query($sql)->row_array();
        if($data['jmlbast']==null)
        {
            return 0;
        }
        else
        {
            return $data['jmlbast'];
        }
    }
	
	function cari_akun_kegiatan($kode,$kodeprov,$namaview)
    {
        $sql=   "SELECT sum(jmlbast) as jmlbast 
                FROM $namaview
                WHERE k_kode_akun='$kode' and id_provinsi='$kodeprov'";
        $data=  $this->db->query($sql)->row_array();
        if($data['jmlbast']==null)
        {
            return 0;
        }
        else
        {
            return $data['jmlbast'];
        }
    }
	
	function cari_bast_kabupaten($kodeprov,$kodekab,$namaview)
    {
        $sql=   "SELECT sum(jmlbast) as jmlbast 
                FROM $namaview
                WHERE id_provinsi='$kodeprov' and id_kabupaten='$kodekab'";
        $data=  $this->db->query($sql)->row_array();
        if($data['jmlbast']==null)
        {
            return 0;
        }
        else
        {
            return $data['jmlbast'];
        }
    }
  
	public function ajax_list_kegiatan($provinsi)
	{
		$myuri = urldecode($provinsi);
		$listKegiatan = $this->Kontrak_model->get_kegiatan();
		$data = array();
		$no = $_POST['start'];
		foreach($listKegiatan as $kegiatan)
		{
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $kegiatan->nama_kegiatan;
			$jml_K_bast2018 = 0;//$this->cari_bast_kegiatan($kegiatan->kd_kegiatan,$myuri,'v_kegiatan_provinsi_2018');
			$jml_K_bast2019 = $this->cari_bast_kegiatan($kegiatan->kd_kegiatan,$myuri,'v_kegiatan_provinsi_2019');
			$jml_K_bast2020 = $this->cari_bast_kegiatan($kegiatan->kd_kegiatan,$myuri,'v_kegiatan_provinsi_2020');
			$jml_K_bast2021 = $this->cari_bast_kegiatan($kegiatan->kd_kegiatan,$myuri,'v_kegiatan_provinsi_2021');
			$row[] = $jml_K_bast2018;
			$row[] = $jml_K_bast2019;
			$row[] = $jml_K_bast2020;
			$row[] = $jml_K_bast2021;$data[] = $row;
		}
		
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->person->count_all($myuri),
							"recordsFiltered" => $this->person->count_filtered($myuri),
							"data" => $data,
					);
			//output to json format
			echo json_encode($output);
	}
	
	public function ajax_list_akun($provinsi)
	{
		$myuri = urldecode($provinsi);
			$listAkun = $this->Kontrak_model->get_akun();
			$data = array();
			$no = $_POST['start'];
			foreach ($listAkun as $Akun) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $Akun->nama_akun;
				$jml_A_bast2018 = 0;//$this->cari_akun_kegiatan($Akun->kd_akun,$myuri,'v_akun_provinsi_2018');
				$jml_A_bast2019 = $this->cari_akun_kegiatan($Akun->kd_akun,$myuri,'v_akun_provinsi_2019');
				$jml_A_bast2020 = $this->cari_akun_kegiatan($Akun->kd_akun,$myuri,'v_akun_provinsi_2020');
				$jml_A_bast2021 = $this->cari_akun_kegiatan($Akun->kd_akun,$myuri,'v_akun_provinsi_2021');
				$row[] = $jml_A_bast2018;
				$row[] = $jml_A_bast2019;
				$row[] = $jml_A_bast2020;
				$row[] = $jml_A_bast2021;
				$data[] = $row;
			}

			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->person->count_all($myuri),
							"recordsFiltered" => $this->person->count_filtered($myuri),
							"data" => $data,
					);
			//output to json format
			echo json_encode($output);
	}
	
	public function ajax_list_kegiatan2($provinsi)
	{
		$myuri = urldecode($provinsi);
		$listKegiatan = $this->Kontrak_model->get_kegiatan();
		$data = array();
		$no = $_POST['start'];
		foreach($listKegiatan as $kegiatan)
		{
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $kegiatan->nama_kegiatan;
			$jml_K_bast2021 = $this->cari_bast_kegiatan($kegiatan->kd_kegiatan,$myuri,'v_kegiatan_provinsi_2021');
			$row[] = $jml_K_bast2021;
			$data[] = $row;
		}
		
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->person->count_all($myuri),
							"recordsFiltered" => $this->person->count_filtered($myuri),
							"data" => $data,
					);
			//output to json format
			echo json_encode($output);
	}
	
	public function ajax_list_akun2($provinsi)
	{
		$myuri = urldecode($provinsi);
			$listAkun = $this->Kontrak_model->get_akun();
			$data = array();
			$no = $_POST['start'];
			foreach ($listAkun as $Akun) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $Akun->nama_akun;
				$jml_A_bast2021 = $this->cari_akun_kegiatan($Akun->kd_akun,$myuri,'v_akun_provinsi_2021');
				$row[] = $jml_A_bast2021;
				$data[] = $row;
			}

			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->person->count_all($myuri),
							"recordsFiltered" => $this->person->count_filtered($myuri),
							"data" => $data,
					);
			//output to json format
			echo json_encode($output);
	}
	
	public function ajax_list_satker2021($provinsi)
	{
		$myuri = urldecode($provinsi);
			$list = $this->person->get_jml_satker_provinsi2021($myuri);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $person) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $person->k_satker_kode;
				$row[] = $person->k_satker_nama;
				$row[] = $person->jumlah;

				//add html for action
				$row[] = '<a href="javascript:void(0)" data-toggle="tooltip" title="Lihat Detail Tahun 2021" data-original-title="View" onclick="view_detail_satker('."'".$person->k_satker_kode."','".$myuri."','".$person->k_satker_nama."'".')"><i class="mdi mdi-eye m-r-10"></i> View</a>';
				$data[] = $row;
			}

			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->person->count_all($myuri),
							"recordsFiltered" => $this->person->count_filtered($myuri),
							"data" => $data,
					);
			//output to json format
			echo json_encode($output);
	}
	
	public function ajax_list_satker_kab($KdSatker, $provinsi)
	{
		$myuri = urldecode($provinsi);
			$list = $this->person->get_datatables_satker_kabupaten2021($KdSatker,$myuri);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $person) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $person->kabupaten;
				$row[] = $person->jumlah;

				//add html for action
				if(is_null($person->id_kabupaten))
				{
					$row[] = '<a href="javascript:void(0)" data-toggle="tooltip" title="Lihat Detail Tahun 2021" data-original-title="View" onclick="view_detail_satker_kec('."'".$person->k_satker_kode."','00','0000'".')"><i class="mdi mdi-eye m-r-10"></i> View</a>';
				}
				else
				{
					$row[] = '<a href="javascript:void(0)" data-toggle="tooltip" title="Lihat Detail Tahun 2021" data-original-title="View" onclick="view_detail_satker_kec('."'".$person->k_satker_kode."','".$myuri."','".$person->id_kabupaten."'".')"><i class="mdi mdi-eye m-r-10"></i> View</a>';
				}
				$data[] = $row;
			}

			$output = array(
							"draw" => $_POST['draw'],
							"data" => $data,
					);
			//output to json format
			echo json_encode($output);
	}
	
	public function ajax_list_satker_kab_kec($KdSatker, $provinsi, $Kabupaten)
	{
		$myuri = urldecode($provinsi);
			$list = $this->person->get_datatables_satker_kab_kec2021($KdSatker,$myuri,$Kabupaten);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $person) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $person->kabupaten;
				$row[] = $person->jumlah;

				//add html for action
				$row[] = '-';//'<a href="javascript:void(0)" data-toggle="tooltip" title="Lihat Detail Tahun 2021" data-original-title="View" onclick="view_detail_satker_kec('."'".$person->k_satker_kode."','".$myuri."','".$person->k_satker_nama."'".')"><i class="mdi mdi-eye m-r-10"></i> View</a>';
				$data[] = $row;
			}

			$output = array(
							"draw" => $_POST['draw'],
							"data" => $data,
					);
			//output to json format
			echo json_encode($output);
	}
	
	public function ajax_list_kabupaten($provinsi)
	{
		$myuri = urldecode($provinsi);
			$list = $this->person->get_datatables($myuri);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $person) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $person->kabupaten;
				$jml_K_bast2018 = 0;//$this->cari_bast_kabupaten($myuri,$person->id_kabupaten,'v_kabupaten_2018');
				$jml_K_bast2019 = $this->cari_bast_kabupaten($myuri,$person->id_kabupaten,'v_kabupaten_2019');
				$jml_K_bast2020 = $this->cari_bast_kabupaten($myuri,$person->id_kabupaten,'v_kabupaten_2020');
				$jml_K_bast2021 = $this->cari_bast_kabupaten($myuri,$person->id_kabupaten,'v_kabupaten_2021');
				$row[] = $jml_K_bast2018;
				$row[] = '<a href="javascript:void(0)" data-toggle="tooltip" title="Lihat Detail Tahun 2020" data-original-title="View" onclick="view_kecamatan('."'".$person->id_kabupaten."','".$person->kabupaten."'".')"><i class="fas fa-eye text-inverse m-r-10"></i></a>';
				$row[] = $jml_K_bast2019;
				$row[] = '<a href="javascript:void(0)" data-toggle="tooltip" title="Lihat Detail Tahun 2020" data-original-title="View" onclick="view_kecamatan('."'".$person->id_kabupaten."','".$person->kabupaten."'".')"><i class="fas fa-eye text-inverse m-r-10"></i></a>';
				$row[] = $jml_K_bast2020;
				$row[] = '<a href="javascript:void(0)" data-toggle="tooltip" title="Lihat Detail Tahun 2020" data-original-title="View" onclick="view_kecamatan('."'".$person->id_kabupaten."','".$person->kabupaten."'".')"><i class="fas fa-eye text-inverse m-r-10"></i></a>';
				$row[] = $jml_K_bast2021;

				//add html for action
				$row[] = '<a href="javascript:void(0)" data-toggle="tooltip" title="Lihat Detail Tahun 2021" data-original-title="View" onclick="view_kecamatan('."'".$person->id_kabupaten."','".$person->kabupaten."'".')"><i class="fas fa-eye text-inverse m-r-10"></i></a>';
				$data[] = $row;
			}

			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->person->count_all($myuri),
							"recordsFiltered" => $this->person->count_filtered($myuri),
							"data" => $data,
					);
			//output to json format
			echo json_encode($output);
	}
	
	public function ajax_list_kecamatan($kabupaten)
	{
		$myuri = urldecode($kabupaten);
		$list = $this->person->get_datatables_kecamatan($myuri);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $person) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $person->kecamatan;
				$row[] = $person->nama_kegiatan;
				$row[] = number_format($person->jumlah,2);

				//add html for action
				$row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Lihat Detail Desa" onclick="view_desa('."'".$person->id_kecamatan."','".$person->kecamatan."'".')"><i class="fas fa-eye"></i> View</a>';
				$data[] = $row;
			}

			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->person->count_all_kecamatan($myuri),
							"recordsFiltered" => $this->person->count_filtered_kecamatan($myuri),
							"data" => $data,
					);
			//output to json format
			echo json_encode($output);
	}
	
	public function ajax_list_desa($kecamatan)
	{
		$myuri = urldecode($kecamatan);
			$list = $this->person->get_datatables_desa($myuri);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $person) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $person->desa;
				$row[] = $person->nama_kegiatan;
				$row[] = number_format($person->jumlah,2);

				//add html for action
				$row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Lihat Detail Penerima" onclick="view_person('."'".$person->id_desa."','".$person->desa."'".')"><i class="fas fa-eye"></i> View</a>';
				$data[] = $row;
			}

			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->person->count_all_desa($myuri),
							"recordsFiltered" => $this->person->count_filtered_desa($myuri),
							"data" => $data,
					);
			//output to json format
			echo json_encode($output);
	}
	
	public function ajax_list_person($desa)
	{
		$myuri = urldecode($desa);
		
			$list = $this->person->get_datatables_person($myuri);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $person) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $person->pn_nama;
				$row[] = $person->nama_kegiatan;
				$row[] = $person->nama_barang;
				$row[] = $person->spek_barang;
				$row[] = number_format($person->jumlah,2);

				//add html for action
				//$row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Lihat Detail Penerima" onclick="view_person('."'".$person->desa."'".')"><i class="fas fa-eye"></i> View</a>';
				$data[] = $row;
			}

			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->person->count_all_person($myuri),
							"recordsFiltered" => $this->person->count_filtered_person($myuri),
							"data" => $data,
					);
			//output to json format
			echo json_encode($output);
	
	}
}