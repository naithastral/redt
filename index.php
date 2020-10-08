<?php
$url=$_SERVER['REQUEST_URI'];
$u=explode("/",$url);

$id=trim($u[1]);
$idELength=substr($id,4,1);
$idE1=substr($id,0,$idELength+1);
$idE2=substr($id,-$idELength);
$idE=get_string_between($id,$idE1,$idE2);

$id=trim($u[2]);
$idELength=substr($id,4,1);
$idE1=substr($id,0,$idELength+1);
$idE2=substr($id,-$idELength);
$idE=get_string_between($id,$idE1,$idE2);

$id=trim($u[3]);
$idELength=substr($id,4,1);
$idE1=substr($id,0,$idELength+1);
$idE2=substr($id,-$idELength);
$idE=get_string_between($id,$idE1,$idE2);

// Show Image
for($i=5;$i<=count($u)-1;$i++){
	$imageSrc.=$u[$i]."/";
}
$imageSrc=rtrim($imageSrc,"/");
$imageLink="https://s3.amazonaws.com/".$imageSrc;


// Track Openers
$rdt="35.245.247.191";
$ip=$_SERVER["REMOTE_ADDR"];
$urlRDT = "$rdt/RDT/open.php";
$fields = array('link'=>urlencode($url),
'ip'=>urlencode($ip));
$fields_string="";
foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
$fields_string = rtrim($fields_string,'&');

$ch = curl_init();

curl_setopt($ch,CURLOPT_URL,$urlRDT);
curl_setopt($ch,CURLOPT_POST,true);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$fields_string);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
curl_setopt($ch, CURLOPT_TIMEOUT, 30); 
$result = curl_exec($ch);
curl_close($ch);
//header("location: $imageLink");
function get_string_between($string, $start, $end){
	$string = ' ' . $string;
	$ini = strpos($string, $start);
	if ($ini == 0) return '';
	$ini += strlen($start);
	$len = strpos($string, $end, $ini) - $ini;
	return substr($string, $ini, $len);
}
?>
