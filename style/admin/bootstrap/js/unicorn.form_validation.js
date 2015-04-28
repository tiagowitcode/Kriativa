/**
 * Unicorn Admin Template
 * Diablo9983 -> diablo9983@gmail.com
**/
$(document).ready(function(){
	
	$('input[type=checkbox],input[type=radio]').uniform();
	
	
	
	// Form Validation
    $("#basic_validate").validate({
		rules:{
			required:{
				required:true
			},
			email:{
				required:true,
				email: true
			},
			cliente_id:{
				required:true,
				
			},
			tipoentrada_id:{
				required:true,
				
			},
			empreendimento_id:{
				required:true,
				
			},
			cidade_id:{
				required:true,
				
			},
			tipofornecedores_id:{
				required:true,
				
			},
			valor:{
				required:true,
				
			},
			date:{
				required:true,
				date: true
			},
			password:{
				required:true
				
			},
			url:{
				required:true,
				url: true
			},
			senha2:{
				required:true
				
			},
			username:{
				required:true
				
			},
			senha:{
				required:true
				
			},
			senhaantiga:{
				required:true
				
			},
			senhanova1:{
				required:true
				
			},
			nome:{
				required:true
				
			},
			
			data:{
				required:true
				
			},
			titulo:{
				required:true
			},
			descricao:{
				required:true
			}
			
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});
	
	$("#number_validate").validate({
		rules:{
			min:{
				required: true,
				min:10
			},
			max:{
				required:true,
				max:24
			},
			number:{
				required:true,
				number:true
			}
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});
	
	$("#password_validate").validate({
		rules:{
			pwd:{
				required: true,
				minlength:6,
				maxlength:20
			},
			pwd2:{
				required:true,
				minlength:6,
				maxlength:20,
				equalTo:"#pwd"
			}
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});
});
