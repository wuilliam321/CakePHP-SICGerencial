<?php
App::uses('BaseAuthenticate', 'Controller/Component/Auth');
App::uses('ConnectionManager', 'Model');
App::uses('AppModel', 'Model');

class LdapAuthenticate extends BaseAuthenticate {
    private $ldap = null;
    private $dataSource = null;
 
    public function  __construct(ComponentCollection $collection, $settings) {
        $this->dataSource = ConnectionManager::getDataSource('ldap');
        $this->ldap = ldap_connect($this->dataSource->config['host'], $this->dataSource->config['port']);
 
        ldap_set_option($this->ldap, LDAP_OPT_REFERRALS, 0);
        ldap_set_option($this->ldap, LDAP_OPT_PROTOCOL_VERSION, 3);
        parent::__construct($collection, $settings);
    }
    
    public function authenticate(CakeRequest $request, CakeResponse $response) {
        $username = $request->data['User']['username'] . $this->dataSource->config['suffix'];
        $attributes = array('givenName','sn','mail','samaccountname','memberof');
        $filter = "(samaccountname=%s)";
        $filter = sprintf($filter, $request->data['User']['username']);
        
        if (!@ldap_bind($this->ldap, $request->data['User']['username'] . $this->dataSource->config['suffix'], $request->data['User']['password'])) {
            return false;
        }
        
        $result = ldap_search($this->ldap, $this->dataSource->config['basedn'], $filter, $attributes);
        $entries = ldap_get_entries($this->ldap, $result);
        if (!$entries) {
            return false;
        }
        return $this->formatInfo($entries);
    }
 
    private function formatInfo($array){
        $info = array('User' => array());
        if (!isset($array[0]) || empty($array)) {
            return false;
        }
        $info['User']['first_name'] = $array[0]['givenname'][0];
        $info['User']['last_name'] = isset($array[0]['sn']) ? $array[0]['sn'][0] : '';
        $info['User']['username'] = $array[0]['samaccountname'][0];
        return $info;
    }
}
