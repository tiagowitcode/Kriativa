

function tratamentosFunc(id) {
    
    if ($('#tratamentoDetalhe_'+id).is(":hidden")){
         $('#tratamentoDetalhe_'+id).slideDown("fast",function() { goToByScroll('#tratamentoimg_'+id); } );
	}else{
              $('#tratamentoDetalhe_'+id).slideUp("fast");
        }
        
        
        
}
        
function goToByScroll(id) {
	$('html,body').animate({scrollTop: $(id).offset().top},'slow');
}