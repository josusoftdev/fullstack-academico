import 'package:flutter/material.dart';

void main() {
  runApp(const MeuProjetoIntegradorApp());
}

class MeuProjetoIntegradorApp extends StatelessWidget {
  const MeuProjetoIntegradorApp({super.key});

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: 'Meu Projeto Integrador Flutter',
      theme: ThemeData(
        primarySwatch: Colors.blue,
      ),
      home: const TelaInicialProjeto(), // Nossa primeira tela
      debugShowCheckedModeBanner: false,
    );
  }
}

class TelaInicialProjeto extends StatelessWidget {
  const TelaInicialProjeto({super.key});

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: const Text('Boas-vindas!'),
        centerTitle: true, // Centraliza o título na AppBar
      ),
      body: Center( // Centraliza o conteúdo da coluna na tela
        child: Column(
          mainAxisAlignment: MainAxisAlignment.center, // Centraliza verticalmente
          crossAxisAlignment: CrossAxisAlignment.center, // Centraliza horizontalmente
          children: [
            const Text(
              'Bem-vindo ao Meu Projeto Integrador!',
              style: TextStyle(fontSize: 24, fontWeight: FontWeight.bold),
              textAlign: TextAlign.center,
            ),
            const SizedBox(height: 20), // Espaço vertical
            Container(
              padding: const EdgeInsets.all(15.0),
              margin: const EdgeInsets.symmetric(horizontal: 20.0),
              decoration: BoxDecoration(
                color: Colors.blueAccent.withOpacity(0.1),
                borderRadius: BorderRadius.circular(10.0),
                border: Border.all(color: Colors.blueAccent),
              ),
              child: const Text(
                'Esta é a nossa primeira tela construída com Flutter. Explore!',
                textAlign: TextAlign.center,
                style: TextStyle(fontSize: 16),
              ),
            ),
            const SizedBox(height: 30), // Espaço vertical
            // Exemplo de Row para organizar itens horizontalmente
            Row(
              mainAxisAlignment: MainAxisAlignment.spaceEvenly, // Distribui espaço igualmente
              children: [
                const Icon(Icons.star, color: Colors.amber, size: 40),
                const Text(
                  'Começando a jornada!',
                  style: TextStyle(fontSize: 18, fontStyle: FontStyle.italic),
                ),
                const Icon(Icons.code, color: Colors.grey, size: 40),
              ],
            ),
            const SizedBox(height: 20),
            // Exemplo de Widget Stateless customizado (molécula ou átomo reutilizável)
            const MeuCardInformativo(
              titulo: 'Próximos Passos',
              conteudo: 'Na próxima aula, vamos adicionar interatividade.',
            ),
          ],
        ),
      ),
    );
  }
}

// Exemplo de Stateless Widget que pode ser refatorado para o Atomic Design
// Pensando em "Átomos" e "Moléculas"
class MeuCardInformativo extends StatelessWidget {
  final String titulo;
  final String conteudo;

  const MeuCardInformativo({
    super.key,
    required this.titulo,
    required this.conteudo,
  });

  @override
  Widget build(BuildContext context) {
    return Container(
      margin: const EdgeInsets.symmetric(horizontal: 20.0, vertical: 10.0),
      padding: const EdgeInsets.all(12.0),
      decoration: BoxDecoration(
        color: Colors.white,
        borderRadius: BorderRadius.circular(8.0),
        boxShadow: [
          BoxShadow(
            color: Colors.grey.withOpacity(0.2),
            spreadRadius: 2,
            blurRadius: 5,
            offset: const Offset(0, 3), // changes position of shadow
          ),
        ],
      ),
      child: Column(
        crossAxisAlignment: CrossAxisAlignment.start,
        children: [
          Text(
            titulo,
            style: const TextStyle(fontSize: 18, fontWeight: FontWeight.bold, color: Colors.deepPurple),
          ),
          const SizedBox(height: 5),
          Text(
            conteudo,
            style: const TextStyle(fontSize: 14, color: Colors.black87),
          ),
        ],
      ),
    );
  }
}
