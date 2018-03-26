<?php

session_start();

header('Content-type: image/jpeg');

$text = $_SESSION['secure'];

$font_size = 20;

$width = 110;
$height = 40;

$image = imagecreate($width, $height);

imagecolorallocate($image, 255, 255, 255);

$text_color  = imagecolorallocate($image, 0, 0, 0);

for ($x=0; $x <=30 ; $x++) { 
  	
	$x1 = rand(1, 100);
	$y1 = rand(1, 100);
	$x2 = rand(1, 100);
	$y2 = rand(1, 100);

	imageline($image, $x1, $y1, $x2, $y2, $text_color);



  }  


  imagettftext($image, $font_size, 0, 15, 30, $text_color, 'JUICE___.TTF', $text);

  imagejpeg($image);








?>