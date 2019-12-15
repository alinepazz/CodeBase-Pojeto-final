$('#quiz').quiz({
  //resultsScreen: '#results-screen',
  //counter: false,
  //homeButton: '#custom-home',
  counterFormat: 'Questão %current de %total',
  questions: [{
      'q': 'O back-end de um servidor pode ser escrito em JavaScript?',
      'options': [
        'Depende do sistema operacional',
        'Sim',
        'Não'
      ],
      'correctIndex': 1,
      'correctResponse': 'Você é um gênio!',
      'incorrectResponse': 'Tenha fé, na próxima vai!'
    },
    {
      'q': 'Qual das alternativas a seguir é o método correto para enviar informações ao console?',
      'options': [
        'console.printIn()',
        'console.log()',
        'console.log()',
        'console.write()'
      ],
      'correctIndex': 1,
      'correctResponse': 'Bom trabalho!',
      'incorrectResponse': 'Não se desanime, bora para a próxima.'
    },
    {
      'q': 'Qual sintaxe é usada no JS para comentários de linha única?',
      'options': [
        '//',
        '#',
        '/**/'
      ],
      'correctIndex': 0,
      'correctResponse': 'Correto! É mais simples do que você imagina...',
      'incorrectResponse': '=( Você terá outras chances.'
    },
    {
      'q': 'Uma função JavaScript é um bloco de código utilizado para executar tarefas repetidas e é definida pela palavra-chave public seguida por um nome seguido por parênteses ().',
      'options': [
        'Correto',
        'Incorreto'

      ],
      'correctIndex': 1,
      'correctResponse': 'Maravilhoso!!',
      'incorrectResponse': 'Xiii... foi por pouco!'
    }
  ]
});