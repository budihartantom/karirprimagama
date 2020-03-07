<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
/**
 * Safe Code
 * Created 		: 18 November 2015
 * Author  		: Anton Kristianto
 * Email 		: antonkrs@gmail.com
 * Since       	: Version 1.2 Modified
 * Dilarang merubah apapun tanpa sepengetahuan kuncen
 */
 
class Safecode {
	function _decode($sData){
		$sKey = 'cjN6NHI0MzU=';
		$sResult = '';
		$sData   = $this->decode_base64($sData);
		for($i = base64_decode('MA=='); $i < strlen($sData); $i ++){
			$sChar    = substr($sData, $i, base64_decode('MQ=='));
			$sKeyChar = substr(base64_decode($sKey), ($i % strlen(base64_decode($sKey))) - base64_decode('MQ=='), base64_decode('MQ=='));
			$sChar    = chr(ord($sChar) - ord($sKeyChar));
			$sResult .= $sChar;
		}
		return $sResult;
	}
	
	private function decode_base64($sData) {
		$sBase64 = strtr($sData, '-_', '+/');
		return $this->_decrypt(base64_decode($sBase64));
	}

	private function _decrypt($sData){
		$len = strlen($sData);
		$i = base64_decode('MA==');
		$chr = "";
		while($i < $len){
			$ord = ord($sData[$i]);
			$pos = $ord - base64_decode('MTA=');
			$chr .= chr($pos);
			$i++;
		}
		return $chr;
	}
}
// END Session Class
/* End of file Safecode.php */
/* Location: ./system/application/libraries/Safecode.php */