<?php 
$db = new PDO('sqlite:zettel.sqlite');
$db->exec('CREATE TABLE IF NOT EXISTS zettel (id, key, value, PRIMARY KEY (id, key))');


if (isset($_GET['action'])){
	$action = $_GET['action'];
	if ($action == 'getAll') {
		$res = $db->query("SELECT * FROM zettel");
		if ($res){
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

extract($_POST);

if (isset($id)){
	if (isset($pos))  save($id, 'pos',  $pos);
	if (isset($size)) save($id, 'size', $size);
	if (isset($text)) save($id, 'text', $text);
}

function save($id,$key,$value){
	global $db;
	if (is_array($value)) $value=implode(',',$value);
	echo "Saving $id,$key";
	$sql = "INSERT OR REPLACE INTO zettel (id,key,value) VALUES ('$id','$key','$value') ";
	$res = $db->exec($sql);
	// var_dump($res);
}