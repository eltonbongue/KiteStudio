<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class VerifySession
{
    public function handle($request, Closure $next)
    {
        $currentSessionId = $request->session()->getId();
        $storedSessionId = Auth::user()->session_id;

        if ($currentSessionId !== $storedSessionId) {
            // Encerra a sessão antiga
            Auth::logout();
            $request->session()->invalidate();
            return redirect()->route('login')->with('error', 'Sessão encerrada em outro dispositivo.');
        }

        return $next($request);
    }
}
