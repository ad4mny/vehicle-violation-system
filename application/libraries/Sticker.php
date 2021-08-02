<?php defined('BASEPATH') or exit('No direct script access allowed');

require_once(APPPATH . 'libraries/phpqrcode/qrlib.php');

class Sticker
{
	public function generate($data)
	{
		$img_path = "./assets/upload/vehicle-sticker/" . $data . ".png";
		QRcode::png($data, $img_path, 'H', 10);
	}
}
