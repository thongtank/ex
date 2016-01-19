<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP ob_start</title>
</head>
<body>
    <h1>Welcome to PHP_OB TESTING</h1>
    <?php
$data = array("Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun");
foreach ($data as $k => $v) {
    print "<p><strong>" . $v . "</strong></p>\n\t";
}
?>
</body>
</html>
<?php
$content = ob_get_contents();
ob_end_clean();

$handle = fopen("index.html", "w");
if ($handle) {
    if (fwrite($handle, $content)) {
        print "Success";
    } else {
        print "Failed for write";
    }
    fclose($handle);
} else {
    print "Failed for open file";
}
?>