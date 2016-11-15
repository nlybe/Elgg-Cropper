<?php
/**
 * Cropper jQuery image tool for Elgg
 * @package cropper 
 */
 
$language = array(

    'cropper' => 'Cropper',
    'avatar:create:instructions' => 'Click and drag a square below to match how you want your avatar cropped. A preview will appear below the box. When you are happy with the preview, click \'Create your avatar\'. This cropped version will be used throughout the site as your avatar.',
    
    // settings
    'cropper:settings:general_settings:title' => 'General Settings',
    'cropper:settings:preview_size' => 'Preview Size',
    'cropper:settings:preview_size:help' => 'Select the size of preview image.',
    'cropper:settings:preview_size:lg' => 'Large',
    'cropper:settings:preview_size:md' => 'Medium',
    'cropper:settings:preview_size:sm' => 'Small',
    'cropper:settings:preview_size:xs' => 'Extra Small',
    
    'cropper:settings:basic_settings:title' => 'Basic Cropper Options',
    'cropper:settings:basic_settings:intro' => 'Basic options as offered from <a href="https://github.com/fengyuanchen/cropper" target="_blank">jQuery image cropping plugin</a>. Check <a href="https://github.com/fengyuanchen/cropper#options" target="_blank">documentation</a> for more details.',
    'cropper:settings:viewmode' => 'View Mode',
    'cropper:settings:viewmode:0' => 'The crop box is just within the container',
    'cropper:settings:viewmode:1' => 'The crop box should be within the canvas',
    'cropper:settings:viewmode:2' => 'The canvas should not be within the container',
    'cropper:settings:viewmode:3' => 'The container should be within the canvas',
    'cropper:settings:viewmode:help' => 'Define the view mode of the cropper. It is suggested not to change it.',
    'cropper:settings:dragmode' => 'Drag Mode',
    'cropper:settings:dragmode:crop' => 'Create a new crop box',
    'cropper:settings:dragmode:move' => 'Move the canvas',
    'cropper:settings:dragmode:none' => 'Do nothing',
    'cropper:settings:dragmode:help' => 'Define the dragging mode of the cropper',
    'cropper:settings:aspectratio' => 'Aspect Ratio',
    'cropper:settings:aspectratio:help' => 'Set the aspect ratio of the crop box. Set both numeric values such as <strong>1/1</strong> or <strong>2/1</strong> or <strong>4/3</strong> etc. If leave both empty, the crop box is free ratio',
    'cropper:settings:responsive' => 'Responsive',
    'cropper:settings:responsive:help' => 'Re-render the cropper when resize the window',
    'cropper:settings:restore' => 'Restore',
    'cropper:settings:restore:help' => 'Restore the cropped area after resize the window',
    'cropper:settings:modal' => 'Modal',
    'cropper:settings:modal:help' => 'Show the black modal above the image and under the crop box',
    'cropper:settings:guides' => 'Guides',
    'cropper:settings:guides:help' => 'Show the dashed lines above the crop box',
    'cropper:settings:center' => 'Center',
    'cropper:settings:center:help' => 'Show the center indicator above the crop box',
    'cropper:settings:highlight' => 'Highlight',
    'cropper:settings:highlight:help' => 'Show the white modal above the crop box (highlight the crop box)',
    'cropper:settings:background' => 'Background',
    'cropper:settings:background:help' => 'Show the grid background of the container',
    'cropper:settings:autocrop' => 'Auto Crop',
    'cropper:settings:autocrop:help' => 'Enable to crop the image automatically when initialize',
    'cropper:settings:autocroparea' => 'Auto Crop Area',
    'cropper:settings:autocroparea:help' => 'A number between 0 and 1. Define the automatic cropping area size (percentage)',
    'cropper:settings:movable' => 'Movable',
    'cropper:settings:movable:help' => 'Enable to move the image',
    'cropper:settings:rotatable' => 'Rotatable',
    'cropper:settings:rotatable:help' => 'Enable to rotate the image',
    'cropper:settings:scalable' => 'Scalable',
    'cropper:settings:scalable:help' => 'Enable to scale the image',
    'cropper:settings:zoomable' => 'Zoomable',
    'cropper:settings:zoomable:help' => 'Enable to zoom the image',
    'cropper:settings:zoomontouch' => 'Zoom on Touch',
    'cropper:settings:zoomontouch:help' => 'Enable to zoom the image by dragging touch',
    'cropper:settings:zoomonwheel' => 'Zoom on Wheel',
    'cropper:settings:zoomonwheel:help' => 'Enable to zoom the image by wheeling mouse',
    'cropper:settings:wheelzoomratio' => 'Wheel Zoom Ratio',
    'cropper:settings:wheelzoomratio:help' => 'Define zoom ratio when zoom the image by wheeling mouse',
    'cropper:settings:cropboxmovable' => 'Crop Box Movable',
    'cropper:settings:cropboxmovable:help' => 'Enable to move the crop box by dragging',
    'cropper:settings:cropboxresizable' => 'Crop Box Resizable',
    'cropper:settings:cropboxresizable:help' => 'Enable to resize the crop box by dragging',
    'cropper:settings:toggledragmodeondblclick' => 'Toggle Drag Mode on Double Click',
    'cropper:settings:toggledragmodeondblclick:help' => 'Enable to toggle drag mode between "crop" and "move" when click twice on the cropper',
        
);

add_translation('en', $language);
