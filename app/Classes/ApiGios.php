<?php

namespace App\classes\Api;

class ApiGios
{
    public function getAll()
    {
        $url = 'http://api.gios.gov.pl/pjp-api/rest/station/findAll';
        $result = file_get_contents($url);
        return json_decode($result, true);
    }

    public function getResearchParamsById($id)
    {
        $url = 'http://api.gios.gov.pl/pjp-api/rest/station/sensors/' . $id;
        $result = file_get_contents($url);
        return json_decode($result, true);
    }

    public function getQualityAirById($id)
    {
        $url = 'http://api.gios.gov.pl/pjp-api/rest/aqindex/getIndex/' . $id;
        $result = file_get_contents($url);
        return json_decode($result, true);
    }
}