<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Backoffice extends CI_Controller
{

	public function __construct(){
        parent::__construct();
        $this->load->model('Buka_peta');
        date_default_timezone_set('Asia/Jakarta');
    }
	public function index()
	{
		
		$this->load->view('login');
	}
    public function authentication()
	{

		// DEFINES READ CATEROTY NAME FORM Login FORM
			$user_email = html_escape($this->input->post('user'));
		    $user_password = html_escape($this->input->post('pwd'));
		   
		    
		if (!empty($user_email) && !empty($user_password))
		{

			// DEFINES LOAD CRUDS_MODEL FORM MODELS FOLDERS
			$this->load->model('Buka_peta');
		
			$result = $this->Buka_peta->authenticate_user($user_email, $user_password);
		
			if ($result == NULL)
			{
				$array_msg = array(
					'msg' => '<i style="color:#fff" class="fa fa-exclamation-triangle" aria-hidden="true"></i> Email atau Kata Sandi yang anda masukkan salah',
					'alert' => 'danger'
				);
				$this->session->set_flashdata('status', $array_msg);
				redirect('backoffice');
			}
			else
			{
				$userdata = array(
					'id' => $result[0]->id,
					'name' => $result[0]->username,
			
				);
				$this->session->set_userdata('user_id', $userdata);
				$this->session->userdata('user_id');
				$array_msg = array(
					'msg' => '<i style="color:#fff" class="fa fa-check-circle-o" aria-hidden="true"></i> Login  Successfully',
					'alert' => 'info'
				);
				$this->session->set_flashdata('status', $array_msg);
				redirect('Backoffice/dashboard');
			}
		}
		else
		{
			$array_msg = array(
				'msg' => '<i style="color:#fff" class="fa fa-exclamation-triangle" aria-hidden="true"></i> Enter Email & Password',
				'alert' => 'danger'
			);
			$this->session->set_flashdata('status', $array_msg);
			redirect('Backoffice');
		}
	}
    public function dashboard()
	{
        
		$datacontent['judul'] ="Data Bangunan Gedung";
		$datacontent['bangunan'] = $this->Buka_peta->frd('tb_bangunan',NULL,NULL);
		$datacontent['total'] = $this->Buka_peta->frd_jml('tb_bangunan',NULL,NULL);
		$datacontent['hunian'] = $this->Buka_peta->frd_jml('tb_bangunan','Hunian','Fungsi');
		$datacontent['usaha'] = $this->Buka_peta->frd_jml('tb_bangunan','Usaha','Fungsi');
		$datacontent['industri'] = $this->Buka_peta->frd_jml('tb_bangunan','Industri','Fungsi');
		if ($datacontent['industri'] == NULL) {
			$datacontent['industri'] =0;
		}
		$datacontent['cagar'] = $this->Buka_peta->frd_jml('tb_bangunan','Cagar Budaya','Fungsi');
		if ($datacontent['cagar'] == NULL) {
			$datacontent['cagar'] =0;
		}
		$datacontent['sosial'] = $this->Buka_peta->frd_jml('tb_bangunan','Sosial Budaya','Fungsi');
		if ($datacontent['sosial'] == NULL) {
			$datacontent['sosial'] =0;
		}
        $data['content'] = $this->load->view('bo/dashboard',$datacontent,TRUE);
		$this->load->view('main',$data);
	}
	public function bangunan() {
		$datacontent['judul'] ="Data Bangunan Gedung";
		$datacontent['bangunan'] = $this->Buka_peta->frd('tb_bangunan',NULL,NULL);
		$data['content'] = $this->load->view('bo/bangunan',$datacontent,TRUE);
		$this->load->view('main',$data);
	}
	public function pengguna() {
		$datacontent['judul'] ="Data Pengguna";
		$datacontent['bangunan'] = $this->Buka_peta->frd('users',NULL,NULL);
		$data['content'] = $this->load->view('bo/pengguna',$datacontent,TRUE);
		$this->load->view('main',$data);
	}
	public function tambah()
	{
        
		$datacontent['judul'] ="Tambah Data Bangunan Gedung";
		$datacontent['desa'] =$this->Buka_peta->frd('tb_desa',NULL,NULL);
		$datacontent['kec'] =$this->Buka_peta->frd('tb_kecamatan',NULL,NULL);
		
        $data['content'] = $this->load->view('bo/tambah',$datacontent,TRUE);
		$this->load->view('main',$data);
	}
	public function tambah_pengguna()
	{
        
		$datacontent['judul'] ="Tambah Data Pengguna";
	
        $data['content'] = $this->load->view('bo/tambah_pengguna',$datacontent,TRUE);
		$this->load->view('main',$data);
	}
	public function edit_pengguna($id)
	{
        
		$datacontent['judul'] ="Edit Data Pengguna";
		$datacontent['pengg'] = $this->Buka_peta->frd('users',$id,'id');
        $data['content'] = $this->load->view('bo/edit_pengguna',$datacontent,TRUE);
		$this->load->view('main',$data);
	}
	public function ganti_pass()
	{
		$user_name = $this->session->userdata('user_id');
		$id = $user_name['id'];
		$datacontent['judul'] ="Edit Data Pengguna";
		$datacontent['pengg'] = $this->Buka_peta->frd('users',$id,'id');
		$datacontent['id'] = $id;
        $data['content'] = $this->load->view('bo/ganti_pwd',$datacontent,TRUE);
		$this->load->view('main',$data);
	}
	public function simpan_ganti_pwd($id) {
		$pass = $_POST['password'];
		$pass1 = $_POST['password1'];
		if ($pass != $pass1 || $pass == "" || $pass1=="") {
			echo "<script>alert('Password Tidak Sama');
			location.href='".base_url('Backoffice/ganti_pass')."';
			</script>";
		
		}else{
			$data = array('table_name'=>'users','id'=>$id);
			$arg = array('password'=>sha1($pass));
			$this->Buka_peta->edit_record_id($data,$arg);
			echo "<script>alert('Password Sukses diganti');
			location.href='".base_url('Backoffice/dashboard')."';
			</script>";
			
		} 
		
	}
	public function edit($id)
	{
        
		$datacontent['judul'] ="Edit Data Bangunan Gedung";
		$datacontent['desa'] =$this->Buka_peta->frd('tb_desa',NULL,NULL);
		$datacontent['kec'] =$this->Buka_peta->frd('tb_kecamatan',NULL,NULL);
		$datacontent['bangunan'] = $this->Buka_peta->frd('tb_bangunan',$id,'id');
		$datacontent['spd'] = $this->Buka_peta->frd('tb_sepadan',$id,'id_bangunan');
		$datacontent['lain'] = $this->Buka_peta->frd('tb_lain',$id,'id_bangunan');
		$datacontent['id'] = $id;
        $data['content'] = $this->load->view('bo/edit',$datacontent,TRUE);
		$this->load->view('main',$data);
	}

	public function simpan_pengguna() {
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$kontak = $_POST['kontak'];
		$pass = $_POST['password'];
		$arg = array('username'=>$nama,
		'user_email'=>$email,
		'user_contact_1' =>$kontak,
		'password' => sha1($password),
		);
		$this->Buka_peta->insert_data('users',$arg);
		redirect('Backoffice/pengguna');
	}
	public function simpan_edit_pengguna($id) {
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$kontak = $_POST['kontak'];
		$data = array('table_name'=>'users','id'=>$id);
		$arg = array('username'=>$nama,
		'user_email'=>$email,
		'user_contact_1' =>$kontak,
		
		);
		$this->Buka_peta->edit_record_id($data,$arg);
		redirect('Backoffice/pengguna');
	}
	public function simpan() {
		$tgl = date('d-m-Y');
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$kelurahan = $_POST['kelurahan'];
		$kecamatan = $_POST['kecamatan'];
		$fungsi = $_POST['fungsi'];
		$kesesuaian = $_POST['kesesuaian'];
		$memiliki_imb = $_POST['memiliki_imb'];
		$no_imb = $_POST['no_imb'];
		$status_kepemilikan = $_POST['status_kepemilikan'];
		$ket_lain = $_POST['ket_lain'];
		$lat = $_POST['lat'];
		$lng = $_POST['lng'];
		$foto1  = $_FILES['foto1']['name'];
		$foto2  = $_FILES['foto2']['name'];
		if (isset($_POST['gs_bangunan'])) {
			$gs_bangunan = $_POST['gs_bangunan'];
		} else {
			$gs_bangunan = '-';
		}
		if (isset($_POST['gs_pantai'])) {
			$gs_pantai =  $_POST['gs_pantai'];
		}else {
			$gs_pantai = '-';
		}
		$gs_bangunan_m =  $_POST['gs_bangunan_m'];
		
		$gs_pantai_m =  $_POST['gs_pantai_m'];

		if (isset($_POST['gs_sungai'])) {
			$gs_sungai = $_POST['gs_sungai'];
		}else{
			$gs_sungai = '-';
		}
	
		$gs_sungai_m = $_POST['gs_sungai_m'];
		if (isset($_POST['gs_waduk'])) {
			$gs_waduk = $_POST['gs_waduk'];
		}else{
			$gs_waduk ='-';
		}
		
		$gs_waduk_m = $_POST['gs_waduk_m'];
		
		if (isset($_POST['gs_danau'])){
			$gs_danau = $_POST['gs_danau'];
		}else{
			$gs_danau ='-';
		}
		
		$gs_danau_m = $_POST['gs_danau_m'];
		if (isset($_POST['gs_rel'])) {
			$gs_rel = $_POST['gs_rel'];
		}else{
			$gs_rel = '-';
		}
		
		$gs_rel_m = $_POST['gs_rel_m'];
		if (isset($_POST['gs_rawa'])) {
			$gs_rawa = $_POST['gs_rawa'];
		}else{
			$gs_rawa = '-';
		}
		
		$gs_rawa_m = $_POST['gs_rawa_m'];
		if (isset($_POST['gs_saluran'])) {
			$gs_saluran = $_POST['gs_saluran'];
		}else{
			$gs_saluran ='-';
		}
		
		$gs_saluran_m = $_POST['gs_saluran_m'];
		if (isset($_POST['gs_sutet'])) {
			$gs_sutet = $_POST['gs_sutet'];
		}else{
			$gs_sutet='-';
		}
		
		$gs_sutet_m = $_POST['gs_sutet_m'];
		if (isset( $_POST['gs_mataair'])) {
			$gs_mataair = $_POST['gs_mataair'];
		}else{
			$gs_mataair = '-';
		}
		
		$gs_mataair_m = $_POST['gs_mataair_m'];
		if (isset($_POST['antar_masa'])) {
			$antar_masa = $_POST['antar_masa'];
		}else{
			$antar_masa = '-';
		}
		if (isset($_POST['masa_a1'])) {
			$masaa1 = $_POST['masa_a1'];
		}else{
			$masaa1 ='-';
		}
		if (isset($_POST['masa_b1'])) {
			$masab1 = $_POST['masa_b1'];
		}else{
			$masab1 = '-';
		}

		$jarak1 = $_POST['masa_b1_m'];
		if (isset( $_POST['masa_a2'])) {
			$masaa2 = $_POST['masa_a2'];
		}else{
			$masaa2 ='-';
		}
		if (isset($_POST['masa_b2'])) {
			$masab2 = $_POST['masa_b2'];
		}else{
			$masab2 = '-';
		}
	
		$jarak2 = $_POST['masa_b2_m'];
		if (isset( $_POST['masa_a3'])) {
			$masaa3 = $_POST['masa_a3'];
		}else{
			$masaa3 = '-';
		}
		if (isset($_POST['masa_b3'])) {
			$masab3 = $_POST['masa_b3'];
		}else{
			$masab3 ='-';
		}
		
		$jarak3 = $_POST['masa_b3_m'];
		
		if (isset($_POST['diatas_drainase'])) {
			$diatas_drainase = $_POST['diatas_drainase'];
		}else{
			$diatas_drainase ='-';
		}
		if (isset($_POST['diatas_kereta'])) {
			$diatas_rel = $_POST['diatas_kereta'];
		}else{
			$diatas_rel ='-';
		}
		if (isset($_POST['gs_luas'])) {
			$kesesuaian_lt_dasar = $_POST['gs_luas'];
		}else{
			$kesesuaian_lt_dasar ='-';
		}
		
		$luas_lt_dasar = $_POST['gs_luas_m'];
		$luas_lahan = $_POST['luas_lahan'];
		if (isset($_POST['koefisien'])) {
			$koefisien = $_POST['koefisien'];
		}else{
			$koefisien ='-';
		}
		$prosen_koefisien = $_POST['koefisien_m'];
		if (isset($_POST['luas_bangunan'])) {
			$kesesuaian_luas_lt = $_POST['luas_bangunan'];
		}else{
			$kesesuaian_luas_lt ='-';
		}

		$luas_bangunan  = $_POST['luas_bangunan_m'];
		if (isset($_POST['jml_lt'])) {
			$kesesuaian_jml_lt = $_POST['jml_lt'];
		}else{
			$kesesuaian_jml_lt ='-';
		}

		$jml_lt  = $_POST['jml_lt_m'];

		if (isset($_POST['tinggi_bangunan'])) {
			$kesesuaian_tinggi = $_POST['tinggi_bangunan'];
		}else{
			$kesesuaian_tinggi ='-';
		}

		$tinggi_banguan  = $_POST['tinggi_bangunan_m'];

		if (isset($_POST['kkop'])) {
			$kkop = $_POST['kkop'];
		}else{
			$kkop ='-';
		}

		$tinggi_kkop  = $_POST['kkop_m'];

		if (isset($_POST['daerah_hijau'])) {
			$daerah_hijau = $_POST['daerah_hijau'];
		}else{
			$daerah_hijau ='-';
		}

		$luas_daerah_hijau  = $_POST['daerah_hijau_m'];

		if (isset($_POST['erth'])) {
			$rth = $_POST['erth'];
		}else{
			$rth ='-';
		}

		$luas_rth  = $_POST['erth_m'];

		if (isset($_POST['3lt'])) {
			$tiga_lt = $_POST['3lt'];
		}else{
			$tiga_lt ='-';
		}

		$tiga_lt_m  = $_POST['3lt_m'];

		if (isset($_POST['tinggi_pagar'])) {
			$tinggi_pagar = $_POST['tinggi_pagar'];
		}else{
			$tinggi_pagar ='-';
		}

		$tinggi_pagar_m  = $_POST['tinggi_pagar_m'];

		if (isset($_POST['bukaan'])) {
			$bukaan = $_POST['bukaan'];
		}else{
			$bukaan ='-';
		}

		if (isset($_POST['resapan'])) {
			$resapan = $_POST['resapan'];
		}else{
			$resapan ='-';
		}
		if (isset($_POST['kondisi_drainase'])) {
			$kondisi_drainase = $_POST['kondisi_drainase'];
		}else{
			$kondisi_drainase ='-';
		}
		if (isset($_POST['ruang_parkir'])) {
			$ruang_parkir = $_POST['ruang_parkir'];
		}else{
			$ruang_parkir ='-';
		}
		$ket  = $_POST['ket'];
		$arg = array('Kecamatan' => $kecamatan,
		'Kelurahan' => $kelurahan,
		'Nama_Pemilik' =>$nama,
		'Alamat' => $alamat,
		'Tanggal' => $tgl,
		'Fungsi' => $fungsi,
		'Kesesuaian_Bangunan' => $kesesuaian,
		'Memiliki_IMB' => $memiliki_imb,
		'Nomor_IMB' => $no_imb,
		'Status_Kepemilikan' =>$status_kepemilikan,
		'ket_lain'=>$ket_lain,
		'Lat'=>$lat,
		'Lng'=>$lng,
	);

		
		$result = $this->Buka_peta->insert_data('tb_bangunan',$arg);
		$last_id = $this->db->insert_id();
		$arg2 = array('id_bangunan' => $last_id,
		'GS_Bangunan' =>$gs_bangunan,
		'GS_Bangunan_m' =>$gs_bangunan_m,
		'GS_Pantai' =>$gs_pantai,
		'GS_Pantai_m' =>$gs_pantai_m,
		'GS_Sungai' =>$gs_sungai,
		'GS_Sungai_m' =>$gs_sungai_m,
		'GS_Waduk' =>$gs_waduk,
		'GS_Waduk_m' =>$gs_waduk_m,
		'GS_Danau' =>$gs_danau,
		'GS_Danau_m' =>$gs_danau_m,
		'GS_Rel' =>$gs_rel,
		'GS_Rel_m' =>$gs_rel_m,
		'GS_Rawa' =>$gs_rawa,
		'GS_Rawa_m' =>$gs_rawa_m,
		'GS_Saluran' =>$gs_saluran,
		'GS_Saluran_m' =>$gs_saluran_m,
		'GS_Sutet' => $gs_sutet,
		'GS_Sutet_m' =>$gs_sutet_m,
		'GS_mataair' =>$gs_mataair,
		'GS_mataair_m' =>$gs_mataair_m,
		'antar_masa' => $antar_masa,
		'masaa1'=>$masaa1,
		'masab1'=>$masab1,
		'jarak1'=>$jarak1,
		'masaa2'=>$masaa2,
		'masab2'=>$masab2,
		'jarak2'=>$jarak2,
		'masaa3'=>$masaa3,
		'masab3'=>$masab3,
		'jarak3'=>$jarak3,
	);
	$arg3 = array('id_bangunan' => $last_id,
	'Diatas_Drainase' => $diatas_drainase,
	'Diatas_rel'=> $diatas_rel,
	'Kesesuaian_lantai_dasar'=>$kesesuaian_lt_dasar,
	'Luas_Lantai_Dasar' =>$luas_lt_dasar,
	'Luas_Lahan' => $luas_lahan,
	'Koefisien_Dasar' => $koefisien,
	'Prosen_Koefisien_Dasar' => $prosen_koefisien,
	'Kesesuaian_Luas_lantai' =>$kesesuaian_luas_lt,
	'Luas_Lantai' => $luas_bangunan,
	'Kesesuaian_Jumlah_Lantai' => $kesesuaian_jml_lt,
	'Jumlah_Lantai' => $jml_lt,
	'Kesesuaian_Ketinggian' => $kesesuaian_tinggi,
	'Ketinggian' => $tinggi_banguan,
	'KKOP_Penerbangan' => $kkop,
	'KKOP_Penerbangan_m' => $tinggi_kkop,
	'Kesesuaian_Daerah_Hijau' => $daerah_hijau,
	'Luas_Daerah_Hijau' => $luas_daerah_hijau,
	'Kesesuaian_e_RTH' => $rth,
	'Prosentase_erth' => $luas_rth,
	'tiga_lt' => $tiga_lt,
	'tiga_lt_m' => $tiga_lt_m,
	'Kesesuaian_tinggi_pagar' => $tinggi_pagar,
	'Tinggi_pagar_m' => $tinggi_pagar_m,
	'Bukaan_pintu' => $bukaan,
	'memiliki_sumur_resapan' => $resapan,
	'Kondisi_drainase'=>$kondisi_drainase,
	'Ruang_parkir'=> $ruang_parkir,
	'keterangan' => $ket,

);
	
	if ($foto1 != null) {
		$arg1= array("foto1" => $foto1,);
		$arg3 = array_merge($arg3,$arg1);
		$folder=  $_SERVER['DOCUMENT_ROOT'].'/simbgsmg/assets/foto/';
		move_uploaded_file($_FILES["foto1"]["tmp_name"], "$folder".$_FILES["foto1"]["name"]);
	}
	if ($foto2 != null) {
		$arg1= array("foto2" => $foto2,);
		$arg3 = array_merge($arg3,$arg1);
		$folder=  $_SERVER['DOCUMENT_ROOT'].'/simbgsmg/assets/foto/';
		move_uploaded_file($_FILES["foto2"]["tmp_name"], "$folder".$_FILES["foto2"]["name"]);
	}
	$result = $this->Buka_peta->insert_data('tb_sepadan',$arg2);
	$result = $this->Buka_peta->insert_data('tb_lain',$arg3);
		redirect('Backoffice/bangunan');
	}

	public function edit_simpan($id) {
		$tgl = date('d-m-Y');
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$kelurahan = $_POST['kelurahan'];
		$kecamatan = $_POST['kecamatan'];
		$fungsi = $_POST['fungsi'];
		$kesesuaian = $_POST['kesesuaian'];
		$memiliki_imb = $_POST['memiliki_imb'];
		$no_imb = $_POST['no_imb'];
		$status_kepemilikan = $_POST['status_kepemilikan'];
		$ket_lain = $_POST['ket_lain'];
		$lat = $_POST['lat'];
		$lng = $_POST['lng'];
		$foto1  = $_FILES['foto1']['name'];
		$foto2  = $_FILES['foto2']['name'];
		if (isset($_POST['gs_bangunan'])) {
			$gs_bangunan = $_POST['gs_bangunan'];
		} else {
			$gs_bangunan = '-';
		}
		if (isset($_POST['gs_pantai'])) {
			$gs_pantai =  $_POST['gs_pantai'];
		}else {
			$gs_pantai = '-';
		}
		$gs_bangunan_m =  $_POST['gs_bangunan_m'];
		
		$gs_pantai_m =  $_POST['gs_pantai_m'];

		if (isset($_POST['gs_sungai'])) {
			$gs_sungai = $_POST['gs_sungai'];
		}else{
			$gs_sungai = '-';
		}
	
		$gs_sungai_m = $_POST['gs_sungai_m'];
		if (isset($_POST['gs_waduk'])) {
			$gs_waduk = $_POST['gs_waduk'];
		}else{
			$gs_waduk ='-';
		}
		
		$gs_waduk_m = $_POST['gs_waduk_m'];
		
		if (isset($_POST['gs_danau'])){
			$gs_danau = $_POST['gs_danau'];
		}else{
			$gs_danau ='-';
		}
		
		$gs_danau_m = $_POST['gs_danau_m'];
		if (isset($_POST['gs_rel'])) {
			$gs_rel = $_POST['gs_rel'];
		}else{
			$gs_rel = '-';
		}
		
		$gs_rel_m = $_POST['gs_rel_m'];
		if (isset($_POST['gs_rawa'])) {
			$gs_rawa = $_POST['gs_rawa'];
		}else{
			$gs_rawa = '-';
		}
		
		$gs_rawa_m = $_POST['gs_rawa_m'];
		if (isset($_POST['gs_saluran'])) {
			$gs_saluran = $_POST['gs_saluran'];
		}else{
			$gs_saluran ='-';
		}
		
		$gs_saluran_m = $_POST['gs_saluran_m'];
		if (isset($_POST['gs_sutet'])) {
			$gs_sutet = $_POST['gs_sutet'];
		}else{
			$gs_sutet='-';
		}
		
		$gs_sutet_m = $_POST['gs_sutet_m'];
		if (isset( $_POST['gs_mataair'])) {
			$gs_mataair = $_POST['gs_mataair'];
		}else{
			$gs_mataair = '-';
		}
		
		$gs_mataair_m = $_POST['gs_mataair_m'];
		if (isset($_POST['antar_masa'])) {
			$antar_masa = $_POST['antar_masa'];
		}else{
			$antar_masa = '-';
		}
		if (isset($_POST['masa_a1'])) {
			$masaa1 = $_POST['masa_a1'];
		}else{
			$masaa1 ='-';
		}
		if (isset($_POST['masa_b1'])) {
			$masab1 = $_POST['masa_b1'];
		}else{
			$masab1 = '-';
		}

		$jarak1 = $_POST['masa_b1_m'];
		if (isset( $_POST['masa_a2'])) {
			$masaa2 = $_POST['masa_a2'];
		}else{
			$masaa2 ='-';
		}
		if (isset($_POST['masa_b2'])) {
			$masab2 = $_POST['masa_b2'];
		}else{
			$masab2 = '-';
		}
	
		$jarak2 = $_POST['masa_b2_m'];
		if (isset( $_POST['masa_a3'])) {
			$masaa3 = $_POST['masa_a3'];
		}else{
			$masaa3 = '-';
		}
		if (isset($_POST['masa_b3'])) {
			$masab3 = $_POST['masa_b3'];
		}else{
			$masab3 ='-';
		}
		
		$jarak3 = $_POST['masa_b3_m'];
		
		if (isset($_POST['diatas_drainase'])) {
			$diatas_drainase = $_POST['diatas_drainase'];
		}else{
			$diatas_drainase ='-';
		}
		if (isset($_POST['diatas_kereta'])) {
			$diatas_rel = $_POST['diatas_kereta'];
		}else{
			$diatas_rel ='-';
		}
		if (isset($_POST['gs_luas'])) {
			$kesesuaian_lt_dasar = $_POST['gs_luas'];
		}else{
			$kesesuaian_lt_dasar ='-';
		}
		
		$luas_lt_dasar = $_POST['gs_luas_m'];
		$luas_lahan = $_POST['luas_lahan'];
		if (isset($_POST['koefisien'])) {
			$koefisien = $_POST['koefisien'];
		}else{
			$koefisien ='-';
		}
		$prosen_koefisien = $_POST['koefisien_m'];
		if (isset($_POST['luas_bangunan'])) {
			$kesesuaian_luas_lt = $_POST['luas_bangunan'];
		}else{
			$kesesuaian_luas_lt ='-';
		}

		$luas_bangunan  = $_POST['luas_bangunan_m'];
		if (isset($_POST['jml_lt'])) {
			$kesesuaian_jml_lt = $_POST['jml_lt'];
		}else{
			$kesesuaian_jml_lt ='-';
		}

		$jml_lt  = $_POST['jml_lt_m'];

		if (isset($_POST['tinggi_bangunan'])) {
			$kesesuaian_tinggi = $_POST['tinggi_bangunan'];
		}else{
			$kesesuaian_tinggi ='-';
		}

		$tinggi_banguan  = $_POST['tinggi_bangunan_m'];

		if (isset($_POST['kkop'])) {
			$kkop = $_POST['kkop'];
		}else{
			$kkop ='-';
		}

		$tinggi_kkop  = $_POST['kkop_m'];

		if (isset($_POST['daerah_hijau'])) {
			$daerah_hijau = $_POST['daerah_hijau'];
		}else{
			$daerah_hijau ='-';
		}

		$luas_daerah_hijau  = $_POST['daerah_hijau_m'];

		if (isset($_POST['erth'])) {
			$rth = $_POST['erth'];
		}else{
			$rth ='-';
		}

		$luas_rth  = $_POST['erth_m'];

		if (isset($_POST['3lt'])) {
			$tiga_lt = $_POST['3lt'];
		}else{
			$tiga_lt ='-';
		}

		$tiga_lt_m  = $_POST['3lt_m'];

		if (isset($_POST['tinggi_pagar'])) {
			$tinggi_pagar = $_POST['tinggi_pagar'];
		}else{
			$tinggi_pagar ='-';
		}

		$tinggi_pagar_m  = $_POST['tinggi_pagar_m'];

		if (isset($_POST['bukaan'])) {
			$bukaan = $_POST['bukaan'];
		}else{
			$bukaan ='-';
		}

		if (isset($_POST['resapan'])) {
			$resapan = $_POST['resapan'];
		}else{
			$resapan ='-';
		}
		if (isset($_POST['kondisi_drainase'])) {
			$kondisi_drainase = $_POST['kondisi_drainase'];
		}else{
			$kondisi_drainase ='-';
		}
		if (isset($_POST['ruang_parkir'])) {
			$ruang_parkir = $_POST['ruang_parkir'];
		}else{
			$ruang_parkir ='-';
		}
		$ket  = $_POST['ket'];
		$arg = array('Kecamatan' => $kecamatan,
		'Kelurahan' => $kelurahan,
		'Nama_Pemilik' =>$nama,
		'Alamat' => $alamat,
		'Tanggal' => $tgl,
		'Fungsi' => $fungsi,
		'Kesesuaian_Bangunan' => $kesesuaian,
		'Memiliki_IMB' => $memiliki_imb,
		'Nomor_IMB' => $no_imb,
		'Status_Kepemilikan' =>$status_kepemilikan,
		'ket_lain'=>$ket_lain,
		'Lat'=>$lat,
		'Lng'=>$lng,
	);

		$data1 = array("table_name" => 'tb_bangunan',"id"=>$id);
		$result = $this->Buka_peta->edit_record_id($data1,$arg);
		$last_id = $this->db->insert_id();
		$arg2 = array('id_bangunan' => $last_id,
		'GS_Bangunan' =>$gs_bangunan,
		'GS_Bangunan_m' =>$gs_bangunan_m,
		'GS_Pantai' =>$gs_pantai,
		'GS_Pantai_m' =>$gs_pantai_m,
		'GS_Sungai' =>$gs_sungai,
		'GS_Sungai_m' =>$gs_sungai_m,
		'GS_Waduk' =>$gs_waduk,
		'GS_Waduk_m' =>$gs_waduk_m,
		'GS_Danau' =>$gs_danau,
		'GS_Danau_m' =>$gs_danau_m,
		'GS_Rel' =>$gs_rel,
		'GS_Rel_m' =>$gs_rel_m,
		'GS_Rawa' =>$gs_rawa,
		'GS_Rawa_m' =>$gs_rawa_m,
		'GS_Saluran' =>$gs_saluran,
		'GS_Saluran_m' =>$gs_saluran_m,
		'GS_Sutet' => $gs_sutet,
		'GS_Sutet_m' =>$gs_sutet_m,
		'GS_mataair' =>$gs_mataair,
		'GS_mataair_m' =>$gs_mataair_m,
		'antar_masa' => $antar_masa,
		'masaa1'=>$masaa1,
		'masab1'=>$masab1,
		'jarak1'=>$jarak1,
		'masaa2'=>$masaa2,
		'masab2'=>$masab2,
		'jarak2'=>$jarak2,
		'masaa3'=>$masaa3,
		'masab3'=>$masab3,
		'jarak3'=>$jarak3,
	);
	$arg3 = array('id_bangunan' => $last_id,
				'Diatas_Drainase' => $diatas_drainase,
				'Diatas_rel'=> $diatas_rel,
				'Kesesuaian_lantai_dasar'=>$kesesuaian_lt_dasar,
				'Luas_Lantai_Dasar' =>$luas_lt_dasar,
				'Luas_Lahan' => $luas_lahan,
				'Koefisien_Dasar' => $koefisien,
				'Prosen_Koefisien_Dasar' => $prosen_koefisien,
				'Kesesuaian_Luas_lantai' =>$kesesuaian_luas_lt,
				'Luas_Lantai' => $luas_bangunan,
				'Kesesuaian_Jumlah_Lantai' => $kesesuaian_jml_lt,
				'Jumlah_Lantai' => $jml_lt,
				'Kesesuaian_Ketinggian' => $kesesuaian_tinggi,
				'Ketinggian' => $tinggi_banguan,
				'KKOP_Penerbangan' => $kkop,
				'KKOP_Penerbangan_m' => $tinggi_kkop,
				'Kesesuaian_Daerah_Hijau' => $daerah_hijau,
				'Luas_Daerah_Hijau' => $luas_daerah_hijau,
				'Kesesuaian_e_RTH' => $rth,
				'Prosentase_erth' => $luas_rth,
				'tiga_lt' => $tiga_lt,
				'tiga_lt_m' => $tiga_lt_m,
				'Kesesuaian_tinggi_pagar' => $tinggi_pagar,
				'Tinggi_pagar_m' => $tinggi_pagar_m,
				'Bukaan_pintu' => $bukaan,
				'memiliki_sumur_resapan' => $resapan,
				'Kondisi_drainase'=>$kondisi_drainase,
				'Ruang_parkir'=> $ruang_parkir,
				'keterangan' => $ket,
	);
	
	if ($foto1 != null) {
		$arg1= array("foto1" => $foto1,);
		$arg3 = array_merge($arg3,$arg1);
		$folder=  $_SERVER['DOCUMENT_ROOT'].'/simbgsmg/assets/foto/';
		move_uploaded_file($_FILES["foto1"]["tmp_name"], "$folder".$_FILES["foto1"]["name"]);
	}
	if ($foto2 != null) {
		$arg1= array("foto2" => $foto2,);
		$arg3 = array_merge($arg3,$arg1);
		$folder=  $_SERVER['DOCUMENT_ROOT'].'/simbgsmg/assets/foto/';
		move_uploaded_file($_FILES["foto2"]["tmp_name"], "$folder".$_FILES["foto2"]["name"]);
	}
	$sepadan = $this->Buka_peta->frd('tb_sepadan',$id,'id_bangunan');
	$id_spd = $sepadan[0]->id;
	$lain = $this->Buka_peta->frd('tb_lain',$id,'id_bangunan');
	$id_lain = $lain[0]->id;
	$data2 = array("table_name" => 'tb_sepadan',"id"=>$id_spd);
	$result = $this->Buka_peta->edit_record_id($data2,$arg2);

	$data3 = array("table_name" => 'tb_lain',"id"=>$id_lain);
	$result = $this->Buka_peta->edit_record_id($data3,$arg3);
	redirect('Backoffice/bangunan');
	}
	public function hapus_pengguna($id) {
       
        $result = $this->Buka_peta->delete_record('users', $id,'id');
        if ($result != null) {
            echo "<script>alert('data sukses dihapus')</script>";
            redirect('Backoffice/pengguna');
        }else{
            echo 'tess';
        }
    }
	public function hapus_bangunan($id) {
       
        $result = $this->Buka_peta->delete_record('tb_bangunan', $id,'id');
		$result = $this->Buka_peta->delete_record('tb_sepadan', $id,'id_bangunan');
		$result = $this->Buka_peta->delete_record('tb_lain', $id,'id_bangunan');
        if ($result != null) {
            echo "<script>alert('data sukses dihapus')</script>";
            redirect('Backoffice/pengguna');
        }else{
            echo 'tess';
        }
    }
	public function sign_out()
	{
		$this->session->unset_userdata('user_id');
		redirect(base_url('Backoffice'));
	}
}

