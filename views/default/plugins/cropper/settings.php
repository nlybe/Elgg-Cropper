<?php
/**
 * Cropper jQuery image tool for Elgg
 * @package cropper 
 */

$plugin = elgg_get_plugin_from_id('cropper');

$preview_options = array(
    elgg_echo('cropper:settings:preview_size:lg') => 'lg',
    elgg_echo('cropper:settings:preview_size:md') => 'md',
    elgg_echo('cropper:settings:preview_size:sm') => 'sm',
    elgg_echo('cropper:settings:preview_size:xs') => 'xs',
);
$general_settings .= elgg_format_element('div', [], elgg_view_input('radio', array(
    'id' => 'preview_size',
    'name' => 'params[preview_size]',
    'label' => elgg_echo('cropper:settings:preview_size'),
    'options' => $preview_options,
    'value' => (isset($plugin->preview_size) ? $plugin->preview_size : 'lg'),
    'help' => elgg_echo('cropper:settings:preview_size:help'),
)));

$title = elgg_format_element('h3', [], elgg_echo('cropper:settings:general_settings:title'));
echo elgg_view_module('inline', '', $general_settings, ['header' => $title]);


//////////////////////////////////////////////////////////////////////////////////////////////////////


$basic_settings .= elgg_format_element('div', ['style' => 'margin: 0 0 15px;'], elgg_echo('cropper:settings:basic_settings:intro'));

$viewmode_options = array(
    elgg_echo('cropper:settings:viewmode:0') => 0,
    elgg_echo('cropper:settings:viewmode:1') => 1,
    elgg_echo('cropper:settings:viewmode:2') => 2,
    elgg_echo('cropper:settings:viewmode:3') => 3,
);
$basic_settings .= elgg_format_element('div', [], elgg_view_input('radio', array(
    'id' => 'viewmode',
    'name' => 'params[viewmode]',
    'label' => elgg_echo('cropper:settings:viewmode'),
    'options' => $viewmode_options,
    'value' => (isset($plugin->viewmode) ? $plugin->viewmode : 1),
    'help' => elgg_echo('cropper:settings:viewmode:help'),
)));

$dragmode_options = array(
    elgg_echo('cropper:settings:dragmode:crop') => 'crop',
    elgg_echo('cropper:settings:dragmode:move') => 'move',
    elgg_echo('cropper:settings:dragmode:none') => 'none',
);
$basic_settings .= elgg_format_element('div', [], elgg_view_input('radio', array(
    'id' => 'dragmode',
    'name' => 'params[dragmode]',
    'label' => elgg_echo('cropper:settings:dragmode'),
    'options' => $dragmode_options,
    'value' => (isset($plugin->dragmode) ? $plugin->dragmode : 'crop'),
    'help' => elgg_echo('cropper:settings:dragmode:help'),
)));

$basic_settings .= elgg_format_element('div', ['class' => 'aspectratio',], elgg_view_input('aspectratio', array(
    'id' => 'aspectratio',
    'label' => elgg_echo('cropper:settings:aspectratio'),
    'aspectratio_1' => $plugin->aspectratio_1,
    'aspectratio_2' => $plugin->aspectratio_2,
    'help' => elgg_echo('cropper:settings:aspectratio:help'),
)));

$basic_settings .= elgg_format_element('div', [], elgg_view_input('checkbox', array(
    'id' => 'responsive',
    'name' => 'params[responsive]',
    'label' => elgg_echo('cropper:settings:responsive'),
    'checked' => ($plugin->responsive || !isset($plugin->responsive) ? true : false),
    'help' => elgg_echo('cropper:settings:responsive:help'),
)));

$basic_settings .= elgg_format_element('div', [], elgg_view_input('checkbox', array(
    'id' => 'restore',
    'name' => 'params[restore]',
    'label' => elgg_echo('cropper:settings:restore'),
    'checked' => ($plugin->restore || !isset($plugin->restore) ? true : false),
    'help' => elgg_echo('cropper:settings:restore:help'),
)));

$basic_settings .= elgg_format_element('div', [], elgg_view_input('checkbox', array(
    'id' => 'modal',
    'name' => 'params[modal]',
    'label' => elgg_echo('cropper:settings:modal'),
    'checked' => ($plugin->modal || !isset($plugin->modal) ? true : false),
    'help' => elgg_echo('cropper:settings:modal:help'),
)));

$basic_settings .= elgg_format_element('div', [], elgg_view_input('checkbox', array(
    'id' => 'guides',
    'name' => 'params[guides]',
    'label' => elgg_echo('cropper:settings:guides'),
    'checked' => ($plugin->guides || !isset($plugin->guides) ? true : false),
    'help' => elgg_echo('cropper:settings:guides:help'),
)));

$basic_settings .= elgg_format_element('div', [], elgg_view_input('checkbox', array(
    'id' => 'center',
    'name' => 'params[center]',
    'label' => elgg_echo('cropper:settings:center'),
    'checked' => ($plugin->center || !isset($plugin->center) ? true : false),
    'help' => elgg_echo('cropper:settings:center:help'),
)));

$basic_settings .= elgg_format_element('div', [], elgg_view_input('checkbox', array(
    'id' => 'highlight',
    'name' => 'params[highlight]',
    'label' => elgg_echo('cropper:settings:highlight'),
    'checked' => ($plugin->highlight || !isset($plugin->highlight) ? true : false),
    'help' => elgg_echo('cropper:settings:highlight:help'),
)));

