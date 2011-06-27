<?php
/**
 * 
 * Copyright 2011 Disruptive Technologies, Inc.
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *     http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 */
?>
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