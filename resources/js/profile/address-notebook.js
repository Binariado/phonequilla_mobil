$(".js-btn-new-address").click(function(){
    validate($("#addressNotebook")[0])
    .then((result) => {
        if(result==false){

        }else{
            try {
                const contentHtml=$(".js-btn-new-address").html();
                $(".js-btn-new-address").html(`
                    <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                    Loading...
                `);
                $.post("/users/profile/address-notebook",
                    $("#addressNotebook").serialize()
                ).done(function (data) {
                    if(data==1){
                        Swal.fire({
                            icon: 'success',
                            title: 'Se guardo exitosamente',
                          });
                        $(".js-btn-new-address").html(contentHtml);
                    }else{
                        $(".js-btn-new-address").html(contentHtml);
                    }
                });
            } catch (error) {
                Swal.fire({
                    icon: 'error',
                    title: 'Ocurrió un error al guardar los datos',
                  });
            }

        }
    });
});
