<?php
/**
 * Theme Excerpt Class
 * @package cozmiq
 * @since 1.0.0
 */

if (!defined('ABSPATH')){
	exit(); //exit if access it directly
}

if (!class_exists('Cozmiq_CV_excerpt')):
class Cozmiq_CV_excerpt {

    public static $length = 55;

    public static $types = array(
      'short' => 25,
      'regular' => 55,
      'long' => 100,
      'promo'=>15
    );

    public static $more = true;

    /**
     * Sets the length for the excerpt
     * @package cozmiq
     */ 
    public static function length($new_length = 55, $more = true) {
        Cozmiq_CV_excerpt::$length = $new_length;
        Cozmiq_CV_excerpt::$more = $more;

        add_filter( 'excerpt_more', 'Cozmiq_CV_excerpt::auto_excerpt_more' );

        add_filter('excerpt_length', 'Cozmiq_CV_excerpt::new_length');

        Cozmiq_CV_excerpt::output();
    }

    public static function new_length() {
        if( isset(Cozmiq_CV_excerpt::$types[Cozmiq_CV_excerpt::$length]) )
            return Cozmiq_CV_excerpt::$types[Cozmiq_CV_excerpt::$length];
        else
            return Cozmiq_CV_excerpt::$length;
    }

    public static function output() {
        the_excerpt();
    }

    public static function continue_reading_link() {

        return '<span class="readmore"><a href="'.get_permalink().'">'.esc_html__('Read More','cozmiq-cv').'</a></span>';
    }

    public static function auto_excerpt_more( ) {
        if (Cozmiq_CV_excerpt::$more) :
            return ' ';
        else :
            return ' ';
        endif;
    }

} //end class
endif;

if (!function_exists('cozmiq_cv_excerpt')){

	function Cozmiq_CV_excerpt($length = 55, $more=true) {
		Cozmiq_CV_excerpt::length($length, $more);
	}

}


?>