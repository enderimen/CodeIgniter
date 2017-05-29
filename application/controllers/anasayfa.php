<?php if ( ! defined('BASEPATH')) exit('Bu scripte direkt erişim izniniz yok...');
##Author:Ender İMEN##
##Tarih :29.05.2017##
##Saat  :17:04##

class Anasayfa extends CI_Controller {
	
	public function index(){

		$data=array(
			"site_baslik"=>"Codeigniter ile Örnekler",
			"icerik"	 =>"Codeigniter çok eğlenceli.",
			"author"	 =>"Ender İMEN"
		);
		//Oluşturmuş olduğumuz data verisini example sayfasına göderiyoruz.
		//data dizisini $data["site_baslik"]=.... şeklindede kullanabilirdik.
		//Burada tanımladığımız dizi indisleri view de değişken olarak kullanıyoruz. 
		$this->load->view("example",$data);
	}
	public function giris()
	{
		$kadi=$this->input->post('kadi');
		$sifre=$this->input->post('sifre');

		if ($kadi=="Ender" && $sifre=="1") {
			echo "Hoşgeldiniz ".$kadi." Bey";
		}
		else{
			echo "Giriş Hatalı";
		}
	}
	public function	parameters(){
		$sayi=$this->uri->segment(1);
		//Kullanıcının girdiği parametreleri yakalamak için kullanılan yöntemdir.Url indisine göre değer alır
		
		echo $sayi;
	}
	/*
	public function	parameters($p1,$p2){//Kullanıcının girdiği para. yakalamak için kullanılır.Url /..../..../ noktalı yerlere sırasıyla ne girilirse onu p1,p2 değişkenleri yakalar.
		
		$sayi=$this->uri->segment(1);
		echo $sayi;
	}
	*/
}

?>