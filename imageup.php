<?php
 $banner=$_FILES['banner']['name']; 
 $expbanner=explode('.',$banner);
 $bannerexptype=$expbanner[1];
 date_default_timezone_set('Australia/Melbourne');
 $date = date('m/d/Yh:i:sa', time());
 $rand=rand(10000,99999);
 $encname=$date.$rand;
 $bannername=md5($encname).'.'.$bannerexptype;
 $bannerpath="uploads/banners/".$bannername;
 move_uploaded_file($_FILES["banner"]["tmp_name"],$bannerpath);
 ?>