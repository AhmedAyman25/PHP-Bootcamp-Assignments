<?php

$arr = [];

foreach (filter_list() as $filter) {
	$arr[filter_id($filter)] = $filter;
}

echo '<pre>';
print_r($arr);
echo '</pre>';