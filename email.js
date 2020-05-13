$("#form-revendedor").submit(function (e) {
    var url = "email.php";
    $.ajax({
        type: "POST",
        url: url,
        data: $("#form-revendedor").serialize(),
        success: function (data) {
            alert(data);
            //utilizar o dado retornado para alterar algum dado da tela.
        }
    });


    e.preventDefault();// esse comando serve para previnir que o form realmente realize o submit e atualize a tela.
    $('#form-revendedor').trigger("reset");

});