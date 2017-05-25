<?php if ( ! defined('BASEPATH')) exit('Bu scripte direkt erişim izniniz yok...');

class Anasayfa extends CI_Controller {
	
	public function index(){
		$this->load->view('form');
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
		$sayi=$this->uri->segment(1);//Kullanıcının girdiği parametreleri yakalamak için kullanılan yöntemdir.Url indisine göre değer alır
		echo $sayi;
	}

	public function	parameters($p1,$p2){//Kullanıcının girdiği para. yakalamak için kullanılır.Url /..../..../ noktalı yerlere sırasıyla ne girilirse onu p1,p2 değişkenleri yakalar.
		echo $sayi;
		$sayi=$this->uri->segment(1);
	}

}

?>