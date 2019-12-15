$('#quiz').quiz({
  //resultsScreen: '#results-screen',
  //counter: false,
  //homeButton: '#custom-home',
  counterFormat: 'Questão %current de %total',
  questions: [{
      'q': 'No contexto de uma página da web, o CSS cuida de:',
      'options': [
        'Estilo',
        'Estrutura',
        'Nada',
        'Comportamento'

      ],
      'correctIndex': 0,
      'correctResponse': 'Você é um gênio!',
      'incorrectResponse': 'Tenha fé, na próxima vai!'
    },
    {
      'q': 'CSS  (Cascading  Style  Sheets)  é  uma  ferramenta  de  desenvolvimento  voltada  para  a  criação  de  interfaces  visualmente mais atraentes.',
      'options': [
        'Correto',
        'Incorreto'
      ],
      'correctIndex': 0,
      'correctResponse': 'Bom trabalho!',
      'incorrectResponse': 'Não se desanime, bora para a próxima.'
    },
    {
      'q': 'O seletor de div tem como alvo:',
      'options': [
        'Todos os elementos div',
        'Todos os elementos com a classe div',
        'Todos os elementos div dentro de uma classe'
      ],
      'correctIndex': 1,
      'correctResponse': 'Correto! É mais simples do que você imagina...',
      'incorrectResponse': '=( Você terá outras chances.'
    },
    {
      'q': 'Qual dos seguintes seletores sempre segmenta um único elemento?',
      'options': [
        'Type',
        'Uma combinação entre type e class',
        'Class',
        'ID'
      ],
      'correctIndex': 3,
      'correctResponse': 'Maravilhoso!!',
      'incorrectResponse': 'Xiii... foi por pouco!'
    }
  ]
});