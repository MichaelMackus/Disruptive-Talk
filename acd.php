<html>
<head>
 <link type="text/css" rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.10/themes/ui-darkness/jquery-ui.css"/>
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
 <script type="text/javascript" src="http://s.phono.com/releases/0.2/jquery.phono.js"></script>
 <script type="text/javascript" src="http://s.phono.com/addons/callme/79a53b7/jquery.callme.js"></script>
</head>
<body>
	<style type="text/css">
		#phono {
			min-height: 120px;
		}
	</style>
 <script type="text/javascript">
 $(document).ready(function() {
 
  $("#phono")
    .css("width","210px")
    .callme({
      apiKey: "<?php echo $_GET['phono_key']; ?>",
      numberToDial: "<?php echo $_GET['phono_address']; ?>",
      buttonTextReady: "<?php echo $_GET['phono_text']; ?>",
      slideOpen: <?php echo $_GET['phono_dialpad'] ? 'true' : 'false'; ?>,
      dialPad: <?php echo $_GET['phono_dialpad'] ? 'true' : 'false'; ?>
    });
  
 });
 </script>

<div id="phono"></div>

</body>
</html>