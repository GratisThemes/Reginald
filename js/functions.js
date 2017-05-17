(function($){
	const $window = $(window)
	const $document = $(document)
	const $html = $document.find('html')
	const $htmlAndBody = $document.find('html, body')
	const $siteHeader = $document.find('#site-header')
	const $menuHeaderToggle = $document.find('#menu-toggle')
	const $menuHeaderContainer = $document.find('#header-menu-container')
	const $logo = $document.find('.custom-logo')
	const $archiveTitle = $document.find('.archive .content-title')
	const $videoPosts = $document.find('.single-format-video .post')
	const $scrollToTop = $document.find('#scroll-to-top')

	// Adds JS class to reader
	$html.removeClass('no-js').addClass('js');

	// Toggle header menu
	$menuHeaderToggle.on('click', () => {
		$menuHeaderContainer.toggle()
	})

	// Add class for wide logos
	if ($logo.length && $logo.width() >= 350) $siteHeader.addClass('wide-logo')

	// Remove prefix from archive titles
	if ($archiveTitle.length) {
		const archiveTitle = $archiveTitle.html().split(': ')
		
		if (archiveTitle.length > 1) {
			archiveTitle.shift()
			$archiveTitle.html(archiveTitle.join(': '))
		}
	}

	// Make sure video embeds are full width and 16:9
	function fullWidthVideoEmbeds() {
		const $videoEmbeds = 
			$videoPosts.find('iframe, video, embed, object, .video-player, .videopress-placeholder')
	
		if ($videoEmbeds.length) {
			for (let x=0; x<$videoEmbeds.length; x++) {
				const $video = $($videoEmbeds[x])
				$video.width('100%')
				$video.height(($video.width()/16) * 9)
			}
		}
	}

	if ($videoPosts.length) fullWidthVideoEmbeds()
	
	$window.resize(() => {
		if ($videoPosts.length) fullWidthVideoEmbeds()
	})

	// Scroll to top button
	$document.on('scroll', () => {
		$document.scrollTop() ? $scrollToTop.fadeIn(500) : $scrollToTop.fadeOut(500)
	})
	
	$scrollToTop.on('click', () => {
		$htmlAndBody.animate({scrollTop:0}, 500)
		return false;
	})
})(jQuery);
