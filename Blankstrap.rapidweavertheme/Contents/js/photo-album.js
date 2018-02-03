$(function() {
    $('.album-title').wrapInner('<h1></h1>');
	$.each($(".album-wrapper a"), function(index, val) {
		$(this).attr("href", $(this).attr("href").replace(".html", ".jpg"));
		$(this).attr("data-caption", $(this).parent().find(".thumbnail-caption").text());
	});
	baguetteBox.run('.album-wrapper', {
	});
});