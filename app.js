$(document).ready(function(){

    $('.modal').show(1500);
    
});


$('#close').on('click' ,function(){

    $('.modal').hide();

    $('#nombre').text('Carlos Flores Alan Fernando 5-W');


});

$('#nombre').click(function(){

$('#nombre').hide(3000);

});


