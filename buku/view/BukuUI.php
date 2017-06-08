<?php 

require_once 'View.php';
/**
* 
*/
class BukuUI extends View
{
	
	public function tampilBuku()
	{
		include_once 'model/Buku.php';

		$brt = new Buku();

		$isi_buku = $brt->ambilBuku();

		include_once 'pages/isibuku.php';
		$this->end();
	}
}



 ?>