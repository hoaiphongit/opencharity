<?php

/**
 * Pre-processes variables for the "page" theme hook.
 */
function opencharity_preprocess_page(&$variables) {
  // Add information about the number of sidebars.
  	if (!empty($variables['page']['sidebar_first']) && !empty($variables['page']['sidebar_second'])) {
    	$variables['content_column_class'] = ' class="tow-sidebar"';
  	}
  	elseif (!empty($variables['page']['sidebar_first']) || !empty($variables['page']['sidebar_second'])) {
    	$variables['content_column_class'] = ' class="one-sidebar"';
  	}
  	else {
    	$variables['content_column_class'] = ' class="full-width"';
  	}
}