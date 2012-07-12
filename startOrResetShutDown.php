<?php
  $output=shell_exec('bash; . /var/www/.bashrc; /var/www-scripts/shutdown/startOrResetShutDown 2>&1');
  echo $output;
?>
