//require('./components/components-react');
$('.js-addProduct').click(function(){
    $.post("cart/"+this.dataset.id,{
        'color':this.dataset.color
    }).done(function(data){
        console.log(data)
    })
});

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
});









