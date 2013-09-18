<?php

watchdog('cron', 'Started cron');

chdir('drupal');
define('DRUPAL_ROOT', getcwd());

include_once DRUPAL_ROOT . '/includes/bootstrap.inc';
drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);

drupal_cron_run();

watchdog('cron', 'Finished cron');

?>