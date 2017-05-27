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


	public function where()
	{
		$rows=$this//BU
			->db//veritabanından
			->where("personel_adi","Ender")->get("personel")//personel adı = Ender olan ..... where("personel_adi =!","Ender") Adı ender olmayanları getir 
			->result();//kayıtları  getir.

			print_r($rows);//yazdır.
	}
	public function or_where()
	{
		$rows=$this//BU
			->db//veritabanından
			->or_where("personel_adi","Ender")//Adı ender olan veya
			->or_where("personel_adi","Ali")//adı Ali olan
			->get("personel")//personel adı = Ender olan veya ali olan 
			->result();//kayıtları  getir.



			$viewData=array("rows"=>$rows);//tek satır okuduk ve değişkene aktardık

			$this->load->view("dbislem",$viewData);


			//print_r($rows);//yazdır.
	}
}



 ?>