const contentUpdate=document.querySelector(".content-update");
import shippingDetail from "./shipping-detail";
$(document).ready(function(){
    step.active($(".js-step-action").attr("data-step"));
    $(".js-purchase-field")
    .removeAttr("disabled")
    .click(function(){
        $.post("/shopping/purchase")
        .done(function(data){
            $(contentUpdate).html(data);
            step.next($(".js-step-action"));
            shippingDetail();
        });
    });
});