<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;
// use Illuminate\Support\Collection;

class SetLocale
{

    public function handle(Request $request, Closure $next): Response
    {

        if ($language = $request->getPreferredLanguage()) {
            App::setLocale($language);
            // Log::info('Language: ', ['language' => $language]);
        }

        return $next($request);
    }
}
