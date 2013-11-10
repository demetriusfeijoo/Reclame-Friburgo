(function($){

	$.root = $(document);

    $.root.find(".contato .contato-form").validate({

	    rules:{

	        "nome": {

	            required: true,
	            minlength: 2

	        },
	        "email": {

	            required: true,
	            email: true

	        },
	        "assunto": {

	            required: true

	        },
	        "mensagem": {

	            required: true

	        }

	    },

	    messages:{

	        "nome": {

	            required: "Preencha o campo nome",
	            minlength: "O nome deve conter no mínimo 2 caracteres"

	        },
	        "email": {

	            required: "Preencha o campo e-mail",
	            email: "Preencha com um e-mail válido"

	        },
	        "assunto": {

	            required: "Preencha o campo assunto"

	        },
	        "mensagem": {

	            required: "Preencha o campo mensagem"

	        }

	    }

	});

    $.root.find(".nova-reclamacao .reclamacao-form").validate({

	    rules:{

	        "email": {

	            required: true,
	            email: true

	        },
	        "senha": {

	            required: true,
	            minlength: 6

	        },
	   	    "titulo": {

	            required: true,
	            minlength: 2

	        },
	        "bairro": {

	            required: true

	        },
	        "descricao": {

	            required: true,
	            minlength: 2

	        }

	    },

	    messages:{

	        "titulo": {

	            required: "Preencha o campo título",
	            minlength: "O campo título deve conter no mínimo 2 caracteres"

	        },
	       	"email": {

	            required: "Preencha o campo e-mail",
	            email: "Preencha com um e-mail válido"

	        },
	        "senha": {

	            required: "Preencha o campo senha",
	            minlength: "O campo senha deve conter no mínimo 6 caracteres"

	        },
	        "bairro": {

	            required: "Escolha um bairro"

	        },
	        "descricao": {

	            required: "Preencha o campo descrição",
	    	    minlength: "O campo descrição deve conter no mínimo 2 caracteres"

	        }

	    }

	});


    $.root.find(".cadastro-usuario .cadastro-usuario-form").validate({

	    rules:{

	        "email": {

	            required: true,
	            email: true

	        },
	        "senha": {

	            required: true,
	            minlength: 6

	        }

	    },

	    messages:{

	       	"email": {

	            required: "Preencha o campo e-mail",
	            email: "Preencha com um e-mail válido"

	        },
	        "senha": {

	            required: "Preencha o campo senha",
	            minlength: "O campo senha deve conter no mínimo 6 caracteres"

	        }

	    }

	});

})(jQuery);