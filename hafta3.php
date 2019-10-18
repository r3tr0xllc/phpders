<?php
/*
class islemler
{
  function say($a)
  {
    echo "HEH DURDU :D<br>";
    if ($a>0) {
      $this->say($a-1);
    }
  }
}
$islem=new islemler();
$islem->say(9);

class islemler{


  function __construct($a)
  {
    echo $a."<br>";
  }

  function __destruct(){
    echo "YIKICI METHOD";
  }

  function __call($a,$b)
  {
    echo "isim: ".$a."<br>";
    echo "değeri :"."<br>";
    print_r($b);
  }
}
$islem=new islemler("manisa");
$islem -> baglan("mysql");
//echo $islem->toplam();
*/
//veri tabanı işlemlerini yapan bir sınıf yazalım
//exec çalıştırma için kullanılıreq
//$db->exec();
//$sorgu=$db->prepare("insert into uyeler(ad)values(?)");
//$sorgu=$db->query('SELECT * from uyeler where id=?');
//$sorgu->execute(array('KIRBAÇ'));
$db=new PDO("mysql:host=localhost;dbname=deneme;charset=utf8;","root","");
$sorgu=$db->prepare("select * from uyeler where id=?");
$sorgu->execute(array('1'));
print_r($sorgu->fetchall());
 ?>
