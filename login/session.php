<?php
  session_start();
  $count = $_SESSION['count'] ?? 0;
  $count++;
  $_SESSION['count'] = $count;
  echo $count;
?>
