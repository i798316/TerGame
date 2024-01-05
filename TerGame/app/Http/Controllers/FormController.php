<?php

namespace App\Http\Controllers;

class FormController extends Controller
{
    public function showUploadForm()
    {
        return view('upload');
    }
}
