<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LocalizationController extends Controller
{
    public function change_locale($locale)
    {
        App::setlocale($locale);
        Session::put('locale', $locale);
        return redirect()->back();

    }
}
