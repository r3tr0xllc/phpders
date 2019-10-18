<?php
//insert-delete-update-drop-alter-union-update
//$sorgu=$db-> prepare("insert into uyeler(ad,soyad)values(?,?)");
//$sorgu->execute(array("Ömer Eymen","Akincir"));
//select
//$sorgu=$db->prepare("select * from uyeler");
//$sorgu->execute();
//$sonuc=$sorgu->fetchall();
//foreach ($sonuc as $bilgi ) {
  //echo $bilgi["ad"];
//  foreach ($bilgi as $yaz) {
  //  echo $yaz."<br>";
  //}
//}

class veri_tabani{
  var $db="";
  function veri_tabani(){
    $this->db=new PDO("mysql:host=localhost;dbname=kmyo;charset=utf8","root","");
  }
  function isle($sql="",$prm=array()){
    $sorgu=$this->db->prepare($sql);
    $sorgu->execute($prm);
    $hata=$sorgu->errorinfo();
    if ($hata[0]==0) {
      return true;
    }
    else {
      return false;
    }
  }
  function tablo($sql="",$prm=array()){
    $sorgu=$this->db->prepare($sql);
    $sorgu->execute($prm);
    $hata=$sorgu->errorinfo();
    if ($hata[0]==0) {
      return $sorgu->fetchall();
    }
    else {
      return array();
    }
  }
  function __destruct(){
    $this->db=null;
  }
}
$islem=new veri_tabani();
/*
if($islem->isle("insert into uyeler(ad,soyad) values(?,?)",array(":Kırkağaç","KMYO"))){
  echo "KAYIT YAPILDI!";
}
else{
  echo "HATALI İŞLEM!";
}
*/
print_r($islem->tablo("select * from uyeler"));
?>
