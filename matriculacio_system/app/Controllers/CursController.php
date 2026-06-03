<?php

namespace App\Controllers;
use App\Models\CursModel ;
use App\Models\NivelModel;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class CursController extends BaseController
{
     public function index()
    {
        helper('form');
        $Nivelmodel = new NivelModel() ;
        $CursoModel = new CursModel();

          
        $builder = $CursoModel
        ->select('Curs.*,niveles.nombre')
        ->join('niveles', 'niveles.id_nivel = curs.nivel_id')
        ->orderBy('curs.created_at', 'DESC');
        
        
        
        $data['cursos'] = $CursoModel->paginate(6);
        $data['pager'] = $CursoModel->pager;
        
        return view('Admins/cursos/Curs_list', $data);
    }

    public function create()
    {
        helper('form');
        $Nivelmodel = new NivelModel() ;
        $CursoModel = new CursModel();
        $data['nivels'] = $Nivelmodel->findAll() ; 
        
        return view('Admins/cursos/Curs_create',$data);
    }

    public function Create_post()
    {
        helper('form');

        $CursoModel = new CursModel();

        $Nivelmodel = new NivelModel(); 
        
        $rules = [
            'Nom_curs'    => 'required',
            'codigo_curs' => 'required',
            'precio'      => 'required|numeric',
            'nivel'       => 'required'
         ];

        if (!$this->validate($rules)) {
            return redirect()->to('privat/Cursos/Curs_create')->with('error', $this->validator->getErrors())->withInput();
        }
        $nivel = $this->request->getPost('nivel'); 
        $nivel_id = $Nivelmodel->where('nombre',$nivel)->first(); 

        $data = [
            'Nom_curs'    => $this->request->getPost('Nom_curs'),
            'codigo_curs' => $this->request->getPost('codigo_curs'),
            'precio'      => $this->request->getPost('precio'),
            'nivel_id'    => $nivel_id['id_nivel']
        ];


        $CursoModel->insert($data);

        return redirect()->to('privat/cursos')->with('success', 'Curso creado correctamente');
    }

    public function edit($id)
    {
        helper('form');

        $CursoModel = new CursModel();
        $Nivelmodel = new NivelModel();

        $curso = $CursoModel->find($id);
        $data['nivels'] = $Nivelmodel->findAll() ; 

        if (!$curso) {
            return redirect()->to('privat/cursos')->with('error', 'Curso no encontrado');
        }

        $data['curso'] = $curso;
        
        return view('Admins/cursos/Curs_edit', $data);
    }

    public function update($id)
    {
        helper('form');

        $CursoModel = new CursModel();
        $Nivelmodel = new NivelModel();
        $rules = [
            'Nom_curs'    => 'required',
            'codigo_curs' => 'required',
            'precio'      => 'required|numeric',
            'nivel'      => 'required'
        ];

        if (!$this->validate($rules)) {
            return redirect()
                ->to('privat/cursos/edit/' . $id)
                ->with('error', $this->validator->getErrors())
                ->withInput();
        }

        $nivel = $this->request->getPost('nivel'); 
        $nivel_id = $Nivelmodel->where('nombre',$nivel)->first(); 

        $data = [
            'Nom_curs'    => $this->request->getPost('Nom_curs'),
            'codigo_curs' => $this->request->getPost('codigo_curs'),
            'precio'      => $this->request->getPost('precio'),
            'nivel_id'    => $nivel_id['id_nivel']
        ];

        $CursoModel->update($id, $data);

        return redirect()->to('privat/cursos')->with('success', 'Curso actualizado correctamente');
    }
    
    public function delete($id)
    {
        helper('form');

        $CursoModel = new CursModel();

        $CursoModel->delete($id);

        return redirect()->to('privat/cursos')->with('success', 'Curso eliminado correctamente');
    }
}
