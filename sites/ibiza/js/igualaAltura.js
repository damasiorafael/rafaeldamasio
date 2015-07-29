/*
 * Nome: igualaAltura.js
 * Desenvolvido por: Rafael Damasio (Phorma Design)
 * Data da Criação: 28-07-2015
 * Copyright (c) 2015 - Ibiza Moveleira
 * script para selecionar todas as imagens e deixar coma mesma altura para não ter quebra na página
 */
(function($) {
   	$.fn.igualaAltura = function() {
		var Taltura = new Array();
	    this.each(function(){
			altura = $(this).height();
			Taltura.push(altura);
		});
		var maior = Taltura.sort(function(a,b){return a - b}).slice(-1);
		this.css({height: maior + "px"});
		return this;
	};
})(jQuery);