<style type="text/css">
label {
	display: inline-block;
	width: 150px;
}
label .details {
	display: block;
	font-size: 9px;
	color: #444444;
}
</style>
<div class="wrap">
	<h2>Disruptive Phono Widget Options</h2>
	<form method="post" action="options.php">
		<?php
		
		settings_fields('dreamacd_options');
		
		// Phono settings
		$phono_key = get_option('dreamacd_phono_key');
		$phono_address = get_option('dreamacd_phono_address');
		$phono_text = get_option('dreamacd_phono_text');
		$phono_dialpad = get_option('dreamacd_phono_dialpad');
		
		?>
		<h3>Phono Settings</h3>
		<fieldset>
			<p>
				<label>API Key</label>
				<input type="text" name="dreamacd_phono_key" value="<?php echo $phono_key; ?>" />
			</p>
			<p>
				<label>Dial Number</label>
				<input type="text" name="dreamacd_phono_address" value="<?php echo $phono_address; ?>" />
			</p>
			<p>
				<label>Text</label>
				<input type="text" name="dreamacd_phono_text" value="<?php echo $phono_text; ?>" />
			</p>
			<p>
				<label>Dialpad</label>
				<input type="checkbox" name="dreamacd_phono_dialpad" value="1" <?php checked('1', $phono_dialpad); ?> />
			</p>
		</fieldset>
		<?php
		
		// Widget settings
		$header_text = get_option('dreamacd_header_text', 'Need help?');
		$pages = get_option('dreamacd_pages');
		$proactive = get_option('dreamacd_proactive');
		$proactive_delay = get_option('dreamacd_proactive_delay');
		$admin = get_option('dreamacd_admin');
		
		?>
		<h3>Widget Settings</h3>
		<fieldset>
			<p>
				<label>Proactive Widget? <span class="details">If checked, widget pops up after X seconds.</span></label>
				<input type="checkbox" name="dreamacd_proactive" value="1" <?php checked('1', $proactive); ?> />
			</p>
			<p>
				<label>Header Text</label>
				<input type="text" name="dreamacd_header_text" value="<?php echo $header_text; ?>" />
			</p>
			<p>
				<label>Pages <span class="details">Page slugs to show widget on. Seperate with a comma.</span></label>
				<input type="text" name="dreamacd_pages" value="<?php echo $pages; ?>" />
			</p>
			<p>
				<label>Proactive Delay <span class="details">Seconds to wait before proactive widget pops up.</span></label>
				<input type="text" name="dreamacd_proactive_delay" value="<?php echo $proactive_delay; ?>" />
			</p>
			<p>
				<label>Admin Only? <span class="details">Only viewable by admins?</span></label>
				<input type="checkbox" name="dreamacd_admin" value="1" <?php checked('1', $admin); ?> />
			</p>
		</fieldset>
		<?php
		
		// Widget styling
		$background = get_option('dreamacd_style_background', '#ffffff');
		$border = get_option('dreamacd_style_border', '#cccccc');
		$border_radius = get_option('dreamacd_style_border_radius', '10px');
		$background_image = get_option('dreamacd_style_background_image');
		
		?>
		<h3>Widget Styling (for proactive widget)</h3>
		<fieldset>
			<p>
				<label>Background Color</label>
				<input type="text" name="dreamacd_style_background" value="<?php echo $background; ?>" />
			</p>
			<p>
				<label>Border Color</label>
				<input type="text" name="dreamacd_style_border" value="<?php echo $border; ?>" />
			</p>
			<p>
				<label>Border Radius</label>
				<input type="text" name="dreamacd_style_border_radius" value="<?php echo $border_radius; ?>" />
			</p>
			<p>
				<label>Background Image</label>
				<input type="text" name="dreamacd_style_background_image" value="<?php echo $background_image; ?>" />
			</p>
		</fieldset>
		<p>
			<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
		</p>
	</form>
</div>