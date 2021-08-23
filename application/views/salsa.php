<!DOCTYPE html>
<html lang="en">
<head>
	<title>popupmodal.js</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="<?php echo base_url(); ?>../assets/css/style.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>../assets/css/popupmodal.css" />
</head>
<body>
	<section id="intro">
		<br>
		<div class="demo">
			<a id="simple_alert" class="demo_btn">Alert</a>
			<a id="simple_confirm" class="demo_btn">Confirm</a>
			<a id="simple_prompt" class="demo_btn">Prompt</a>
		</div>
		
	</section>
	<!-- IE -->
	<script src="<?php echo base_url(); ?>../assets/js/polyfill.js"></script>
 	<script src="<?php echo base_url(); ?>../assets/js/popupmodal-min.js"></script>
 	<script type="text/javascript">
 		document.getElementById('simple_prompt').addEventListener('click', function(){
	popup.prompt(
		{
			content : 'Hello. What is your name?'
		},
		function(config){
			if(config.input_value && config.proceed){
				popup.alert({
						content: 'Hi, ' + config.input_value
				});
			} else if(!config.proceed){
				popup.alert({
						content: 'You clicked cancel.'
				});
			}
		}
	);
});
 	</script>
</body>
</html>
