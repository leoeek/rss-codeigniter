
$("#listaCategoria").on("click", "a", function(){
    console.log($(this).data('id'));
});

$("#formCategoria").on("submit", function(e) {
    e.preventDefault();
    const url_action = $(this).attr('action');
    const form_data  = $(this).serialize();
    $.ajax({
        url: url_action,
        data: form_data,
        dataType: 'json',
        method: 'POST',
        beforeSend: function() {
            $('#btCategoriaGravar').prop('disabled', true);
        },
        success: function(response) {
            if (response.status) {
                alert(response.mensagem);                                
            }
            else {
                alert(response.mensagem)
                // var dialog = bootbox.dialog({
                //     title: 'Atenção!',
                //     message: '<p>' + response.message + '!</p>',
                //     closeButton: true,
                //     buttons: {                   
                //         ok: {
                //             label: "OK",
                //             className: 'btn-danger'
                //         }
                //     }
                // });     
            }

            $('#btCategoriaGravar').prop('disabled', false);
            return false;
        },
        error: function(response) {
            try {                
                alert(response.responseJSON.mensagem);
                $('#btCategoriaGravar').prop('disabled',false);
            }
            catch(e) {
                alert('Erro inesperado.<br> Estamos registrando esse erro para corrigirmos.');
                $('#btCategoriaGravar').prop('disabled',false);
            }
            return false;
        }
    });

    return false;
});