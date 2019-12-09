<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\classes\Api\ApiGios;

class SearchPlacesController extends Controller
{
    public function choosePlaces(ApiGios $apiGios)
    {
        $allPlacesFromApiGios = $apiGios->getAll();
        return view('searchPlaces.choosePlaces', ['allPlacesFromApiGios' => $allPlacesFromApiGios]);
    }

    public function getResults(Request $request, ApiGios $apiGios)
    {
        $allPlacesFromApiGios = $apiGios->getAll();
        $selectedPlace = $allPlacesFromApiGios[$request->get('select_place')]['city']['name'];
        $dataStations = [];
        for ($i = 0; $i < count($allPlacesFromApiGios); $i++) {
            if ($allPlacesFromApiGios[$i]['city']['name'] == $selectedPlace) {
                $dataStations[] = $allPlacesFromApiGios[$i];
            }
        }
        return view('searchPlaces.getResults', ['stations' => $dataStations, 'back' => url()->previous()]);
    }

    public function dataResearchParams(ApiGios $apiGios, $id)
    {
        $ret = $apiGios->getResearchParamsById($id);
        return json_encode($ret);
    }

    public function dataAirQuality(ApiGios $apiGios, $id)
    {
        $ret = $apiGios->getQualityAirById($id);
        return json_encode($ret);
    }
}
