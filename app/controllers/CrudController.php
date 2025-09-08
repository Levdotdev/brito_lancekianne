<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Controller: CrudController
 * 
 * Automatically generated via CLI.
 */
class CrudController extends Controller {
    public function __construct()
    {
        parent::__construct();
        $this->call->database();
        $this->call->model('CrudModel');
    }

    public function index(){
        $data['chars'] = $this->CrudModel->all();
        $this->call->view('home', $data);
    }

    public function create()
    {
        if($this->io->method() == 'post'){
            $name = $this->io->post('name');
            $class = $this->io->post('class');
            $data = [
                'name' => $name,
                'class' => $class
            ];
            if($this->CrudModel->insert($data)){
                redirect();
            }
        }
        else{
            $this->call->view('create');
        }
    }

    public function update($id)
    {
        $data['char'] = $this->CrudModel->find($id);
        if($this->io->method() == 'post'){
            $name = $this->io->post('name');
            $class = $this->io->post('class');
            $data = [
                'name' => $name,
                'class' => $class
            ];
            if($this->CrudModel->update($id, $data)){
                redirect();
            }
        }
        else{
            $this->call->view('update', $data);
        }
    }

    function delete($id){
        $this->CrudModel->delete($id);
        redirect();
    }

    function soft_delete($id){
        $this->CrudModel->soft_delete($id);
        redirect();
    }

    function trash(){
        $data['chars'] = $this->CrudModel->raw('SELECT * FROM genshin WHERE deleted_at IS NOT NULL')->fetchAll();
        $this->call->view('trash', $data);
    }

    function restore($id){
        $this->CrudModel->restore($id);
        redirect('trash');
    }
}