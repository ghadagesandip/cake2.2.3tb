<?php
App::uses('AppController', 'Controller');
/**
 * Comments Controller
 *
 * @property Comment $Comment
 */
class CommentsController extends AppController {

/**
 * index method
 *
 * @return void
 */
        public $helper=array('MyHtml');

        public $paginate=array('limit'=>3);

	public function index() {
		$this->Comment->recursive = 0;
		$this->set('comments', $this->paginate());
		$this->set('_serialize', array('comments'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Comment->id = $id;
		if (!$this->Comment->exists()) {
			throw new NotFoundException(__('Invalid comment'));
		}
		$this->set('comment', $this->Comment->read(null, $id));
		$this->set('_serialize', array('comment'));
	}

/**
 * add method
 *
 * @return void
 */
        public function add_ajax(){
            $this->layout='ajax';
            $this->request->data['Comment']['comments']=$_GET['c'];
            $this->Comment->create();
            if ($this->Comment->save($this->request->data)) {
                               
                print_r(json_encode($this->Comment->read()));

            }
            exit;
        }
	public function add() {
		if ($this->request->is('post')) {
			$this->Comment->create();
			print_r($this->request->data);exit;
			$data = array(
  				  array('Comment' => array('comments' => 'New article')), // This creates a new row
				  array('Comment' => array( 'comments' => 'title 2')), // This updates an existing row
			);
			if ($this->Comment->saveMany($data)) {
				$this->Session->setFlash(__('The comment has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comment could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Comment->id = $id;
		if (!$this->Comment->exists()) {
			throw new NotFoundException(__('Invalid comment'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Comment->save($this->request->data)) {
				$this->Session->setFlash(__('The comment has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comment could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Comment->read(null, $id);
		}
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		
		$this->Comment->id = $id;
		if (!$this->Comment->exists()) {
			throw new NotFoundException(__('Invalid comment'));
		}
		if ($this->Comment->delete()) {
			$this->Session->setFlash(__('Comment deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Comment was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
