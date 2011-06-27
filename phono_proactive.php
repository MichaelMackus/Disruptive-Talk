<!--<script type="text/javascript">
	window.onload = function() {
		setTimeout(function() {
			alert('proactive chat');
		}, 1000);
	};
</script>-->
<script type="text/javascript" src="http://acd.disruptive.io/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="/wp-content/plugins/dreamacd/js/jqModal.js"></script>
<script type="text/javascript">
$.noConflict();
jQuery(document).ready(function($) {
	$('#dreamacd-dialog').jqm({
		overlay: 0
	});
	setTimeout(function() {
		$('#dreamacd-dialog').jqmShow();
	}, <?php echo get_option('dreamacd_proactive_delay') * 1000; ?>);
});
</script>
<style type="text/css">
#dreamacd-dialog {
	z-index: 3000;
	display: none;
	position: fixed !important;
	top: auto !important;
	left: auto !important;
	bottom: 10px;
	right: 10px;
	background-color: <?php echo get_option('dreamacd_style_background', '#ffffff'); ?>;
	border: 1px solid <?php echo get_option('dreamacd_style_border', '#cccccc'); ?>;
	border-radius: <?php echo get_option('dreamacd_style_border_radius', '10px'); ?>;
	<?php 
	$background_image = get_option('dreamacd_style_background_image');
	if ($background_image)
		echo "background-image: url($background_image);\n";
	?>
	width: 240px; 
}
#dreamacd-dialog h2 {
	color: black;
}
#dreamacd-dialog .jqmClose {
	position: absolute;
	top: 5px;
	left: 240px;
	color: black;
	font-weight: bold;
	display: block;
}
#dreamacd-dialog .jqmClose:hover {
	text-decoration: none;
}
#dreamacd-dialog #dreamacd-phono-iframe {
}
#dreamacd-dialog #dreamacd-phono-welcome {
}
.dreamacd-invisible {
	display: none;
}
</style>
<link rel="stylesheet" type="text/css" href="/wp-content/plugins/dreamacd/css/jqModal.css" />

<div class="jqmWindow jqmID1" id="dreamacd-dialog" style="">
	<a href="#" class="jqmClose">X</a>
	<div id="dreamacd-phono-welcome">
		<h2><?php echo get_option('dreamacd_header_text', 'Need help?'); ?></h2>
	</div>
	<div id="dreamacd-phono-iframe">	
		<?php include('phono.php'); ?>
	</div>
</div>