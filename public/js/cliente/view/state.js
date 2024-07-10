$(document).ready(function() {
    $("form[name='form_cliente']").on("change", "select[name='estado']", function() {
        let state = $(this).val();
        getCities(state, $("div#cliente_conteudo"));
    });

    $("form[name='form_representante']").on("change", "select[name='estado']", function() {
        let state = $(this).val();
        getCities(state, $("div#representante_conteudo"));
    });
});

function getCities(state, $element) {
    $.ajax({
        url: '/city/'+state,
        type: 'GET',
        dataType: 'json',
        success: function(result) {
            let options = "";

            $.each(result, function(idx, value) {
                options += "<option value='"+idx+"'>"+value+"</option>";
            });

            $element.find("select[name='cidade']").empty().append(options);
        }
    })
}
