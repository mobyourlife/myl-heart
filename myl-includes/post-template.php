<?php

function the_ID ()
{
	print "0";
}

function post_class ( $class = '', $post_id = null )
{
}

function the_title ( $before = '', $after = '', $echo = true )
{
	print "Title";
}

function get_the_content ( $more_link_text = null,  $strip_teaser = false )
{
	print "Lorem ipsum dolor amet.";
}

function the_content ( $more_link_text = null, $strip_teaser = false )
{
	return get_the_content($more_link_text, $strip_teaser);
}

function wp_link_pages ( $args = '' )
{
}

/* TODO: http://developer.wordpress.org/reference/functions/get_body_class/ */
function get_body_class( $class = '' )
{
    global $classes;
    
    if ( is_rtl() )
        $classes[] = 'rtl';
 
    if ( is_front_page() )
        $classes[] = 'home';
    if ( is_home() )
        $classes[] = 'blog';
    if ( is_archive() )
        $classes[] = 'archive';
    if ( is_date() )
        $classes[] = 'date';
    if ( is_search() ) {
        $classes[] = 'search';
        $classes[] = $wp_query->posts ? 'search-results' : 'search-no-results';
    }
    if ( is_paged() )
        $classes[] = 'paged';
    if ( is_attachment() )
        $classes[] = 'attachment';
    if ( is_404() )
        $classes[] = 'error404';
    
    return $classes;
}

function body_class( $class = '' )
{
	echo 'class="' . join( ' ', get_body_class( $class ) ) . '"';
}

function is_page_template( $template = '' )
{
}

function is_attachment( $attachment = '' )
{
}

?>
