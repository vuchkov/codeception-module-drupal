<?php
namespace Codeception\Module;

use Codeception\Module;

/**
 * Class Drupal
 * @package Codeception\Module
 */
class Drupal extends Module
{

    /**
     * @var array
     */
    protected $config = [
        'drupalRoot' => null
    ];

    /**
     * @param array $config
     */
    function _initialize($config)
    {
        // We can't get getcwd() as a default parameter, so this will have to do.
        if (is_null($this->config['drupalRoot'])) {
            $this->config['drupalRoot'] = getcwd();
        }

        // Do a Drush-style bootstrap.
        define('DRUPAL_ROOT', $this->config['drupalRoot']);
        require_once DRUPAL_ROOT . '/includes/bootstrap.inc';
        $_SERVER['REMOTE_ADDR'] = '127.0.0.1';

        // Bootstrap Drupal.
        drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);
    }


}
