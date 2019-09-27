<?php 
/*
class islemler{
	//sınıflar yalnızca özellik ve metodlardan oluşur
	var $sayi1=0;
	
	var $sayi2=0;
	
	function yaz(){
	 $sayi3=0;
		echo "KMYO";
	}
	function yaz2(){
		echo "Deneme";
	}
	//sınıflarda işlem yapan komutlar muhakkak bir metotun içinde olmak zorunda
}
class islemler2{
}
// içerisinde üç tane özellik ve 2 tane metot bulunan okul isimli bir sınıf yazın
class okul{
	var $sayi12=1234;
	
	var $sayi34=1234567890;
	
	var $sayi56=0987654321;
	
	function okul1(){}
	
	function okul2(){}

}
//sınıfların bir örneğini alarak kullanmak için gerrekli komut new dir;
$islem=new islemler();

echo $islem->sayi1;

$islem->yaz();

$islem->sayi1=50;

echo $islem->sayi1;

$islem2=new islemler();

$islem2->sayi1=100;

echo $islem2->sayi1;

$islem->sayi1=$islem2->sayi1;

echo $islem->sayi1;
// ekrana iki sayının toplamuını yapan sınıfı ve methodu yazın
class islemler3{
	var $sayi1;
    var $sayi2;
	function topla(){
	  echo $this->sayi1+$this->sayi2."<br>";
	}
	function carp(){
		 echo $this->sayi1*$this->sayi2."<br>";
	}
}

$islem=new islemler3();
$islem->sayi1=10;
$islem->sayi2=20;
$islem->topla();
$islem->carp();
*/
class islemler3{
	var $sayi1;
    var $sayi2;
	function islemler3($a,$b){
		$this->sayi1=$a;
		$this->sayi2=$b;
	}
	function topla(){
	  echo $this->sayi1+$this->sayi2."<br>";
	}
	function carp(){
		 echo $this->sayi1*$this->sayi2."<br>";
	}
	
}

$islem=new islemler3(4,5);
$islem->topla();
$islem->carp();
?>