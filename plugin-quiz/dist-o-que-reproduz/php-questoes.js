$('#quiz').quiz({
  //resultsScreen: '#results-screen',
  //counter: false,
  //homeButton: '#custom-home',
  counterFormat: 'Questão %current de %total',
  questions: [{
      'q': 'Qual a TAG para englobar o código PHP usado para ser entendido pelo navegador?',
      'options': [
        '<%php %>',
        '< ? php   ? >',
        '<@php@>',
        '< !php! >'
      ],
      'correctIndex': 1,
      'correctResponse': 'Você é um gênio!',
      'incorrectResponse': 'Tenha fé, na próxima vai!'
    },
    {
      'q': 'Marque a alternativa correta sobre PHP:',
      'options': [
        'PHP não é uma língua de tipagem dinâmica',
        'Para escrever uma variável do tipo string, é usado apenas os parênteses ( )',
        'PHP não é uma linguagem case sensitive',
        'Antes de alguma variável devemos utilizar o $'
      ],
      'correctIndex': 3,
      'correctResponse': 'Bom trabalho!',
      'incorrectResponse': 'Não se desanime, bora para a próxima.'
    },
    {
      'q': 'As palavras que preenchem respectivamente as lacunas em branco, para que o código seja executado sem erros seria:',
      'options': [
        'echo, break',
        'write, stop',
        'echo, end'
      ],
      'correctIndex': 0,
      'correctResponse': 'Correto! É mais simples do que você imagina...',
      'incorrectResponse': '=( Você terá outras chances.'
    },
    {
      'q': 'I. PHP é um exemplo de linguagem de programação comumente utilizada no server-side (ou seja, no lado do servidor).<br>II. HTML é um exemplo de linguagem de programação comumente utilizada no client-side (ou seja, no lado do cliente).<br>III. Na web, o protocolo mais utilizado para transferir hipertexto e tratar o envio de requisições e respostas entre cliente e servidor é o HTTP. ',
      'options': [
        'As afirmativas I, II e III são verdadeiras.',
        'Apenas as afirmativas I e II são verdadeiras.',
        'Apenas as afirmativas II e III são verdadeiras.',
        'Apenas as afirmativas I e III são verdadeiras.'

      ],
      'correctIndex': 3,
      'correctResponse': 'Maravilhoso!!',
      'incorrectResponse': 'Xiii... foi por pouco!'
    }
  ]
});