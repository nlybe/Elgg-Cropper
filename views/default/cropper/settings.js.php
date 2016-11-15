<?php
/**
 * Cropper jQuery image tool for Elgg
 * @package cropper 
 */

$plugin_settings = elgg_get_plugin_from_id('cropper')->getAllSettings();

$settings = [
    'viewmode' => elgg_extract('viewmode', $plugin_settings, 1),
    'dragmode' => elgg_extract('dragmode', $plugin_settings, 'crop'),
    'aspectratio_1' => elgg_extract('aspectratio_1', $plugin_settings, ''),
    'aspectratio_2' => elgg_extract('aspectratio_2', $plugin_settings, ''),
    'responsive' => elgg_extract('responsive', $plugin_settings, true),
    'restore' => elgg_extract('restore', $plugin_settings, true),
    'modal' => elgg_extract('modal', $plugin_settings, true),
    'guides' => elgg_extract('guides', $plugin_settings, true),
    'center' => elgg_extract('center', $plugin_settings, true),
    'highlight' => elgg_extract('highlight', $plugin_settings, true),
    'background' => elgg_extract('background', $plugin_settings, true),
    'autocrop' => elgg_extract('autocrop', $plugin_settings, true),
    'autocroparea' => elgg_extract('autocroparea', $plugin_settings),
    'movable' => elgg_extract('movable', $plugin_settings, true),
    'rotatable' => elgg_extract('rotatable', $plugin_settings, true),
    'scalable' => elgg_extract('scalable', $plugin_settings, true),
    'zoomable' => elgg_extract('zoomable', $plugin_settings, true),
    'zoomontouch' => elgg_extract('zoomontouch', $plugin_settings, true),
    'zoomonwheel' => elgg_extract('zoomonwheel', $plugin_settings, true),
    'wheelzoomratio' => elgg_extract('wheelzoomratio', $plugin_settings),
    'cropboxmovable' => elgg_extract('cropboxmovable', $plugin_settings, true),
    'cropboxresizable' => elgg_extract('cropboxresizable', $plugin_settings, true),
    'toggledragmodeondblclick' => elgg_extract('toggledragmodeondblclick', $plugin_settings, true),
];

?>

define(<?php echo json_encode($settings); ?>);
