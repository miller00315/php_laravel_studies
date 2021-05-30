<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function main()
    {
        $title = 'Contato';

        return view('site.contact-us', compact('title'));
    }
}
