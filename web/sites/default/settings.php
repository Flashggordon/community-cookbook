<?php

// phpcs:ignoreFile

/**
 * @file
 * Drupal site-specific configuration file.
 */

// (… your original comments and content …)

$databases = [];
$databases['default']['default'] = [
  'database' => 'drupal10',
  'username' => 'drupal10',
  'password' => 'drupal10',
  'host' => 'database',
  'port' => '3306',
  'driver' => 'mysql',
  'prefix' => '',
  'collation' => 'utf8mb4_general_ci',
];

$settings['hash_salt'] = '5bda9fbcea09e0303c0d3445082fb144b63656d6d129115e14e8d6dd7292dcfb24d5fd5d076bbea3f86ee4806e70d3cb6f74bd1660fe50';
$settings['config_sync_directory'] = '../config/sync';

$config['system.logging']['error_level'] = 'verbose';
