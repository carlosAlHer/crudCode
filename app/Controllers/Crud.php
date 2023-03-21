<?php

namespace App\Controllers;

use App\Models\CrudModel;


class Crud extends BaseController
{
    public function index()
    {
        $Crud = new CrudModel();
        $datos = $Crud->listarNombres();
        $mensaje = session('mensaje');
        $data = [
            "datos"   => $datos,
            "mensaje" => $mensaje
        ];


        return view('listado', $data);
    }
    public function crear()
    {
        $datos = [
            "nombre" => $_POST['nombre'],
            "paterno" => $_POST['paterno'],
            "materno" => $_POST['materno'],
        ];
        $Crud = new CrudModel();
        $respuesta = $Crud->insertar($datos);
        if ($respuesta > 0) {
            return redirect()->to(base_url().'/')->with('mensaje', '1');
        } else {
            return redirect()->to(base_url().'/')->with('mensaje', '0');
        }
        

    }
    public function actualizar()
    {
        $datos = [
            "nombre" => $_POST['nombre'],
            "paterno" => $_POST['paterno'],
            "materno" => $_POST['materno'],
        ];
        $idNombre = $_POST['idNombre'];
        $Crud = new CrudModel();
        $respuesta = $Crud->insertar($datos, $idNombre);

        if ($respuesta > 0) {
            return redirect()->to(base_url().'/')->with('mensaje', '2');
        } else {
            return redirect()->to(base_url().'/')->with('mensaje', '3');
        }
    }
    public function obtenerNombre($idNombre)
    {
        $data = ["id_nombre" => $idNombre];#se pasara al metodo que hace consula en model
        $Crud = new CrudModel();#se crea instancia del model
        $respuesta = $Crud->obtenerNombre($data);#llamamos al metodo obtenerNombre y se le pasa el array
        $datos = ["datos" => $respuesta];#se almacena en array todos los elementos traidos que se usaran en la vista actualizar
        return view('actualizar', $datos);#se redirecciona a la vista actualizar

    }
    public function eliminar($idNombre){
        $Crud = new CrudModel();
        $data = ["id_nombre" => $idNombre];
        $respuesta = $Crud->eliminar($data);
        if ($respuesta > 0) {
            return redirect()->to(base_url().'/')->with('mensaje', 4);
        } else {
            return redirect()->to(base_url().'/')->with('mensaje', 5);
        }
        
    }
}
