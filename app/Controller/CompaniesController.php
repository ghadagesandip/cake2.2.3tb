<?php
App::uses('AppController', 'Controller');
/**
 * Companys Controller
 *
 * @property Company $Company
 */
class CompaniesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Company->recursive = 0;
		$this->set('companies', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Company->id = $id;
		if (!$this->Company->exists()) {
			throw new NotFoundException(__('Invalid Company'));
		}
		$this->set('company', $this->Company->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		
		if ($this->request->is('post')) {
			$this->Company->create();
		//	echo "<pre/>"; print_r($this->request->data);exit;
			if ($this->Company->saveAll($this->request->data,array('deep'=>true))) {
				$this->Session->setFlash(__('The Company has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Company could not be saved. Please, try again.'));
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
		$this->Company->id = $id;
		if (!$this->Company->exists()) {
			throw new NotFoundException(__('Invalid Company'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			//echo "<pre/>"; print_r($this->request->data);exit;
			if ($this->Company->saveAll($this->request->data,array('deep'=>true))) {
				$this->Session->setFlash(__('The Company has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Company could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Company->read(null, $id);
			//echo count($this->request->data['Department']); exit;
			$this->set('company',$this->request->data);
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
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Company->id = $id;
		if (!$this->Company->exists()) {
			throw new NotFoundException(__('Invalid Company'));
		}
		if ($this->Company->delete()) {
			$this->Session->setFlash(__('Company deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Company was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	
	public function getCompanyDataAjax(){
		$pie_chart_arr = array();
		$getData  = $this->params->query;
		
		
		$this->Company->recursive = -1;
		$Company_data = $this->Company->find('list',array(
									'fields'=>array('Company_name','department_count')
								));
		// echo "<pre>"; print_r($Company_data); exit;						
	$pie_chart_arr['cols'][] = array("id"=>"","label"=>"Non Conformance Type","pattern"=>"","type"=>"string"); 
	$pie_chart_arr['cols'][] = array("id"=>"","label"=>"Number of Non Conformance Actions","pattern"=>"","type"=>"number");
			
		foreach ($Company_data as $key => $val){
			$pie_chart_arr['rows'][] = array("c" => array(
							array("v" => $key,"f" => null),
						 	array("v" => $val,"f" => null)
						));
						
		}
		
		$resultArr['pie_chart'] =  $pie_chart_arr;
		if(empty($Company_data)){
		  $resultArr['total'] = 0;	
		}
		
		
		echo json_encode($resultArr);exit;
		
	}
}
