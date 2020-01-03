class step {
  constructor() {
    this.activeSect = false;
  }
  active(item) {
    step.step(item);
  }
  static step(item){
    const item_bar = document.querySelectorAll(".item-bar");
    let one_s = false;
    let two_s = false;
    for (const key in item_bar) {
      if (item_bar.hasOwnProperty(key)) {
        const element = item_bar[key];
        $(element).addClass("active");
        if (key == parseInt(item) - 1) {
          break;
        }
      }
    }
    for (const key in item_bar) {
      if (item_bar.hasOwnProperty(key)) {
        const element = item_bar[key];
        if (this.activeSect) {
          if (one_s != false) {
            $(element).addClass(one_s);
            one_s = true;
          }
          if (one_s == false) {
            if (element.classList.contains("view-true-section")) {
              one_s = "view-true-section";
              $(".view-true-section").removeClass("view-true-section");
            }
          }
          if (two_s == false) {
            if (element.classList.contains("view-true-section-two")) {
              two_s = "view-true-section-two";
              element.classList.remove("view-true-section-two");
              if (
                $(".multi_step_form .item-bar")[parseInt(key) + 1] != undefined
              ) {
                $(".multi_step_form .item-bar")[
                  parseInt(key) + 1
                ].classList.add("view-true-section-two");
              }
            }
          }
          if (key == parseInt(item) - 1) {
            break;
          }
        }
      }
    }
    this.activeSect = true;
  }
  next(elm){
    step.step(elm.attr("data-step"));
  }
}
module.exports = new step();
