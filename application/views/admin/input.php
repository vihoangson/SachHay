<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css">

<div class="container">
	<h1 class="text-center">Test CDN Summernote</h1>
	<input type="text" class="form-control" name="txt_title">
	<h3 class="text-center"><a href="https://gist.github.com/search?utf8=%E2%9C%93&q=user%3Avihoangson">Gist github of Vi Hoàng Sơn</a></h3>
	<div class="summernote"><b>Đây là nội dung test CDN</b></div>
	<button class="submit btn btn-block">Submit</button>
</div>

<?php ob_start();?>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.min.js"></script>
	<script>
		$(".summernote").summernote({height:400});
		$("button.submit").click(function(event) {
			$(".summernote").summernote("code");
			$("[name='txt_title']").val();
			var data_form ={
				title: $("[name='txt_title']").val(),
				description : $(".summernote").summernote("code")
			};
			$.post('/api/book/add_book', data_form, function(data, textStatus, xhr) {
				if(textStatus=="success"){
					alert("OK");
				}
			});
		});

	</script>
<?php
$footer_script[] = ob_get_clean();
$this->load->vars("footer_script",$footer_script) ?>

