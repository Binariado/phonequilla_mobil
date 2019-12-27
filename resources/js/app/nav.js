(function(){
    const item_nav=document.querySelectorAll('[data-action="content-nav-tap"]');
    class nav{
        constructor(items,parent){
            for (const key in items) {
              if (items.hasOwnProperty(key)) {
                const element = items[key];
                element.classList.add("nav-items");
                element
                .addEventListener("click",function(){
                    if(this.classList.contains("active")){
                        console.log("actualizar");
                    }else{
                        /**
                         * @param {Object} parentNode
                         * Padre Contenedor de los section-product(class)
                         */
                        const parentNode=parent;
                        const target=document.querySelector(this.dataset.target);

                        parentNode.querySelector(".active")
                        .classList.remove("active");
                        this
                        .classList.add("active");

                        /**
                         * @param  {Object} contentSection
                         *  Contenedor de los productos
                         * @description Extrayendo el contenedor solicitado para activación
                         */
                        const contentSection=document
                        .querySelector(parentNode.dataset.controls);

                        //Removiendo la clase show del elemento actualmente visible
                        contentSection
                        .querySelector(".nav-tap.show")
                        .classList.remove("show");

                        //Agregando la clase show
                        target
                        .classList.add("show");
                        target
                        .classList.add("effect-appearance");

                        setTimeout(() => {
                            target
                            .classList.remove("effect-appearance");
                        }, 100);

                    }
                });
              }
            }
        }
    }

    for (const key in item_nav) {
      if (item_nav.hasOwnProperty(key)) {
        const element = item_nav[key];
        childNodes=element.querySelectorAll(element.dataset.items);
        new nav(childNodes,element);
      }
    }

})();