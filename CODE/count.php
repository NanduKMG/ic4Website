<?php 
//echo '<div style="width:207px; height:33px; position:absolute; z-index:999; top: 4px; left: 772px;">';
try{
$handle = fopen("counter.txt", "r");
if(!$handle){
	
 echo "could not open the file";
}
else {
	$ip = $_SERVER['REMOTE_ADDR']?:($_SERVER['HTTP_X_FORWARDED_FOR']?:$_SERVER['HTTP_CLIENT_IP']);
	$counter=(int )fread($handle,20);
	fclose($handle);
	$counter++;
	echo" <strong> you are visitor no ". $counter  . " </strong > " ;
$handle= fopen("counter.txt", "w" ) ;
fwrite($handle,$counter) ;
fclose ($handle) ;
	}
}catch(Exception $e){}
	//echo '</div>';

?>

