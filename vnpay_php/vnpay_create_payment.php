<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
date_default_timezone_set('Asia/Ho_Chi_Minh');

/**
 * 
 *
 * @author CTT VNPAY
 */
require_once("./config.php");

$vnp_HashSecret = "SPYEHQJNFFXEHNTEREZAZXUTNBQKYVZK";
$vnp_TxnRef = rand(1,10000); //Mã giao dịch thanh toán tham chiếu của merchant
$vnp_Amount = $_SESSION['payment_data']['gia_ve']; // Số tiền thanh toán
$vnp_Locale = $_POST['language']; //Ngôn ngữ chuyển hướng thanh toán
$vnp_BankCode = $_POST['bankCode']; //Mã phương thức thanh toán
$vnp_IpAddr = $_SERVER['REMOTE_ADDR']; //IP Khách hàng thanh toán

$inputData = array(
    "vnp_Version" => "2.1.0",
    "vnp_TmnCode" => "Q660KFTM",
    "vnp_Amount" => $vnp_Amount * 100,
    "vnp_Command" => "pay",
    "vnp_CreateDate" => date('YmdHis'),
    "vnp_CurrCode" => "VND",
    "vnp_IpAddr" => $_SERVER['REMOTE_ADDR'],
    "vnp_Locale" => 'vn',
    "vnp_OrderInfo" => 'noi dung thanh toan',
    "vnp_OrderType" => "billpayment",
    "vnp_ReturnUrl" => "http://localhost/FPT/du_an_1/index.php?act=thanhtoantc",
    "vnp_TxnRef" => rand(00, 9999)
    // "vnp_ExpireDate"=>$expire
);

if (isset($vnp_BankCode) && $vnp_BankCode != "") {
    $inputData['vnp_BankCode'] = $vnp_BankCode;
}

ksort($inputData);
$query = "";
$i = 0;
$hashdata = "";
foreach ($inputData as $key => $value) {
    if ($i == 1) {
        $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
    } else {
        $hashdata .= urlencode($key) . "=" . urlencode($value);
        $i = 1;
    }
    $query .= urlencode($key) . "=" . urlencode($value) . '&';
}

$vnp_Url = $vnp_Url . "?" . $query;
if (isset($vnp_HashSecret)) {
    $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret);//  
    $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
}
header('Location: ' . $vnp_Url);
die();

