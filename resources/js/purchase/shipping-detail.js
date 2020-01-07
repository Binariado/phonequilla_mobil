import addressAdd from "./address-add";
function shoppingDetail() { 
    $(".js-addres-new").click(function () {
        if(this.value==1){
            $('#collapseDetails')
            .collapse('hide');
        }else{
            $('#collapseDetails')
            .collapse('show');
        }
    });

    $(".js-btn-add").click(function(){
        function send(){
            dataForm.get("Shipping_type")
            $.post("/shopping/shipment-details",$("#form-bill").serialize())
            .done(function(data){
                const contentUpdate=document.querySelector(".content-update");
                $(contentUpdate).html(data);
                step.next($(".js-step-action"));
                addressAdd();
            });
        }
        const dataForm=new FormData($("#form-bill")[0]);
        if(dataForm.get("Shipping_type")==2){
            let ft=true;
            dataForm.forEach((value,name)=>{
                if(value==""){
                    document.querySelector('[name="'+name+'"]')
                    .classList
                    .add("is-invalid");
                    ft=false
                }else{
                    document.querySelector('[name="'+name+'"]')
                    .classList
                    .add("is-valid");
                    document.querySelector('[name="'+name+'"]')
                    .classList
                    .remove("is-invalid");
                }
                return ft;
            });
            if(ft==true){
                send();
            }
        }else{
            send();
        }
    });

    let cities={};
    let store={};
    $.post("/shopping/cities-global")
    .done(function(data){
        cities=data.cities;
        window.cities=data.cities;
        store=data.store;
        $("#departments").removeAttr("disabled");
        $("#departments").change(function(){
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

        $("#city").change(function(){
            $("#store").removeAttr("disabled");
            const citiesOption=store[this.value];
            const elmCities= document.querySelector(this.dataset.store);
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

    });
}
export default shoppingDetail;
