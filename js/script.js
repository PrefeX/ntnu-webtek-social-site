$(function() {
    $('[data-tooltip="tooltip"]').tooltip()
})
$(function() {
		$('.pop').on('click', function() {
			$('.imagepreview').attr('src', $(this).find('img').attr('src'));
			$('#imageModal').modal('show');   
		});		
});