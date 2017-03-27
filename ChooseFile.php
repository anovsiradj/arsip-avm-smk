<style>
fieldset.listfile {
width:250px;
}
</style>
<fieldset class="listfile">
<legend><h3>File Dari Folder Utama :</h3></legend>
<?php
$folder = './';
$bukafolder = opendir($folder);
$klik = array('php');
    $i = 1;
    while(false !== ($file = readdir($bukafolder))){
        $ftp = explode('.', $file);
        if(in_array(end($ftp), $klik )){
            echo '<a href="EditFile.php?file='.$file.'">'.$file.'</a><br/>';
            if(($i % 4) == 0){
                echo '</tr><tr>';
            }
            $i++;
        }
    }
?>
</fieldset>

<fieldset class="listfile">
<legend><h3>File Dari Folder Main/ :</h3></legend>
<?php
    // Define the full path to your folder from root
    $path = "main/";
    // Open the folder
    $dir_handle = @opendir($path) or die("Tidak bisa membuka direktori : <b>$path</b>");
    // Loop through the files
    while ($file = readdir($dir_handle)) {
    if($file == "." || $file == ".." || $file == "index.php" )
        continue;
        echo "<a href=\"EditFile.php?file=main/$file\">$file</a><br />";
    }
    // Close
    closedir($dir_handle);
?>
</fieldset>

<fieldset class="listfile">
<legend><h3>File Dari Folder body/ :</h3></legend>
<?php
    // Define the full path to your folder from root
    $path = "body/";
    // Open the folder
    $dir_handle = @opendir($path) or die("Tidak bisa membuka direktori : <b>$path</b>");
    // Loop through the files
    while ($file = readdir($dir_handle)) {
    if($file == "." || $file == ".." || $file == "index.php" )
        continue;
        echo "<a href=\"EditFile.php?file=body/$file\">$file</a><br />";
    }
    // Close
    closedir($dir_handle);
?>
</fieldset>

</fieldset>

<fieldset class="listfile">
<legend><h3>File Dari Folder body/ :</h3></legend>
<?php
    // Define the full path to your folder from root
    $path = "js/";
    // Open the folder
    $dir_handle = @opendir($path) or die("Tidak bisa membuka direktori : <b>$path</b>");
    // Loop through the files
    while ($file = readdir($dir_handle)) {
    if($file == "." || $file == ".." || $file == "index.php" )
        continue;
        echo "<a href=\"EditFile.php?file=js/$file\">$file</a><br />";
    }
    // Close
    closedir($dir_handle);
?>
</fieldset>