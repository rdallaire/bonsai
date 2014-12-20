<?php

// remove <p> tags from around images
// from http://css-tricks.com/snippets/wordpress/remove-paragraph-tags-from-around-images/
function filter_ptags_on_images($content){
   return preg_replace( '/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content );
}

add_filter( 'the_content', 'filter_ptags_on_images' );

?>
