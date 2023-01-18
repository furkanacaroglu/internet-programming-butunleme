<?php 
 require_once("../veritabani/baglan.php");

 $kullanici_adi = $_POST["kullanici_adi"]; 
 $kullanici_sifre=md5($_POST["kullanici_sifre"]);

$yonetici_sor=$database->prepare("SELECT * FROM yoneticiler WHERE yonetici_kullanici_adi= ? AND yonetici_sifre= ?");
$yonetici_sor->execute(array($kullanici_adi, $kullanici_sifre));
if($yonetici_sor->rowCount()>0){

  $_SESSION["kullanici_adi"]= $kullanici_adi;
  $_SESSION["kullanici_sifre"]= $kullanici_sifre;
  
  header("Location:../");
  die();

}else{
    header("Location:../login.php?kontrol=bulunamadi");
  die();
}

?>