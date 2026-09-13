<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class AuthController extends Controller
{
    public function login()
    {
        if ($this->request->method() == 'post')
        {
            $username = $this->request->post('username');
            $password = $this->request->post('password');

            if ($username === 'admin' && $password === 'admin123')
            {
                $_SESSION['logged_in'] = true;
                $_SESSION['username'] = 'admin';

                redirect('products');
                return;
            }

            $data['error'] = 'Invalid username or password.';

            $this->call->view('products/login', $data);

            return;
        }

        $this->call->view('products/login');
    }


 

}




?>