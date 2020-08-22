// блок меню
var batton = document.getElementById('button');
	batton.onclick  = function () {
		var pos = -800;
		var box = document.getElementById('box');
		var t = setInterval(move, 10);
		var bo = document.getElementById('bo');
		var close = document.getElementById('close');
		var ing = document.querySelector('pas')

	function move() {
			if (pos >= 0) {
				clearInterval(t);
			box.style.display = 'block';
			bo.style.overflow = 'hidden';
			close.style.display = 'block';
		}
		else {
			pos += 40;
			box.style.left = pos + 'px';
			bo.style.overflow = 'hidden';
			box.style.display = 'block';
		}
	}
};
var batto = document.getElementById('close');
	batto.onclick  = function () {
		box.style.display = 'none';
		batto.style.display = 'none';
		bo.style.overflow = 'auto';
	};

// Блок авторизации
var doc = document.getElementById('ff');
	var loginn = document.getElementById('loginn');

var closee = document.getElementById('closee');
	loginn.onclick = function () {
		bo.style.overflow = 'hidden';
		doc.style.display = 'block';
		closee.style.display = 'block';


		closee.onclick = function () {
			doc.style.display = 'none';
			closee.style.display = 'none';
			bo.style.overflow = 'auto';
		};
	};

// Блок настроек

let longread = document.querySelector('.longread');
let colorSetting = document.querySelector('.color-setting');
let sizeSetting = document.querySelector('.size-setting');
let pixels = document.querySelector('.pixels');

colorSetting.onchange = function () {
  longread.style.color = colorSetting.value;
};

sizeSetting.oninput = function () {
  pixels.textContent = sizeSetting.value;
  longread.style.fontSize = sizeSetting.value + 'px';
};

let backgroundSetting = document.querySelector('.background-setting');

backgroundSetting.onchange = function () {
  longread.style.backgroundColor = backgroundSetting.value;

}

// Блок настроек
/*
var open = document.getElementById('open');
var settings = document.getElementById('settings');
var closeee = document.getElementById('closeee');

open.onclick = function () {
	settings.style.display = 'block';
	closeee.style.display = 'block';
};

closeee.onclick = function () {
	closeee.style.display = 'none';
	settings.style.display = 'none';
};*/

var open = document.getElementById('open');
var settings = document.getElementById('settings');
var closeee = document.getElementById('closeee');

open.onclick = function () {
	settings.style.display = 'block';
	closeee.style.display = 'block';
}
closeee.onclick = function () {
	settings.style.display = 'none';
	closeee.style.display = 'none';
}

// кнопка прокрутки
var upButton = document.querySelector(".up");
window.onscroll = function () {
  if (window.pageYOffset > 200) {
    upButton.classList.add('est');
  } else {
    upButton.classList.remove('est');
  }
};

upButton.onclick = function () {
  window.scrollTo(0, 0);
};
/*
window.onscroll = function () {
  if (window.pageYOffset > 200) {
    upButton.classList.add('shown');
  } else {
    upButton.classList.remove('shown');
  }
};

upButton.onclick = function () {
  window.scrollTo(0, 0);
};*/

// попап
let tooltip = document.querySelector('.tooltip');
let closeButton = document.querySelector('.close-button');
let tooltipButtons = document.querySelectorAll('.tooltip-button');
let tooltipText = document.querySelector('.tooltip-text');

closeButton.onclick = function () {
  tooltip.classList.remove('opened');
};

for (let tooltipButton of tooltipButtons) {
  tooltipButton.onclick = function () {
  	tooltipText.textContent = tooltipButton.dataset.tooltipText;
  	tooltip.classList.add('opened');
	};
}
