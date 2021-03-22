
$('#ville').on("change", function () {

    var $token = $('input[name=_token]').val();
    var $select = $('#ville option:selected').val();

    $.ajax({
        type: 'post',
        headers: {
            'X-CSRF-TOKEN': $token,
        },
        url: 'quartier',
        data: {
            'id_ville': $select,
        },
        success: function ($datas) {
            $('#quartier').empty();
            $('quartier').append(
                "<option value='0'> ----- Choix du quartier -----</option>"
            );

            $datas.forEach(function ($data) {
                $('#quartier').append("<option value='" + $data.id + "'> " + $data.nom + " </option>");
            });
        }

    });
})