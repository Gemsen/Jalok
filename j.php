<?php
date_default_timezone_set('Asia/Jakarta');
include "function.php";

echo color("white","          [•]  Time  : ".date('[d-m-Y] [H:i:s]')."   \n");
echo color("green","                          @Chuex80 \n");
echo color("white","* Token: ");
$token = trim(fgets(STDIN));
echo color("white","? Mau Klaim Voucher?(Y/N) ");
        $pilihan = trim(fgets(STDIN));
        if($pilihan == "y" || $pilihan == "Y"){
        echo "\n".color("nevy","!] Tikor DENPASAR ");
        echo "\n".color("yellow","!] Please wait");
        for($a=1;$a<=3;$a++){
        echo color("yellow",".");
        sleep(15);
        }
        $code1 = request2('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"COBAGOFOOD0508"}');
        $message = fetch_value($code1,'"message":"','"');
        if(strpos($code1, 'Promo kamu sudah bisa dipakai')){
        echo "\n".color("green","+] Message: ".$message);
        goto gocar;
        }else{
        echo "\n".color("red","+] Message: ".$message);
	gocar:
        echo "\n".color("nevy","!] Tikor DENPASAR ");
        echo "\n".color("yellow","!] Please wait");
        for($a=1;$a<=3;$a++){
        echo color("yellow",".");
        sleep(10);
        }
        $code1 = request2('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"COBAGOFOOD0508"}');
        $message = fetch_value($code1,'"message":"','"');
        if(strpos($code1, 'Promo kamu sudah bisa dipakai.')){
        echo "\n".color("green","+] Message: ".$message);
        goto gofood;
        }else{
        echo "\n".color("red","+] Message: ".$message);
        gofood:
        echo "\n".color("nevy","!] Tikor JAKARTA ");
        echo "\n".color("yellow","!] Please wait");
        for($a=1;$a<=3;$a++){
        echo color("yellow",".");
        sleep(10);
        }
        $code1 = request1('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"PENGENGOFOOD0508"}');
        $message = fetch_value($code1,'"message":"','"');
        echo "\n".color("green","+] Message: ".$message);
        sleep(3);
        $cekvoucher = request('/gopoints/v3/wallet/vouchers?limit=15&page=1', $token);
        $total = fetch_value($cekvoucher,'"total_vouchers":',',');
        $voucher1 = getStr1('"title":"','",',$cekvoucher,"1");
        $voucher2 = getStr1('"title":"','",',$cekvoucher,"2");
        $voucher3 = getStr1('"title":"','",',$cekvoucher,"3");
        $voucher4 = getStr1('"title":"','",',$cekvoucher,"4");
        $voucher5 = getStr1('"title":"','",',$cekvoucher,"5");
        $voucher6 = getStr1('"title":"','",',$cekvoucher,"6");
        $voucher7 = getStr1('"title":"','",',$cekvoucher,"7");
        $voucher8 = getStr1('"title":"','",',$cekvoucher,"8");
        $voucher9 = getStr1('"title":"','",',$cekvoucher,"9");
        $voucher10 = getStr1('"title":"','",',$cekvoucher,"10");
        $voucher11 = getStr1('"title":"','",',$cekvoucher,"11");
        $voucher12 = getStr1('"title":"','",',$cekvoucher,"12");
        echo "\n".color("green","!] Total vouchers ".$total." : ");
        echo "\n".color("yellow","1 ".$voucher1);
        echo "\n".color("yellow","2 ".$voucher2);
        echo "\n".color("yellow","3 ".$voucher3);
        echo "\n".color("yellow","4 ".$voucher4);
        echo "\n".color("yellow","5 ".$voucher5);
        echo "\n".color("yellow","6 ".$voucher6);
        echo "\n".color("yellow","7 ".$voucher7);
        echo "\n".color("yellow","8 ".$voucher8);
        echo "\n".color("yellow","9 ".$voucher9);
        echo "\n".color("yellow","10 ".$voucher10);
        echo "\n".color("yellow","11 ".$voucher11);
        echo "\n".color("yellow","12 ".$voucher12);
        $expired1 = getStr1('"expiry_date":"','"',$cekvoucher,'1');
        $expired2 = getStr1('"expiry_date":"','"',$cekvoucher,'2');
        $expired3 = getStr1('"expiry_date":"','"',$cekvoucher,'3');
        $expired4 = getStr1('"expiry_date":"','"',$cekvoucher,'4');
        $expired5 = getStr1('"expiry_date":"','"',$cekvoucher,'5');
        $expired6 = getStr1('"expiry_date":"','"',$cekvoucher,'6');
        $expired7 = getStr1('"expiry_date":"','"',$cekvoucher,'7');
        $expired8 = getStr1('"expiry_date":"','"',$cekvoucher,'8');
        $expired9 = getStr1('"expiry_date":"','"',$cekvoucher,'9');
        $expired10 = getStr1('"expiry_date":"','"',$cekvoucher,'10');
        $expired11 = getStr1('"expiry_date":"','"',$cekvoucher,'11');
        $expired12 = getStr1('"expiry_date":"','"',$cekvoucher,'12');
        setpin:
         echo "\n".color("white","? Mau set pin?: y/n ");
         $pilih1 = trim(fgets(STDIN));
         if($pilih1 == "y" || $pilih1 == "Y"){
         //if($pilih1 == "y" && strpos($no, "628")){
         echo color("yellow","PIN ANDA = 112233")."\n";
         $data2 = '{"pin":"112233"}';
         $getotpsetpin = request("/wallet/pin", $token, $data2, null, null, $uuid);
         echo "Otp set pin: ";
         $otpsetpin = trim(fgets(STDIN));
         $verifotpsetpin = request("/wallet/pin", $token, $data2, null, $otpsetpin, $uuid);
         echo $verifotpsetpin;
         }else if($pilih1 == "n" || $pilih1 == "N"){
         die();
         }else{
         echo color("red","x GAGAL!!!\n");
         }
         }
         }
         }
echo "\n";
