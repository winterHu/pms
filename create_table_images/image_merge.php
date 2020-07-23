<?php
$data=$this->transparent($arr);
$path_1 = $data[0];  
unset($data[0]);
foreach($data as $key=>$value){
    $image_1 = imagecreatefrompng($path_1);
    $image_2 = imagecreatefrompng($value);
    $image_3 = imageCreatetruecolor(imagesx($image_1),imagesy($image_1));
    $color = imagecolorallocate($image_3, 255, 255, 255);//白色背景
    imagefill($image_3, 0, 0, $color);
    imageColorTransparent($image_3, $color);        
    imagecopyresampled($image_3,$image_1,0,0,0,0,imagesx($image_1),imagesy($image_1),imagesx($image_1),imagesy($image_1));        
    imagecopymerge($image_3,$image_2, 0,0,0,0,imagesx($image_2),imagesy($image_2), 100);        
    unlink($value);        
    imagepng($image_3,$path_1);
}


function transparent($arr)
{    
    $fileurl=array();    
    foreach($arr as $key=>$value){        
        $image_1 = imagecreatefrompng($value);        
        $image_2 = imageCreatetruecolor(imagesx($image_1),imagesy($image_1));        
        $color = imagecolorallocate($image_2, 1000, 1000, 1000);        
        imagefill($image_2, 0, 0, $color);        
        imageColorTransparent($image_2, $color);        
        imagecopyresampled($image_2,$image_1,0,0,0,0,imagesx($image_1),imagesy($image_1),imagesx($image_1),imagesy($image_1));        
        imagepng($image_2, $value);        
        $fileurl[]=$value;    
    }    
    return $fileurl;
}
