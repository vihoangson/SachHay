$(".model_box").click(function(){
	$("#modal-id .modal-title").html("");
	$("#modal-id .modal-body").html("");
	$.get('/api/book', {id: $(this).data("id")}, function(data, textStatus, xhr) {
		$("#modal-id .modal-title").html(data[0].name);
		$("#modal-id .modal-body").html(data[0].description);
	});
	$("#modal-id").modal("show");
	return false;
});