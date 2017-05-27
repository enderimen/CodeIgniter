<?php 

/**
* 
*/
class dbislem extends CI_Controller
{
	
	public function index()
	{
		$rows=$this->db->get("personel")->result();//Tüm sonuçları getirmek için kullanılacak metot
		
		//$rows=$this->db->get("personel")->row();//Tek bir satır döndürür.
	
		//print_r($query); Dizi şeklinde ekrana basmak için

		$viewData=array("rows"=>$rows);//tek satır okuduk ve değişkene aktardık

		$this->load->view("dbislem",$viewData);
	}
}



 ?>