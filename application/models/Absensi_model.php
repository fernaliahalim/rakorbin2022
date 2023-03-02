<?php

class Absensi_model extends CI_Model
{
	public function add_absensi($nrp)
	{
		$sql = "INSERT INTO absensi(nrp)
				VALUES(?);";
		return $this->db->query($sql, $nrp);
	}

	public function cek_absensi($nrp)
	{
		$sql = "SELECT * FROM absensi
				WHERE nrp=?
				AND tanggal=DATE(NOW());";
		return $this->db->query($sql, $nrp);
	}

	public function view_absensi()
	{
		$sql = "SELECT absensi.*, 
					   peserta.*
				FROM absensi
				JOIN peserta ON peserta.nrp = absensi.nrp
				ORDER BY absensi.id DESC;";
		return $this->db->query($sql);
	}

	public function view_belum_absen()
	{
		$sql = "SELECT absensi.*, 
						peserta.*
				FROM absensi
				RIGHT JOIN peserta ON peserta.nrp = absensi.nrp
				WHERE absensi.id IS NULL
				ORDER BY peserta.nrp ASC;";
		return $this->db->query($sql);
	}
}
