<?php

namespace App\Controllers;

use App\Models\ClientesModel;
use CodeIgniter\Controller;

class Clientes extends Controller
{
    public function index()
    {
        $model = new ClientesModel();
        $data['clientes'] = $model->findAll();

        return view('clientes/index', $data);
    }

    public function create()
    {
        return view('clientes/create');
    }

    public function store()
    {
        $model = new ClientesModel();

        $data = [
            'nombre' => $this->request->getPost('nombre'),
            'apellido' => $this->request->getPost('apellido'),
            'fecha_nacimiento' => $this->request->getPost('fecha_nacimiento'),
            'fecha_sucripcion' => $this->request->getPost('fecha_sucripcion'),
            'correo_electronico' => $this->request->getPost('correo_electronico'),
            'telefono_movil' => $this->request->getPost('telefono_movil')
        ];

        if ($model->insert($data)) {
            return redirect()->to('/clientes')->with('success', 'Cliente creado exitosamente.');
        } else {
            return redirect()->back()->with('errors', $model->errors());
        }
    }

    public function edit($id)
    {
        $model = new ClientesModel();
        $data['cliente'] = $model->find($id);

        if (!$data['cliente']) {
            return redirect()->to('/clientes')->with('error', 'Cliente no encontrado.');
        }

        return view('clientes/edit', $data);
    }

    public function update($id)
    {
        $model = new ClientesModel();

        $data = [
            'nombre' => $this->request->getPost('nombre'),
            'apellido' => $this->request->getPost('apellido'),
            'fecha_nacimiento' => $this->request->getPost('fecha_nacimiento'),
            'fecha_sucripcion' => $this->request->getPost('fecha_sucripcion'),
            'correo_electronico' => $this->request->getPost('correo_electronico'),
            'telefono_movil' => $this->request->getPost('telefono_movil')
        ];

        if ($model->update($id, $data)) {
            return redirect()->to('/clientes')->with('success', 'Cliente actualizado exitosamente.');
        } else {
            return redirect()->back()->with('errors', $model->errors());
        }
    }

    public function delete($id)
    {
        $model = new ClientesModel();
        if ($model->delete($id)) {
            return redirect()->to('/clientes')->with('success', 'Cliente eliminado exitosamente.');
        } else {
            return redirect()->to('/clientes')->with('error', 'Error al eliminar el cliente.');
        }
    }
}
