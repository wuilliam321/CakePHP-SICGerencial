$(function () {
	$(".comment_text, .comment.blog_postcontent, .avance .last div, .asignacion div.readmore, .asignacion h3, .comunicaciones-details .arrows_list1").readmore({
		speed: 75,
		maxHeight: 40,
		moreLink: '<a href="#">Leer mas</a>',
		lessLink: '<a href="#">Cerrar</a>',
	});
	$(".asignacion h3").readmore({
		speed: 75,
		maxHeight: 90,
		moreLink: '<a href="#">Ver mas</a>',
		lessLink: '<a href="#">Cerrar</a>',
	});

	$('select[multiple=multiple]').each( function () {
		var selector = this;
		$(selector).multiselect({
			includeSelectAllOption: true,
			enableFiltering: true,
			enableCaseInsensitiveFiltering:true,
			maxHeight: 350
		});
		$(selector).next().addClass('col-xs-12').css('padding', 0);
		$(selector).next().children().addClass('col-xs-12');
	});


	$('select:not(multiple)').each (function () {
		var selector = this;
		$(selector).multiselect({
			enableFiltering: true,
			enableCaseInsensitiveFiltering:true,
			maxHeight: 350,
			onChange: function(option, checked) {
				var values = [];
				$(selector).children('option').each(function() {
					if ($(this).val() !== option.val()) {
					values.push($(this).val());
					}
				});

				$(selector).multiselect('deselect', values);
			},
		});
		$(selector).next().addClass('col-xs-12').css('padding', 0);
		$(selector).next().children().addClass('col-xs-12');
	});

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

	if ($( ".do-show" ).length) {
		$(".do-show").click(function () {
			tr = $(this).parent().parent().next();
			$(tr).toggle();
			if ($(this).hasClass("fa-plus")) {
				$(this).removeClass("fa-plus");
				$(this).addClass("fa-minus");
			} else {
				$(this).removeClass("fa-minus");
				$(this).addClass("fa-plus")

			}
		});
	}


    CKEDITOR.config.extraPlugins = 'wordcount';
    CKEDITOR.config.entities_latin = false;
    CKEDITOR.config.wordcount = {

        // Whether or not you want to show the Word Count
        showWordCount: false,

        // Whether or not you want to show the Char Count
        showCharCount: true,

        // Whether or not to include Html chars in the Char Count
        countHTML: false,
    };
    CKEDITOR.config.toolbar = [[ 'Bold', 'Italic', 'Underline', '-', 'RemoveFormat' ], ['spellchecker', 'Scayt', '-', 'NumberedList', 'BulletedList'], ['Undo', 'Redo']];
    $('.ckeditor').ckeditor({
        height: 360
    });

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