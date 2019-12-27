
$.post("/users/profile/address-notebook",$("#addressNotebook").serialize())
.done(function(data){
    console.log(data);
})
