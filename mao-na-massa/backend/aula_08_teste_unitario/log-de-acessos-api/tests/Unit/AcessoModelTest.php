<?php

namespace Tests\Unit;

use App\Models\Acesso;
use Tests\TestCase;

class AcessoModelTest extends TestCase
{
    /** @test */
    public function deve_verificar_se_campos_sao_fillable()
    {
        $acesso = new Acesso();

        $this->assertEquals([
            'url',
            'metodo',
            'ip_cliente',
            'status_code',
        ], $acesso->getFillable());
    }
}
