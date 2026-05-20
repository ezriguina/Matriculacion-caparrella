<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CursModel;
use App\Models\TandaModel;
use CodeIgniter\HTTP\ResponseInterface;
use PHPUnit\TextUI\XmlConfiguration\Validator;

class TandaController extends BaseController
{
    public function index()
    {
        
    }
    public function tanda_view(){
        helper('from');
   $TandadaModel=new TandaModel();

   $CursoModel = new CursModel() ;
    
   $Tandadas = $TandadaModel->paginate(6,'default'); 
    
   $data['tandada']=$Tandadas ; 
   
    return view('Admins/tandas/Tandadas_list',$data);
    
    }  

   public function T_create(){
    helper('form'); 
    $CursoModel = new CursModel() ;
    
    $data['cursos'] = $CursoModel->findAll() ;
    return view('Admins/tandas/T_create',$data) ;
   }


   public function T_post(){
   helper('form');
   $TandadaModel=new TandaModel();

   $CursoModel = new CursModel() ;
   
   $nom_tanda = $this->request->getPost('nom');
   $estado = $this->request->getPost('estado');
   $curso = $this->request->getPost('curso') ;
   $fecha_i =$this->request->getPost('fecha_inicio');
   $fecha_f= $this->request->getPost('fecha_fin') ;
   
   $validatio_rules = [
    'nom'   => 'required' ,
    'estado' => 'required' ,
    'fecha_inicio' => 'required',
    'fecha_fin' => 'required'
   ];

   
   if(!$this->validate($validatio_rules)){
     return redirect()->to('privat/Tandada/create')->with('error',$validatio_rules)->withInput();
   }

   $data_tanda = [
   'nom_tandada' => $nom_tanda,
   'fecha_inici' => $fecha_i,
   'fecha_fin' => $fecha_f,
   'estado' => $estado
   ];
  
   $TandadaModel ->insert($data_tanda);
   return redirect()->to('privat/Tandada/create')->with('succes','Tandada Created exitoso') ;
   }

   public function T_edit($id)
{
    helper('form'); 

    $TandadaModel = new TandaModel();
    $CursoModel = new CursModel();
    $tandada = $TandadaModel->find($id);

    if (!$tandada) {
        return redirect()->to('privat/Tandada')->with('error', 'Tandada no encontrada');
    }

    $data['tandada'] = $tandada;
    $data['cursos'] = $CursoModel->findAll();  
    
    return view('Admins/tandas/T_edit', $data);
}


public function T_edit_post($id)
{
    helper('form');

    $TandadaModel = new TandaModel();

   $CursoModel = new CursModel() ;
   
    $rules = [
        'nom'           => 'required',
        'estado'        => 'required',
        'fecha_inicio'  => 'required',
        'fecha_fin'     => 'required'
    ];

    if (!$this->validate($rules)) {
        return redirect()
            ->to('privat/Tandada/T_edit/' . $id)
            ->with('error', $this->validator->getErrors())
            ->withInput();
    }

    $data_tanda = [
        'nom_tandada' => $this->request->getPost('nom'),
        'fecha_inici' => $this->request->getPost('fecha_inicio'),
        'fecha_fin'   => $this->request->getPost('fecha_fin'),
        'estado'      => $this->request->getPost('estado')
    ];
    
    $TandadaModel->update($id, $data_tanda);
    
    return redirect()->to('privat/Tandada')->with('success', 'Tandada actualizada correctamente');
}

public function T_delete($id){
 helper('form'); 

 $TandadaModel = new TandaModel() ;

 $TandadaModel->delete($id) ; 
  
 return  redirect()->to('privat/Tandada')->with('succes','Tandada borrada con exito .');
}


public function T_view($id){
  helper('form'); 
  $TandadaModel = new TandaModel() ; 
  $CursoModel = new CursModel(); 

  $data['tandada']=$TandadaModel->find($id) ; 
  
  return view('Admins/tandas/T_view',$data); 
}
       
}