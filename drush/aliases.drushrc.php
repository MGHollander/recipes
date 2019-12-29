<?php
/**
 * @file
 * Drush aliases for Thuisarts environments.
 */

$aliases = [
  'prod' => [
    'root' => '/path/to/web',
    'remote-host' => '',
    'remote-user' => '',
    'path-aliases' => [
      '%drush-script' => '/path/to/vendor/bin/drush',
    ],
  ],
];
