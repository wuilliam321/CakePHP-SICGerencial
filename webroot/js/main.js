$(function () {
	if ($( "div.asignaciones-list" ).length) {
		getAsignaciones("div.asignaciones-list");
	}
	if ($( "div.comunicaciones-list" ).length) {
		getAsignaciones("div.comunicaciones-list");
	}
	if ($( "div.directorios-list" ).length) {
		getAsignaciones("div.directorios-list");
	}

	if ($( "span.do-show" ).length) {
		$("span.do-show").click(function () {
			tr = $(this).parent().parent().next();
			$(tr).toggle();
			if ($(this).hasClass("glyphicon-chevron-down")) {
				$(this).removeClass("glyphicon-chevron-down");
				$(this).addClass("glyphicon-chevron-up");
			} else {
				$(this).removeClass("glyphicon-chevron-up");
				$(this).addClass("glyphicon-chevron-down")

			}
		});
	}

	function getAsignaciones(container) {
		$.ajax({
			url: $(container).data('url'),
			type: 'post',
			dataType: 'html',
			async: false,
			success: function (data) {
				$(container).empty().html(data);
			}
		});
	}
})