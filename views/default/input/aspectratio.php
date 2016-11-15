<?php
/**
 * Cropper jQuery image tool for Elgg
 * @package cropper 
 */

$aspectratio_1 = elgg_extract('aspectratio_1', $vars, '');
$part_1 = elgg_view_input('text', array(
    'id' => 'aspectratio_1',
    'name' => 'params[aspectratio_1]',
    'value' => $aspectratio_1,
));

$aspectratio_2 = elgg_extract('aspectratio_2', $vars, '');
$part_2 = elgg_view_input('text', array(
    'id' => 'aspectratio_2',
    'name' => 'params[aspectratio_2]',
    'value' => $aspectratio_2,
));

echo "{$part_1} / {$part_2}"
?>


