<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Helpers\FormatarTexto; // Importe a classe que você vai testar

class FormatarTextoTest extends TestCase
{
    /** @test */
    public function it_can_convert_text_to_title_case()
    {
        $this->assertEquals('Hello World', FormatarTexto::paraTitulo('hello world'));
        $this->assertEquals('This Is A Test', FormatarTexto::paraTitulo('THIS IS A TEST'));
        $this->assertEquals('Laravel Framework', FormatarTexto::paraTitulo('laravel framework'));
        $this->assertEquals('A', FormatarTexto::paraTitulo('a'));
        $this->assertEquals('', FormatarTexto::paraTitulo('')); // Teste para string vazia
        $this->assertEquals('  Test  ', FormatarTexto::paraTitulo('  test  ')); // ucwords não remove espaços extras, mas o lowercasing é importante.
    }

    /** @test */
    public function it_can_trim_and_clean_extra_spaces()
    {
        $this->assertEquals('Hello World', FormatarTexto::limparEspacos('  Hello   World  '));
        $this->assertEquals('Test', FormatarTexto::limparEspacos('Test '));
        $this->assertEquals('Test', FormatarTexto::limparEspacos(' Test'));
        $this->assertEquals('', FormatarTexto::limparEspacos('   '));
        $this->assertEquals('', FormatarTexto::limparEspacos(''));
    }
}
