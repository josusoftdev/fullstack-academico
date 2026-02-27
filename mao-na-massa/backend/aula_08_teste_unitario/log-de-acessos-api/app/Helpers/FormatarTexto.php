<?php

namespace App\Helpers;

class FormatarTexto
{
    /**
     * Converte uma string para o formato Título (primeira letra de cada palavra maiúscula).
     */
    public static function paraTitulo(string $texto): string
    {
        return ucwords(strtolower($texto));
    }

    /**
     * Remove espaços extras e trim.
     */
    public static function limparEspacos(string $texto): string
    {
        return preg_replace('/\s+/', ' ', trim($texto));
    }
}
