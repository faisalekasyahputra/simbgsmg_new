<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Buka_peta');
		date_default_timezone_set('Asia/Jakarta');
	}
	public function index()
	{
		$datacontent['title'] = "SIMBG Semarang";
		$data['content'] = $this->load->view('utama', $datacontent, TRUE);
		$this->load->view('index', $data);
	}
	public function peta()
	{
		$datacontent['title'] = "Peta Spasial";
		$datacontent['subtitle'] = "Peta Fungsi Bangunan";
		$datacontent['kecamatan'] = $this->Buka_peta->peta_admin('tb_kecamatan');
		$datacontent['desa'] = $this->Buka_peta->peta_admin('tb_desa');
		$datacontent['bangunan'] = $this->Buka_peta->titik_bangunan('tb_bangunan', NULL, NULL);
		$datacontent['pilihan'] = array('Fungsi', 'Kepemilikan IMB', 'Garis Sepadan', 'Prosentase e-RTH');
		$datacontent['Legenda'] = array('1', '-', '-', '-');
		$data['content'] = $this->load->view('peta/peta', $datacontent, TRUE);

		$this->load->view('index', $data);
	}
	public function imb($id)
	{
		$datacontent['title'] = "Peta Spasial";
		$datacontent['kecamatan'] = $this->Buka_peta->peta_admin('tb_kecamatan');
		$datacontent['desa'] = $this->Buka_peta->peta_admin('tb_desa');
		if ($id == 'All') {
			$datacontent['subtitle'] = "Peta Kepemilikan IMB";
			$datacontent['bangunan'] = $this->Buka_peta->titik_bangunan('tb_bangunan', NULL, NULL);
		} else {
			if ($id == '0') {
				$datacontent['subtitle'] = "Peta Bangunan Yang Tidak Memiliki IMB";
			} else {
				$datacontent['subtitle'] = "Peta Bangunan Yang Memiliki IMB";
			}

			$datacontent['bangunan'] = $this->Buka_peta->titik_bangunan('tb_bangunan', $id, 'Memiliki_IMB');
		}

		$datacontent['pilihan'] = array('Fungsi', 'Kepemilikan IMB', 'Garis Sepadan', 'Prosentase e-RTH');
		$datacontent['Legenda'] = array('2', 'Ya', 'Tidak', 'Memiliki_IMB');
		$data['content'] = $this->load->view('peta/peta', $datacontent, TRUE);

		$this->load->view('index', $data);
	}
	public function rth($id)
	{
		$datacontent['title'] = "Peta Spasial";
		$datacontent['kecamatan'] = $this->Buka_peta->peta_admin('tb_kecamatan');
		$datacontent['desa'] = $this->Buka_peta->peta_admin('tb_desa');
		if ($id == 'All') {
			$datacontent['subtitle'] = "Peta Kesesuaian e_RTH";
			$datacontent['bangunan'] = $this->Buka_peta->titik_rth('tb_lain', NULL, NULL, 'Kesesuaian_e_RTH');
		} else {
			if ($id == '0') {
				$datacontent['subtitle'] = "Peta Bangunan Yang Tidak Sesuai e-RTH";
			} else {
				$datacontent['subtitle'] = "Peta Bangunan Yang Sesuai e-RTH";
			}
			$datacontent['bangunan'] = $this->Buka_peta->titik_rth('tb_lain', $id, 'Kesesuaian_e_RTH', 'Kesesuaian_e_RTH');
		}

		$datacontent['pilihan'] = array('Fungsi', 'Kepemilikan IMB', 'Garis Sepadan', 'Prosentase e-RTH');
		$datacontent['Legenda'] = array('2', 'Sesuai', 'Tidak Sesuai', 'Kesesuaian_e_RTH');
		$data['content'] = $this->load->view('peta/peta', $datacontent, TRUE);

		$this->load->view('index', $data);
	}
	public function sepadan($gs)
	{
		$att = $gs;
		if ($att == 'GS_Bangunan') {
			$hasil = 'Garis Sepadan Bangunan';
		} elseif ($att == 'GS_Pantai') {
			$hasil = 'Garis Sepadan Pantai';
		} elseif ($att == 'GS_Sungai') {
			$hasil = 'Garis Sepadan Sungai';
		} elseif ($att == 'GS_Waduk') {
			$hasil = 'Garis Sepadan Waduk';
		} elseif ($att == 'GS_Danau') {
			$hasil = 'Garis Sepadan Danau';
		} elseif ($att == 'GS_Rel') {
			$hasil = 'Garis Sepadan Rel';
		} elseif ($att == 'GS_Rawa') {
			$hasil = 'Garis Sepadan Rawa';
		} elseif ($att == 'GS_Saluran') {
			$hasil = 'Garis Sepadan Saluran';
		} elseif ($att == 'GS_Sutet') {
			$hasil = 'Garis Sepadan Sutet';
		} elseif ($att == 'GS_mataair') {
			$hasil = 'Garis Sepadan Mata Air';
		}
		$datacontent['title'] = "Peta Spasial";
		$datacontent['subtitle'] = "Peta " . $hasil;
		$datacontent['kecamatan'] = $this->Buka_peta->peta_admin('tb_kecamatan');
		$datacontent['desa'] = $this->Buka_peta->peta_admin('tb_desa');
		$datacontent['bangunan'] = $this->Buka_peta->titik_rth('tb_sepadan', NULL, NULL, $gs);
		$datacontent['pilihan'] = array('Fungsi', 'Kepemilikan IMB', 'Garis Sepadan', 'Prosentase e-RTH');
		$datacontent['Legenda'] = array('2', 'Sesuai', 'Tidak Sesuai', $gs);
		$data['content'] = $this->load->view('peta/peta', $datacontent, TRUE);

		$this->load->view('index', $data);
	}
	public function fungsi_spasial($id)
	{
		$datacontent['title'] = "Peta Spasial";
		$datacontent['subtitle'] = "Peta " . $id;
		$datacontent['pilihan'] = array('Fungsi', 'Kepemilikan IMB', 'Garis Sepadan', 'Prosentase e-RTH');

		$datacontent['kecamatan'] = $this->Buka_peta->peta_admin('tb_kecamatan');
		$datacontent['desa'] = $this->Buka_peta->peta_admin('tb_desa');
		$datacontent['bangunan'] = $this->Buka_peta->titik_bangunan('tb_bangunan', $id, 'Fungsi');
		$datacontent['Legenda'] = array('1', '-', '-', '-');
		$data['content'] = $this->load->view('peta/peta', $datacontent, TRUE);
		$this->load->view('index', $data);
	}

	public function kepemilikan()
	{
		$datacontent['title'] = "Berdasarkan Kepemilikan IMB";
		$datacontent['bangunan'] = $this->Buka_peta->frd('tb_bangunan', NULL, NULL);
		$data['content'] = $this->load->view('pemerintah/bg_opd', $datacontent, TRUE);
		$this->load->view('index', $data);
	}
	public function tsepadan($att)
	{

		if ($att == 'GS_Bangunan') {
			$hasil = 'Garis Sepadan Bangunan';
		} elseif ($att == 'GS_Pantai') {
			$hasil = 'Garis Sepadan Pantai';
		} elseif ($att == 'GS_Sungai') {
			$hasil = 'Garis Sepadan Sungai';
		} elseif ($att == 'GS_Waduk') {
			$hasil = 'Garis Sepadan Waduk';
		} elseif ($att == 'GS_Danau') {
			$hasil = 'Garis Sepadan Danau';
		} elseif ($att == 'GS_Rel') {
			$hasil = 'Garis Sepadan Rel';
		} elseif ($att == 'GS_Rawa') {
			$hasil = 'Garis Sepadan Rawa';
		} elseif ($att == 'GS_Saluran') {
			$hasil = 'Garis Sepadan Saluran';
		} elseif ($att == 'GS_Sutet') {
			$hasil = 'Garis Sepadan Sutet';
		} elseif ($att == 'GS_mataair') {
			$hasil = 'Garis Sepadan Mata Air';
		}
		$datacontent['title'] = $hasil;
		$datacontent['att'] = $att;
		$datacontent['bangunan'] = $this->Buka_peta->tb_sepadan($att);
		$data['content'] = $this->load->view('pemerintah/bg_bgn', $datacontent, TRUE);
		$this->load->view('index', $data);
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
		} elseif ($att == '2') {
			$hasil = 'Bangunan Di Atas Ruang Kereta Api';
			$fiedl = 'Diatas_Rel';
			$jml_field = 1;
			$fiedl2 = NULL;
			$col = "Ya/Tidak";
			$col2 = NULL;
		} elseif ($att == '3') {
			$hasil = 'Kesesuaian Luas Lantai Bangunan';
			$fiedl = 'Kesesuaian_lantai_dasar';
			$jml_field = 2;
			$fiedl2 = 'Luas_Lantai_Dasar';
			$col = "Ya/Tidak";
			$col2 = 'Luas_Lantai';
		} elseif ($att == '4') {
			$hasil = 'Kesesuaian Koefisien Dasar Bangunan';
			$fiedl = 'Koefisien_Dasar';
			$jml_field = 2;
			$fiedl2 = 'Prosen_Koefisien_Dasar';
			$col = "Sesuai";
			$col2 = 'Prosentase';
		} elseif ($att == '5') {
			$hasil = 'Kesesuaian Lantai Dasar Bangunan';
			$fiedl = 'Kesesuaian_Luas_Lantai';
			$jml_field = 2;
			$fiedl2 = 'Luas_Lantai';
			$col = "Sesuai";
			$col2 = 'Luas Lantai';
		} elseif ($att == '6') {
			$hasil = 'Kesesuaian Jumlah Lantai Bangunan';
			$fiedl = 'Kesesuaian_Jumlah_Lantai';
			$jml_field = 2;
			$fiedl2 = 'Jumlah_Lantai';
			$col = "Sesuai";
			$col2 = 'Jumlah Lantai';
		} elseif ($att == '7') {
			$hasil = 'Kesesuaian Ketinggian Bangunan';
			$fiedl = 'Kesesuaian_Ketinggian';
			$jml_field = 2;
			$fiedl2 = 'Ketinggian';
			$col = "Sesuai";
			$col2 = 'Ketinggian';
		} elseif ($att == '8') {
			$hasil = 'Ketentuan KKOP Terhadap bangunan di Jalur Penerbangan';
			$fiedl = 'KKOP_Penerbangan';
			$jml_field = 2;
			$fiedl2 = 'KKOP_Penerbangan_m';
			$col = "Sesuai";
			$col2 = 'Ketinggian';
		} elseif ($att == '9') {
			$hasil = 'Kesesuaian Daerah Hijau';
			$fiedl = 'Kesesuaian_Daerah_Hijau';
			$jml_field = 2;
			$fiedl2 = 'Luas_Daerah_Hijau';
			$col = "Sesuai";
			$col2 = 'Luas';
		} elseif ($att == '10') {
			$hasil = 'Kesesuaian Tinggi Pagar';
			$fiedl = 'Kesesuaian_tinggi_pagar';
			$jml_field = 2;
			$fiedl2 = 'Tinggi_pagar_m';
			$col = "Sesuai";
			$col2 = 'Tinggi';
		} elseif ($att == '11') {
			$hasil = 'Kondisi Drainase';
			$fiedl = 'Kondisi_drainase';
			$jml_field = 1;
			$fiedl2 = NULL;
			$col = "Kondisi";
			$col2 = NULL;
		}
		$datacontent['title'] = $hasil;
		$datacontent['col'] = array($col, $col2,);
		$datacontent['att'] = $att;
		$datacontent['bangunan'] = $this->Buka_peta->tb_profil($fiedl, $jml_field, $fiedl2);
		$data['content'] = $this->load->view('non_pemerintah/bg_bgn', $datacontent, TRUE);
		$this->load->view('index', $data);
	}
	public function bgn_pem()
	{
		$datacontent['title'] = "Berdasarkan Bangunan";
		$data['content'] = $this->load->view('pemerintah/bg_bgn', $datacontent);
		$this->load->view('index.php');
	}
	public function side_peta()
	{
		$datacontent['title'] = "Berdasarkan Bangunan";
		$data['content'] = $this->load->view('pemerintah/bg_bgn', $datacontent);
	}

	public function fung_pem()
	{
		$datacontent['title'] = "Berdasarkan Fungsi";
		$datacontent['bangunan'] = $this->Buka_peta->frd('tb_bangunan', NULL, NULL);
		$data['content'] = $this->load->view('pemerintah/bg_fung', $datacontent, TRUE);
		$this->load->view('index', $data);
	}
	public function stat_total()
	{
		$datacontent['title'] = "Total";
		$data['content'] = $this->load->view('statistik/total', $datacontent, TRUE);
		$this->load->view('index', $data);
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
	public function ambil_json()
	{
		$filename = base_url() . 'assets/geo/adm_des.geojson';
		$data = file_get_contents($filename); //data read from json file
		$json = json_decode($data, TRUE);
		foreach ($json['features'] as $j) {
			$isi = json_encode($j) . ',';
			$nama = $j['properties']['NAMOBJ'];
			$kec = $j['properties']['WADMKC'];
			$arg = array('geojson' => $isi, 'nama' => $nama, 'kecamatan' => $kec);
			$this->Buka_peta->insert_data('tb_desa', $arg);
			echo $nama . '<hr>';
		}
	}

	public function cek_desa()
	{
		$des = $this->Buka_peta->frd('tb_desa', NULL, NULL);
		foreach ($des as $de) {
			$kec = $de->kecamatan;
			$id = $de->id;
			$kecam = $this->Buka_peta->frd('tb_kecamatan', $kec, 'nama');
			if ($kecam != NULL) {
				$arg = array('table_name' => 'tb_desa', 'id' => $id);
				$data = array('id_kec' => $kecam[0]->id);
				$this->Buka_peta->edit_record_id($arg, $data);
			}
		}
	}

	// Detail Data --------------------------------------------------------------------------------------

	public function data_opd($id)
	{

		$datacontent['title'] = "Detail Data OPD";
		$datacontent['bangunan'] = $this->Buka_peta->frd('tb_bangunan', $id,'id');
		$datacontent['lain'] = $this->Buka_peta->frd('tb_lain', $id,'id_bangunan');
		$datacontent['sepadan'] = $this->Buka_peta->frd('tb_sepadan', $id,'id_bangunan');
		$data['content'] = $this->load->view('pemerintah/data', $datacontent, TRUE);
		$this->load->view('index', $data);
	}

	public function tb_bangunan_fungsi() {
		$bangunan = $this->Buka_peta->frd('tb_bangunan', NULL,NULL);
		foreach($bangunan as $b) {
			$id = $b->id;
			$sh = $this->Buka_peta->frd('sheet1', $id,'id');
			if ($sh[0]->Hunian == '1') {
				$fungsi='Hunian';
			}
			if ($sh[0]->SosialBudaya == '1') {
				$fungsi='Sosial Budaya';
			}
			if ($sh[0]->Industri == '1') {
				$fungsi='Industri';
			}
			if ($sh[0]->Keagamaan == '1') {
				$fungsi='Keagamaan';
			}
			if ($sh[0]->Khusus == '1') {
				$fungsi='Khusus';
			}
			if ($sh[0]->CagarBudaya == '1') {
				$fungsi='Cagar Budaya';
			}
			if ($sh[0]->Usaha == '1') {
				$fungsi='Usaha';
			}
			if ($sh[0]->Campuran == '1') {
				$fungsi='Campuran';
			}
			$data = array('table_name'=>'tb_bangunan','id'=>$id);
			$arg = array('Fungsi'=>$fungsi);
			$this->Buka_peta->edit_record_id($data,$arg);
		}
	}
	public function tb_bangunan_kawasan() {
		$bangunan = $this->Buka_peta->frd('tb_bangunan', NULL,NULL);
		foreach($bangunan as $b) {
			$id = $b->id;
			$sh = $this->Buka_peta->frd('sheet1', $id,'id');
			if ($sh[0]->Kawasan_sesusai == '1') {
				$kawasan = "Sesuai";
			}else{
				$kawasan = "Tidak Sesuai";
			}
			$data = array('table_name'=>'tb_bangunan','id'=>$id);
			$arg = array('Kesesuaian_Bangunan'=>$kawasan);
			$this->Buka_peta->edit_record_id($data,$arg);
		}
	}
	public function tb_bangunan_memiliki_imb() {
		$bangunan = $this->Buka_peta->frd('tb_bangunan', NULL,NULL);
		foreach($bangunan as $b) {
			$id = $b->id;
			$sh = $this->Buka_peta->frd('sheet1', $id,'id');
			if ($sh[0]->Sudah_memiliki_imb == '1') {
				$mem = "Sudah Memiliki";
			}else{
				$mem = "Belum Memiliki";
			}
			$no_imb = $sh[0]->No_IMB;
			$dt = array('table_name'=>'tb_bangunan','id'=>$id);
			$arg3 = array('Memiliki_IMB'=>$mem,'Nomor_IMB'=>$no_imb);
			$this->Buka_peta->edit_record_id($dt,$arg3);
			echo $id.' - '. $mem.'</br>';
			
		}
	}
	public function tb_bangunan_status_kepemilikan() {
		$bangunan = $this->Buka_peta->frd('tb_bangunan', NULL,NULL);
		foreach($bangunan as $b) {
			$id = $b->id;
			$sh = $this->Buka_peta->frd('sheet1', $id,'id');
			if ($sh[0]->SHM == '1') {
				$sta='SHM';
			}
			if ($sh[0]->SHGB == '1') {
				$sta='SHGB';
			}
			if ($sh[0]->Sewa == '1') {
				$sta='Sewa';
			}
			if ($sh[0]->Lainnya != '0') {
				$sta=$sh[0]->Lainnya;
			}
		
			$dt = array('table_name'=>'tb_bangunan','id'=>$id);
			$arg3 = array('Status_Kepemilikan'=>$sta);
			$this->Buka_peta->edit_record_id($dt,$arg3);
			echo $id.' - '. $sta.'</br>';
			
		}
	}

	public function tb_sepadan() {
		$bangunan = $this->Buka_peta->frd('tb_bangunan', NULL,NULL);
		foreach($bangunan as $b) {
			$id = $b->id;
			$sh = $this->Buka_peta->frd('sheet2', $id,'id');
			if ($sh[0]->GS_Bangunan_Sesuai == '1') {
				$gsbangunan='1';
				$gsbangunan_m = $sh[0]->GS_Bangunan_m;
			}else{
				$gsbangunan='0';
				$gsbangunan_m = 0;
			}
			if ($sh[0]->GS_Pantai_Sesuai == '1') {
				$gspantai='1';
				$gspantai_m = $sh[0]->GS_patai_m;
			}else{
				$gspantai='0';
				$gspantai_m = 0;
			}
			if ($sh[0]->GS_Sungai_Sesuai == '1') {
				$gssungai='1';
				$gssungai_m = $sh[0]->GS_Sungai_m;
			}else{
				$gssungai='0';
				$gssungai_m = 0;
			}
			if ($sh[0]->GS_Waduk_Sesuai == '1') {
				$gswaduk='1';
				$gswaduk_m = $sh[0]->GS_Waduk_m;
			}else{
				$gswaduk='0';
				$gswaduk_m = 0;
			}
			if ($sh[0]->GS_Danau_Sesuai == '1') {
				$gsdanau='1';
				$gsdanau_m = $sh[0]->GS_Danau_m;
			}else{
				$gsdanau='0';
				$gsdanau_m = 0;
			}
			if ($sh[0]->GS_Rel_Sesuai == '1') {
				$gsrel='1';
				$gsrel_m = $sh[0]->GS_Rel_m;
			}else{
				$gsrel='0';
				$gsrel_m = 0;
			}
			if ($sh[0]->GS_Rawa_Sesuai == '1') {
				$gsrawa='1';
				$gsrawa_m = $sh[0]->GS_Rawa_m;
			}else{
				$gsrawa='0';
				$gsrawa_m = 0;
			}
			if ($sh[0]->GS_Saluran_Sesuai == '1') {
				$gssaluran='1';
				$gssaluran_m = $sh[0]->GS_Saluran_m;
			}else{
				$gssaluran='0';
				$gssaluran_m = 0;
			}
			if ($sh[0]->GS_Sutet_Sesuai == '1') {
				$gssutet='1';
				$gssutet_m = $sh[0]->GS_Sutet_m;
			}else{
				$gssutet='0';
				$gssutet_m = 0;
			}
			if ($sh[0]->GS_mataair_Sesuai == '1') {
				$gsmata='1';
				$gsmata_m = $sh[0]->GS_mataair_m;
			}else{
				$gsmata='0';
				$gsmata_m = 0;
			}
			
			$arg3 = array('id_bangunan'=>$id,
			'GS_Bangunan'=>$gsbangunan,
			'GS_Bangunan_m'=>$gsbangunan_m,
			'GS_Pantai'=>$gspantai,
			'GS_Pantai_m'=>$gspantai_m,
			'GS_Sungai'=>$gssungai,
			'GS_Sungai_m'=>$gssungai_m,
			'GS_Waduk'=>$gswaduk,
			'GS_Waduk_m'=>$gswaduk_m,
			'GS_Danau'=>$gsdanau,
			'GS_Danau_m'=>$gsdanau_m,
			'GS_Rel'=>$gsrel,
			'GS_Rel_m'=>$gsrel_m,
			'GS_Rawa'=>$gsrawa,
			'GS_Rawa_m'=>$gsrawa_m,
			'GS_Saluran'=>$gssaluran,
			'GS_Saluran_m'=>$gssaluran_m,
			'GS_Sutet'=>$gssutet,
			'GS_Sutet_m'=>$gssutet_m,
			'GS_mataair'=>$gsmata,
			'GS_mataair_m'=>$gsmata_m,
			'antar_masa'=>$sh[0]->antara_masa,
			'masaa1'=>$sh[0]->masaa1,
			'masab1'=>$sh[0]->masab1,
			'jarak1'=>$sh[0]->jarak1,
			'masaa2'=>$sh[0]->masaa2,
			'masab2'=>$sh[0]->masab2,
			'jarak2'=>$sh[0]->jarak2,
			'masaa3'=>$sh[0]->masaa3,
			'masab3'=>$sh[0]->masab3,
			'jarak3'=>$sh[0]->jarak3,
		);
			$this->Buka_peta->insert_data('tb_sepadan',$arg3);
			echo $id.'</br>';
			
		}
	}
	public function tb_lain() {
		$bangunan = $this->Buka_peta->frd('tb_bangunan', NULL,NULL);
		foreach($bangunan as $b) {
			$id = $b->id;
			$sh = $this->Buka_peta->frd('sheet3', $id,'id');
			if ($sh[0]->Diatas_Drainase_Y == '1') {
				$Diatas_Drainase='Ya';
			}else{
				$Diatas_Drainase='Tidak';	
			}
			if ($sh[0]->Diatas_Rel_Y == '1') {
				$Diatas_rel='Ya';
			}else{
				$Diatas_rel='Tidak';	
			}
			
			if ($sh[0]->Lantai_Dasar_Sesuai == '1') {
				$Kesesuaian_lantai_dasar='Sesuai';
				$Luas_Lantai_Dasar = $sh[0]->Lantai_Dasar_m;
			}else{
				$Kesesuaian_lantai_dasar='Tidak Sesuai';
				$Luas_Lantai_Dasar = 0;
			}
			$Luas_Lahan = $sh[0]->Luas_Lahan;
			if ($sh[0]->Koefisien_Sesuai == '1') {
				$Koefisien_Dasar='Sesuai';
				$Prosen_Koefisien_Dasar = $sh[0]->Koefisien_m;
			}else{
				$Koefisien_Dasar='Tidak Sesuai';
				$Prosen_Koefisien_Dasar = 0;
			}
			if ($sh[0]->Luas_Lantai_Sesuai == '1') {
				$Kesesuaian_Luas_lantai='Sesuai';
				$Luas_Lantai = $sh[0]->Luas_Lantai_m;
			}else{
				$Kesesuaian_Luas_lantai='Tidak Sesuai';
				$Luas_Lantai = 0;
			}
			if ($sh[0]->Jumlah_Lantai_Sesuai == '1') {
				$Kesesuaian_Jumlah_Lantai='Sesuai';
				$Jumlah_Lantai = $sh[0]->Jumlah_Lantai_m;
			}else{
				$Kesesuaian_Jumlah_Lantai='Tidak Sesuai';
				$Jumlah_Lantai = 0;
			}
			if ($sh[0]->Ketinggian_Sesuai == '1') {
				$Kesesuaian_Ketinggian='Sesuai';
				$Ketinggian = $sh[0]->Ketinggian_m;
			}else{
				$Kesesuaian_Ketinggian='Tidak Sesuai';
				$Ketinggian = 0;
			}
			if ($sh[0]->KKop_Sesuai == '1') {
				$KKOP_Penerbangan='Sesuai';
				$KKOP_Penerbangan_m = $sh[0]->KKop_m;
			}else{
				$KKOP_Penerbangan='Tidak Sesuai';
				$KKOP_Penerbangan_m = 0;
			}
			if ($sh[0]->Hijau_Sesuai == '1') {
				$Kesesuaian_Daerah_Hijau='Sesuai';
				$Luas_Daerah_Hijau = $sh[0]->Hijau_m;
			}else{
				$Kesesuaian_Daerah_Hijau='Tidak Sesuai';
				$Luas_Daerah_Hijau = 0;
			}
			if ($sh[0]->RTH_Sesuai == '1') {
				$Kesesuaian_e_RTH='Sesuai';
				$Prosentase_erth = $sh[0]->RTH_m;
			}else{
				$Kesesuaian_e_RTH='Tidak Sesuai';
				$Prosentase_erth = 0;
			}
			if ($sh[0]->tigalt_sesuai == '1') {
				$tiga_lt='Sesuai';
				$tiga_lt_m = $sh[0]->tigalt_m;
			}else{
				$tiga_lt='Tidak Sesuai';
				$tiga_lt_m = 0;
			}
			if ($sh[0]->pagar_sesuai == '1') {
				$Kesesuaian_tinggi_pagar='Sesuai';
				$Tinggi_pagar_m = $sh[0]->pagar_m;
			}else{
				$Kesesuaian_tinggi_pagar='Tidak Sesuai';
				$Tinggi_pagar_m = 0;
			}
			if ($sh[0]->pekarangan_sesuai == '1') {
				$Bukaan_pintu='Sesuai';
			}else{
				$Bukaan_pintu='Tidak Sesuai';
			}
			if ($sh[0]->resapan_sesuai == '1') {
				$memiliki_sumur_resapan='Memiliki';
			}else{
				$memiliki_sumur_resapan='Tidak Memiliki';
			}
			if ($sh[0]->drainase_sesuai == '1') {
				$Kondisi_drainase='Baik';
			}else{
				$Kondisi_drainase='Tidak Baik';
			}
			if ($sh[0]->parkir_sesuai == '1') {
				$Ruang_parkir='Ada';
			}else{
				$Ruang_parkir='Tidak Ada';
			}
			$keterangan = $sh[0]->Keterangan;
			$arg4 = array('id_bangunan'=>$id,
			'Diatas_Drainase'=>$Diatas_Drainase,
			'Diatas_rel'=>$Diatas_rel,
			'Kesesuaian_lantai_dasar'=>$Kesesuaian_lantai_dasar,
			'Luas_Lantai_Dasar'=>$Luas_Lantai_Dasar,
			'Luas_Lahan'=>$Luas_Lahan,
			'Koefisien_Dasar'=>$Koefisien_Dasar,
			'Prosen_Koefisien_Dasar'=>$Prosen_Koefisien_Dasar,
			'Kesesuaian_Luas_lantai'=>$Kesesuaian_Luas_lantai,
			'Luas_Lantai'=>$Luas_Lantai,
			'Kesesuaian_Jumlah_Lantai'=>$Kesesuaian_Jumlah_Lantai,
			'Jumlah_Lantai'=>$Jumlah_Lantai,
			'Kesesuaian_Ketinggian'=>$Kesesuaian_Ketinggian,
			'Ketinggian'=>$Ketinggian,
			'KKOP_Penerbangan'=>$KKOP_Penerbangan,
			'KKOP_Penerbangan_m'=>$KKOP_Penerbangan_m,
			'Kesesuaian_Daerah_Hijau'=>$Kesesuaian_Daerah_Hijau,
			'Luas_Daerah_Hijau'=>$Luas_Daerah_Hijau,
			'Kesesuaian_e_RTH'=>$Kesesuaian_e_RTH,
			'Prosentase_erth'=>$Prosentase_erth,
			'Kesesuaian_tinggi_pagar'=>$Kesesuaian_tinggi_pagar,
		
			'Bukaan_pintu'=>$Bukaan_pintu,
			'memiliki_sumur_resapan'=>$memiliki_sumur_resapan,
			'Kondisi_drainase'=>$Kondisi_drainase,
			'Ruang_parkir'=>$Ruang_parkir,
			'tiga_lt'=>$tiga_lt,
			'tiga_lt_m'=>$tiga_lt_m,
			'keterangan'=>$keterangan,
			'Tinggi_pagar_m'=>$Tinggi_pagar_m
		
		);
			$this->Buka_peta->insert_data('tb_lain',$arg4);
			echo $id.'</br>';
			
		}
	}
}
