<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function main(int $p1, int $p2)
    {
        return View('site.test', compact('p1', 'p2')); //compact utiliza o nome das variáveis mais comum
        //return View('site.test', ['p1' => $p1, 'p2' => $p2]); // Array associativo
        //return View('site.test')->with('p1', $p1)->with('p2', $p2); // with, legal mas verboso
    }
}
