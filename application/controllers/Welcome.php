<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function __construct(){
        parent::__construct();
        $this->load->model('Buka_peta');
        date_default_timezone_set('Asia/Jakarta');
    }
	public function index()
	{
		$datacontent['title'] = "SIMBG Semarang";
		$data['content'] = $this->load->view('main', $datacontent,TRUE);
		$this->load->view('index',$data);
	}
	public function peta()
	{
		$datacontent['title'] = "Peta Spasial";
		$datacontent['subtitle'] = "Peta Fungsi Bangunan";
		$datacontent['kecamatan'] = $this->Buka_peta->peta_admin('tb_kecamatan');
		$datacontent['desa'] = $this->Buka_peta->peta_admin('tb_desa');
		$datacontent['bangunan'] = $this->Buka_peta->titik_bangunan('tb_bangunan',NULL,NULL);
		$datacontent['pilihan'] = array('Fungsi','Kepemilikan IMB','Garis Sepadan','Prosentase e-RTH');
		$datacontent['Legenda'] = array('1','-','-','-');
		$data['content'] = $this->load->view('peta/peta', $datacontent,TRUE);

		$this->load->view('index',$data);
	}
	public function imb($id)
	{
		$datacontent['title'] = "Peta Spasial";
		$datacontent['kecamatan'] = $this->Buka_peta->peta_admin('tb_kecamatan');
		$datacontent['desa'] = $this->Buka_peta->peta_admin('tb_desa');
		if ($id == 'All') {
			$datacontent['subtitle'] = "Peta Kepemilikan IMB";
			$datacontent['bangunan'] = $this->Buka_peta->titik_bangunan('tb_bangunan',NULL,NULL);
		}else{
			if ($id == '0') {
				$datacontent['subtitle'] = "Peta Bangunan Yang Tidak Memiliki IMB";
			}else{
				$datacontent['subtitle'] = "Peta Bangunan Yang Memiliki IMB";
			}
			
			$datacontent['bangunan'] = $this->Buka_peta->titik_bangunan('tb_bangunan',$id,'Memiliki_IMB');
		}
		
		$datacontent['pilihan'] = array('Fungsi','Kepemilikan IMB','Garis Sepadan','Prosentase e-RTH');
		$datacontent['Legenda'] = array('2','Ya','Tidak','Memiliki_IMB');
		$data['content'] = $this->load->view('peta/peta', $datacontent,TRUE);

		$this->load->view('index',$data);
	}
	public function rth($id)
	{
		$datacontent['title'] = "Peta Spasial";
		$datacontent['kecamatan'] = $this->Buka_peta->peta_admin('tb_kecamatan');
		$datacontent['desa'] = $this->Buka_peta->peta_admin('tb_desa');
		if ($id == 'All') {
			$datacontent['subtitle'] = "Peta Kesesuaian e_RTH";
			$datacontent['bangunan'] = $this->Buka_peta->titik_rth('tb_lain',NULL,NULL,'Kesesuaian_e_RTH');
		}else{
			if ($id == '0') {
				$datacontent['subtitle'] = "Peta Bangunan Yang Tidak Sesuai e-RTH";
			}else{
				$datacontent['subtitle'] = "Peta Bangunan Yang Sesuai e-RTH";
			}
			$datacontent['bangunan'] = $this->Buka_peta->titik_rth('tb_lain',$id,'Kesesuaian_e_RTH','Kesesuaian_e_RTH');
		}
		
		$datacontent['pilihan'] = array('Fungsi','Kepemilikan IMB','Garis Sepadan','Prosentase e-RTH');
		$datacontent['Legenda'] = array('2','Sesuai','Tidak Sesuai','Kesesuaian_e_RTH');
		$data['content'] = $this->load->view('peta/peta', $datacontent,TRUE);

		$this->load->view('index',$data);
	}
	public function sepadan($gs)
	{
		$att = $gs;
		if ($att == 'GS_Bangunan') {
			$hasil = 'Garis Sepadan Bangunan';
		}elseif ($att == 'GS_Pantai') {
			$hasil = 'Garis Sepadan Pantai';
		}elseif ($att == 'GS_Sungai') {
			$hasil = 'Garis Sepadan Sungai';
		}elseif ($att == 'GS_Waduk') {
			$hasil = 'Garis Sepadan Waduk';
		}elseif ($att == 'GS_Danau') {
			$hasil ='Garis Sepadan Danau';
		}elseif ($att == 'GS_Rel') {
			$hasil = 'Garis Sepadan Rel';
		}elseif ($att == 'GS_Rawa') {
			$hasil = 'Garis Sepadan Rawa';
		}elseif ($att == 'GS_Saluran') {
			$hasil = 'Garis Sepadan Saluran';
		}elseif ($att == 'GS_Sutet') {
			$hasil = 'Garis Sepadan Sutet';
		}elseif ($att == 'GS_mataair') {
			$hasil = 'Garis Sepadan Mata Air';
		}
		$datacontent['title'] = "Peta Spasial";
		$datacontent['subtitle'] = "Peta ".$hasil;
		$datacontent['kecamatan'] = $this->Buka_peta->peta_admin('tb_kecamatan');
		$datacontent['desa'] = $this->Buka_peta->peta_admin('tb_desa');
		$datacontent['bangunan'] = $this->Buka_peta->titik_rth('tb_sepadan',NULL,NULL,$gs);
		$datacontent['pilihan'] = array('Fungsi','Kepemilikan IMB','Garis Sepadan','Prosentase e-RTH');
		$datacontent['Legenda'] = array('2','Sesuai','Tidak Sesuai',$gs);
		$data['content'] = $this->load->view('peta/peta', $datacontent,TRUE);

		$this->load->view('index',$data);
	}
	public function fungsi_spasial($id)
	{
		$datacontent['title'] = "Peta Spasial";
		$datacontent['subtitle'] = "Peta " . $id;
		$datacontent['pilihan'] = array('Fungsi','Kepemilikan IMB','Garis Sepadan','Prosentase e-RTH');

		$datacontent['kecamatan'] = $this->Buka_peta->peta_admin('tb_kecamatan');
		$datacontent['desa'] = $this->Buka_peta->peta_admin('tb_desa');
		$datacontent['bangunan'] = $this->Buka_peta->titik_bangunan('tb_bangunan',$id,'Fungsi');
		$datacontent['Legenda'] = array('1','-','-','-');
		$data['content'] = $this->load->view('peta/peta', $datacontent,TRUE);
		$this->load->view('index',$data);
	}
	
	public function kepemilikan()
	{
		$datacontent['title'] = "Berdasarkan Kepemilikan IMB";
		$datacontent['bangunan'] = $this->Buka_peta->frd('tb_bangunan',NULL,NULL);
		$data['content'] = $this->load->view('pemerintah/bg_opd', $datacontent,TRUE);
		$this->load->view('index',$data);
	}
	public function tsepadan($att)
	{
		
		if ($att == 'GS_Bangunan') {
			$hasil = 'Garis Sepadan Bangunan';
		}elseif ($att == 'GS_Pantai') {
			$hasil = 'Garis Sepadan Pantai';
		}elseif ($att == 'GS_Sungai') {
			$hasil = 'Garis Sepadan Sungai';
		}elseif ($att == 'GS_Waduk') {
			$hasil = 'Garis Sepadan Waduk';
		}elseif ($att == 'GS_Danau') {
			$hasil ='Garis Sepadan Danau';
		}elseif ($att == 'GS_Rel') {
			$hasil = 'Garis Sepadan Rel';
		}elseif ($att == 'GS_Rawa') {
			$hasil = 'Garis Sepadan Rawa';
		}elseif ($att == 'GS_Saluran') {
			$hasil = 'Garis Sepadan Saluran';
		}elseif ($att == 'GS_Sutet') {
			$hasil = 'Garis Sepadan Sutet';
		}elseif ($att == 'GS_mataair') {
			$hasil = 'Garis Sepadan Mata Air';
		}
		$datacontent['title'] = $hasil;
		$datacontent['att'] = $att;
		$datacontent['bangunan'] = $this->Buka_peta->tb_sepadan($att);
		$data['content'] = $this->load->view('pemerintah/bg_bgn', $datacontent,TRUE);
		$this->load->view('index',$data);
	}
	public function profil_bangunan($att)
	{
		
		if ($att == '1') {
			$hasil = 'Bangunan Di Atas Drainase';
			$fiedl = 'Diatas_Drainase';
			$jml_field = 1;
			$fiedl2 = NULL;
			$col = "Ya/Tidak";
			$col2 = NULL;
		}elseif ($att == '2') {
			$hasil = 'Bangunan Di Atas Ruang Kereta Api';
			$fiedl = 'Diatas_Rel';
			$jml_field = 1;
			$fiedl2 = NULL;
			$col = "Ya/Tidak";
			$col2 = NULL;
		}elseif ($att == '3') {
			$hasil = 'Kesesuaian Luas Lantai Bangunan';
			$fiedl = 'Kesesuaian_lantai_dasar';
			$jml_field = 2;
			$fiedl2 = 'Luas_Lantai_Dasar';
			$col = "Ya/Tidak";
			$col2 = 'Luas_Lantai';
		}elseif ($att == '4') {
			$hasil = 'Kesesuaian Koefisien Dasar Bangunan';
			$fiedl = 'Koefisien_Dasar';
			$jml_field = 2;
			$fiedl2 = 'Prosen_Koefisien_Dasar';
			$col = "Sesuai";
			$col2 = 'Prosentase';
		}elseif ($att == '5') {
			$hasil = 'Kesesuaian Lantai Dasar Bangunan';
			$fiedl = 'Kesesuaian_Luas_Lantai';
			$jml_field = 2;
			$fiedl2 = 'Luas_Lantai';
			$col = "Sesuai";
			$col2 = 'Luas Lantai';
		}elseif ($att == '6') {
			$hasil = 'Kesesuaian Jumlah Lantai Bangunan';
			$fiedl = 'Kesesuaian_Jumlah_Lantai';
			$jml_field = 2;
			$fiedl2 = 'Jumlah_Lantai';
			$col = "Sesuai";
			$col2 = 'Jumlah Lantai';
		}elseif ($att == '7') {
			$hasil = 'Kesesuaian Ketinggian Bangunan';
			$fiedl = 'Kesesuaian_Ketinggian';
			$jml_field = 2;
			$fiedl2 = 'Ketinggian';
			$col = "Sesuai";
			$col2 = 'Ketinggian';
		}elseif ($att == '8') {
			$hasil = 'Ketentuan KKOP Terhadap bangunan di Jalur Penerbangan';
			$fiedl = 'KKOP_Penerbangan';
			$jml_field = 2;
			$fiedl2 = 'KKOP_Penerbangan_m';
			$col = "Sesuai";
			$col2 = 'Ketinggian';
		}elseif ($att == '9') {
			$hasil = 'Kesesuaian Daerah Hijau';
			$fiedl = 'Kesesuaian_Daerah_Hijau';
			$jml_field = 2;
			$fiedl2 = 'Luas_Daerah_Hijau';
			$col = "Sesuai";
			$col2 = 'Luas';
		}elseif ($att == '10') {
			$hasil = 'Kesesuaian Tinggi Pagar';
			$fiedl = 'Kesesuaian_tinggi_pagar';
			$jml_field = 2;
			$fiedl2 = 'Tinggi_pagar_m';
			$col = "Sesuai";
			$col2 = 'Tinggi';
		}elseif ($att == '11') {
			$hasil = 'Kondisi Drainase';
			$fiedl = 'Kondisi_drainase';
			$jml_field = 1;
			$fiedl2 = NULL;
			$col = "Kondisi";
			$col2 = NULL;
		}
		$datacontent['title'] = $hasil;
		$datacontent['col'] = array($col,$col2,);
		$datacontent['att'] = $att;
		$datacontent['bangunan'] = $this->Buka_peta->tb_profil($fiedl,$jml_field,$fiedl2);
		$data['content'] = $this->load->view('non_pemerintah/bg_bgn', $datacontent,TRUE);
		$this->load->view('index',$data);
	}
	public function bgn_pem()
	{
		$datacontent['title'] = "Berdasarkan Bangunan";
		$data['content'] = $this->load->view('pemerintah/bg_bgn', $datacontent);
		$this->load->view('index.php');
	}
	public function fung_pem()
	{
		$datacontent['title'] = "Berdasarkan Fungsi";
		$datacontent['bangunan'] = $this->Buka_peta->frd('tb_bangunan',NULL,NULL);
		$data['content'] = $this->load->view('pemerintah/bg_fung', $datacontent,TRUE);
		$this->load->view('index',$data);
	}
	public function stat_total()
	{
		$datacontent['title'] = "Total";
		$data['content'] = $this->load->view('statistik/total', $datacontent,TRUE);
		$this->load->view('index',$data);
	}

	public function stat_pem()
	{
		$datacontent['title'] = "Pemerintah";
		$data['content'] = $this->load->view('statistik/pem', $datacontent);
		$this->load->view('index.php');
	}
	public function stat_nonpem()
	{
		$datacontent['title'] = "Non Pemerintah";
		$data['content'] = $this->load->view('statistik/non_pem', $datacontent);
		$this->load->view('index.php');
	}
	public function ambil_json() {
		$filename = base_url().'assets/geo/adm_des.geojson';
		$data = file_get_contents($filename); //data read from json file
		$json = json_decode($data,TRUE);
		foreach ($json['features'] as $j){
			$isi = json_encode($j).',';
			$nama = $j['properties']['NAMOBJ'];
			$kec = $j['properties']['WADMKC'];
			$arg = array('geojson'=>$isi,'nama'=>$nama,'kecamatan'=>$kec);
			$this->Buka_peta->insert_data('tb_desa',$arg);
			echo $nama.'<hr>';
		}

	}

	public function cek_desa() {
		$des= $this->Buka_peta->frd('tb_desa',NULL,NULL) ;
		foreach ($des as $de) {
			$kec=$de->kecamatan;
			$id = $de->id;
			$kecam = $this->Buka_peta->frd('tb_kecamatan',$kec,'nama');
			if ($kecam != NULL) {
				$arg = array('table_name'=>'tb_desa', 'id'=>$id);
				$data = array('id_kec'=>$kecam[0]->id);
				$this->Buka_peta->edit_record_id($arg,$data);
			}
		}
	}

// Detail Data --------------------------------------------------------------------------------------

	public function data_opd()
	{
		$datacontent['title'] = "Detail Data OPD";
		$data['content'] = $this->load->view('pemerintah/data', $datacontent,TRUE);
		$this->load->view('index',$data);
	}

	
}

