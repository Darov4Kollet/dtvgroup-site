$(document).ready(function()
{
	$('.navbar__burger').on('click', function()
	{
		$('#app').addClass('menu-open')
	})
	$('.menu__close').on('click', function()
	{
		$('#app').removeClass('menu-open')
	})
	let owl = $('.owl-carousel')
	$(owl).owlCarousel({
		loop: true,
		autoplay: true,
		autoplayTimeout: 2000,
		autoplayHoverPause: true,
		items: 1,
		responsive: {
			960: {
				items: 3
			}
		}
	})
	$('.is-next').on('click', function()
	{
		owl.trigger('next.owl.carousel')
	})
	$('.is-prev').on('click', function()
	{
		owl.trigger('prev.owl.carousel')
	})
	$('.order__trigger-desc').on('click', function()
	{
		$(this).toggleClass('is-active')
	})
	
	$('#tel').mask('+7 (999) 999-99-99');
	/*$('.order form').on('submit', function()
	{
		window.location.href = 'success.html'
		return false
	})*/
})
