$("#activate").click(function(){
    $("#mymodal").removeClass('no-modal');
    $("#mymodal").addClass('yes-modal');
})
$("#close").click(function(){
    $("#mymodal").removeClass('yes-modal');
    $("#mymodal").addClass('no-modal');
})