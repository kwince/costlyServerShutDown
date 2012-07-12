<?php
  $output=shell_exec('/home/ubuntu/startOrResetShutDown '.$GET["instance_id"]);
  echo $output;
?>
