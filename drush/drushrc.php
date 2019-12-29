<?php

/**
 * @file
 * Drush command overrides specific to this project.
 */

// Default language for drush commands.
$options['variables']['language_default'] = (object) array(
  'language' => 'en',
  'name' => 'English',
  'native' => 'English',
  'direction' => '0',
  'enabled' => '1',
  'prefix' => 'en',
);

// Oneshoe default drush rsync options.
$command_specific['core-rsync'] = array(
  'verbose' => TRUE,
  'mode' => 'crblPi',
  'delete-after' => NULL,
  'safe-links' => NULL,
  'exclude-paths' => 'sites/*/services*.yml:sites/*/files:sites/*/settings*.php:.htpasswd:sites.php:google*.html:node_modules:.pki:.drush',
  'progress' => NULL,
);

// Sane drush SQL dump defaults.
$command_specific['sql-dump'] = array(
  'ordered-dump' => TRUE,
  // Don't waste our wall/proc time - ever.
  'simulate' => '0',
  // Define a list of tables we just want the structure of.
  'structure-tables' => array(
    'common' => array(
      // Don't dump cache tables.
      'cachetags',
      'cache_*',
      'queue',
      'sessions',
      'watchdog'
    ),
  ),
  'structure-tables-key' => 'common',
);
