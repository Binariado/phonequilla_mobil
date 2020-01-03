//js-btn-data-person
// $.post("/users/profile/address-notebook-person",$("#addressNotebook").serialize())
// .done(function(data){
//     //console.log(data);
// })

$(".js-btn-data-person").click(function(){
    const btnElm=this;
    validate($("#dataPerson")[0])
    .then((result) => {
        if(result==false){

        }else{
            try {
                const contentHtml=$(btnElm).html();
                $(btnElm).html(`
                    <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                    Loading...
                `);
                $.post("/users/profile/address-notebook-person",
                    $("#dataPerson").serialize()
                ).done(function (data) {
                    console.log(data);
                    if(data==1){
                        Swal.fire({
                            icon: 'success',
                            title: 'Se guardo exitosamente',
                          });
                        $(btnElm).html(contentHtml);
                    }else{
                        $(btnElm).html(contentHtml);
                    }
                });
            } catch (error) {
                console.log(error)
                Swal.fire({
                    icon: 'error',
                    title: 'Ocurrió un error al guardar los datos',
                });
            }
        }
    });
});
