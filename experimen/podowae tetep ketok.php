<?php
$dir = '../main';
if ($handle = opendir($dir)) {
while ($file = readdir($handle)){
if ($file != '.' && $file != '..' && $file != 'info.txt'){
echo "<a href =\"$dir/$file\">".$file."</a><br/>";
}
}
closedir($handle);
}
?>