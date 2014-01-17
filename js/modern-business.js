// Activates the Carousel
$('.carousel').carousel({
  interval: 5000
})

// Activates Tooltips for Social Links
$('.tooltip-social').tooltip({
  selector: "a[data-toggle=tooltip]"
})

// Activates Tooltips for Footer Social Links
$('.tooltip-footer').tooltip({
  selector: "img[data-toggle=tooltip]"
})


// Height Match for Service Price columns
var dataHeightControl = function() {
	if($(window).width() > 768) {
		$("[data-match-height]").each(function() {
			
			$(this).find('.filler').css('min-height', 0);
			
			var parentRow = $(this),
					childrenCols = $(this).find("[data-height-watch]"),
					childHeights = childrenCols.map(function(){ return $(this).height(); }).get(),
					tallestChild = Math.max.apply(Math, childHeights);
		
			
			childrenCols.each(function() {
				var fillerDiv = $(this).find('.filler');
				fillerDiv.css('min-height', tallestChild - $(this).height());
			});
		});
	};
}

$(window).load(function() {
	dataHeightControl();
});

$(window).resize(function() {
	dataHeightControl();
});