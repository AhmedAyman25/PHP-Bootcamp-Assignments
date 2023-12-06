<?php
echo basename(__FILE__).'<br>';
echo pathinfo(__FILE__,)['basename'].'<br>';
echo pathinfo(__FILE__, PATHINFO_BASENAME).'<br>';
echo pathinfo(__FILE__, PATHINFO_FILENAME).'.'. pathinfo(__FILE__, PATHINFO_EXTENSION).'<br>';