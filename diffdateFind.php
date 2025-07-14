<?php
$date1 = new DateTime("2025-07-01");
$date2 = new DateTime("2025-07-19");
$diff = $date2->diff($date1);
echo $diff->format("%y Yers, %m Monts, %d Days");
echo "<br>";
$time1 = new DateTime("2025-07-13 10:45:00"); // Current date and time
$time2 = new DateTime("2025-07-13 14:45:00");
$diff = $time1->diff($time2);
echo "difference " . $diff->format("%d Days, %h Hours, %i Minutes, %s Seconds");
