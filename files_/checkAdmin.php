<?
	$name = $_GET["admin"];
	if($name == ""){
		echo "<h1 style='margin: 20% 45%'>Nice try!</h1>";
	}else if($name == "winl"){
		echo "1";
	}else{
		echo "0";
	}
?>