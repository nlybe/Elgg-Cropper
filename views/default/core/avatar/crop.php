<?php
/**
 * Cropper jQuery image tool for Elgg
 * @package cropper 
 * 
 * Replace core view file
 */

?>

<div id="avatar-croppingtool" class="mtl ptm">
    <label><?php echo elgg_echo('avatar:crop:title'); ?></label>
    <br />
    <p>
        <?php echo elgg_echo("avatar:create:instructions"); ?>
    </p>
    <?php echo elgg_view_form('cropper/avatar/crop', array('action' => 'action/avatar/crop'), $vars); ?>
</div>
