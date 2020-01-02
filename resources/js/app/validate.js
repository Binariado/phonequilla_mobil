(()=>{
    function validRequired (valid) {
        let ft=true;
        return new Promise((resolve, reject) => {
            const required=valid.querySelectorAll("[required]");
            for (const key in required) {
              if (required.hasOwnProperty(key)) {
                const req = required[key];
                if(req.value.trim()=="" || req.value==null){
                    ft = false;
                    req.classList.remove("is-valid");
                    req.classList.add("is-invalid");
                }else{
                    req.classList.remove("is-invalid");
                }
              }
            }
            resolve(ft);
        });
    }
    $("[data-required]").map(function(index, elm){
        $(elm.querySelectorAll("[required]")).on("click change", function () {
            const elm=this;
            if(elm.value.trim()=="" || elm.value==null){
                elm.classList.remove("is-valid");
                elm.classList.add("is-invalid");
            }else{
                elm.classList.remove("is-invalid");
                elm.classList.add("is-valid");
            }
        });
    })
    window.validate= async function (valid) {
        try {
            const req=await validRequired(valid);
            return await req;
        } catch (error) {
            console.error(error);
        }
    }
})();
