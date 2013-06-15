<?
	$mode = $_GET['mode'];
	
	$filename = '../data';	
	if($mode == 'w'){
		$f = fopen($filename, 'w+');
		$data = $_POST['dataWrite'];
		fwrite($f, $data);
		fclose($f);
	}else if($mode == 'r'){
		$f = fopen($filename, 'r');
		echo fread($f, filesize($filename));
		fclose($f);
	}
?>