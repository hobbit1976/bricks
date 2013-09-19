<?php
echo "Start cron";
chdir('htdocs');
define('DRUPAL_ROOT', getcwd());

include_once DRUPAL_ROOT . '/includes/bootstrap.inc';
drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);
watchdog('cron', 'Test cron');
//drupal_cron_run();

?>