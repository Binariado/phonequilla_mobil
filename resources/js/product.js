
$('.js-addProduct').click(function(){
    $.post("cart/"+this.dataset.id,{
        'color':this.dataset.color
    }).done(function(data){
        console.log(data)
    })
})

// $(".js-view-product").click(function (e) {
//     if(e.target.classList.contains("js-addProduct")==false){
//         console.log(e.target);
//         //window.location.href="/"
//     }
// })

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
    })
})
