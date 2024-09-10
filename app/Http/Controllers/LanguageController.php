<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function setLanguage($lang)
    {
        // Store the language in the session
        session(['preferred_language' => $lang]);

        // Return a response to confirm the session is set
        return "Preferred language has been set to: " . $lang;
    }

    // Get the preferred language from the session
    public function getLanguage()
    {
        // Retrieve the language from the session, defaulting to 'not set'
        $lang = session('preferred_language', 'not set');

        // Return the preferred language
        return "Your preferred language is: " . $lang;
    }
}
