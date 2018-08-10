
$("#listaCategoria_").on("click", "a", function(){
    const id = $(this).data('id');
    console.log(id);

    const urlAcao  = 'home/rss/' + id; 
    $.ajax({
        url: urlAcao,
        dataType: "json",
        method: "GET",
        beforeSend: function() { 
            // dialog = bootbox.dialog({
            //     message: '<p class="text-center">Por favor aguarde...</p>',
            //     closeButton: false
            // });
            // $("#btGravar").prop("disabled", true);
        },
        success: function(r) {
            console.log(r)
            if (r.status) {
                // bootbox.alert(response.message);
                $("#conteudo").html('teste' + r.dados);
            }
            else {
                // var d = bootbox.dialog({
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

            // dialog.modal('hide');    
            // $('#btGravar').prop('disabled', false);
            return false;
        },
        error: function(r) {
            // dialog.modal('hide');    
            // try {                
            //     bootbox.alert(response.responseJSON.message);
            //     $('#btGravar').prop('disabled',false);
            // }
            // catch(e) {
            //     bootbox.alert('Erro inesperado.<br> Estamos registrando esse erro para corrigirmos.');
            //     $('#btGravar').prop('disabled',false);
            // }
            return false;
        }
    });

    return false;
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