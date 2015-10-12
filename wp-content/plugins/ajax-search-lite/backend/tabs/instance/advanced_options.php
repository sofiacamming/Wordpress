<div class="item">
	<?php
	$o = new wpdreamsYesNo("strip_shortcodes", __("Strip shortcodes from the content?", "ajax-search-lite"), wpdreams_setval_or_getoption($sd, 'strip_shortcodes', $_dk));
	$params[$o->getName()] = $o->getData();
	?>
	<p class="descMsg">
		<?php echo __("When enabled, the shortcodes from the content will be removed instead of executed.", "ajax-search-lite"); ?>
	</p>
</div>
<div class="item">
    <?php
    $o = new wpdreamsCustomFSelect("titlefield", __("Title Field", "ajax-search-lite"), array(
        'selects'=>wpdreams_setval_or_getoption($sd, 'titlefield_def', $_dk),
        'value'=>wpdreams_setval_or_getoption($sd, 'titlefield', $_dk)
    ));
    $params[$o->getName()] = $o->getData();
    ?>
</div>
<div class="item">
    <?php
    $o = new wpdreamsCustomFSelect("descriptionfield", __("Description Field", "ajax-search-lite"), array(
        'selects'=>wpdreams_setval_or_getoption($sd, 'descriptionfield_def', $_dk),
        'value'=>wpdreams_setval_or_getoption($sd, 'descriptionfield', $_dk)
    ));
    $params[$o->getName()] = $o->getData();
    ?>
</div>
<div class="item">
    <?php
    $o = new wpdreamsCategories("excludecategories", __("Exclude categories", "ajax-search-lite"), wpdreams_setval_or_getoption($sd, 'excludecategories', $_dk));
    $params[$o->getName()] = $o->getData();
    $params['selected-'.$o->getName()] = $o->getSelected();
    ?>
</div>
<div class="item">
    <?php
    $o = new wpdreamsTextarea("excludeposts", __("Exclude Posts by ID's (comma separated post ID-s)", "ajax-search-lite"), wpdreams_setval_or_getoption($sd, 'excludeposts', $_dk));
    $params[$o->getName()] = $o->getData();
    ?>
</div>
<div class="item">
	<?php
	$o = new wpdreamsTextarea("exclude_term_ids", __("Exclude Terms by ID (comma separated term ID-s)", "ajax-search-lite"), wpdreams_setval_or_getoption($sd, 'exclude_term_ids', $_dk));
	$params[$o->getName()] = $o->getData();
	?>
	<p class="descMsg">
		<?php echo __("Use this field to exclude any taxonomy term (tags, product categorories etc..)", "ajax-search-lite"); ?>
	</p>
</div>
<div class="item">
    <?php
    $o = new wpdreamsYesNo("wpml_compatibility", __("WPML compatibility", "ajax-search-lite"), wpdreams_setval_or_getoption($sd, 'wpml_compatibility', $_dk));
    $params[$o->getName()] = $o->getData();
    ?>
</div>
<div class="item">
    <input type="hidden" name='asl_submit' value=1 />
    <input name="submit_asl" type="submit" value="Save options!" />
</div>