<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ReudccionesModel;

class ReduccionesController extends BaseController
{
    public function index(){}

    public function reducciones_view()
    {
        helper('form');

        $model = new ReudccionesModel();

        $data['reducciones'] = $model->paginate(6);

        return view('privat/Reducciones/reducciones_list', $data);
    }

    public function R_create()
    {
        helper('form');

        return view('privat/Reducciones/R_create');
    }

    public function R_post()
    {
        helper('form');

        $model = new ReudccionesModel();

        $rules = [
            'nombre' => 'required',
            'precio' => 'required|decimal'
        ];

        if (!$this->validate($rules)) {
            return redirect()->to('privat/Reducciones/create')
                ->with('error', $this->validator->getErrors())
                ->withInput();
        }

        $data = [
            'nombre' => $this->request->getPost('nombre'),
            'precio' => $this->request->getPost('precio')
        ];
   
        $file = $this->request->getFile('documento');

        if ($file && $file->isValid()) {
            $name = $file->getRandomName();
            $file->move('uploads/reducciones', $name);
            $data['documento'] = $name;
        }

        $model->insert($data);

        return redirect()->to('privat/Reducciones')
            ->with('success', 'Creado');
    }

    public function R_edit($id)
    {
        helper('form');

        $model = new ReudccionesModel();

        $data['reduccion'] = $model->find($id);

        return view('privat/Reducciones/R_edit', $data);
    }

    public function R_edit_post($id)
    {
        helper('form');

        $model = new ReudccionesModel();

        $rules = [
            'nombre' => 'required',
            'precio' => 'required|decimal'
        ];

        if (!$this->validate($rules)) {
            return redirect()->to('privat/Reducciones/edit/' . $id)
                ->with('error', $this->validator->getErrors())
                ->withInput();
        }

        $data = [
            'nombre' => $this->request->getPost('nombre'),
            'precio' => $this->request->getPost('precio')
        ];

        $file = $this->request->getFile('documento');

        if ($file && $file->isValid()) {
            $name = $file->getRandomName();
            $file->move('uploads/reducciones', $name);
            $data['documento'] = $name;
        }

        $model->update($id, $data);

        return redirect()->to('privat/Reducciones')
            ->with('success', 'Actualizado');
    }

    public function R_delete($id)
    {
        $model = new ReudccionesModel();

        $model->delete($id);

        return redirect()->to('privat/Reducciones')
            ->with('success', 'Eliminado');
    }

    public function R_view($id)
    {
        $model = new ReudccionesModel();

        $data['reduccion'] = $model->find($id);

        return view('privat/Reducciones/R_view', $data);
    }
}