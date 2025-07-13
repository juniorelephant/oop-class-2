<?php
date_default_timezone_set('Asia/Dhaka');

echo date("Y-m-d");
echo "<br>";
echo date("d/m/Y");
echo "<br>";
$var + date("U");
echo "<br>";
$day = date("l",strtotime("2025-07-13"));
echo "july 12, 2025 Falls on: $day";
echo "<br>";
echo "Month : ".date("F")."<br>";
echo "day : ".date("d");
echo "<br>";
$futureDate =  strtotime("+7days");
echo date("d-m-Y",$futureDate);
echo "<br>";



