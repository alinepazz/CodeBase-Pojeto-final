$('#quiz').quiz({
  //resultsScreen: '#results-screen',
  //counter: false,
  //homeButton: '#custom-home',
  counterFormat: 'Questão %current de %total',
  questions: [{
      'q': 'HTML é uma linguagem de...',
      'options': [
        'Criação',
        'Programação',
        'Exclusão',
        'Formatação',
        'Informação'
      ],
      'correctIndex': 3,
      'correctResponse': 'Você é um gênio!',
      'incorrectResponse': 'Tenha fé, na proxima vai!'
    },
    {
      'q': 'Para o que o HTML funciona bem e para o que ele não funciona?',
      'options': [
        'Layouts responsivos, estilo de texto, criação de animação, posicionamento de contêiner',
        'Inserção de mídia, criação de link, armazenamento de banco de dados, expressão matemática.'
      ],
      'correctIndex': 1,
      'correctResponse': 'Bom trabalho!',
      'incorrectResponse': 'Não se desanime, bora para a próxima.'
    },
    {
      'q': 'Uma página HTML sem CSS em um navegador aparecerá como?',
      'options': [
        'As páginas HTML são abertas, mas nenhum conteúdo é exibido',
        'Somente texto, imagens, links são exibidos',
        'A página da Web é aberta sem erros, mas apenas o texto é exibido',
        'Um erro de documento ocorre e nada é exibido corretamente',
        'As páginas HTML não são visíveis sem CSS.'
      ],
      'correctIndex': 1,
      'correctResponse': 'Correto! É mais simples do que você imagina...',
      'incorrectResponse': '=( Você terá outras chances.'
    },
    {
      'q': 'Quando o programador deseja aplicar uma formatação na tag, esse processo é chamado de estilo...',
      'options': [
        'In Line',
        'Incorporado',
        'In-tag',
        'CSS',
        'Off-tag'
      ],
      'correctIndex': 0,
      'correctResponse': 'Maravilhoso!!',
      'incorrectResponse': 'Xiii... foi por pouco!'
    }
  ]
});