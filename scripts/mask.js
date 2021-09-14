$('document').ready(function () {

    $('#cpf').mask('000.000.000-00');
    
    $('#telefone').mask('(00) Z0000-0000', {
        translation: {
            'Z': {
                pattern: /9/, optimal:false
            }
        }
    });

    $('#telefonecontato').mask('(00) Z0000-0000', {
        translation: {
            'Z': {
                pattern: /9/, optimal:false
            }
        }
    });

    $('#km').mask('000.000');
});

