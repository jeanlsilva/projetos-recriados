jQuery('#setStartup').on('click', function() {
	jQuery('#input_txt').attr('placeholder', 'Digite o nome da Startup');
	jQuery('#setStartup').css({'border-bottom':'3px solid #6cb758'});
	jQuery('#setStartup a').css({'color':'#6cb758', 'font-weight':'bolder'});
	jQuery('#setProfissionais').css({'border-bottom':'0'});
	jQuery('#setProfissionais a').css({'color':'#FFFFFF','font-weight':'normal'});
	jQuery('#setFornecedores').css({'border-bottom':'0'});
	jQuery('#setFornecedores a').css({'color':'#FFFFFF','font-weight':'normal'});
	//alert('Startup');
});

jQuery('#setProfissionais').on('click', function() {
	jQuery('#input_txt').attr('placeholder', 'Digite o nome do Profissional');
	jQuery('#setProfissionais').css({'border-bottom':'3px solid #6cb758'});
	jQuery('#setProfissionais a').css({'color':'#6cb758', 'font-weight':'bolder'});
	jQuery('#setStartup').css({'border-bottom':'0'});
	jQuery('#setStartup a').css({'color':'#FFFFFF','font-weight':'normal'});
	jQuery('#setFornecedores').css({'border-bottom':'0'});
	jQuery('#setFornecedores a').css({'color':'#FFFFFF','font-weight':'normal'});
	//alert('Profissionais');
});

jQuery('#setFornecedores').on('click', function() {
	jQuery('#input_txt').attr('placeholder', 'Digite o nome do Fornecedor');
	jQuery('#setFornecedores').css({'border-bottom':'3px solid #6cb758'});
	jQuery('#setFornecedores a').css({'color':'#6cb758', 'font-weight':'bolder'});
	jQuery('#setStartup').css({'border-bottom':'0'});
	jQuery('#setStartup a').css({'color':'#FFFFFF','font-weight':'normal'});
	jQuery('#setProfissionais').css({'border-bottom':'0'});
	jQuery('#setProfissionais a').css({'color':'#FFFFFF','font-weight':'normal'});
	//alert('Forecedores');
});

$('.nosso_time .col-sm-6').click(function() {
	$('#'+this.id+' .details').fadeToggle();
	$('#'+this.id+' h2').fadeToggle('fast','swing');
	$('#'+this.id+' h4').fadeToggle('fast','swing');
});
$('.nosso_time .col-sm-6 a').click(function() {
	$(this).parent().fadeToggle('slow','linear');
})

$(document).ready(function() {
	jQuery('.dropdown-menu').on('click', function (e) {
	  e.stopPropagation();
	});

	if(1) {
	  $('body').attr('tabindex', '0');
	}
	else {
	  alertify.confirm().set({'reverseButtons': true});
	  alertify.prompt().set({'reverseButtons': true});
	}

	$("#next-1").click(function() {
		$("#second").show();
		$(".logo-startup").show();
		$("#first").hide();		
		$("#label").html("Cadastre uma senha");
		$("#progressBar").css({"width":"50%"});		
	});

	$("#prev-2").click(function() {
		$("#first").show();
		$("#second").hide();
		$("#label").html("Precisamos de alguns dados:");
		$("#progressBar").css({"width":"1%"});		
	});

	$("#next-2").click(function() {
		$("#third").show();
		$("#second").hide();
		$("#label").html("Seu cadastro foi realizado <strong>com sucesso!</strong>");
		$("#progressBar").css({"width":"95%"});		
	});

	$("#next-3").click(function() {
		$("#fourth").show();
		$("#third").hide();
		$("#label").html("Olá, nome cadastrado!<br>Que bom você aqui na <strong>S1SE</strong>.<br>Selecione <strong>o seu perfil</strong> abaixo:");
		$("#progressBar").css({"display":"none"});		
		$(".ellipse").css({"display":"none"});	
	});

	$("#next-4").click(function() {
		$("#fifth").show();
		$("#fourth").hide();
		$("#label").html("Olá, nome cadastrado!<br>Que bom você aqui na <strong>S1SE</strong>.<br>Selecione <strong>o seu perfil</strong> abaixo:");
		$("#progressBar").css({"display":"none"});		
		$(".ellipse").css({"display":"none"});	
	});

	$("#next-5").click(function() {
		$("#sixth").show();
		$("#fifth").hide();
		$("#label").html("Olá, nome cadastrado!<br>Que bom você aqui na <strong>S1SE</strong>.<br>Selecione <strong>o seu perfil</strong> abaixo:");
		$("#progressBar").css({"display":"none"});		
		$(".ellipse").css({"display":"none"});	
	});
	$("#next-6").click(function() {
		$("#seventh").show();
		$("#sixth").hide();		
	});
	$("#next-7").click(function() {
		$("#eighth").show();
		$("#seventh").hide();		
	});
	$("#next-8").click(function() {
		$("#first").show();
		$("#seventh").hide();
		$("#eighth").hide();		
	});


	$(".nav .nav-link").on("click", function(){
	   $(".nav").find(".active").removeClass("active");
	   $(this).addClass("active");
	});

	$('input[role=tagsinput]').tagsinput('add', { "value": 1 , "text": "jQuery"});
	$('input[role=tagsinput]').tagsinput('add', { "value": 2, "text": "Script"});
	$('input[role=tagsinput]').tagsinput('add', { "value": 3, "text": "Net"});
	$("input[role=tagsinput]").val();
	$("input[role=tagsinput]").tagsinput('items');  

//Autocomplete - coloquei esses itens para teste. Não está funcionando
	$(".typeahead").typeahead({
	  source: [
	    {id: "id1", name: "Fulano"},
	    {id: "id2", name: "Cicrano"},
	    {id: "id3", name: "Beltrano"}
	  ]
	});

	$("#membro").click(function() {
		$(".ativo").append( "| <a href='#'>Remover</a>" );	
	});

});

//Função para inserir a imagem escolhida pelo usuário no campo. Não está funcionando
$(document).ready(function() {
    $('input[type="file"]').change(function(e){
        var fileName = e.target.files[0].name;
	    //alert(filePath);
	    $(".logo-field").css("background-image","url("+fileName+")");
	});
});

function habilitar() {
	if(document.getElementById('accept').checked) {
		document.getElementById('linkspan').style["pointer-events"] = "auto";
		document.getElementById('next-2').style["cursor"] = "pointer";
		document.getElementById('next-2').style["opacity"] = "1";
	} else {
		document.getElementById('linkspan').style["pointer-events"] = "none";
		document.getElementById('next-2').style["cursor"] = "not-allowed";
		document.getElementById('next-2').style["opacity"] = "0.5";
	}
}
function pesquisar() {
	alert('Alert temporário. Estabelecer função do campo de busca.')
}