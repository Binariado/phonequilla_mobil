var reference = document.querySelector('.js-marcas-popper');
var popper = document.querySelector('.popper-marcas');

try {
    var popper = new Popper(reference, popper, {
        placement: 'bottom-end'
    });
} catch (error) {

}



//section-product
$(".js-brand-action").click(function(){
    $.post("/filter/filter-brands",{
        category:$(".section-product.show").attr("id")
    }).done(function(data){
        console.log(data);
    })
})
