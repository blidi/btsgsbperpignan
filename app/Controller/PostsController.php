<?php
class PostsController extends AppController{
      var $name = 'Posts';
      
      
      function index() {
       
        $this->set('posts', $this->Post->find('all'));
        
      }
      
      function view($id = NULL){
        $this->set('post',$this->Post->read(NULL, $id));
        
      }
      
      function add() {
        if(!empty($this->request->data)){
            if($this->Post->save($this->request->data)){
                this->Session->setFlash('votre ajout est r�ussie');
            }
        }
      }
}
