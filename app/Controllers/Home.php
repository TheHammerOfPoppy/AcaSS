<?php namespace App\Controllers;

    use App\Models\Usuarios;

class Home extends BaseController
{
    public function construct(){
        helper('url');
    }
    public function index() //PAGINA PRINCIPAL
    {
        $mensaje = session('mensaje');
        return view('fachada', ["mensaje" => $mensaje]);
    }
    public function inicioSesion() //NOS MANDA AL LOGIN PARA INICIAR SESION
    {
        $mensaje = session('mensaje');
        return view('login', ["mensaje" => $mensaje]);
    }
    public function registroUsuario() //NOS MANDA DONDE EL FORMULARIO PARA REGISTRO DE USUARIO
    {
        $mensaje = session('mensaje');
        return view('registroUsuario', ["mensaje" => $mensaje]);
    }
    public function inicio(){
        return view('inicio');
    }
    
    
    public function login() // NOS PERMITE VALIDAR SI EL USUARIO EXISTE PARA PODER INGRESAR A LA PAGINA DE INICIO
    {
        $usuario = $this->request->getPost('usuario');
        $password = $this->request->getPost('password');
        $Usuario = new Usuarios();

        $datosUsuario = $Usuario->obtenerUsuario(['usuario' => $usuario]);
        if (count($datosUsuario) > 0 && password_verify($password, $datosUsuario[0]['password'])) {

            $data = [
                        "usuario" => $datosUsuario[0]['usuario'],
                        "type" => $datosUsuario[0]['type']
            ];
            $session = session();
            $session->set($data);

            return redirect()->to(base_url('/inicio'))->with('mensaje','1');
        } 
        else {
            return redirect()->to(base_url('/'))->with('mensaje','0');
        }
    }
    
    
    public function salir() //NOS PERMITE CERRAR SESION
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('/'));
    }

    
    
    public function perfil() //PAGINA PRINCIPAL
    {
        $mensaje = session('mensaje');
        return view('perfil', ["mensaje" => $mensaje]);
    }
}
