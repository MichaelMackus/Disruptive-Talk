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
   curIframeHeight = curIframeHeight + 10;
   iframe.height = curIframeHeight;
   iframeHeight = curIframeHeight;
  }
 }, 10);
}
</script>
<iframe
	src="<?php echo plugins_url('acd.php', __FILE__); ?>?phono_key=<?php echo urlencode(get_option('dreamacd_phono_key')); ?>&phono_address=<?php echo urlencode(get_option('dreamacd_phono_address')); ?>&phono_text=<?php echo urlencode(get_option('dreamacd_phono_text')); ?>&phono_dialpad=<?php echo urlencode(get_option('dreamacd_phono_dialpad')); ?>" id="phono-frame" 
	height="0" 
	scrolling="no"
	allowTransparency="allowTransparency"
	frameborder=0>
</iframe>
