<?php
App::uses('HttpSocket', 'Network/Http');

class LdapSource extends DataSource {

/**
 * An optional description of your datasource
 */
    public $description = 'Custom LDAP';

/**
 * Our default config options. These options will be customized in our
 * ``app/Config/database.php`` and will be merged in the ``__construct()``.
 */
    public $config = array(
        'host' => '',
        'port' => 389,
        'basedn' => '',
        'suffix' => '',
        'login' => '',
        'password' => '',
    );

/**
 * Create our HttpSocket and handle any config tweaks.
 */
    public function __construct($config) {
        parent::__construct($config);
        $this->Http = new HttpSocket();
    }
}

