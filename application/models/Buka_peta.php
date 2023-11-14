<?php
class Buka_peta extends CI_Model
{
    public function insert_data($tablename, $arg1)
    {
        $this->db->insert($tablename, $arg1);
        if ($this->db->affected_rows() > 0)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }
    public function frd($tablename, $args,$field)
    {
        if ($args != NULL)
        {
            $this->db->where([$field => $args]);
            $query = $this->db->get($tablename);
        }
        else
        {
            $query = $this->db->get($tablename);
        }

        if ($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return NULL;
        }
    }

    public function titik_bangunan($tablename,$args,$field){
        $bangunan = $this->frd($tablename,$args,$field);
		$bng = '';
        if ($bangunan != null) {
            foreach ($bangunan as $k) {
                $koor = $k->Lng.','.$k->Lat;
                $bng = $bng.'{
                    "type": "Feature","properties": {"id":"'.$k->id.'","Pemilik":"'.$k->Nama_Pemilik.'","Fungsi":"'.$k->Fungsi.'","Memiliki_IMB":"'.$k->Memiliki_IMB.'","No_IMB":"'.$k->Nomor_IMB.'","show_on_map": true},
                    "geometry": {"type": "Point","coordinates": ['.$koor.'] }
                },';

            }
        }else{
            $bng = NULL;
        }
        return $bng;
    }

    public function titik_rth($tablename,$args,$field,$att){
        $bangunan = $this->frd($tablename,$args,$field);
		$bng = '';
        if ($bangunan != null) {
            foreach ($bangunan as $k) {
                if ($att == 'Kesesuaian_e_RTH') {
                    $hasil = $k->Kesesuaian_e_RTH;
                }elseif ($att == 'GS_Bangunan') {
                    $hasil = $k->GS_Bangunan;
                }elseif ($att == 'GS_Pantai') {
                    $hasil = $k->GS_Pantai;
                }elseif ($att == 'GS_Sungai') {
                    $hasil = $k->GS_Sungai;
                }elseif ($att == 'GS_Waduk') {
                    $hasil = $k->GS_Waduk;
                }elseif ($att == 'GS_Danau') {
                    $hasil = $k->GS_Danau;
                }elseif ($att == 'GS_Rel') {
                    $hasil = $k->GS_Rel;
                }elseif ($att == 'GS_Rawa') {
                    $hasil = $k->GS_Rawa;
                }elseif ($att == 'GS_Saluran') {
                    $hasil = $k->GS_Saluran;
                }elseif ($att == 'GS_Sutet') {
                    $hasil = $k->GS_Sutet;
                }elseif ($att == 'GS_mataair') {
                    $hasil = $k->GS_mataair;
                }
                $id = $k->id_bangunan;
                $lain = $this->Buka_peta->frd('tb_bangunan',$id,'id');
                $koor = $lain[0]->Lng.','.$lain[0]->Lat;
                $bng = $bng.'{
                    "type": "Feature","properties": {"id":"'.$lain[0]->id.'","Pemilik":"'.$lain[0]->Nama_Pemilik.'","Fungsi":"'.$lain[0]->Fungsi.'","Memiliki_IMB":"'.$lain[0]->Memiliki_IMB.'","No_IMB":"'.$lain[0]->Nomor_IMB.'","'.$att.'":"'.$hasil.'","show_on_map": true},
                    "geometry": {"type": "Point","coordinates": ['.$koor.'] }
                },';

            }
        }else{
            $bng = NULL;
        }
        return $bng;
    }
    public function peta_admin($tablename){
        $si = '';
		$sql="SELECT * FROM ".$tablename;    
    	$query = $this->db->query($sql);
		$irigasi = $query->result();
        if ($irigasi != null) {
            foreach($irigasi as $i) {
                $des = $i->geojson;
                $trim = trim($des);
                $jml = strlen($trim);
                $des = substr(trim($trim),0,$jml-1);
                $json = json_decode($des,TRUE);
                $des = json_encode($json).",";
                $si = $si.$des;
            }
        }else{
            $si = NULL;
        }
        return $si;
    }
    public function edit_record_id($args, $data)
    {
        extract($args);
        $this->db->where('id', $id);
        $this->db->update($table_name, $data);
        return TRUE;
    } 

    
    function tb_sepadan($att)
    {
        $this->db->select("tb_bangunan.Nama_Pemilik, 
        tb_bangunan.Alamat, 
        tb_bangunan.Kecamatan, 
        tb_bangunan.Kelurahan, 
        tb_sepadan.".$att.", tb_sepadan.".$att."_m");
        $this->db->from('tb_sepadan');
        $this->db->join('tb_bangunan',"tb_sepadan.id_bangunan = tb_bangunan.id"); 
        $query = $this->db->get();
        if ($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return NULL;
        } 
    }
    function tb_profil($fiedl,$jml_field,$fiedl2)
    {
        if ($jml_field == 1) {
            $this->db->select("	tb_lain.".$fiedl.",tb_bangunan.Nama_Pemilik,tb_bangunan.Alamat,tb_bangunan.Kecamatan,tb_bangunan.Kelurahan");
        }else{
            $this->db->select("	tb_lain.".$fiedl.",".$fiedl2.",tb_bangunan.Nama_Pemilik,tb_bangunan.Alamat,tb_bangunan.Kecamatan,tb_bangunan.Kelurahan");
        }
        
       
        $this->db->from('tb_lain');
        $this->db->join('tb_bangunan',"tb_lain.id_bangunan = tb_bangunan.id"); 
        $query = $this->db->get();
        if ($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return NULL;
        } 
    }
}
?>