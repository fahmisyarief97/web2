<?php 

/**
* 
*/

include_once 'Model.php';

class Berita extends Model
{
	
	public function ambilBerita()
	{
		$query = $this->db->prepare("SELECT * FROM berita");
    	$query->execute();
    	$data = $query->fetchAll();

    	return $data;
	}

		public function setBerita($tanggal,$judul,$isi,$id_kategori)

		public function ambilBerita($id)

		public function ubahBerita($id_berita,$tanggal,$judul,$isi,$id_kategori)
		
		

}


 ?>