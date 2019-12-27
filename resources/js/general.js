// $(document).ready(function () {
//     new loadSpinner ().close();
// })

function lazyLoad() {
    let lazyImages = [...document.querySelectorAll('.lazy')];


    lazyImages.forEach(image => {
        if(elementVisible(image)){
            //image.src=https+"img/loading-11.gif";
            img=document.createElement("IMG");
            img.src=image.dataset.src;
            img.onload = () => {

                image.src = image.dataset.src;
                image.classList.add('loaded');
                image.classList.remove('lazy');
            };
        }
    });
}

window.addEventListener('scroll', _.throttle(lazyLoad, 16));
window.addEventListener('resize', _.throttle(lazyLoad, 16));


$(document).ready(function(){
    setTimeout(() => {
        $('#loading').css('display','none');
        $('body').css('overflow-x','visible');
        $('body').css('overflow-y','visible');
    }, 0);
    lazyLoad();
});

function elementVisible(element){
    var visible = true;
    var windowTop = $(document).scrollTop();
    var windowBottom = windowTop + window.innerHeight;
    var elementPositionTop =  $(element).offset().top;
    var elementPositionBottom = elementPositionTop + $(element).height();
    if (elementPositionTop >= windowBottom || elementPositionBottom <= windowTop) {
        visible = false;
    }
    return visible;
}

$('.carousel').carousel({
    interval: 3000
})
