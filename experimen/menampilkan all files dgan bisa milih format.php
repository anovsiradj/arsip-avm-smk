<?php
$folder = '../main';
$bukafolder = opendir($folder);
$klik = array('php');

echo '<table cellspacing="2" cellpadding="5">';
    echo '<tr>';
    $i = 1;
    while(false !== ($file = readdir($bukafolder))){
        $ftp = explode('.', $file);
        if(in_array(end($ftp), $klik )){
            echo '<td style="border:1px solid #000000;" align="center">
                <a href="?page=main/'.$file.'">'.$file.'</a>
            </td>';
            if(($i % 4) == 0){
                echo '</tr><tr>';
            }
            $i++;
        }
    }
    echo '</tr>';
    echo '</table>';
?>