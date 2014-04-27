<?php
class PostsController extends AppController{
      var $name = 'Posts';
      
      
      function index() {
       
        $this->set('posts', $this->Post->find('all'));
        
      }
      
      function view($id = NULL){
        $this->set('post',$this->Post->read(NULL, $id));
        
      }
      
          public function add() {
        if ($this->request->is('post')) {
        $this->Post->create();
        if ($this->Post->save($this->request->data)) {
            $this->Session->setFlash(__('Employer enregistre'));
            return $this->redirect(array('action' => 'index'));
         }
        $this->Session->setFlash(__('Unable to add your post.'));
    }
}
