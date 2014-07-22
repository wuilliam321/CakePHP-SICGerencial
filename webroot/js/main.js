$(function () {
	if ($( "div.asignaciones-list" ).length) {
		getAsignaciones("div.asignaciones-list");
	}
	if ($( "div.comunicaciones-list" ).length) {
		getAsignaciones("div.comunicaciones-list");
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
		})
	}
})