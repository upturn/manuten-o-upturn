$(document).ready(function($) {
	var tamanho = $('#container').height();
	var tamanhoGeral = $('#fundo').height();

	$('#container').css({
		"padding-top": (tamanhoGeral / 2) - (tamanho  / 2) + "px"
	});
});