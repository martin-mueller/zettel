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

//extract($_POST); //the worst part ;D
// print_r($_POST);
// echo file_get_contents("php://input");
if (($id = r($id))>0){

	save($id, 'pos',  r('pos'));
	save($id, 'size', r('size'));
	save($id, 'text', r('text'));
}

function save($id,$key,$value){
	global $db;
	if (is_array($value)) $value=implode(',',$value);
	echo "Saving $id,$key";
	$sql = "INSERT OR REPLACE INTO zettel (id,key,value) VALUES ('$id','$key','$value') ";
	$res = $db->exec($sql);
	// var_dump($res);
}

function r($key){
	if (isset ($_REQUEST[$key])) return  $_REQUEST[$key];
	return false;
}