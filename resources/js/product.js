//require('./components/components-react');
const step = require('./step');
$('.js-addProduct').click(function(){
    $.post("cart/"+this.dataset.id,{
        'color':this.dataset.color
    }).done(function(data){
        console.log(data)
    })
})
$(document).ready(function () {
    const main_view= $(".main-product-detail")
    .flickity({
        wrapAround: true,
        prevNextButtons: false,
        pageDots: true,
        //autoPlay: 2000,
        contain: true
    });
    $(document.body).resize(function(){
        main_view.flickity('resize');
    });
})
const contentUpdate=document.querySelector(".content-update");
$(document).ready(function(){
    step.active($(".js-step-action").attr("data-step"));
    $(".js-purchase-field")
    .removeAttr("disabled")
    .click(function(){
        $.post("/shopping/purchase")
        .done(function(data){
            $(contentUpdate).html(data);
            step.next($(".js-step-action"));
        });
    });

});








