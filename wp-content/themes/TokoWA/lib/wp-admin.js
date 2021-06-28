(function($){
		$('#colors-css').remove();
		
	    $(document).on('click', '.popWin', function() {
	        var target_url = $(this).attr('href'),
	            w = $(this).attr('data-popWidth'),
	            h = $(this).attr('data-popHeight');
	        if (w == null) {
	            w = 960;
	        }
	        if (h == null) {
	            h = 540;
	        }
	        left = Number((screen.width / 2) - (w / 2)),
	            tops = Number((screen.height / 2) - (h / 2)),
	            popupWindow = window.open(target_url, '', 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=1, copyhistory=no, width=' + w + ', height=' + h + ', top=' + tops + ', left=' + left);
	        popupWindow.focus();
	        return false;
	    });
})(jQuery);