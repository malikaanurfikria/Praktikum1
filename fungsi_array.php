<?php
$ar_buah =["p"=>"pepaya","a"=>"apel","m"=>"mangga","j"=>"jambu"];
echo "<ol>";
foreach ($ar_buah as $k => $v) {
    echo "<li> $k - $v </li>";
}
echo "</ol>";
// Array sort mengurutkan array dalam urutan mernarik
sort($ar_buah);
echo "<hr/>";
echo "</ol>";
echo "<lo>";
foreach ($ar_buah as $buah => $k) {
    echo "<li> $buah - $k </li>";
}
echo "</ol>";
// arsort mengurutkan arrat assosiotif dalam urutan menurun sesuai dengan nilai nya
arsort($ar_buah);
echo "<hr/>";
echo "<ol>";
foreach ($ar_buah as $buah => $k) {
    echo "<li> $buah -$k </li>";
}
echo "</ol>";
echo "<hr>";
?>
<!-- =========================== -->
<?php
$tims = ["soekjin", "jimin", "taehyung", "jungkook"];
array_pop($tims);
foreach ($tims as $person) {
    echo "$person <br/>";
}
echo "<br>";
?>

<?php
$tims = ["soekjin", "jimin", "taehyung", "jungkook"];
array_push($tims, "suga");
foreach ($tims as $person) {
    echo "$person <br/>";
}
echo "<br>";
?>

<?php
$tims = ["soekjin", "jimin", "taehyung", "jungkook"];
array_shift($tims);
foreach ($tims as $person) {
    echo "<br/>$person";
}
echo "<hr>";
?>

<?php
$tims = ["soekjin", "jimin", "taehyung", "jungkook"];
array_unshift($tims, "jhope", "namjon");
foreach ($tims as $person) {
    echo "<br/>$person";
}
?>
</body>
</html>