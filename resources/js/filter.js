var reference = document.querySelector('.js-marcas-popper, .js-marcas-popper>span, .js-marcas-popper>i');
var popper_elm = document.querySelector('.popper-marcas');

$(popper_elm).hide();

$(document).on("click touchend",function(e){
    const target = $(e.target);

    if(target.is($(popper_elm))) return;
    if(target.is($('.js-marcas-popper, .js-marcas-popper>span, .js-marcas-popper>i'))) {
        e.preventDefault();
        $(popper_elm).show(); 

        var popper = new Popper(reference, popper_elm, {
            placement: 'bottom-end'
        });

        const sectionProd = $(".section-product.show");
        const c_filter = $(".popper-marcas");

        if (c_filter.attr("data-status") != "true") {
            c_filter.html(`
                <div class="d-flex justify-content-center">
                    <div class="spinner-grow text-danger" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
            `);

            $.post("/filter/filter-brands",{
                category: sectionProd.attr("data-id")
            }).done(function(data) {
                c_filter.html("");
                c_filter.attr("data-status", "true");
                for (const key in data) {
                    if (data.hasOwnProperty(key)) {
                        const elem = data[key];
                        const nameA= $("<a>")
                            .addClass("btn pl-0 pr-0 brand-action roboto-regular d-flex justify-content-between")
                            .appendTo(c_filter);

                        $("<span></span>")
                            .text(elem.name)
                            .appendTo(nameA);

                        const div= $("<div>")
                            .addClass("d-flex align-items-center")
                            .appendTo(nameA);

                            // $("<i>")
                            // .addClass("fas fa-angle-down rounded-circle collp-icon_f d-flex justify-content-center align-items-center")
                            // .appendTo(div);
                    }
                }
                // console.log(data);
            })
        }
    } else {
        $(popper_elm).hide();
    }
})

// section-product
// $(".js-brand-action").click(function() {
//     const sectionProd = $(".section-product.show");
//     const c_filter = $(".popper-marcas");

//     if (c_filter.attr("data-status")!="true") {
//         c_filter
//         .html(
//         `
//         <div class="d-flex justify-content-center">
//             <div class="spinner-grow text-danger" role="status">
//                 <span class="sr-only">Loading...</span>
//             </div>
//         </div>
//         `
//         );
//         $.post("/filter/filter-brands",{
//             category:sectionProd.attr("data-id")
//         }).done(function(data){
//             c_filter.html("")
//             c_filter.attr("data-status","true");
//             for (const key in data) {
//                 if (data.hasOwnProperty(key)) {
//                     const elem = data[key];
//                     const nameA= $("<a>")
//                         .addClass("btn pl-0 pr-0 brand-action roboto-regular d-flex justify-content-between")
//                         .appendTo(c_filter);

//                     $("<span></span>")
//                         .text(elem.name)
//                         .appendTo(nameA);

//                     const div= $("<div>")
//                         .addClass("d-flex align-items-center")
//                         .appendTo(nameA);

//                         // $("<i>")
//                         // .addClass("fas fa-angle-down rounded-circle collp-icon_f d-flex justify-content-center align-items-center")
//                         // .appendTo(div);
//                 }
//             }
//             console.log(data);
//         })
//     }

// })

$(".brand-action").click(function() {


});
