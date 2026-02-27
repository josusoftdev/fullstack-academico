
enum StatusPedido { pendente, emProcessamento, entregue, cancelado }

void main() {
  // 1. O básico: a função main()
  print('Olá, Mundo Dart!');
  print('Bem-vindo ao desenvolvimento mobile com Flutter!');

  // 2. Variáveis e Tipos de Dados
  // Nomes claros e significativos!
  String nomeCompleto = 'Ana Paula Silva'; // String para texto
  int idadeUsuario = 25; // int para números inteiros
  double alturaCentimetros = 172.5; // double para números decimais
  bool estaAtivo = true; // bool para verdadeiro/falso

  // Inferência de tipo com 'var' - o Dart descobre o tipo
  var mensagemBoasVindas = 'Sua jornada começa agora!';

  // Tipo dinâmico - pode mudar de tipo durante a execução (use com cautela!)
  dynamic valorGenerico = 100;
  print('Valor genérico: $valorGenerico');
  valorGenerico = 'Agora sou um texto!';
  print('Valor genérico agora: $valorGenerico');

  print('\n--- Informações do Usuário ---');
  print('Nome: $nomeCompleto');
  print('Idade: $idadeUsuario anos');
  print('Altura: $alturaCentimetros cm');
  print('Status: ${estaAtivo ? 'Ativo' : 'Inativo'}'); // Operador ternário

  // 3. Operadores
  print('\n--- Operações Matemáticas ---');
  int num1 = 10;
  int num2 = 3;
  print('Soma: ${num1 + num2}');
  print('Subtração: ${num1 - num2}');
  print('Multiplicação: ${num1 * num2}');
  print('Divisão: ${num1 / num2}'); // Resultado double
  print('Divisão Inteira: ${num1 ~/ num2}'); // Resultado int
  print('Resto da Divisão: ${num1 % num2}');

  print('\n--- Operadores de Comparação ---');
  print('Num1 é igual a Num2? ${num1 == num2}');
  print('Num1 é maior que Num2? ${num1 > num2}');
  print('Idade é maior ou igual a 18? ${idadeUsuario >= 18}');

  print('\n--- Operadores Lógicos ---');
  bool temCartao = true;
  bool temDinheiro = false;
  print('Pode comprar (cartão E dinheiro)? ${temCartao && temDinheiro}');
  print('Pode comprar (cartão OU dinheiro)? ${temCartao || temDinheiro}');
  print('Não está ativo? ${!estaAtivo}');

  // 4. Controle de Fluxo
  print('\n--- Controle de Fluxo: if/else ---');
  double notaFinal = 7.5;
  if (notaFinal >= 7.0) {
    print('Aluno Aprovado!');
  } else if (notaFinal >= 5.0) {
    print('Aluno em Recuperação.');
  } else {
    print('Aluno Reprovado.');
  }

  print('\n--- Controle de Fluxo: for loop ---');
  for (int i = 0; i < 5; i++) {
    print('Contagem regressiva: ${4 - i}');
  }

  print('\n--- Controle de Fluxo: while loop ---');
  int contador = 0;
  while (contador < 3) {
    print('Loop while, iteração: $contador');
    contador++;
  }

  print('\n--- Controle de Fluxo: switch (com enum para clareza) ---');
  StatusPedido statusAtual = StatusPedido.emProcessamento;

  switch (statusAtual) {
    case StatusPedido.pendente:
      print('Pedido pendente de aprovação.');
      break;
    case StatusPedido.emProcessamento:
      print('Pedido em processamento, aguarde!');
      break;
    case StatusPedido.entregue:
      print('Pedido entregue com sucesso!');
      break;
    case StatusPedido.cancelado:
      print('Pedido foi cancelado.');
      break;
    default:
      print('Status desconhecido.');
  }

  // 5. Funções
  print('\n--- Uso de Funções ---');
  // Exemplo de função simples
  String gerarSaudacao(String nome) {
    return 'Olá, $nome! Seja bem-vindo(a).';
  }
  print(gerarSaudacao('Carla'));
  print(gerarSaudacao('João'));

  // Função com parâmetros opcionais nomeados
  double calcularAreaRetangulo({double largura = 0, double altura = 0}) {
    return largura * altura;
  }
  print('Área do retângulo (2x5): ${calcularAreaRetangulo(largura: 2.0, altura: 5.0)}');
  print('Área do quadrado (lado 4): ${calcularAreaRetangulo(largura: 4.0, altura: 4.0)}');

  // Função anônima (lambda) e funções como objetos
  List<int> numeros = [1, 2, 3, 4, 5];
  numeros.forEach((numero) {
    print('Número da lista: $numero');
  });

  // 6. Clean Code: Boas Práticas de Nomenclatura (Revisão e Exemplos)
  // Veja como os nomes de variáveis e funções acima já seguem as boas práticas:
  // - nomeCompleto, idadeUsuario (camelCase para variáveis)
  // - gerarSaudacao, calcularAreaRetangulo (camelCase para funções)
  // - StatusPedido (PascalCase para classes/enums)

  // Exemplo RUIM (para discutir e refatorar em sala)
  // var x = 10;
  // var a = 5;
  // var r = x * a;
  // print(r);

  // Exemplo BOM (resultado da refatoração)
  // int quantidadeItensNoCarrinho = 10;
  // int precoUnitario = 5;
  // int valorTotal = quantidadeItensNoCarrinho * precoUnitario;
  // print('Valor Total do Pedido: $valorTotal');
}
