class loadSpinner{
    constructor(op){
        const load=$("<div>").addClass("load");
        const cSpinner=$("<div>").addClass("c-spinner").appendTo(load);
        const spinnerGrow=$("<div>").addClass("spinner-grow").appendTo(cSpinner).attr({
            role:"status"
        });
        $("<span>").addClass("sr-only").appendTo(spinnerGrow);
        this.load=$(load);
    }

    active(){
        //$(this.load[0].querySelector(".sr-only")).text(message)
        this.load.appendTo(document.body);
    }
    close(){
        //Velocity($(".load")[0], { opacity: 0 });
        $(".load").remove();

    }
}
module.exports = loadSpinner;