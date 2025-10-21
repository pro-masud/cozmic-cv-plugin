<?php
/**
 * Keywords template
 */
?>
<#
	if ( ! _.isEmpty( keywords ) ) {
#>
<select class="wowaddons-modal-keywords">
	<option value=""><?php esc_html_e( 'Any Topic', 'wowaddons' ); ?></option>
	<# _.each( keywords, function( title, slug ) { #>
	<option value="{{ slug }}">{{ title }}</option>
	<# } ); #>
</select>
<#
	}
#>