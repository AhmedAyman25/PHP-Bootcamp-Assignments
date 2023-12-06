<?php
$size = filesize("E:\\excel.mp4");
echo "Size In Megabyte Is ". round($size/1024/1024) .'<br>';
echo "Size In Kilobyte Is ". round($size/1024) .'<br>';