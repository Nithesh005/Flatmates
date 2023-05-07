<?php

namespace App\Controllers;

use App\Models\ProductModel;
use CodeIgniter\Controller;

class ProductController extends Controller
{
    protected $datas;
    protected $session;
    
    public function __construct(){
        $this->session = \Config\Services::session();
        $this->datas = new ProductModel();
    }
    public function index()
    {
        $productModel = new ProductModel();

        $data['districts'] = $productModel->getDistinctDistricts();
        $data['prices'] = $productModel->getDistinctPrices();
        $data['products'] = $productModel->getAllProducts();

        return view('products/index', $data);
    }

    public function filter()
    {
        $productModel = new ProductModel();

        $districts = $this->datas->getvar('district');
        $prices = $this->datas->getvar('price');

        $data['products'] = $productModel->filterProducts($districts, $prices);

        return view('products/results', $data);
    }
}
