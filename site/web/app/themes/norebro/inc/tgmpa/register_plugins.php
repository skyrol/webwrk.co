<?php

function norebro_register_plugins() {
	$plugins = array(
		array(
			'name' => 'WPBakery Page Builder',
			'slug' => 'js_composer',
			'source' => 'https://plugins.colabr.io/js_composer.zip',
			'required' => true,
			'version' => '5.7',
			'force_activation' => false,
			'force_deactivation' => false
		),
		array(
			'name' => 'ACF PRO',
			'slug' => 'acf',
			'source' => 'https://plugins.colabr.io/acf_pro.zip',
			'required' => true,
			'version' => '5.8.0-beta3',
			'force_activation' => false,
			'force_deactivation' => false
		),
		array(
			'name' => 'WooCommerce',
			'slug' => 'woocommerce',
			'required' => true
		),
		array(
			'name' => 'Slider Revolution',
			'slug' => 'revslider',
			'source' => 'https://plugins.colabr.io/slider_revolution.zip',
			'required' => true,
			'version' => '5.4.8',
			'force_activation' => false,
			'force_deactivation' => false
		),
		array(
			'name' => 'Norebro Portfolio',
			'slug' => 'norebro-portfolio',
			'source' => 'https://plugins.colabr.io/norebro-portfolio_v105.zip',
			'required' => true,
			'version' => '1.0.5',
			'force_activation' => false,
			'force_deactivation' => false
		),
		array(
			'name' => 'Norebro Shortcodes and Widgets',
			'slug' => 'norebro-extra',
			'source' => 'https://plugins.colabr.io/norebro-extra_v123.zip',
			'required' => true,
			'version' => '1.2.3',
			'force_activation' => false,
			'force_deactivation' => false
		),
		array(
			'name' => 'One Click Import',
			'slug' => 'demo-import',
			'source' => 'https://plugins.colabr.io/demo-import_v222.zip',
			'required' => true,
			'version' => '2.2.2',
			'force_activation' => false,
			'force_deactivation' => false
		),
		array(
			'name' => 'Contact Form 7',
			'slug' => 'contact-form-7',
			'required' => false
		),
		array(
			'name' => 'Contact Form 7 MailChimp Extension',
			'slug' => 'contact-form-7-mailchimp-extension',
			'required' => false
		),
		array(
			'name' => 'Envato Market',
			'slug' => 'envato-market',
			'source' => 'https://plugins.colabr.io/envato-market.zip',
			'required' => false,
			'version' => '2.0.0',
			'force_activation' => false,
			'force_deactivation' => false
		),
	);

	$config = array(
		'domain' => 'norebro',
		'default_path' => '',
		'menu' => 'install-required-plugins',
		'has_notices' => true,
		'is_automatic' => false,
		'message' => ''
	);
	
	tgmpa( $plugins, $config );
}

add_action( 'tgmpa_register', 'norebro_register_plugins' );