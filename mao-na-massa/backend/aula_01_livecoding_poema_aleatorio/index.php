<?php

// --- Definindo Nossos Arrays de Palavras e Frases ---
// Arrays são como listas que guardam múltiplos valores.
// Cada elemento é acessado por um índice numérico (começando do 0).

// Sujeitos para o poema
$sujeitos = [
    "O sol",
    "A lua",
    "O vento",
    "A flor",
    "O rio",
    "A estrela",
    "O pássaro",
    "O silêncio",
    "A brisa",
    "O tempo",
    "A vida",
    "O mar" // Adicionei mais uma opção para diversificar
];

// Verbos ou ações
$verbos = [
    "sussurra",
    "dança com",
    "brilha sobre",
    "chora por",
    "canta para",
    "abraça",
    "desperta",
    "acalma",
    "transforma",
    "esconde",
    "revela",
    "murmura" // Adicionei mais uma opção
];

// Objetos ou complementos
$objetos = [
    "a noite escura",
    "o campo verde",
    "as águas serenas",
    "o coração aflito",
    "os sonhos distantes",
    "a memória antiga",
    "o olhar perdido",
    "a canção esquecida",
    "o destino incerto",
    "a verdade nua",
    "o caminho oculto",
    "a alma vazia" // Adicionei mais uma opção
];

// Adjetivos ou descrições finais
$adjetivos = [
    "em seu leito.",
    "com leveza.",
    "no eterno bailar.",
    "sem fim.",
    "e se cala.",
    "em paz.",
    "com sua luz.",
    "para sempre.",
    "sob o céu.",
    "num doce adeus.",
    "para a alma.",
    "em profunda calma." // Adicionei mais uma opção
];

// Linhas bônus para adicionar complexidade e variedade ao poema
$linhas_bonus = [
    "Um segredo antigo se desvela,",
    "A esperança renasce, bela.",
    "No compasso da incerteza,",
    "Floresce a mais pura beleza.",
    "Em cada verso, um novo despertar.",
    "Que o amor encontre seu lugar.",
    "E o amanhã, enfim, se faz.", // Mais uma linha bônus
    "Na melodia que o coração refaz." // E outra!
];

// --- Geração Aleatória das Partes do Poema ---
// A função array_rand() retorna uma chave aleatória de um array.
// Usamos essa chave para acessar o valor correspondente do array.
$sujeito_aleatorio = $sujeitos[array_rand($sujeitos)];
$verbo_aleatorio = $verbos[array_rand($verbos)];
$objeto_aleatorio = $objetos[array_rand($objetos)];
$adjetivo_aleatorio = $adjetivos[array_rand($adjetivos)];

// --- Estrutura Condicional: Incluindo uma Linha Especial Opcional ---
// rand(0, 1) gera um número aleatório entre 0 e 1 (inclusive).
// Se o número for 1, a linha especial será incluída.
$incluir_linha_especial = rand(0, 1);
$linha_especial = ""; // Inicializa a variável da linha especial como vazia

if ($incluir_linha_especial == 1) {
    // Se a condição for verdadeira, escolhemos uma linha bônus aleatória
    // e adicionamos duas tags <br> para criar uma quebra de linha visual no HTML.
    $linha_especial = $linhas_bonus[array_rand($linhas_bonus)] . "<br><br>";
}

// --- Estrutura de Repetição: Gerando Múltiplas Linhas Principais do Poema ---
// Vamos criar um array para armazenar cada linha individual do poema.
$poema_linhas = [];

// O loop 'for' vai iterar 3 vezes para gerar 3 linhas principais do poema.
for ($i = 0; $i < 3; $i++) {
    // A cada iteração, montamos uma nova linha do poema
    // concatenando aleatoriamente um sujeito, um verbo, um objeto e um adjetivo.
    $linha_gerada = $sujeitos[array_rand($sujeitos)] . " " .
                    $verbos[array_rand($verbos)] . " " .
                    $objetos[array_rand($objetos)] . " " .
                    $adjetivos[array_rand($adjetivos)];
    // Adicionamos a linha gerada ao array $poema_linhas.
    $poema_linhas[] = $linha_gerada;
}

// implode("<br>", $poema_linhas) junta todos os elementos do array $poema_linhas
// em uma única string, usando "<br>" como separador. Isso cria quebras de linha HTML
// entre cada verso do poema.
$poema_gerado_final = implode("<br>", $poema_linhas);

