<?php 

class ProjectsController extends AppController
{
	
	public function index()
	{
		//$projects = $this->Project->find('all', array( 'fields' => array('Project.id','Project.titre'), 'conditions' => array('Project.id' => 1) ));
		$projects = $this->Project->find('all');
		$this->set('projects', $projects);

		if ($this->request->is('post')) {
			$this->Project->create();
			$this->Project->save($this->request->data);

		}
		

	}
}
 ?>


