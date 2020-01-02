let cities={};
$.post("/users/profile/cities-global")
.done(function(data){
    cities=data;
    $(".js-department").removeAttr("disabled");
    $(".js-department").change(function(){
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
});
require('./address-notebook');
require('./data-person');


$('.datepicker').datepicker();








