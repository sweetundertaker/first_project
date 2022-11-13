<?php
$result = "Текущая дата в формате UNIX Timestamp: %unix%";
$result = str_replace("%unix%", time(), $result);
echo $result;