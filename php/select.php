<?php
	header("Access-Control-Allow-Origin: *");
	header("Content-type:text/html;charset=utf-8");
	$db = mysql_connect("bdm267988135.my3w.com","bdm267988135","XQ1993330OREO");
	mysql_query("SET NAMES 'UTF8'");
	
	if($db){
		mysql_select_db("bdm267988135_db",$db);
		$sql = "SELECT * FROM  information";
		$result = mysql_query($sql);
		$arr = array();
		$row = mysql_fetch_row($result);
		
		$results = array();
		while($row = mysql_fetch_assoc($result)){
			$results[] = $row;
		}
		echo json_encode($results);
		mysql_close($db);

	}else{
		echo "连接错误";
	}
?>