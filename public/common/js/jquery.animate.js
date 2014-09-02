

/* 新スクロールトップ  */
$(document).ready(function(){

	// hide #back-top first
	$("#back-top").hide();
	
	// fade in #back-top
	$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 800) {
				$('#back-top').fadeIn();
			} else {
				$('#back-top').fadeOut();
			}
		});

		// scroll body to 0px on click
		$('#back-top a').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
	});

});









/* スクロールでの表示  */
$(function(){
	$(window).scroll(function () {
		if($(window).scrollTop() > 850) {
			$('#opa').animate({'opacity':'1.0','filter':'alpha(opacity=100)','-moz-opacity':'1.0'});
		}
		if($(window).scrollTop() > 1350) {
			$('#opa2').animate({'opacity':'1.0','filter':'alpha(opacity=100)','-moz-opacity':'1.0'});
		}
		if($(window).scrollTop() > 1450) {
			$('#opa3').animate({'opacity':'1.0','filter':'alpha(opacity=100)','-moz-opacity':'1.0'});
		}
		if($(window).scrollTop() > 1600) {
			$('#opa4').animate({'opacity':'1.0','filter':'alpha(opacity=100)','-moz-opacity':'1.0'});
		}
		if($(window).scrollTop() > 2000) {
			$('#charactor01').animate({'left':'0px'});
		}
		if($(window).scrollTop() > 2100) {
			$('#charactor02').animate({'right':'0px'});
		}
	});
});



/* スクロールトップ  */

var backToTop = {
	conf : {
		topFlag : "#up" 
	},

	main : function () {
		var x1 = x2 = x3 = 0;
		var y1 = y2 = y3 = 0;

		if (document.documentElement) {
			x1 = document.documentElement.scrollLeft || 0;
			y1 = document.documentElement.scrollTop || 0;
		}

		if (document.body) {
			x2 = document.body.scrollLeft || 0;
			y2 = document.body.scrollTop || 0;
		}

		x3 = window.scrollX || 0;
		y3 = window.scrollY || 0;

		var x = Math.max(x1, Math.max(x2, x3));
		var y = Math.max(y1, Math.max(y2, y3));

		window.scrollTo(Math.floor(x / 1.3), Math.floor(y / 1.3));

		if (x > 0 || y > 0) {
			window.setTimeout("backToTop.main()", 25);
		}
		else if (navigator.userAgent.indexOf("AppleWebKit") == -1){
			location.href = backToTop.conf.topFlag;
		}
	},

	set : function () {
		var a = document.links;
		for(i=0;i<a .length;i++){

			if(new RegExp(backToTop.conf.topFlag + "\\b").exec(a[i].href)) {
				a[i].onclick = function(){
					this.removeAttribute("href")
					backToTop.main();
					this.setAttribute("href",backToTop.conf.topFlag);
					return false;
				}
			}
		}
	},

	addEvent : function(){
		try {
			window.addEventListener('load', backToTop.set, false);
		} catch (e) {
			window.attachEvent('onload', backToTop.set);
		}
	}
}

backToTop.addEvent();