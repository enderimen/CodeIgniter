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
}

?>