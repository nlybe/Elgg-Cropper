<?php
/**
 * Cropper jQuery image tool for Elgg
 * @package cropper 
 *
 * Based on default Elgg Avatar crop form
 *
 * @uses $vars['entity']
 */

$master_img = elgg_view('output/img', array(
    'src' => $vars['entity']->getIconUrl('master'),
    'alt' => elgg_echo('avatar'),
    'class' => 'mrl',
    'id' => 'image',
));

// assign photo to cropper input
$vars['image_to_crop'] = $master_img;

// optionally assign custom aspectratio to overide the aspectratio in settings
// set blank for free ratio or enter number e.g. 1 for 1/1
// if put comment the following line, the aspectratio value from settings will be used
$vars['aspectratio'] = 1;

echo elgg_view_input('cropper', $vars);
?>

<div class="elgg-foot">
<?php
    echo elgg_view('input/hidden', array('name' => 'guid', 'value' => $vars['entity']->guid));
    echo elgg_view('input/submit', array('value' => elgg_echo('avatar:create')));
?>
</div>
