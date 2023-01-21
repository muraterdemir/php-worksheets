<?php

if ($_POST['sayi'] == "") {
	echo "Lütfen boş bırakmayınız";
	header('Refresh:3; URL=index.php');

} elseif ($_POST['sayi']) {

	$gelen = $_POST['sayi'];

	if($gelen%3 == 0){
		echo "$gelen sayısı 3 ile tam bölünüyor";
	}else{
		$sayi2 = $gelen;
		$sayi2++;
		while ($sayi2%3 !== 0) {
			$sayi2++;
			
		}
		echo "$gelen sayısı 3 ile tam bölünemiyor. Bu sayıya en yakın tam bölünen sayı $sayi2";
		header('Refresh:10 ; URL=index.php');
	}
	


}