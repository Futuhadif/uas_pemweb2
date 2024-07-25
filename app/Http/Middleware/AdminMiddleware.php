<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Admin;

class AdminMiddleware
{
    
    public function handle(Request $request, Closure $next)
    {
        
        if (session()->has('admin_id')) {
            $admin = Admin::find(session('admin_id'));
            if ($admin) {
                return $next($request);
            }
        }

        return redirect('/admin/login');
        
    }
}
