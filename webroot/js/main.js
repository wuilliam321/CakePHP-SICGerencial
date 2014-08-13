$(function () {
	$('select[multiple=multiple]').multiselect({
		includeSelectAllOption: true,
		enableFiltering: true,
		enableCaseInsensitiveFiltering:true,
		maxHeight: 350
	});
	$('select[multiple=multiple]').next().addClass('col-xs-12').css('padding', 0);
	$('select[multiple=multiple]').next().children().addClass('col-xs-12');


	$('select:not(multiple)').multiselect({
		onChange: function(option, checked) {
			var values = [];
			$('select:not(multiple) option').each(function() {
				if ($(this).val() !== option.val()) {
				values.push($(this).val());
				}
			});

			$('select:not(multiple)').multiselect('deselect', values);
		},
		enableFiltering: true,
		enableCaseInsensitiveFiltering:true,
		maxHeight: 350
	});
	$('select:not(multiple)').next().addClass('col-xs-12').css('padding', 0);
	$('select:not(multiple)').next().children().addClass('col-xs-12');

	$('input[name*=fecha').data('date-format', 'YYYY-MM-DD hh:mm:ss');
	$('input[name*=fecha').datetimepicker();

	if ($( "div.asignaciones-list" ).length) {
		getAsignaciones("div.asignaciones-list");
	}
	if ($( "div.comunicaciones-list" ).length) {
		getAsignaciones("div.comunicaciones-list");
	}
	if ($( "div.directorios-list" ).length) {
		getAsignaciones("div.directorios-list");
	}

	// TODO: Viendo lo de la url, ver si hay un plugin que se que hay, jquery address o algo asi
	// if (window.location.hash) {
	// 	var hash = window.location.hash.split('!');
	// 	$("a[href="+hash[0]+"]").click();
	// 	setTimeout(function () {
	// 		$(hash[0] + " span[alt="+hash[1]+"]").click();
	// 	}, 10);
	// }

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

	// function getCurrentUrl
})