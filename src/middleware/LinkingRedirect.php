<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Linking;
use Illuminate\Support\Facades\URL;

class LinkingRedirect
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $current_url = Url::current();
        $link = Linking::where('from', $current_url)->first();
        if($link->isNotEmpty()){
            return redirect($link->to, 301);
        }
        return $next($request);
    }
}
