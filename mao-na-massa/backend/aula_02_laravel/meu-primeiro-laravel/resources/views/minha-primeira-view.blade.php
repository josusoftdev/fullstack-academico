<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Primeira View Laravel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h1 {
            color: #333;
        }
        p {
            color: #666;
            font-size: 1.1em;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Olá, {{ $nomeUsuario }}!</h1>
        <p>Esta é a sua primeira view renderizada com o Laravel Blade.</p>
        <p>Parabéns por configurar seu ambiente!</p>
    </div>
</body>
</html>
