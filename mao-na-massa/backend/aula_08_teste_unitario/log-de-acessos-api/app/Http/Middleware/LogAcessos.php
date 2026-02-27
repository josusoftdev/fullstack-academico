<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Acesso; // Certifique-se de criar este Model no próximo passo
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LogAcessos
{
    public function handle(Request $request, Closure $next): Response
    {
        // Processa a requisição e obtém a resposta antes de retornar
        $response = $next($request);

        // Salva o log de acesso no banco de dados
        Acesso::create([
            'url' => $request->fullUrl(),
            'metodo' => $request->method(),
            'ip_cliente' => $request->ip(),
            'status_code' => $response->getStatusCode(),
        ]);

        return $response;
    }
}
