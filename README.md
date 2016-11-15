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
- Aspectratio cropper option can be passed as param on input view, overriding the value plugin settings

## Future Tasks List
- [ ] Pass as parameters in cropper form the same options for custom use of cropping tool

## How to Use

### 1. Replace core Elgg profile avatar cropping tool
If plugin is enabled, the default core Elgg profile avatar cropping tool is replaced by this image cropping tool. Several options in plugin settings can be used for customizing the tool.

### 2. Use cropper input in any form
The cropper input can be used in any Elgg form, passing just the image to crop and optionally the Aspectratio (overriding the value plugin settings)