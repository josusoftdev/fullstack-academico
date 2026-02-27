<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo ao Laravel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e6f7ff;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .card {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
            text-align: center;
            max-width: 500px;
            width: 90%;
        }
        h1 {
            color: #0056b3;
            margin-bottom: 20px;
        }
        p {
            color: #333;
            font-size: 1.2em;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Seja bem-vindo(a), {{ $nome }}!</h1>
        <p>É um prazer ter você explorando o universo do Laravel conosco.</p>
        <p>Você acessou esta página usando um parâmetro na URL.</p>
    </div>
</body>
</html>