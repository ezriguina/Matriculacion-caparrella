<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\AsignaturasModel; 
use App\Models\CursModel; 
use App\Models\NivelModel; 
Use App\Models\OptativasModel; 


class AsignaturasController extends BaseController
{
    public function asig_list()
    {
     helper('form'); 
     $session = session(); 

     $AsignaturasModel = new AsignaturasModel() ;
     $CursModel = new CursModel(); 
     $NivelModel = new NivelModel(); 
     $OptativasModel = new OptativasModel();
     
     $data['Asignaturas'] = $AsignaturasModel->findAll(); 
     $data['CursModel'] = $CursModel->findAll() ; 
     
     return view('Admins/cursos/asignaturas/A_list',$data);

    }
    public function asig_create()
    {
        helper('form'); 
     $session = session(); 
     
     $AsignaturasModel = new AsignaturasModel() ;
     $CursModel = new CursModel(); 
     $NivelModel = new NivelModel(); 
     $OptativasModel = new OptativasModel();
     
     $data['Asignaturas'] = $AsignaturasModel->findAll(); 
     $data['CursModel'] = $CursModel->findAll() ; 
     
     return view('Admins/cursos/asignaturas/A_create',$data);

        
    }
    public function asig_create_post()
    {
        helper('form'); 
     $session = session(); 
     
     $AsignaturasModel = new AsignaturasModel() ;
     $CursModel = new CursModel(); 
     $NivelModel = new NivelModel(); 
     $OptativasModel = new OptativasModel();
     $Asig = $this->request->getPost('Asig'); 
     $tipo = $this->request->getPost('tipo'); 
     $Curso = $this->request->getPost('curs'); 
     $precio = $this->request->getPost('precio'); 

     $validation = [
        'Asig'    => 'required',
        'tipo'    => 'required',
        'curs'    => 'required',
        'precio'    => 'required'
     ];
     if(!$this->validate($validation)){
        return redirect()->back()->withInput()->with('error',$validation); 
     }
     $curso = $CursModel->where('Nom_curs',$Curso)->first() ;
     if(!$curso){
      die('el curso no esta disponible');

     }

     $data_asig = [
     'nombre'    => $Asig,
     'tipo'      => $tipo,
     'precio'   => $precio ,
     'id_curs'  => $curso['id_curs']
     ]; 
     
     $AsignaturasModel->insert($data_asig) ;

     $data['Asignaturas'] = $AsignaturasModel->findAll(); 
     $data['CursModel'] = $CursModel->findAll() ; 
     
     return redirect()->to('privat/cursos/asignaturas')->with('succes','has creado una asignatura');

    }
    public function asig_edit($id)
    {
           helper('form'); 
     $session = session(); 
     
     $AsignaturasModel = new AsignaturasModel() ;
     $CursModel = new CursModel(); 

     $NivelModel = new NivelModel(); 
     $OptativasModel = new OptativasModel();
     $Asig = $AsignaturasModel->find($id); 
     $data['Asignaturas'] = $Asig; 
     $data['CursModel'] = $CursModel->findAll() ; 
     
     return view('Admins/cursos/asignaturas/A_edit',$data);

        
    }
    public function asig_edit_post($id)
    {
             helper('form'); 
     $session = session(); 
     
     $AsignaturasModel = new AsignaturasModel() ;
     $CursModel = new CursModel(); 
     $NivelModel = new NivelModel(); 
     $OptativasModel = new OptativasModel();
     $Asig = $this->request->getPost('Asig'); 
     $tipo = $this->request->getPost('tipo'); 
     $Curso = $this->request->getPost('curs'); 
     $precio = $this->request->getPost('precio'); 

     $validation = [
        'Asig'    => 'required',
        'tipo'    => 'required',
        'curs'    => 'required',
        'precio'    => 'required'
     ];
     if(!$this->validate($validation)){
        return redirect()->back()->withInput()->with('error',$validation); 
     }
     $curso = $CursModel->where('Nom_curs',$Curso)->first() ;
     if(!$curso){
      die('el curso no esta disponible');

     }

     $data_asig = [
     'nombre'    => $Asig,
     'tipo'      => $tipo,
     'precio'   => $precio ,
     'id_curs'  => $curso['id_curs']
     ]; 
     
     $AsignaturasModel->update($id,$data_asig) ;
     
     $data['Asignaturas'] = $AsignaturasModel->findAll(); 
     $data['CursModel'] = $CursModel->findAll() ; 
     
     return redirect()->to('privat/cursos/asignaturas')->with('succes','has creado una asignatura');

    }
    public function delete($id)
    {
        $session = session(); 

        $AsignaturasModel = new AsignaturasModel(); 
        $Asig = $AsignaturasModel->delete($id); 
        
        return redirect()->to('privat/cursos/asignaturas')->with('succes','has borrado una asignatura');

    }
     
}
