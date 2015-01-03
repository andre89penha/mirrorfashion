document.querySelector('#form-busca').onsubmit = function () {
	if(document.querySelector('#q').value == '') {
		alert('Não podia ter deixado em branco');
		return false;
	}
}

// script para troca de banners da home page.

var banners = ["img/destaque-home.png", "img/destaque-home-2.png" ];
var bannerAtual = 0;

function trocaBanner(){
	bannerAtual = (bannerAtual + 1) % 2;
	document.querySelector('.destaque img').src = banners[bannerAtual];
}

var timer = setInterval(trocaBanner, 4000);

// script para ativar e desetivar o banner.

var controle = document.querySelector('.pause');
controle.onclick = function () {
	if (controle.className == 'pause') {
		clearInterval(timer);
		controle.className = 'play';
	} else  {
		timer = setInterval(trocaBanner, 4000);
		controle.className = 'pause';
	}
	return false;
}