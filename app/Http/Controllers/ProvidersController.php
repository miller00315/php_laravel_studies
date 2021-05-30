<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProvidersController extends Controller
{
    public function index()
    {
        $providers = [
            0 => [
                "name" => "provider1",
                'status' => false,
                'cnpj' => '000',
                'ddd' => '11',
                'phone' => '123'
            ],
            1 => [
                "name" => "provider2",
                'status' => true,
                'ddd' => '85',
                'phone' => '123'
            ],
            2 => [
                "name" => "provider3",
                'status' => false,
                'ddd' => '35',
                'phone' => '123'
            ]
        ];

        return View('app.providers.index', compact('providers'));
    }
}
