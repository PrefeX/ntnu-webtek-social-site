$(function() {
    $('[data-tooltip="tooltip"]').tooltip()
})
$(function() {
		$('.lightbox').on('click', function() {
			$('.imagepreview').attr('src', $(this).find('img').attr('src'));
			$('#imageModal').modal('show');   
		});		
});