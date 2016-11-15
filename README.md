Elgg Cropper
============

![Elgg 2.1+](https://img.shields.io/badge/Elgg-2.1-orange.svg?style=flat-square)

Responsive image cropping tool for Elgg, based on jQuery and integrating the JS library [Cropper](https://fengyuanchen.github.io/cropper/).

Cropper plugin replace the default core Elgg profile avatar cropping tool.

## Features

- Supports touch (mobile)
- Supports to crop on a canvas
- Responsive
- Option to add cropper as a form input 
- Option to select size of preview box in settings
- Plenty of Cropper tool options available on plugin settings
- Aspectratio cropper option can be passed as param in cropper input, overriding the value plugin settings


## How to Use

### 1. Replace core Elgg profile avatar cropping tool
If plugin is enabled, the default core Elgg profile avatar cropping tool is replaced by this image cropping tool. Several options in plugin settings can be used for customizing the tool.

### 2. Use cropper input in any form
The cropper input can be used in any Elgg form, passing just the image to crop and optionally the Aspectratio (overriding the value plugin settings):

```php
// assign photo to cropper input
$vars['image_to_crop'] = $master_img;

// optionally assign custom aspectratio to overide the aspectratio in settings
// set blank for free ratio, enter number
// if put this line commented, the option value from settings will be used
$vars['aspectratio'] = '';

echo elgg_view_input('cropper', $vars);

```