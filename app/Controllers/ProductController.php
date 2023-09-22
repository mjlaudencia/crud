<?php

namespace App\Controllers;
use App\Models\ProductModel;   
use App\Models\CategoryModel;   
use App\Controllers\BaseController;

class ProductController extends BaseController
{
    public function index()
    {
        $productModel = new ProductModel();
        $data['products'] = $productModel->findAll();
        return view('products/index', $data);
    }
    public function create()
    {
        $categoryModel = new CategoryModel();
        $data['categories'] = $categoryModel->findAll();
        return view('products/create', $data);
    }

    public function store()
    {
        $productModel = new ProductModel();
        $data = [
            'ProductName' => $this->request->getPost('ProductName'),
            'ProductDescription' => $this->request->getPost('ProductDescription'),
            'Cars_Category_id' => $this->request->getPost('Cars_Category_id'),
            'ProductQuantity' => $this->request->getPost('ProductQuantity'),
            'ProductPrice' => $this->request->getPost('ProductPrice'),
        ];
        $productModel->insert($data);

        return redirect()->to('/');
    }

    public function edit($id)
    {
        $ProductModel = new ProductModel();
        $categoryModel = new CategoryModel();
        $data['product'] = $ProductModel->find($id);
        $data['categories'] = $categoryModel->findAll();
        return view('products/edit', $data);
    }

    public function update($id)
    {
        $productModel = new ProductModel();
        $data = [
            'ProductName' => $this->request->getPost('ProductName'),
            'ProductDescription' => $this->request->getPost('ProductDescription'),
            'Cars_Category_id' => $this->request->getPost('Cars_Category_id'),
            'ProductQuantity' => $this->request->getPost('ProductQuantity'),
            'ProductPrice' => $this->request->getPost('ProductPrice'),
        ];
        $productModel->update($id, $data);

        return redirect()->to('/');
    }

    public function delete($id)
    {
        $productModel = new ProductModel();
        $productModel->delete($id);

        return redirect()->to('/');
    }
}