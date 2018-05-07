$(document).ready(function() {
	$('.owl-carousel').owlCarousel({
		loop           : true,
		margin         : 10,
		dots           : false,
		nav            : true,
		navText        : ['<i class="ion-chevron-left"></i>', '<i class="ion-chevron-right"></i>'],
		responsiveClass: true,
		responsive     : {
			0   : {
				items: 1,
				nav  : true
			},
			600 : {
				items: 3,
				nav  : true
			},
			1000: {
				items: 6,
				nav  : true,
				loop : false
			}
		}
	});

	$("#img_01").elevateZoom({
		/*zoomWindowFadeIn : 500,
		zoomLensFadeIn: 500,
		gallery: "gal1",
		imageCrossfade: true,
		scrollZoom: true,
		cursor:"crosshair",
		zoomType: "inner",
		constrainType:"height",
		containLensZoom: true,*/
		constrainSize:274,
		gallery           : 'gal1',
		cursor            : 'pointer',
		galleryActiveClass: 'active',
		imageCrossfade    : true,
		loadingIcon       : 'http://www.elevateweb.co.uk/spinner.gif'
	});
	$(document).on("click","#img_01", function(e) {
		$("#img_01").colorbox({
			inline: true,
			width: "50%",
			href: $("#gal1 a.active").attr('data-zoom-image'),
		});
		return false;
	});
	$('.rating').barrating({
		theme: 'fontawesome-stars'
	});

	$('.count-down-timer').each(function() {
		/* Set the date we're counting down to*/
		var timer = $(this);
		var countDownDate = new Date(timer.attr('data-date')).getTime();
		// Update the count down every 1 second
		var x = setInterval(function() {
			/*Get todays date and time*/
			var now = new Date().getTime();
			/* Find the distance between now an the count down date*/
			var distance = countDownDate - now;
			/* Time calculations for days, hours, minutes and seconds*/
			var days = Math.floor(distance / (1000 * 60 * 60 * 24));
			var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
			var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
			var seconds = Math.floor((distance % (1000 * 60)) / 1000);
			timer.html(minTwoDigits(hours) + " : " + minTwoDigits(minutes) + " : " + minTwoDigits(seconds));
			/* If the count down is finished, write some text*/
			if (distance < 0) {
				clearInterval(x);
				timer.html("Hết hạn");
			}
		}, 1000);

	});

	/*$("#img_01").bind("click", function(e) {
		var ez = $('#img_01').data('elevateZoom');
		$.fancybox(ez.getGalleryList());
		return false;
	});*/
	(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.12&appId=161098064613614&autoLogAppEvents=1';
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
});

function minTwoDigits(n) {
	return (n < 10 ? '0' : '') + n;
}
