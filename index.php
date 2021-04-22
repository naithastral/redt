<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
if(empty($_GET)){
	header("location:./404");
	exit();
}
function random($length){
	$string   ='aA0zZ1LeE2rR3tT4yY5uU6iI7oO8pP9qQ0sS1LdD2fF3gG4hH5jJ6kK7lL8mM9wWxX0Cc1vV2bBnN';
	$rc="";
	for($i=0;$i<$length;$i++)
	{
		$rand = rand(0,strlen($string)-1);
		$rc.=$string[$rand];
	}
	return($rc);
}
if($_GET["utm_campaign"]=="o" or $_GET["utm_campaign"]=="o" or $_GET["cmp"]=="o" or $_GET["pompa"]=="o" or $_GET["medium"]=="o" or $_GET["itm_campaign"]=="o" or $_GET["ctrl"]=="open" or $_GET["alt"]=="open" or $_GET["kla"]=="open"){
	if(isset($_GET["suimc"])){
		$idsend=$_GET["suimc"];
	}
	if(isset($_GET["uzbas"])){
		$idemail=$_GET["uzbas"];
	}
	if(isset($_GET["utm_content"])){
		$idsend=$_GET["utm_content"];
	}
	if(isset($_GET["seqid"])){
		$idemail=$_GET["seqid"];
	}
	if(isset($_GET["mainid"])){
		$idsend=$_GET["mainid"];
	}
	if(isset($_GET["utm_term"])){
		$idemail=$_GET["utm_term"];
	}
	if(isset($_GET["scn"])){
		$idsend=$_GET["scn"];
	}
	if(isset($_GET["icy"])){
		$idemail=$_GET["icy"];
	}
	if(isset($_GET["utm_source"])){
		$idsend=$_GET["utm_source"];
	}
	if(isset($_GET["torrefera"])){
		$idemail=$_GET["torrefera"];
	}
	if(isset($_GET["serema"])){
		$idsend=$_GET["serema"];
	}
	if(isset($_GET["utm_medium"])){
		$idemail=$_GET["utm_medium"];
	}
	if(isset($_GET["itm_source"])){
		$idsend=$_GET["itm_source"];
	}
	
	if(isset($_GET["itm_medium"])){
		$idemail=$_GET["itm_medium"];
	}
	if(isset($_GET["sn"])){
		$idsend=$_GET["sn"];
	}
	if(isset($_GET["em"])){
		$idemail=$_GET["em"];
	}
	if(isset($_GET["subid"])){
		$idsend=$_GET["subid"];
	}
	if(isset($_GET["mid"])){
		$idemail=$_GET["mid"];
	}
	if(isset($_GET["mall"])){
		$idemail=$_GET["mall"];
	}
	if(isset($_GET["stone"])){
		$idsend=$_GET["stone"];
	}
	if(isset($_GET["piedra"])){
		$idemail=$_GET["piedra"];
	}
	if(isset($_GET["barra"])){
		$idsend=$_GET["barra"];
	}
	if($idemail=="qs" or $idemail=="qs/"  ){
		$r=rand(0,9999999999)+1000000000;
		$idemail= 0 . $r;
	}
	$ip=$_SERVER["REMOTE_ADDR"];
	$explode=explode(".",$ip);
	foreach($explode as $i){
		$s=dechex($i);
		$ipp.=$s."_";
	}
	$string ='56789';
	$r=$string[rand(0,4)];
	$linkC.=random(4).$r.random($r-4).$idsend.random($r)."/";
	$r=$string[rand(0,4)];
	$linkC.=random(4).$r.random($r-4).$idemail.random($r)."/";
		
	$ipp=rtrim($ipp,"_");
	$l="/c/".$linkC."/".$ipp;
	$rdt="35.245.247.191";
	$url = "$rdt/RDT/open.php";
	$fields = array('link'=>urlencode($l),
	'ip'=>urlencode($ip));
	$fields_string="";
	foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
	$fields_string = rtrim($fields_string,'&');

	$ch = curl_init();

	//set the url, number of POST vars, POST data
	curl_setopt($ch,CURLOPT_URL,$url);
	curl_setopt($ch,CURLOPT_POST,true);
	curl_setopt($ch, CURLOPT_HEADER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch,CURLOPT_POSTFIELDS,$fields_string);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
	curl_setopt($ch, CURLOPT_TIMEOUT, 30); 

	//execute post
	$result = curl_exec($ch);
	curl_close($ch);
}
if($_GET["enabling"]=="administra" or $_GET["immatricu"]=="Anique" or $_GET["phpsource"]=="affichstatistics" or $_GET["paysassur"]=="appautr" or $_GET["paysassur"]=="alginspa" or $_GET["trafictack"]=="mainsuit" or $_GET["utm_campaign"]=="c" or $_GET["itm_cadaz"]=="c" or $_GET["sukunashegue"]=="statistics" or $_GET["consrtiu"]=="i"  or $_GET["kamp"]=="c" or $_GET["op"]=="c" or $_GET["utm_campaign"]=="1" or $_GET["cmp"]=="c" or $_GET["pompa"]=="c" or $_GET["medium"]=="c" or $_GET["itm_campaign"]=="c" or $_GET["ctrl"]=="statistics" or $_GET["alt"]=="statistics" or $_GET["sogiking"]=="statistics" or $_GET["alts"]=="statistics" or $_GET["kla"]=="statistics" or $_GET["ble"]=="statistics" or $_GET["alt"]=="statistics1" or $_GET["src"]=="youtube" or $_GET["youbicane"]=="appsuite"){
	if(isset($_GET["mettra"])){
		$idsend=$_GET["mettra"];
	}
	if(isset($_GET["consen"])){
		$idemail=$_GET["consen"];
	}
	if(isset($_GET["appid"])){
		$idsend=$_GET["appid"];
	}
	if(isset($_GET["apkid"])){
		$idemail=$_GET["apkid"];
	}
	if(isset($_GET["utmcid"])){
		$idsend=$_GET["utmcid"];
	}
	if(isset($_GET["utmdid"])){
		$idemail=$_GET["utmdid"];
	}
	if(isset($_GET["suimc"])){
		$idsend=$_GET["suimc"];
	}
	if(isset($_GET["uzbas"])){
		$idemail=$_GET["uzbas"];
	}
	if(isset($_GET["utm_content"])){
		$idsend=$_GET["utm_content"];
	}
	if(isset($_GET["seqid"])){
		$idemail=$_GET["seqid"];
	}
	if(isset($_GET["mainid"])){
		$idsend=$_GET["mainid"];
	}
	if(isset($_GET["utm_term"])){
		$idemail=$_GET["utm_term"];
	}
	if(isset($_GET["scn"])){
		$idsend=$_GET["scn"];
	}
	if(isset($_GET["icy"])){
		$idemail=$_GET["icy"];
	}
	if(isset($_GET["utm_source"])){
		$idsend=$_GET["utm_source"];
	}
	if(isset($_GET["torrefera"])){
		$idemail=$_GET["torrefera"];
	}
	if(isset($_GET["serema"])){
		$idsend=$_GET["serema"];
	}
	if(isset($_GET["utm_medium"])){
		$idemail=$_GET["utm_medium"];
	}
	if(isset($_GET["itm_source"])){
		$idsend=$_GET["itm_source"];
	}
	
	if(isset($_GET["itm_medium"])){
		$idemail=$_GET["itm_medium"];
	}
	if(isset($_GET["sn"])){
		$idsend=$_GET["sn"];
	}
	if(isset($_GET["em"])){
		$idemail=$_GET["em"];
	}
	if(isset($_GET["subid"])){
		$idsend=$_GET["subid"];
	}
	if(isset($_GET["mid"])){
		$idemail=$_GET["mid"];
	}
	if(isset($_GET["mall"])){
		$idemail=$_GET["mall"];
	}
	if(isset($_GET["stone"])){
		$idsend=$_GET["stone"];
	}
	if(isset($_GET["piedra"])){
		$idemail=$_GET["piedra"];
	}
	if(isset($_GET["barra"])){
		$idsend=$_GET["barra"];
	}
	if($idemail=="qs" or $idemail=="qs/"  ){
		$r=rand(0,9999999999)+1000000000;
		$idemail= 0 . $r;
	}
	$ip=$_SERVER["REMOTE_ADDR"];
	$explode=explode(".",$ip);
	foreach($explode as $i){
		$s=dechex($i);
		$ipp.=$s."_";
	}
	$string ='56789';
	$r=$string[rand(0,4)];
	$linkC.=random(4).$r.random($r-4).$idsend.random($r)."/";
	$r=$string[rand(0,4)];
	$linkC.=random(4).$r.random($r-4).$idemail.random($r)."/";
		
	$ipp=rtrim($ipp,"_");
	$l="/c/".$linkC."/".$ipp;
	$rdt="35.245.247.191";
	$url = "$rdt/RDT/click.php";
	$fields = array('link'=>urlencode($l),
	'ip'=>urlencode($ip));
	$fields_string="";
	foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
	$fields_string = rtrim($fields_string,'&');

	$ch = curl_init();

	//set the url, number of POST vars, POST data
	curl_setopt($ch,CURLOPT_URL,$url);
	curl_setopt($ch,CURLOPT_POST,true);
	curl_setopt($ch, CURLOPT_HEADER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch,CURLOPT_POSTFIELDS,$fields_string);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
	curl_setopt($ch, CURLOPT_TIMEOUT, 30); 

	//execute post
	$result = curl_exec($ch);
	curl_close($ch);
	header("location:$result");
}
if($_GET["enabling"]=="udministra" or $_GET["immatricu"]=="Unique" or $_GET["phpsource"]=="affichunsub" or $_GET["paysassur"]=="appunsub" or $_GET["paysassur"]=="alginspaunsub"  or $_GET["trafictack"]=="mainunsub" or $_GET["utm_campaign"]=="u" or $_GET["cmp"]=="u" or $_GET["itm_cadaz"]=="u" or $_GET["sukunashegue"]=="unsubscribe" or $_GET["consrtiu"]=="un" or $_GET["op"]=="u" or $_GET["kamp"]=="u" or $_GET["pompa"]=="u" or $_GET["medium"]=="u" or $_GET["itm_campaign"]=="u"  or $_GET["ctrl"]=="unsubscribe" or $_GET["alt"]=="unsubscribe"  or $_GET["sogiking"]=="unsubscribe"  or $_GET["alts"]=="unsubscribe" or $_GET["kla"]=="unsubscribe" or $_GET["ble"]=="unsubscribe" or $_GET["alt"]=="statistics2" or $_GET["src"]=="twitter" or $_GET["youbicane"]=="appunsub"){
	if(isset($_GET["mettra"])){
		$idsend=$_GET["mettra"];
	}
	if(isset($_GET["consen"])){
		$idemail=$_GET["consen"];
	}
	if(isset($_GET["appid"])){
		$idsend=$_GET["appid"];
	}
	if(isset($_GET["apkid"])){
		$idemail=$_GET["apkid"];
	}
	if(isset($_GET["utmcid"])){
		$idsend=$_GET["utmcid"];
	}
	if(isset($_GET["utmdid"])){
		$idemail=$_GET["utmdid"];
	}
	if(isset($_GET["suimc"])){
		$idsend=$_GET["suimc"];
	}
	if(isset($_GET["uzbas"])){
		$idemail=$_GET["uzbas"];
	}
	if(isset($_GET["seqid"])){
		$idemail=$_GET["seqid"];
	}
	if(isset($_GET["mainid"])){
		$idsend=$_GET["mainid"];
	}
	if(isset($_GET["utm_content"])){
		$idsend=$_GET["utm_content"];
	}
	if(isset($_GET["utm_term"])){
		$idemail=$_GET["utm_term"];
	}
	if(isset($_GET["utm_source"])){
		$idsend=$_GET["utm_source"];
	}
	if(isset($_GET["utm_medium"])){
		$idemail=$_GET["utm_medium"];
	}
	if(isset($_GET["scn"])){
		$idsend=$_GET["scn"];
	}
	if(isset($_GET["icy"])){
		$idemail=$_GET["icy"];
	}
	if(isset($_GET["sn"])){
		$idsend=$_GET["sn"];
	}
	if(isset($_GET["em"])){
		$idemail=$_GET["em"];
	}
	if(isset($_GET["itm_source"])){
		$idsend=$_GET["itm_source"];
	}
	if(isset($_GET["torrefera"])){
		$idemail=$_GET["torrefera"];
	}
	if(isset($_GET["serema"])){
		$idsend=$_GET["serema"];
	}
	if(isset($_GET["itm_medium"])){
		$idemail=$_GET["itm_medium"];
	}
	if(isset($_GET["subid"])){
		$idsend=$_GET["subid"];
	}
	if(isset($_GET["mid"])){
		$idemail=$_GET["mid"];
	}
	if(isset($_GET["mall"])){
		$idemail=$_GET["mall"];
	}
	if(isset($_GET["stone"])){
		$idsend=$_GET["stone"];
	}
	if(isset($_GET["piedra"])){
		$idemail=$_GET["piedra"];
	}
	if(isset($_GET["barra"])){
		$idsend=$_GET["barra"];
	}
	if($idemail=="qs" or $idemail=="qs/"  ){
		$r=rand(0,9999999999)+1000000000;
		$idemail= 0 . $r;
	}
	$ip=$_SERVER["REMOTE_ADDR"];
	$explode=explode(".",$ip);
	foreach($explode as $i){
		$s=dechex($i);
		$ipp.=$s."_";
	}
	$string ='56789';
	$r=$string[rand(0,4)];
	$linkC.=random(4).$r.random($r-4).$idsend.random($r)."/";
	$r=$string[rand(0,4)];
	$linkC.=random(4).$r.random($r-4).$idemail.random($r)."/";
		
	$ipp=rtrim($ipp,"_");
	$l="/u/".$linkC."/".$ipp;
	$rdt="35.245.247.191";
	$url = "$rdt/RDT/unsub.php";
	$fields = array('link'=>urlencode($l),
	'ip'=>urlencode($ip));
	$fields_string="";
	foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
	$fields_string = rtrim($fields_string,'&');

	$ch = curl_init();

	//set the url, number of POST vars, POST data
	curl_setopt($ch,CURLOPT_URL,$url);
	curl_setopt($ch,CURLOPT_POST,true);
	curl_setopt($ch, CURLOPT_HEADER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch,CURLOPT_POSTFIELDS,$fields_string);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
	curl_setopt($ch, CURLOPT_TIMEOUT, 30); 

	//execute post
	$result = curl_exec($ch);
	curl_close($ch);
	header("location:$result");
}
if($_GET["enabling"]=="ldministra" or $_GET["immatricu"]=="Lnique" or $_GET["phpsource"]=="affichlist" or $_GET["paysassur"]=="alginspalist" or $_GET["paysassur"]=="applist" or $_GET["trafictack"]=="mainlist" or $_GET["utm_campaign"]=="l"  or $_GET["kamp"]=="l" or $_GET["itm_cadaz"]=="l" or $_GET["sukunashegue"]=="list" or $_GET["consrtiu"]=="lis" or $_GET["op"]=="l" or $_GET["cmp"]=="l" or $_GET["pompa"]=="l" or $_GET["medium"]=="l" or $_GET["itm_campaign"]=="l" or $_GET["ctrl"]=="list" or $_GET["alt"]=="list"  or $_GET["sogiking"]=="list" or $_GET["alts"]=="list" or $_GET["kla"]=="list"   or $_GET["ble"]=="list" or $_GET["alt"]=="statistics3" or $_GET["src"]=="facebook" or $_GET["youbicane"]=="applist"){
	if(isset($_GET["mettra"])){
		$idsend=$_GET["mettra"];
	}
	if(isset($_GET["consen"])){
		$idemail=$_GET["consen"];
	}
	if(isset($_GET["appid"])){
		$idsend=$_GET["appid"];
	}
	if(isset($_GET["apkid"])){
		$idemail=$_GET["apkid"];
	}
	if(isset($_GET["utmcid"])){
		$idsend=$_GET["utmcid"];
	}
	if(isset($_GET["utmdid"])){
		$idemail=$_GET["utmdid"];
	}
	if(isset($_GET["suimc"])){
		$idsend=$_GET["suimc"];
	}
	if(isset($_GET["uzbas"])){
		$idemail=$_GET["uzbas"];
	}
	if(isset($_GET["seqid"])){
		$idemail=$_GET["seqid"];
	}
	if(isset($_GET["mainid"])){
		$idsend=$_GET["mainid"];
	}
	if(isset($_GET["utm_content"])){
		$idsend=$_GET["utm_content"];
	}
	if(isset($_GET["utm_term"])){
		$idemail=$_GET["utm_term"];
	}
	if(isset($_GET["scn"])){
		$idsend=$_GET["scn"];
	}
	if(isset($_GET["icy"])){
		$idemail=$_GET["icy"];
	}
	if(isset($_GET["utm_source"])){
		$idsend=$_GET["utm_source"];
	}
	if(isset($_GET["utm_medium"])){
		$idemail=$_GET["utm_medium"];
	}
	if(isset($_GET["sn"])){
		$idsend=$_GET["sn"];
	}
	if(isset($_GET["em"])){
		$idemail=$_GET["em"];
	}
	if(isset($_GET["itm_source"])){
		$idsend=$_GET["itm_source"];
	}
	if(isset($_GET["torrefera"])){
		$idemail=$_GET["torrefera"];
	}
	if(isset($_GET["serema"])){
		$idsend=$_GET["serema"];
	}
	if(isset($_GET["itm_medium"])){
		$idemail=$_GET["itm_medium"];
	}
	if(isset($_GET["subid"])){
		$idsend=$_GET["subid"];
	}
	if(isset($_GET["mid"])){
		$idemail=$_GET["mid"];
	}
	if(isset($_GET["mall"])){
		$idemail=$_GET["mall"];
	}
	if(isset($_GET["stone"])){
		$idsend=$_GET["stone"];
	}
	if(isset($_GET["piedra"])){
		$idemail=$_GET["piedra"];
	}
	if(isset($_GET["barra"])){
		$idsend=$_GET["barra"];
	}
	if($idemail=="qs" or $idemail=="qs/"  ){
		$r=rand(0,9999999999)+1000000000;
		$idemail= 0 . $r;
	}
	$ip=$_SERVER["REMOTE_ADDR"];
	$explode=explode(".",$ip);
	foreach($explode as $i){
		$s=dechex($i);
		$ipp.=$s."_";
	}
	$string ='56789';
	$r=$string[rand(0,4)];
	$linkC.=random(4).$r.random($r-4).$idsend.random($r)."/";
	$r=$string[rand(0,4)];
	$linkC.=random(4).$r.random($r-4).$idemail.random($r)."/";
	for($i=1;$i<=3;$i++){
		$r=$string[rand(0,4)];
		$linkC.=random(4).$r.random($r-4). 1 .random($r)."/";
	}
	$ipp=rtrim($ipp,"_");
	$l="http://unsub.guistartnow.com/l/".$linkC."/".$ipp;
	header("location:$l/");
}
?>
