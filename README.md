# TYPO3 Extension: Image effects
 
Apply effects and filters to your images in TYPO3!

## What it does:

![Sample Image](docs/img/backend_screenshot.png)

Provides new fields for image file references that let you select effects or filters for your image.

## Configuration

The new fields are **not** added to `sys_file_reference` globally, but you have to enable/configure this per field:

````php
\Smichaelsen\ImageEffects\Utility\TcaUtility::addImageEffectsToField('tt_content', 'image');
````

## Usage

Just use the `f:image` or `f:uri.image` ViewHelper as usual. This extension xclasses these ViewHelpers.

## Versioning and Updates

This extensions uses [semantic versioning](https://semver.org).

### Breaking changes from 0.1 to 1.x

* Version 1.x just works with TYPO3 8.7.
* The keys for the effect and filter settings had to be changed, so you have to set filters again after the update. Sorry. 

## Attributions

![Sample Image](Resources/Public/Images/sample_nofilter.jpg)<br>
Sample image shown in the filter selector in the backend was published on [flickr](https://www.flickr.com/photos/a-issleib/9348841209/) by Andreas Issleib under
[CC-BY-NC 2.0 License](https://creativecommons.org/licenses/by-nc/2.0/), thank you!

The filters are inspired from [CSSgram](https://una.im/CSSgram/).
