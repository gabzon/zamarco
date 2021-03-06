<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\DB;
use Closure;
use Illuminate\Http\Request;

class LastOnlineAt
{
    public function handle(Request $request, Closure $next)
    {
        if (auth()->guest()) {
            return $next($request);
        }

        if (auth()->user()->last_online_at->diffInHours(now()) !== 0)
        {         
            DB::table("users")
              ->where("id", auth()->user()->id)
              ->update(["last_online_at" => now()]);
        }
        return $next($request);
    }
}
