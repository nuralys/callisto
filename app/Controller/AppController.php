<?php


App::uses('Controller', 'Controller');


class AppController extends Controller {

	public $uses = array('App', 'Service');

	public $components = array('DebugKit.Toolbar', 'Session', 'Auth' => array(
            'loginRedirect' => '/',
            'logoutRedirect' => '/',
            'authenticate' => array(
                'Form' => array(
                    'passwordHasher' => 'Blowfish'
                )
            ),
            'authorize' => array('Controller'),
            'authError' => 'Вы не имеете прав доступа к данной странице'
        ));

	public $helpers = array('Html', 'Form', 'Session');

	public function isAuthorized($user) {
	    // Admin can access every action
	    if (isset($user['role']) && $user['role'] === 'admin') {
	        return true;
	    }

	    // Default deny
	    return false;
	}

	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('index', 'view');
		$admin = (isset($this->request->params['prefix']) && $this->request->params['prefix'] == 'admin') ? 'admin/' : false;
		if(!$admin) $this->Auth->allow();
		
		if($admin){
			$this->layout = 'default';
		}else{
			if($this->params['action']=='home'){
				$this->layout = 'index';
			}else{
				$this->layout = 'page';
			}
		}
		$menu_services = $this->Service->find('all', array(
			'conditions' => array('parent_id' => 0)
		));
		$this->set(compact('admin', 'menu_services'));

	}

	

}
