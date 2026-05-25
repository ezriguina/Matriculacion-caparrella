<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\NivelModel;
use App\Models\CursModel;
use App\Models\AsignaturasModel; 
use App\Models\OptativasModel; 

use CodeIgniter\HTTP\ResponseInterface;

class NivelController extends BaseController
{
    public function index()
    {
        //
    }
    public function nivel_list(){
    helper('form');
    $NivelModel = new NivelModel(); 
    $cursModel = new CursModel(); 
       $data['Niveles'] = $NivelModel->paginate(5,'default') ; 
    $data['pager'] = $NivelModel->pager;

    return view('Admins/cursos/niveles/Nivel_list',$data); 
    
    }

    public function Nivel_crear(){
    helper('form');
    $NivelModel = new NivelModel(); 
    $cursModel = new CursModel(); 
    
    $data['Niveles'] = $NivelModel->paginate(5,'default') ; 
    $data['pager'] = $NivelModel->pager;
    

    return view('Admins/cursos/niveles/Nivel_create',$data); 
    
    }
    public function Nivel_crear_post(){
    helper('form');
    $NivelModel = new NivelModel(); 
    $cursModel = new CursModel();  
     
    $nom_nivel = $this->request->getPost('nombre'); 
    $Descripcion_nivel = $this->request->getPost('descripcion'); 

    $validation =[
    'nombre' => 'required',
    'descripcion' => 'required'
    ]; 

    if(!$this->validate($validation)){
        return redirect()->back()->withInput()->with('error',$validation);
    }
    
    $data_nivel = [
    'nombre'   => $nom_nivel,
    'descripcion' => $Descripcion_nivel
    ]; 
    
    $NivelModel->insert($data_nivel); 
    
    return redirect()->to('privat/Nivelles/listado')->withInput()->with('succes','se ha creado ell nivel ');

    }

    public function Nivel_edit($id){
    helper('form');
    $NivelModel = new NivelModel(); 
    $cursModel = new CursModel(); 
    $nivel = $NivelModel->find($id) ; 
    
    $data['nivel'] = $nivel ; 
    $data['pager'] = $NivelModel->pager;
    
    return view('Admins/cursos/niveles/Nivel_edit',$data); 
    
    }

    public function Nivel_edit_post($id){
    helper('form');
    $NivelModel = new NivelModel(); 
    $cursModel = new CursModel(); 
    $nivel = $NivelModel->find($id) ; 
    $nom_nivel = $this->request->getPost('nombre'); 
    $Descripcion_nivel = $this->request->getPost('descripcion'); 

    $validation =[
    'nombre' => 'required',
    'descripcion' => 'required'
    ]; 

    if(!$this->validate($validation)){
        return redirect()->back()->withInput()->with('error',$validation);
    }
    
    $data_nivel = [
    'nombre'   => $nom_nivel,
    'descripcion' => $Descripcion_nivel
    ]; 

    $nivel = $NivelModel->find($id);
    if(!$nivel){
        return redirect()->back()->withInput()->with('error','este nivel no existe'); 
    }
    
    $NivelModel->update($id,$data_nivel); 
    
    $data['nivel'] = $nivel; 
    $data['pager'] = $NivelModel->pager;
    
    return redirect()->to('privat/Nivelles/listado')->withInput()->with('succes','se ha editado ell nivel '); 

    }
    public function Delete_Nivel($id){
helper('form');
    $NivelModel = new NivelModel(); 
    $cursModel = new CursModel(); 
    
    $nivel = $NivelModel->find($id) ; 
    if(!$nivel){
        return redirect()->back()->withInput()->with('error','este nivel no existe'); 
    }

    $NivelModel ->delete($id) ;
    return redirect()->to('privat/Nivelles/listado')->withInput()->with('succes','se ha editado ell nivel '); 
    }
}
