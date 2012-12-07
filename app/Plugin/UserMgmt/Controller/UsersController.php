<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

App::uses('UserMgmtAppController', 'UserMgmt.Controller');

class UsersController extends UserMgmtAppController{

  public $uses = array('UserMgmt.User');

  public function beforeFilter() {
        parent::beforeFilter();
       // $this->Auth->allow('login', 'logout','index');
  }


  public function index(){
      $this->User->recursive=-1;
      $this->set('users',$this->paginate());
  }

  public function view(){

  }

  public function add(){
      if($this->request->is('post')){
          $this->User->create();
          if($this->User->save($this->request->data)){
              $this->Session->SetFlash('User added successfully');
              $this->redirect(array('controller'=>'Users','action'=>'index'));
          }
      }
  }
}


?>
