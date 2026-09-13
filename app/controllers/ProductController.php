<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class ProductController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->call->database();
        $this->call->model('ProductModel');
    }

    /**
     * Display all products
     */
    public function index()
    {
        $data['products'] = $this->ProductModel->getAll();

        $this->call->view('products/index', $data);
    }

    /**
     * Show create form
     */
    public function create()
    {


    if ($this->request->method() == 'post')
    {
        $this->ProductModel->create([
            'product_name' => $this->request->post('product_name'),
            'description' => $this->request->post('description'),
            'price' => $this->request->post('price'),
            'quantity' => $this->request->post('quantity'),
            'created_at' => date('Y-m-d H:i:s')
        ]);

        redirect('products');
        exit;
    }

    $this->call->view('products/create');

    }

    /**
     * Show edit form
     *
     * @param int $id
     */
    public function edit($id)
    {
        $data['product'] = $this->ProductModel->getById($id);

        if (!$data['product']) {
            redirect('products');
        }

        if ($this->request->method() == 'post') {

            $this->ProductModel->updateProduct($id, [
                'product_name' => $this->request->post('product_name'),
                'description' => $this->request->post('description'),
                'price' => $this->request->post('price'),
                'quantity' => $this->request->post('quantity')
            ]);

            redirect('products');
            exit;
        }

        $this->call->view('products/edit', $data);
    }

    /**
     * Delete product
     *
     * @param int $id
     */
    public function delete($id)
    {
        $data['product'] = $this->ProductModel->getById($id);

        if (!$data['product']) {
            redirect('products');
        }

        if ($this->request->method() == 'post') {

            $this->ProductModel->deleteProduct($id);

            redirect('products');
            exit;
        }

        $this->call->view('products/delete', $data);
    }
}

?>