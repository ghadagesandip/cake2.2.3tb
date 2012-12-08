<?php

App::uses('AppController','Controller');

class UserMgmtAppController extends AppController {

    
    public function beforeFilter() {
        $this->layout='user_mgmt';
	parent::beforeFilter();
    }

    

}

