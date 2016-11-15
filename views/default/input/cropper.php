<?php
/**
 * Cropper jQuery image tool for Elgg
 * @package cropper 
 */

elgg_require_js("cropper/cropper");
elgg_load_css('cropper_css');

$master_img = $vars['image_to_crop'];

$plugin_settings = elgg_get_plugin_from_id('cropper')->getAllSettings();
$preview_size = elgg_extract('preview_size', $plugin_settings, 'lg')
?>

<div class="cropper_tool">
    <div class="img-container">
        <?php echo $master_img; ?>
    </div>

    <div class="docs-preview clearfix">
        <div id="user-avatar-preview-title"><label><?php echo elgg_echo('avatar:preview'); ?></label></div>
        <div class="img-preview preview-<?php echo $preview_size; ?>"></div>
  <?php /*
  <div class="img-preview preview-md"></div>
  <div class="img-preview preview-sm"></div>
  <div class="img-preview preview-xs"></div>
   */
  ?>
    </div>

    <div class="elgg-foot">
<?php
        $coords = array('x1', 'x2', 'y1', 'y2');
        foreach ($coords as $coord) {
            echo elgg_view('input/hidden', array('name' => $coord, 'value' => $vars['entity']->$coord));
        }
?>
    </div>
</div>
