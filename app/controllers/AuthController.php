<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class AuthController extends Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->call->library('session');
    }

    public function login()
    {
        if ($this->request->method() == 'post')
        {
            $username = $this->request->post('username');
            $password = $this->request->post('password');

            if ($username === 'admin' && $password === 'admin123')
            {
                $this->session->set_userdata([
                    'logged_in' => true,
                    'username' => 'admin'
                ]);

                redirect('products');
                exit;
            }

            $data['error'] = 'Invalid username or password.';

            $this->call->view('products/login', $data);
            return;
        }

        $this->call->view('products/login');
    }

    public function logout()
    {
        $this->session->unset_userdata([
            'logged_in',
            'username'
        ]);

        redirect('login');
        exit;
    }
}

?>