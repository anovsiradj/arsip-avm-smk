<?php

//Tentukan jumlah file
$jumlah = 10;
//tentukan folder akhiri dgn garis miring (/)
$folder = "../main/";

$page = (int)$_GET['p'];
if(!$page) $page = 1;
$total = 0;

$fdr = opendir($folder);
$files = array();
while ($file = readdir($fdr)) {
  if ($file == "." OR $file == ".." OR $file == "index.php") continue;
  else {
    $files[] =  $file;
  }
}
$file_count = count($files);
sort($files);

echo '
<div id="header">'.$_SERVER['HTTP_HOST'].'</div>';
if ($file_count > 0) {
  $pertama = ($page - 1) * $jumlah;
  $terakhir = $pertama + $jumlah;
  while (list($fileNo, $fileName) = each($files)) {
    if (($fileNo >= $pertama) AND ($fileNo < $terakhir)) {
 
      $fileLink = $folder.$fileName;
      $ext = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
      // Tentukan ekstensi gambar
      if($ext == "jpg" || $ext == "gif" || $ext == "png") {
        echo '<center><img src="'.$fileLink.'" alt="'.$fileName.'" class="img"></center><br>';
      }

      echo 'Nama: <b>'.$fileName.'</b><br>'.'Ukuran: <b>'.round(filesize($fileLink)/1024, 2).' KB</b><br>'.'Diunggah: <b>'.gmdate("d-m-Y H:i", time()+7*3600).'</b><br>'.'[<a href="'.$fileLink.'">DOWNLOAD</a>]</div><br/>';
      $total = $total + filesize($fileLink);
    }
  }
  echo '<div class="paging">';
  if (($file_count > 0) AND ($page > 1)) {
    // sebelumnya
    $prev = $page - 1;
    echo '<a href="'.$_SERVER['PHP_SELF'].'?page='.$prev.'">&laquo;&nbsp;Sebelumnya</a>&nbsp;&nbsp;';
  }
  if (($file_count > 0) AND ($terakhir < $file_count)) {
    // selanjutnya
    $next = $page + 1;
    echo '<a href="'.$_SERVER['PHP_SELF'].'?page='.$next.'">Selanjutnya&nbsp;&raquo;</a>';
  }
  echo '</div><div class="count">Total File: <b>'.$file_count.'</b> ';
  if ($file_count == 1) echo "file";
  else echo "files";
  echo "<br>Ukuran File di Halaman: <b>".round($total / 1024, 2)." KB</b></div>";
}
closedir($fdr);
echo '<div id="footer">&copy; '.date("Y",time()).' '.$_SERVER['HTTP_HOST'].'</div></body></html>';
?>