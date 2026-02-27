<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do CEP</title>
    <style>
        body { font-family: sans-serif; margin: 2rem; background-color: #f4f4f4; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; background-color: #fff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        h1 { text-align: center; color: #333; }
        ul { list-style-type: none; padding: 0; }
        li { background-color: #f9f9f9; margin-bottom: 10px; padding: 12px; border-left: 4px solid #4CAF50; border-radius: 4px; }
        strong { display: inline-block; width: 120px; color: #555; }
    </style>
</head>
<body>

    <div class="container">
        <h1>Detalhes do CEP</h1>

        @if ($dados && !isset($dados['erro']))
            <ul>
                <li><strong>CEP:</strong> {{ $dados['cep'] }}</li>
                <li><strong>Logradouro:</strong> {{ $dados['logradouro'] }}</li>
                <li><strong>Bairro:</strong> {{ $dados['bairro'] }}</li>
                <li><strong>Localidade:</strong> {{ $dados['localidade'] }}</li>
                <li><strong>UF:</strong> {{ $dados['uf'] }}</li>
                <li><strong>DDD:</strong> {{ $dados['ddd'] }}</li>
            </ul>
        @else
            <p style="text-align: center; color: red;">CEP não encontrado ou formato inválido.</p>
        @endif
    </div>

</body>
</html>