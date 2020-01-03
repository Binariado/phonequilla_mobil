$(".js-new-password").click(function(){
    console.log($("#new_password").val(),$("#very_password").val());

    if($("#new_password").val()!=$("#very_password").val()){
        $("#new_password, #very_password").addClass("is-invalid");
        Swal.fire({
            icon: 'error',
            title: 'Las contraseñas no coinciden',
        });
    }else{
        const btnElm=this;
        validate($("#data-new-password")[0])
        .then((result) => {
            if(result==false){

            }else{
                try {
                    const contentHtml=$(btnElm).html();
                    $(btnElm).html(`
                        <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                        Loading...
                    `);
                    $.post("/users/profile/new-password",
                        $("#data-new-password").serialize()
                    ).done(function (data) {
                        console.log(data);

                        if(data==3){
                            $("#password_old").addClass("is-invalid");
                            Swal.fire({
                                icon: 'warning',
                                title: 'Contraseña incorrecta',
                            });
                        }
                        if(data==1){
                            $("#password_old").addClass("is-invalid");
                            Swal.fire({
                                icon: 'success',
                                title: 'Se cambió la contraseña exitosamente',
                              });
                            $(btnElm).html(contentHtml);
                        }else{
                            $(btnElm).html(contentHtml);
                        }
                    });
                } catch (error) {
                    $(btnElm).html(contentHtml);
                    console.error(error)
                    Swal.fire({
                        icon: 'error',
                        title: 'Ocurrió un error al guardar los datos',
                    });
                }
            }
        });
    }

});
