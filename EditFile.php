<?php
$fn = $_GET['file'];
if (isset($_POST['code'])) {
    /*
    $code = stripslashes($_POST['code']);
    $fp = fopen($fn,"w") or die ("Gagal membuka dalam Write Mode !");
    fputs($fp,$code);
    fclose($fp) or die ("Gagal Menyimpan File !");
    */
    file_put_contents($fn, $_POST['code']);
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Edit File <?php echo $_GET['file']; ?></title>
<link rel="stylesheet" href="css/codemirror.css"/>
<!-- <script src="js/codemirror.js"></script>
<script src="js/matchbrackets.js"></script>
<script src="js/htmlmixed.js"></script>
<script src="js/xml.js"></script>
<script src="js/javascript.js"></script>
<script src="js/css.js"></script>
<script src="js/clike.js"></script>
<script src="js/php.js"></script> -->
<script src="codemirror-dump-min.js"></script>
<style type="text/css">
.CodeMirror {
    border-top: 1px solid black; border-bottom: 1px solid black;
}
input {
    background:black;color:white;font-size:30px;border-radius:1em 10px 1em 10px;padding:10px;
}
</style>
<link rel="stylesheet" href="css/docs.css">
</head>
<body>
<h1>Editing File: <?php echo $_GET['file']; ?></h1>

<form method="post" action="<?php echo 'EditFile.php?file=', $fn ?>">
    <textarea id="code" name="code"><?php //htmlentities(readfile($fn)) ?></textarea>
    <input style="float:right;" type="submit" value="Ok, Save"/>
</form>
<a href="ChooseFile.php"><h1>Kembali</h1></a>

<script>
;(function() {
    document.getElementById('code').value = <?php echo json_encode(file_get_contents($fn)) ?>;
})();

var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
    lineNumbers: true,
    matchBrackets: true,
    mode: "application/x-httpd-php",
    indentUnit: 4,
    indentWithTabs: true,
    enterMode: "keep",
    tabMode: "shift"
});
</script>
</body>
</html>
