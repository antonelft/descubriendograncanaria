<?php
if(isset($_POST['fname']) && isset($_POST['lname'])) {
    $data = $_POST['fname'] . '-' . $_POST['lname'] . "\r\n";
    $ret = file_put_contents('/tmp/mydata.txt', $data, FILE_APPEND | LOCK_EX);
    if($ret === false) {
        die('Error escribindo');
    }
    else {
        echo "$ret bytes escribido";
    }
}
else {
   die('no data');
}