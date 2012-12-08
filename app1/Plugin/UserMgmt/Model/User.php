<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

App::uses('UserMgmtAppModel', 'UserMgmt.Model');
App::uses('CakeEmail', 'Network/Email');

class User extends UserMgmtAppModel{
public $validate = array(
        'username' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A username is required'
            )
        ),
        'password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A password is required'
            )
        ),
        'email_address' => array(
            'required'=>array(
                'rule'=>array('notEmpty'),
                'message'=>'enter email address'
            )
        )
    );
    
}


?>
