
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes React and other helpers. It's a great starting point while
 * building robust, powerful web applications using React + Laravel.
 */

require('./bootstrap');
window._ = require('lodash');
window.$ = window.jQuery = require('jquery');
window.loadSpinner = require("./app/spinner-load");

$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
    }
});
/**
 * Next, we will create a fresh React component instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

//require('./components/index');
window.dt = require( 'datatables.net' );
require('./general');
require('./app/nav');
require('./product');
require("../../node_modules/flickity/dist/flickity.pkgd.min.js");
require('./profile/profile')

$(".js-itmen-m").click(function(e){
    $(".menu-profile .active").removeClass("active");
    $(".menu-bottom-mobile-profile .active").removeClass("active");

    $('.menu-bottom-mobile-profile [data-target="'+$(this)
    .attr("data-target")+'"]')
    .addClass("active");

    $('.menu-profile [data-target="'+$(this)
    .attr("data-target")+'"]')
    .addClass("active");


    $(".content-profile .active")
    .removeClass("active");

    $($(this).attr("data-target"))
    .addClass("active");


});
$(".js-collapse").click(function (e) {
    $("#"+$(this).attr("data-target"))
    .toggleClass("show");

    const icon= this
    .querySelector(".icon-footer")
    .querySelector("[data-icon]");

    if($(icon).attr("data-icon")=='plus'){
        $(icon)
        .attr("class","fas fa-minus")
        .attr("data-icon","minus");
    }else{
        $(icon)
        .attr("class","fas fa-plus")
        .attr("data-icon","plus");
    }


})

$(".js-collapseP").click(function(){
    const icon=this.querySelector("i");
    if(icon.classList.contains("row-t")){
        icon.classList.remove("row-t");
    }else{
        icon.classList.add("row-t");
    }
    $(this.dataset.target).collapse('toggle');
})

$(document).ready( function () {
    const wishDataTables=$('#table_id').DataTable({
        "searching": true,
        "lengthChange": false,
        "dataTablesFilter":false,
        "showNEntries" : false,
        "infoCallback": function( settings, start, end, max, total, pre ) {
            var api = this.api();
            var pageInfo = api.page.info();
            $(".pagination_info").text('Page '+ (pageInfo.page+1) +' of '+ pageInfo.pages)
        },
        "language":{
            "sProcessing":     "Procesando...",
            "sLengthMenu":     "Mostrar _MENU_ registros",
            "sZeroRecords":    "No se encontraron resultados",
            "sEmptyTable":     "Ningún favorito",
            "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix":    "",
            "sSearch":         "Buscar:",
            "sUrl":            "",
            "sInfoThousands":  ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst":    "Primero",
                "sLast":     "Último",
                "sNext":     "",
                "sPrevious": ""
            },
            "oAria": {
                "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            },
            "buttons": {
                "copy": "Copiar",
                "colvis": "Visibilidad"
            }
        }
    });
    $('#serch-wish').on( 'keyup', function () {
        wishDataTables.search( this.value ).draw();
    } );
} );
