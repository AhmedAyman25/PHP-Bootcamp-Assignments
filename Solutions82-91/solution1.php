<?php
$disk_C = round((disk_total_space("c:") / 1024 / 1024 / 1024 / 1024),2);
$disk_E = round((disk_total_space("e:") / 1024 / 1024 / 1024 / 1024), 2);
echo $disk_C . " Terabyte".'<br>';
echo $disk_E . " Terabyte".'<br>';