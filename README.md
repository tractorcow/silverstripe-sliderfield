# SliderField for Silverstripe

This module adds a SliderField that allows you to enter a numeric value with a draggable widget

## Credits and Authors

 * This is a fork of the original tractorcow sliderfields module. All that is changed is fixing the title case on the CSS path.
 * Damian Mooyman - <https://github.com/tractorcow/silverstripe-sliderfield>

## Requirements

 * SilverStripe 4 or above

## Installation Instructions

 * Extract all files into the 'sliderfield' folder under your Silverstripe root, or install using composer

```bash
composer require "andrewhoule/silverstripe-sliderfield" 
```

## Usage

Use this field wherever you would normally use a NumericField, but with a specified maximum and
minimum range value.

```php

// 0 is the minimum value, 20 is the maximum value
$fieldX = new SliderField('PositionX', 'Horizontal Offset', 0, 20);

// A vertical slider can be specified with setOrientation
$fieldY = new SliderField('PositionY', 'Vertical Offset', 0, 10);
$fieldY->setOrientation('vertical');

```

## Need more help?

[Raise a Github issue](https://github.com/tractorcow/silverstripe-sliderfield/issues) or email me at damian.mooyman@gmail.com

## License

Copyright (c) 2013, Damian Mooyman
All rights reserved.

All rights reserved.

Redistribution and use in source and binary forms, with or without
modification, are permitted provided that the following conditions are met:

 * Redistributions of source code must retain the above copyright
   notice, this list of conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright
   notice, this list of conditions and the following disclaimer in the
   documentation and/or other materials provided with the distribution.
 * The name of Damian Mooyman may not be used to endorse or promote products
   derived from this software without specific prior written permission.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
DISCLAIMED. IN NO EVENT SHALL <COPYRIGHT HOLDER> BE LIABLE FOR ANY
DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
(INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
(INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
