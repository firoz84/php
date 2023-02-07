<?php 

//$files='hello.txt';

$files="assets";

if(is_dir($files)){
    echo 'Yes it is a name';
}else{
    echo "NO";
}



//echo dirname($files);

//echo basename($files);

//echo realpath($files);

//echo filesize($files);

// if(file_exists($files)){
//     echo readfile($files);
// }else{
//     echo "No such file or directory";
// }


// make the folder

//mkdir('test');

//delete files in the folder

//rmdir('test');