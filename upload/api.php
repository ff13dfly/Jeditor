<?php
$result=array(
	'success'	=>	FALSE,
);

echo json_encode($_GET).'<hr>';	
echo json_encode($_POST).'<hr>';
echo json_encode($_FILES).'<hr>';	

$key='uploadfile';
if(empty($_FILES) || empty($_FILES[$key])) exit(json_encode($result));

exit();
