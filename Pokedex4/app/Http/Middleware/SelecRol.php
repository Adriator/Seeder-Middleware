<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SelecRol
{
    public function handle($request, Closure $next)
    {
        // Verificar si se ha enviado el formulario
        if ($request->has('modo')) {
          // Obtener el modo seleccionado
        $modo = $request->input('modo');

        // Redirigir según el modo seleccionado
        if ($modo === 'admin') {
            return redirect('/index');
        } elseif ($modo === 'usuario') {
            return redirect('/ver');
        }  
        }

        // Si no se ha enviado el formulario, mostrar la página de selección de modo
        return $next($request);
    }
}
