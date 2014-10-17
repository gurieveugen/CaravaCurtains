<?php

class GoogleMap{
	//                    __  __              __    
	//    ____ ___  ___  / /_/ /_  ____  ____/ /____
	//   / __ `__ \/ _ \/ __/ __ \/ __ \/ __  / ___/
	//  / / / / / /  __/ /_/ / / / /_/ / /_/ (__  ) 
	// /_/ /_/ /_/\___/\__/_/ /_/\____/\__,_/____/  
	public function __construct()
	{
		add_action('wp_enqueue_scripts', array(&$this, 'scriptsAndStyles'));
		// ==============================================================
		// Shortcodes
		// ==============================================================
		add_shortcode('google_map', array(&$this, 'displayMap'));
	}

	/**
	 * Display google map
	 * @param  array $atts --- attributes
	 * @param  string $content --- content
	 * @return string --- shortcode 
	 */
	public function displayMap($atts, $content)
	{
		return '<div id="map-canvas"></div>';
	}	   

	/**
	 * Add some scripts and styles
	 */
	public function scriptsAndStyles()
	{
		// ==============================================================
		// Styles
		// ==============================================================
		wp_enqueue_style('google-map', GCLIB_URL.'/css/google_map.css');
		// ==============================================================
		// Scripts
		// ==============================================================
		wp_enqueue_script('google-map', GCLIB_URL.'/js/google_map.js', array('jquery'));
		wp_enqueue_script('google', 'https://maps.googleapis.com/maps/api/js?v=3.exp');
		wp_localize_script(
			'google-map', 
			'gmap', 
			array(
				'lat'  => (string) get_option('gc_gs_latitude'),
				'lng'  => (string) get_option('gc_gs_longtitude'),
				'zoom' => (string) get_option('gc_gs_map_zoom')
			) 
		);
	}                                          
}	