<?php

namespace App\Controllers;

use App\Models\PlaceModel;

class PlacesController extends BaseController
{
    public function place_con()
    {
        $data['places'] = $this->request->getPost('places', []);

        $placeModel = new PlaceModel();
        $data['results'] = $placeModel->getPlaces($data['places']);

        return view('places_view, $data'); //, $data
    }
}