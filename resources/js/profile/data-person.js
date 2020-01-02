//js-btn-data-person
// $.post("/users/profile/address-notebook-person",$("#addressNotebook").serialize())
// .done(function(data){
//     //console.log(data);
// })

$(".js-btn-data-person").click(function(){
    validate($("#dataPerson")[0])
    .then((result) => {
        if(result==false){

        }else{
            try {
                const contentHtml=$(".js-btn-data-person").html();
                $(".js-btn-new-address").html(`
                    <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                    Loading...
                `);
                // $.put = function(url, data, callback, type){
 
                //     if ( $.isFunction(data) ){
                //       type = type || callback,
                //       callback = data,
                //       data = {}
                //     }
                   
                //     return $.ajax({
                //       url: "/users/profile/",
                //       type: 'PUT',
                //       success: callback,
                //       data: data,
                //       contentType: type
                //     });
                //   }
                $.put("/users/profile/",
                    $("#dataPerson").serialize()
                ).done(function (data) {
                    console.log(data);

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
                console.log(error)
                Swal.fire({
                    icon: 'error',
                    title: 'Ocurrió un error al guardar los datos',
                });
            }

        }
    });
});
