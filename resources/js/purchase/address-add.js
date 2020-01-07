import jsCollapse from "./collapse-func";
import purchaseEnd from "./purchase-end";
function addressAdd() {
    const a_delete=document.querySelectorAll(".js-address-delete");
    function addFunDelete_address(elm) {
        elm
        .addEventListener('click',function (e) {
            const elm=this.parentNode;
            const id=this.dataset.id;
            Swal.fire({
            title: 'Esta seguro de eliminar esta dirección?',
            text: '',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Si',
            cancelButtonText: 'No'
            }).then((result) => {
            if (result.value) {
                $(elm).html(
                    `<div class="spinner-border text-danger" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>`
                );
                $.post("/address/"+id+"/destroy")
                .done(function () {
                    if(true){
                        $($(elm).parents(".group-address")[0]).remove();
                        Swal.fire(
                        'Eliminado correctamente.',
                        '',
                        'success'
                        )
                    }
                })

            } else if (result.dismiss === Swal.DismissReason.cancel) {
                // Swal.fire(
                // 'Cancelled',
                // 'Your imaginary file is safe :)',
                // 'error'
                // )
            }
            })

        });
    }
    if(Array.from(a_delete).length>0){
        for (const key in a_delete) {
            if (a_delete.hasOwnProperty(key)) {
            const element = a_delete[key];
            addFunDelete_address(element);
            }
        }
    }
    const cities=window.cities;
    $("#department").removeAttr("disabled");
    $("#department").change(function(){
        $("#city").removeAttr("disabled");
        const citiesOption=cities[this.value];
        const elmCities= document.querySelector(this.dataset.cities);
        $(elmCities).html("");
        $(elmCities)
        .html('<option value="" selected hidden>Seleccione..</option>');
        for (const key in citiesOption) {
            if (citiesOption.hasOwnProperty(key)) {
                const element = citiesOption[key];
                $(elmCities).append($("<option>").attr({
                    value:element.id
                }).html(element.name)
                );
            }
        }
    });
    jsCollapse.all();
    $(".js-btn-add").click(function () { 
        $(this).attr("disabled","");
        const contentUpdate=document.querySelector(".content-update");
        validate($("#"+jsCollapse.fort_address)[0])
        .then((result) => {
            const btnElm=this;
            if(result==false){
                $(btnElm).removeAttr("disabled");
            }else{
                try {
                    const contentHtml=$(btnElm).html();
                    $(btnElm).html(`
                        <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                        Loading...
                    `);
                    let formSelect=$("#"+jsCollapse.fort_address);
                    $.post("/shopping/purchase-address",
                        formSelect.serialize()
                    ).done(function (data) {
                        //console.log(data);
                        $(contentUpdate).html(data);
                        step.next($(".js-step-action"));
                        purchaseEnd();
                    }).catch(function (error) { 
                        $(btnElm).html(contentHtml).removeAttr("disabled");
                        Swal.fire({
                            icon: 'error',
                            title: 'Error del servidor, pongase en contacto con los administradores',
                        });
                        console.error(error);
                     });
                } catch (error) {
                    $(btnElm).html(contentHtml).removeAttr("disabled");
                    console.error(error);
                    Swal.fire({
                        icon: 'error',
                        title: 'Ocurrió un error al guardar los datos',
                    });
                }
            }
        });
     })
}
export default addressAdd;