// --- Condição para Adicionar a Linha Especial no Início do Poema ---
// Se a $linha_especial não estiver vazia (ou seja, se ela foi gerada),
// nós a concatenamos no início do $poema_gerado_final.
if ($linha_especial != "") {
    $poema_gerado_final = $linha_especial . $poema_gerado_final;
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Poemas Aleatórios</title>
    <style>
        /* Estilos básicos para o corpo da página */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; /* Fonte agradável */
            display: flex; /* Usamos flexbox para centralizar o conteúdo */
            justify-content: center; /* Centraliza horizontalmente */
            align-items: center; /* Centraliza verticalmente */
            min-height: 100vh; /* Ocupa a altura mínima da viewport */
            margin: 0; /* Remove margem padrão do body */
            background: linear-gradient(to right, #6a11cb 0%, #2575fc 100%); /* Fundo degradê */
            color: #fff; /* Cor do texto principal branca */
            text-align: center; /* Centraliza o texto */
            padding: 20px; /* Espaçamento interno */
            box-sizing: border-box; /* Inclui padding na largura/altura */
        }

        /* Estilos para o contêiner do poema */
        .container {
            background-color: rgba(255, 255, 255, 0.1); /* Fundo branco semi-transparente */
            padding: 40px; /* Espaçamento interno */
            border-radius: 15px; /* Bordas arredondadas */
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3); /* Sombra para profundidade */
            max-width: 600px; /* Largura máxima do contêiner */
            width: 100%; /* Ocupa 100% da largura disponível */
            backdrop-filter: blur(10px); /* Efeito de desfoque no fundo (moderno!) */
            -webkit-backdrop-filter: blur(10px); /* Compatibilidade Safari */
            border: 1px solid rgba(255, 255, 255, 0.2); /* Borda sutil */
        }

        /* Estilos para o título */
        h1 {
            font-size: 2.8em; /* Tamanho da fonte grande */
            margin-bottom: 25px; /* Margem inferior */
            color: #fff; /* Cor do título branca */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2); /* Sombra no texto */
        }

        /* Estilos para o poema gerado */
        #poema {
            font-family: 'Georgia', serif; /* Fonte clássica para o poema */
            font-size: 1.8em; /* Tamanho da fonte do poema */
            line-height: 1.6; /* Espaçamento entre linhas */
            min-height: 150px; /* Altura mínima para o poema */
            display: flex; /* Flexbox para centralizar o poema dentro do espaço */
            flex-direction: column; /* Coloca os versos um abaixo do outro */
            align-items: center; /* Centraliza verticalmente */
            justify-content: center; /* Centraliza horizontalmente */
            margin-bottom: 30px; /* Margem inferior */
            background-color: rgba(0, 0, 0, 0.1); /* Fundo escuro semi-transparente para o poema */
            padding: 20px; /* Espaçamento interno */
            border-radius: 10px; /* Bordas arredondadas */
            font-style: italic; /* Texto em itálico */
            transition: all 0.5s ease-in-out; /* Transição suave para futuras animações */
        }

        /* Estilos para o botão */
        button {
            background-color: #ff6b6b; /* Cor de fundo do botão (vermelho vibrante) */
            color: white; /* Cor do texto do botão */
            padding: 15px 30px; /* Espaçamento interno */
            border: none; /* Sem borda */
            border-radius: 8px; /* Bordas arredondadas */
            font-size: 1.2em; /* Tamanho da fonte do botão */
            cursor: pointer; /* Cursor de mão ao passar por cima */
            transition: background-color 0.3s ease, transform 0.2s ease; /* Transições suaves */
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2); /* Sombra no botão */
        }

        button:hover {
            background-color: #ff4757; /* Cor mais escura ao passar o mouse */
            transform: translateY(-3px); /* Pequeno efeito de elevação */
        }

        button:active {
            transform: translateY(0); /* Retorna à posição original ao clicar */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); /* Sombra menor ao clicar */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Gerador de Poemas Aleatórios</h1>
        <div id="poema">
            <?php echo $poema_gerado_final; ?>
        </div>
        <button onclick="window.location.reload();">Gerar Novo Poema</button>
    </div>
</body>
</html>