/*
 * Nome: scripts.js
 * Desenvolvido por: Rafael Damasio (Phorma Design)
 * Data da Criação: 10-07-2015
 * Copyright (c) 2015 - Ibiza Moveleira
 */
$(document).ready(function(){
 	scrollButtom = function(){
		$(".bt-scroll").on("click", function(e){
			e.preventDefault();
			e.stopPropagation();
			console.log("oi");
			var $this = $(this),
			thisTop = $this.attr("href");
			topPage = parseInt($(thisTop).offset().top);
			topPage = parseInt(topPage)-70;
			/*if(thisTop != "#sobre"){
				topPage = parseInt(topPage)-parseInt($(".header-alternative").height());
			}*/
			$("html, body").animate({
				scrollTop: topPage
			}, 1000);
		});
	}

	scrollButtom();
});