$('#menu-toggle').click(function (e) { 
 e.preventDefault();
 $(this).toggleClass('open');
 $('#mobile-nav').toggleClass('d-none');
 if($(this).hasClass('open')){
  $(this).html(`<span class="material-symbols-outlined" style="font-size: 35px;">close</span>`);
 }else{
  $(this).html(`<span class="material-symbols-outlined" style="font-size: 35px;">menu</span>`);
 }
});
$('#open-dropdown span').click(function (e) { 
 e.preventDefault();
 $('#open-dropdown > ul').toggleClass('show');
});

$(document).ready(function(){
 $(document).on('click',function(e){
   if(!(($(e.target).closest("#open-dropdown").length > 0 )) && $('#open-dropdown > ul').hasClass('show')){
    $('#open-dropdown > ul').removeClass('show');
  }
 });
});