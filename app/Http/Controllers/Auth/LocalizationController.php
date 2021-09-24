<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LocalizationController extends Controller
{
    public function changeLanguage($language)
    {
        $lang = $language;
        if (!in_array($lang, config('common.language'))) {
            abort(404);
        }
        Session::put('language', $lang);

        return redirect()->back();
    }
}
