<?php
/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here. You can see a
 * list of the available settings in vendor/craftcms/cms/src/config/GeneralConfig.php.
 *
 * @see \craft\config\GeneralConfig
 */

use craft\config\GeneralConfig;
use craft\helpers\App;

return array(
    'localhost' => array(
      'devMode' => true,
      'siteUrl' => 'http://localhost',
      'environmentVariables' => array(
        'basePath' => '/users/waynegoodman/rl-v2/web',
        'baseUrl'  => 'http://localhost/',
      ),
      'testToEmailAddress' => 'dev@email.com',
    ),
  
    // Use IP address of your droplet below
    '12.34.56.78' => array(
      'siteUrl' => 'https://mrrover.net',
      'environmentVariables' => array(
        'basePath' => '/var/www/html/',
        'baseUrl'  => 'http://67.207.84.66/',
      )
    )
  );
