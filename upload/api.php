<?php
$result=array(
	'success'	=>	FALSE,
);

$key='uploadfile';
if(empty($_FILES) || empty($_FILES[$key])) exit(json_encode($result));

$fa=$_FILES[$key];

$hash='';
$str='abcdefghijklnmopqrstuvwxyz';

$tmp=explode('.', $fa['name']);
$suffix=$tmp[count($tmp)-1];

$len=13;
for($i=0;$i<$len;$i++)$hash.=substr($str,rand(0, strlen($str)-1),1);

$path='up'.DIRECTORY_SEPARATOR.substr($hash,0,2).DIRECTORY_SEPARATOR.substr($hash,2,2).DIRECTORY_SEPARATOR.substr($hash,4,2).DIRECTORY_SEPARATOR;
$target=$path.substr($hash,6,7).'.'.$suffix;
if(!is_dir($path)) mkdir($path, 0777,TRUE);

if(copy($_FILES[$key]['tmp_name'], $target)){
	$result['url']=$target;
	$result['success']=TRUE;
}

exit(json_encode($result));
