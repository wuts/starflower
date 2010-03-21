function html_editor(id, width)
{
	CodeMirror.fromTextArea(id, {
	    height: "30em",
	    width: width,
	    parserfile: ["parsexml.js", "parsecss.js", "parsehtmlmixed.js"],
	    stylesheet: [APPPATH_URI + "assets/css/codemirror/xmlcolors.css", APPPATH_URI + "assets/css/codemirror/csscolors.css"],
	    path: APPPATH_URI + "assets/js/codemirror/",
	    tabMode: 'spaces'
	});
}

function css_editor(id, width)
{
	CodeMirror.fromTextArea(id, {
	    height: "30em",
	    width: width,
	    parserfile: "parsecss.js",
	    stylesheet: APPPATH_URI + "assets/css/codemirror/csscolors.css",
	    path: APPPATH_URI + "assets/js/codemirror/"
	});
}

(function($)
{
	$(function() {
	
		// Sort any tables with a class of 'sortable'
		var table = $('table.table-list');
		
		// A row can be selected via check or CTRL + click
		toggleRowChecked = function(row, checkbox, mode)
		{
			total_checked = $('tbody td input[type="checkbox"]:checked', table).length;
			total_checkboxes = $('tbody td input[type="checkbox"]', table).length;
			check_all = $('thead input[type="checkbox"][name="action_to_all"]', table);
			
			if(mode == 'change')
			{
				checkbox.attr('checked', checkbox.attr('checked'));
			}
			
			else
			{
				checkbox.attr('checked', !checkbox.attr('checked'));
			}
			
			if(!checkbox.attr('checked'))
			{
				// Remove selected class and uncheck the box
				row.removeClass('selected');

				// If all boxes are checked
				if(total_checked == 0)
				{
					console.log('remove ' + !check_all.attr('checked'));
					check_all.attr('checked', false);
				}
			}
		
			else
			{
				// Add seelected and check the box
				row.addClass('selected');
				
				// If all boxes are checked, check the "Check All" box
				if(total_checked == total_checkboxes)
				{
					check_all.attr('checked', true);
				}
				
			}
		}

		// CTRL + Click table select
		$('tbody td', table).click(function(e) {
			if(e.ctrlKey || e.metaKey)
			{
				row = $(this).parent('tr');
				checkbox = row.find('input[type="checkbox"]');
				
				toggleRowChecked(row, checkbox);
			}
		});
		
		// CTRL + Hover should show a pointer hand
		$('tbody td', table).hover(function(e) {
			if(e.ctrlKey || e.metaKey)
			{
				$(this).parent('tr').css('cursor', 'pointer');
			}
		}, function() {
			$(this).parent('tr').css('cursor', '');
		});
		
		
		// Checkbox ticking
		$('tbody td input[type="checkbox"]', table).change(function() {
			row = $(this).parent('td').parent('tr');
			checkbox = $(this);

			toggleRowChecked(row, checkbox, 'change');
		});
		
		// "Check All" checkboxes
		$('thead input[type="checkbox"][name="action_to_all"]', table).change(function() {
		
			$('tbody td input[type="checkbox"]', table).attr('checked', this.checked);
			
			if(this.checked)
			{
				$('tbody tr', table).addClass('selected');
			}
			
			else
			{
				$('tbody tr', table).removeClass('selected');
			}

		});
		
		// Link confirm box
		$('a.confirm').live('click', function(e) {
		
			/*e.preventDefault();
				
				link = this;
				modal_confirm("Are you sure you wish to delete this item?", function () {
					window.location.href = $(link).attr('href');
				});
			*/
			
			return confirm('Are you sure you wish to delete this item?');
		});
		
		// Form submit confirm box
		$('button[type="submit"].confirm, input[type="submit"].confirm').live('click', function(e) {
			/*	e.preventDefault();
				
				button = this;
				confirm("Are you sure you wish to delete these items?", function () {
					$(button).parents('form').submit();
				});
			*/
	
			return confirm('Are you sure you wish to delete these items?');
		});
	
	
		$('.tabs').tabs();
		
	
		$('a.close').live('click', function(){
			$(this).parents(".message").hide("fast");
			return false;
		});
	
		
		/* Control panel menu dropdowns */
		var menu = $("ul#menu li");/** define the main navigation selector **/

		menu.hover(function() {/** build animated dropdown navigation **/
			$(this).find('ul:first:hidden').css({visibility: "visible",display: "none"}).show("fast");
			$(this).find('a').stop().animate({backgroundPosition:"(0 -40px)"},{duration:150});
			$(this).find('a.top-level').addClass("blue");
		
		},function(){
			$(this).find('ul:first').css({visibility: "hidden", display:"none"});
			$(this).find('a').stop().animate({backgroundPosition:"(0 0)"}, {duration:75});
			$(this).find('a.top-level').removeClass("blue");
		});
		

		$('form#change_language select').change(function(){
			$(this).parent('form').submit();
		});
		
		// Fancybox modal window
		$('a[rel=modal], a.modal').livequery(function() {
			$(this).fancybox({
				overlayOpacity: 0.8,
				overlayColor: '#000',
				hideOnContentClick: false
			});
		});
		
		$('a[rel="modal-large"], a.modal-large').livequery(function() {
			$(this).fancybox({
				overlayOpacity: 0.8,
				overlayColor: '#000',
				hideOnContentClick: false,
				frameWidth: 900,
				frameHeight: 600
			});
		});
		// End Fancybox modal window

	});
	
})(jQuery);