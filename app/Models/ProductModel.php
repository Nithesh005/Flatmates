<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'products';

    public function getDistinctDistricts()
    {
        return $this->distinct()->select('district')->orderBy('district')->findAll();
    }

    public function getDistinctPrices()
    {
        return $this->distinct()->select('price')->orderBy('price')->findAll();
    }

    public function getAllProducts()
    {
        return $this->findAll();
    }

    public function filterProducts($districts, $prices)
    {
        return $this->whereIn('district', $districts)->whereIn('price', $prices)->findAll();
    }
}
