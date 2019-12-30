
$.post("/users/profile/address-notebook",$("#addressNotebook").serialize())
.done(function(data){
    console.log(data);
})

// $.post("/users/profile/cities-global")
// .done(function(data){
//     console.log(data);
// })