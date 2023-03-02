<?php

class Peserta_model extends CI_Model
{
	public function cek_peserta($nrp)
	{
		$sql = "SELECT * FROM peserta WHERE nrp=?;";
		return $this->db->query($sql, $nrp);
	}
}
