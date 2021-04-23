<?php

namespace App\Http\Controllers\webservice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Curl;

class WebserviceController extends Controller
{
    public function cep(Request $request)
    {
        $cep = str_replace("-", "", $request->cep);
        $response = Curl::to("viacep.com.br/ws/$cep/json")->get();
        $response = json_decode($response);

        if ($response) {
            return [
                "city" => $response->localidade,
                "zipCode" => $response->cep,
                "uf" => $response->uf
            ];
        }
    }
}
