<?php
date_default_timezone_set('Asia/Jakarta');
include "function.php";
echo "\e[93mMl;;;;;;;;;;;;;;;;,,;::::cccloooc:::cccllccc:;:::::::::::O\n";
echo "M,                   .,:;;,''''..      .....             x\n";
echo "M,         .         .lkOOxo;..         ....             x\n";
echo "M'   .    ......    .okO0000Od:.         ...             x\n";
echo "M'       .......    'llcldkko:;,.         .              x\n";
echo "M'                  ..'',:o0ko:,;,.       .              d\n";
echo "M'             .    ;::cdkxXK00OOOkc       ..            x\n";
echo "M'             ..   .oxOOkdKKOO00Oxc.  ..  .             x\n";
echo "M'            ...    .cdkx;;:lOOkxo;.. ..  ...           d\n";
echo "M'           ,,... .  .:ooc:ccclooc'.. ..  ..            d\n";
echo "M'        ..:;.:'  ..  .,:,';:cddl,.....                 o\n";
echo "M'        ..;..'.    .   .;codxd;....     ..             d\n";
echo "M'          ....'    ...    ...        . ..              d\n";
echo "M'          ....                         .'.             d\n";
echo "M'       'co',c,          .....          ':oolcc;,..     c\n";
echo "M'    .'dOOko.           ';xOx...   .    .'dkOO000Okd,   c\n";
echo "M;..  'dxxooc.    ..;:coxO0doOd;'..'...... .c00000OOkxc. :\n";
echo "M;....oookOd;....ckOO00KKKKK0d0OOxclol;.....l000OOOOkxd: l\n";
echo "M;.'.:dxO0x'':oOKKXKKKKKK00OOk0koloxkOkdloodxkxxxdkOkxdl.l\n";
echo "M: .'cdO0OcxO0KKXXXXXXXXXXKKKO0k0000KKKKKKK000Odc:kOkxdl'c\n";
echo "Mc. ,lk0OxkO000KXNNNNNNNXXKK0O00O00KKKKKKKKKKKK0OkkOOkdl;l\n";
echo "M: .:dO0dxkkxldOKNWWNNNXXKK00O00O000KKXNNNNXXKOOOOkxOkxo:o\n";
echo "M, 'lk0xloddlcox0KXXXXKK00OOkd0OxkOO00KXXNNXKOkolxxddkxo:x\n";
echo "M: ;oO0d;:cloodxkOO00OOOkkxoclOOooxkOOOOOOOOOxoc;oolckxo:k\n";
echo "M'.:xO0x,',;:clooddddddolc;;okkOkocodddddddddolccc:,,kxo:x\n";
echo "M..lxO0Oc...'',,;;::::;,';lx00kxkxl,;::cc:cc::;;,'..;xxo:x\n";
echo "Mo:okO00x,  ....'''..';lkO0KXXKKKK0Oo;'',,,,'''.....:ddo:d\n";
echo "MKO0OOOOko' ...''.,:oxxxkkkO0KKKKKK0OOkl,.......   .cdxddx\n";
echo "M0OkOkkkkdl;;:cdoloddxxxkkkO000OOkkkOkkkkxlcc::::::cdxxxxk\n";
echo color("white","          [•]  Time  : ".date('[d-m-Y] [H:i:s]')."   \n");
echo color("green","                      @Amartapura91 \n");
function change(){
echo "\n\e[7m\e[31m                 AUTO  REDEEM                  \e[0m\n";
echo "\e[7m\e[36m\e[1m▶️ Token : \e[0m";
$token = trim(fgets(STDIN));       
        echo color("white","! Claim I");
        echo "\n".color("yellow","* Proses");
        for($a=1;$a<=3;$a++){
        echo color("white",".");
        sleep(10);
        }
        $code1 = request2('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"COBAGOFOOD0508"}');
        $message = fetch_value($code1,'"message":"','"');
        if(strpos($code1, 'Promo kamu sudah bisa dipakai')){
        echo "\n".color("green","√ Message: ".$message);
        goto goca;
        }else{
        echo "\n".color("red","x Message: ".$message);
        goca:
        echo "\n".color("white","! Claim II");
        echo "\n".color("yellow","* Proses");
        for($a=1;$a<=3;$a++){
        echo color("white",".");
        sleep(5);
        }
        $code1 = request2('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"MAUGOFOOD0508"}');
        $message = fetch_value($code1,'"message":"','"');
        if(strpos($code1, 'Promo kamu sudah bisa dipakai')){
        echo "\n".color("green","√ Message: ".$message);
        goto gofood;
        }else{
        echo "\n".color("red","x Message: ".$message);
        gofood:
        sleep(3);
        $cekvoucher = request('/gopoints/v3/wallet/vouchers?limit=10&page=1', $token);
        $total = fetch_value($cekvoucher,'"total_vouchers":',',');
        $voucher3 = getStr1('"title":"','",',$cekvoucher,"3");
        $voucher1 = getStr1('"title":"','",',$cekvoucher,"1");
        $voucher2 = getStr1('"title":"','",',$cekvoucher,"2");
        $voucher4 = getStr1('"title":"','",',$cekvoucher,"4");
        $voucher5 = getStr1('"title":"','",',$cekvoucher,"5");
        $voucher6 = getStr1('"title":"','",',$cekvoucher,"6");
        $voucher7 = getStr1('"title":"','",',$cekvoucher,"7");
        $voucher8 = getStr1('"title":"','",',$cekvoucher,"8");
        $voucher9 = getStr1('"title":"','",',$cekvoucher,"9");
        $voucher10 = getStr1('"title":"','",',$cekvoucher,"10");
        echo "\n".color("green","!] Total voucher ".$total." : ");
        echo "\n".color("yellow","1. ".$voucher1);
        echo "\n".color("yellow","2. ".$voucher2);
        echo "\n".color("yellow","3. ".$voucher3);
        echo "\n".color("yellow","4. ".$voucher4);
        echo "\n".color("yellow","5. ".$voucher5);
        echo "\n".color("yellow","6. ".$voucher6);
        echo "\n".color("yellow","7. ".$voucher6);
        echo "\n".color("yellow","8. ".$voucher6);
        echo "\n".color("yellow","9. ".$voucher6);
        echo "\n".color("yellow","10. ".$voucher6);
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
         setpin:
         echo "\n".color("white","? Mau set pin?: y/n ");
         $pilih1 = trim(fgets(STDIN));
         if($pilih1 == "y" || $pilih1 == "Y"){
         //if($pilih1 == "y" && strpos($no, "628")){
         echo color("yellow"," PIN  = 112233 ")."\n";
         $data2 = '{"pin":"112233"}';
         $getotpsetpin = request("/wallet/pin", $token, $data2, null, null, $uuid);
         echo "Otp set pin: ";
         $otpsetpin = trim(fgets(STDIN));
         $verifotpsetpin = request("/wallet/pin", $token, $data2, null, $otpsetpin, $uuid);
         echo $verifotpsetpin;
         }else if($pilih1 == "n" || $pilih1 == "N"){
         die();
         }else{
         echo color("red","- GAGAL!!!\n");
         }
         }
         }
         }else{
         goto setpin;
         }
         }else{
         echo color("red","- Otp yang anda input salah\n");
         echo color("red","OTP ULANG\n");
         echo color("white","! Silahkan input kembali\n");
         goto otp;
         }
         }else{
         echo color("red","NOMOR SUDAH TERDAFTAR/SALAH !!!");
         echo "\nMau ulang? (y/n): ";
         $pilih = trim(fgets(STDIN));
         if($pilih == "y" || $pilih == "Y"){
         echo color("red","Register\n");
         goto ulang;
         }else{
         echo color("red","Register\n");
         goto ulang;
  }
 }
}
echo change()."\n";
