import jsCollapse from "./collapse-func";
function purchaseEnd() { 
    jsCollapse.all();
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
                    $.post("/shopping/purchase-end",
                        formSelect.serialize()
                    ).done(function (data) {
                        console.log(data);
                        //$(contentUpdate).html(data);
                        //step.next($(".js-step-action"));
                        $(btnElm).html(contentHtml).removeAttr("disabled");
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
     });



    $(".js-poinst").keypress(function(e) {
    
        //console.log(this.value);
        var char =  window.event ? e.which : e.keyCode;
        if(char==13){
            const valor=this.value;
            $.post("points",{
                points:this.value
            })
            .done(function (data) {

                if(data.status=1){
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Sus puntos se agregaron correctamente',
                        showConfirmButton: false,
                        timer: 1500
                    });
                    $("[data-epayco-key]")
                    .attr({
                        "data-epayco-amount":data.total,
                    });
                    $("js-poinst")
                    .text(valor)
                    .parents(".sub-text-head")[0]
                    .removeAttribute("style");
                    $("js-total")
                    .text(valor)
                }else if(data.status=2){
                    Swal.fire({
                        position: 'top-end',
                        icon: 'warning',
                        title: 'Cupon invalido',
                        showConfirmButton: false,
                        timer: 1500
                    });
                }else if(data.status=3){
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: 'Ocurió un error, intenelo mas tarde',
                        showConfirmButton: false,
                        timer: 1500
                    });
                }

                console.log(data);
            })
        }
        if (char < 48 || char > 57) {
            e.preventDefault();
        }
});
}
export default purchaseEnd;