$basic_settings .= elgg_format_element('div', [], elgg_view_input('checkbox', array(
    'id' => 'background',
    'name' => 'params[background]',
    'label' => elgg_echo('cropper:settings:background'),
    'checked' => ($plugin->background || !isset($plugin->background) ? true : false),
    'help' => elgg_echo('cropper:settings:background:help'),
)));

$basic_settings .= elgg_format_element('div', [], elgg_view_input('checkbox', array(
    'id' => 'autocrop',
    'name' => 'params[autocrop]',
    'label' => elgg_echo('cropper:settings:autocrop'),
    'checked' => ($plugin->autocrop || !isset($plugin->autocrop) ? true : false),
    'help' => elgg_echo('cropper:settings:autocrop:help'),
)));

$basic_settings .= elgg_format_element('div', [], elgg_view_input('text', array(
    'id' => 'autocroparea',
    'name' => 'params[autocroparea]',
    'label' => elgg_echo('cropper:settings:autocroparea'),
    'value' => (isset($plugin->autocroparea) ? $plugin->autocroparea : 0.8),
    'help' => elgg_echo('cropper:settings:autocroparea:help'),
    'style' => 'width: 80px;',
)));

$basic_settings .= elgg_format_element('div', [], elgg_view_input('checkbox', array(
    'id' => 'movable',
    'name' => 'params[movable]',
    'label' => elgg_echo('cropper:settings:movable'),
    'checked' => ($plugin->movable || !isset($plugin->movable) ? true : false),
    'help' => elgg_echo('cropper:settings:movable:help'),
)));

$basic_settings .= elgg_format_element('div', [], elgg_view_input('checkbox', array(
    'id' => 'rotatable',
    'name' => 'params[rotatable]',
    'label' => elgg_echo('cropper:settings:rotatable'),
    'checked' => ($plugin->rotatable || !isset($plugin->rotatable) ? true : false),
    'help' => elgg_echo('cropper:settings:rotatable:help'),
)));

$basic_settings .= elgg_format_element('div', [], elgg_view_input('checkbox', array(
    'id' => 'scalable',
    'name' => 'params[scalable]',
    'label' => elgg_echo('cropper:settings:scalable'),
    'checked' => ($plugin->scalable || !isset($plugin->scalable) ? true : false),
    'help' => elgg_echo('cropper:settings:scalable:help'),
)));

$basic_settings .= elgg_format_element('div', [], elgg_view_input('checkbox', array(
    'id' => 'zoomable',
    'name' => 'params[zoomable]',
    'label' => elgg_echo('cropper:settings:zoomable'),
    'checked' => ($plugin->zoomable || !isset($plugin->zoomable) ? true : false),
    'help' => elgg_echo('cropper:settings:zoomable:help'),
)));

$basic_settings .= elgg_format_element('div', [], elgg_view_input('checkbox', array(
    'id' => 'zoomontouch',
    'name' => 'params[zoomontouch]',
    'label' => elgg_echo('cropper:settings:zoomontouch'),
    'checked' => ($plugin->zoomontouch || !isset($plugin->zoomontouch) ? true : false),
    'help' => elgg_echo('cropper:settings:zoomontouch:help'),
)));

$basic_settings .= elgg_format_element('div', [], elgg_view_input('checkbox', array(
    'id' => 'zoomonwheel',
    'name' => 'params[zoomonwheel]',
    'label' => elgg_echo('cropper:settings:zoomonwheel'),
    'checked' => ($plugin->zoomonwheel || !isset($plugin->zoomonwheel) ? true : false),
    'help' => elgg_echo('cropper:settings:zoomonwheel:help'),
)));

$basic_settings .= elgg_format_element('div', [], elgg_view_input('text', array(
    'id' => 'wheelzoomratio',
    'name' => 'params[wheelzoomratio]',
    'label' => elgg_echo('cropper:settings:wheelzoomratio'),
    'value' => (isset($plugin->wheelzoomratio) ? $plugin->wheelzoomratio : 0.1),
    'help' => elgg_echo('cropper:settings:wheelzoomratio:help'),
    'style' => 'width: 80px;',
)));

$basic_settings .= elgg_format_element('div', [], elgg_view_input('checkbox', array(
    'id' => 'cropboxmovable',
    'name' => 'params[cropboxmovable]',
    'label' => elgg_echo('cropper:settings:cropboxmovable'),
    'checked' => ($plugin->cropboxmovable || !isset($plugin->cropboxmovable) ? true : false),
    'help' => elgg_echo('cropper:settings:cropboxmovable:help'),
)));

$basic_settings .= elgg_format_element('div', [], elgg_view_input('checkbox', array(
    'id' => 'cropboxresizable',
    'name' => 'params[cropboxresizable]',
    'label' => elgg_echo('cropper:settings:cropboxresizable'),
    'checked' => ($plugin->cropboxresizable || !isset($plugin->cropboxresizable) ? true : false),
    'help' => elgg_echo('cropper:settings:cropboxresizable:help'),
)));

$basic_settings .= elgg_format_element('div', [], elgg_view_input('checkbox', array(
    'id' => 'toggledragmodeondblclick',
    'name' => 'params[toggledragmodeondblclick]',
    'label' => elgg_echo('cropper:settings:toggledragmodeondblclick'),
    'checked' => ($plugin->toggledragmodeondblclick || !isset($plugin->toggledragmodeondblclick) ? true : false),
    'help' => elgg_echo('cropper:settings:toggledragmodeondblclick:help'),
)));

$title = elgg_format_element('h3', [], elgg_echo('cropper:settings:basic_settings:title'));
echo elgg_view_module('inline', '', $basic_settings, ['header' => $title]);
