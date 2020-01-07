let fort_address = "form-bill";
let collapse = false;
let jsCollapse;
function collapseFunc() {
    this.fort_address="form-bill";
}
collapseFunc.prototype.all=function () { 
    const jsNformbill = document.querySelectorAll(".js-addres-new");
    for (const key in jsNformbill) {
        if (jsNformbill.hasOwnProperty(key)) {
            const element = jsNformbill[key];
            element.addEventListener("click", function() {
                if (this.getAttribute("data-form") == "form-bill") {
                    if (collapse) {
                        collapse = false;
                        $("#collapseAddNew").toggle("show");
                    }
                }
                
                jsCollapse.fort_address = this.getAttribute("data-form");
            });
        }
    }
    document
        .querySelector(".js-collapse")
        .addEventListener("click", function() {
            if (collapse == false) {
                collapse = true;
                $("#collapseAddNew").toggle("show");
            }
        });
}
jsCollapse=new collapseFunc();
export default jsCollapse;