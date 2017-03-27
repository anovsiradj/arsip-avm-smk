<?php
$path = "../main"; 
$dir_handle = @opendir($path) or die("Unable to open $path"); 
$iterator = new DirectoryIterator($path);
    foreach ($iterator as $fileinfo) {
        if ($fileinfo->isFile()) {
            $fileinfo->getBasename('.' .$fileinfo->getExtension());
        }
    }
while ($file = readdir($dir_handle)) { 
if($file == "." || $file == ".." || $file == "404.php" ) 
continue; 
echo "$file".'<br/>'; 
} 
closedir($dir_handle);
?>