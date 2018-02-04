<?php
/*
plugin name: rrftheme toolkit



*/

// test shortcode

function rrftheme_alert_shortcodes($atts) {

	extract(shortcode_atts(
		array(
			'class' => 'success',
			'text'  => ''
		),

		$atts
	));


	return '<div class="alert alert-'.esc_attr($class).'" role="alert">'.esc_html($text).'</div>';
}
add_shortcode('alert', 'rrftheme_alert_shortcodes');





