<?php
/**
 * Template Library Header Template
 */
?>
<label class="wowaddons-template-library-filter-label">
	<input type="radio" value="{{ slug }}" <# if ( '' === slug ) { #> checked<# } #> name="wowaddons-modal-filter">
	<span>{{ title }}</span>
</label> 