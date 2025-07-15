<?php
 $var = 'readme.text';
// echo $var;

// file exist mone rakhte hobe
// unlink mone rakhte hobe
// read write aphend

$content = 'hi this is another file';

if(is_writable($var)){
    if(!$handle = fopen($var,'a')){
        echo "cannot open this file";
        exit;
    }
    if(!fwrite($handle, $content)){
        echo "can not write this file";
        exit;
    }
    echo "wrote the content";
    fclose($handle);
}
else{
    echo 'not writable';
}