<?php

namespace App\Models;

use CodeIgniter\Model;

class PlaceModel extends Model
{
    protected $table = 'places';
    
    public function getPlaces($selectedPlaces)
    {
        if (empty($selectedPlaces)) {
            return $this->findAll();
        }

        return $this->whereIn('place_name', $selectedPlaces)->findAll();
    }
}