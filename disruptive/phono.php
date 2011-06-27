<script type="text/javascript">
window.onload = function() {
 var iframeHeight;
 setInterval(function() {
  var iframe = document.getElementById('phono-frame');
  var curIframeHeight;
  if (iframeHeight && iframeHeight !=iframe.contentWindow.document.getElementById('phono').scrollHeight) {
   curIframeHeight = iframe.contentWindow.document.getElementById('phono').scrollHeight;
  } else if (!iframeHeight) {
   curIframeHeight = iframe.contentWindow.document.getElementById('phono').scrollHeight;
  }
  if (curIframeHeight) {
   curIframeHeight = curIframeHeight + 10
   iframe.height = curIframeHeight;
   iframeHeight = curIframeHeight;
  }
 }, 10);
}
</script>
<iframe
	src="http://www.sendshorty.com/wp-content/plugins/disruptive/acd.php?phono_key=<?php echo urlencode(get_option('dreamacd_phono_key')); ?>&phono_address=<?php echo urlencode(get_option('dreamacd_phono_address')); ?>&phono_text=<?php echo urlencode(get_option('dreamacd_phono_text')); ?>&phono_dialpad=<?php echo urlencode(get_option('dreamacd_phono_dialpad')); ?>" id="phono-frame" 
	height="0" 
	scrolling="no">
</iframe>