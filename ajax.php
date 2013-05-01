<?php 
$db = new PDO('sqlite:zettel.sqlite');
$db->exec('CREATE TABLE IF NOT EXISTS zettel (id, key, value, PRIMARY KEY (id, key))');


if (isset($_GET['action'])){
	$action = $_GET['action'];
	if ($action == 'getAll') {
		$res = $db->query("SELECT * FROM zettel");
		if ($res){
			$data = array();
			while($row = $res->fetch(PDO::FETCH_ASSOC)){
					$data[] = $row;
				}
				echo json_encode($data);
			}
		else echo 'null';	
	}
	elseif ($action == 'clearAll') {

		echo $db->exec('DELETE FROM zettel');
	}
}
$id = r('id');
if ($id > ''){
	if(preg_match('/^drag\d{1,2}$/', $id) == 1){
		if (r('pos')) save($id, 'pos',  r('pos'));
		if (r('size')) save($id, 'size', r('size'));
		if (r('text')) save($id, 'text', r('text'));
	}
	else "Server Error: id not valid, cannot save";	
}

function save($id,$key,$value){
	echo $key;
	global $db;
	if (is_array($value)) $value=implode(',',$value);
	echo "Saving $id,$key \n";
	$sql = "INSERT OR REPLACE INTO zettel (id,key,value) VALUES ('$id','$key','$value') ";
	echo $sql;
	$res = $db->exec($sql);
	if ($res === false) echo "\n Server Error:  is zettel.sqlite writable?";
	echo "\n dbo->exec result : "; var_dump($res);
}
function r($key){

	if (isset ($_REQUEST[$key])) return  $_REQUEST[$key];
	return false;
}