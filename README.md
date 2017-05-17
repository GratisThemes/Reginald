# Theme info
Name: Reginald
Author: Kniffen (http://kniff.xyz)
License: GNU General Public License v3
Description: Simple yet elegant and responsive blogging theme. Includes a variety of customizable options and widget areas.

# Issues
For issues and request use https://github.com/kniffen/Reginald/issues

# Copyright
Reginald WordPress Theme, Copyright (C) 2017, Kniffen
Reginald is distributed under the terms of the GNU GPL v3

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

# Libraries
# The theme bundles the following third-party resources:

normalize.css v3.0.2
License: MIT
Source: git.io/normalize

Font Awesome 4.6.3 by @davegandy
  Font License
    Applies to all desktop and webfont files in the following directory: font-awesome/fonts/.
    License: SIL OFL 1.1
    URL: http://scripts.sil.org/OFL

  Code License
    Applies to all CSS and LESS files in the following directories: font-awesome/css/, font-awesome/less/, and font-awesome/scss/.
    License: MIT License
    URL: http://opensource.org/licenses/mit-license.html


# Updates

1.0.0 - 2016.03.16
- Initial release

1.0.1 - 2016.03.16
- Fixed theme URI

1.0.2 - 2016.03.17
- Fixed various styles and comments

1.0.3 - 2016.04.09
- Fixed forms and input styles
- Fixed author bio layout

1.1.0 - 2016.05.26
- Reworked archive title filter and icon method
- Added breadcrumbs
- Fixed JS logic for video embeds
- Fixed theme tags

1.1.1 - 2016.06.11
- Removed language functions from social media options
- Fixed naming of global variables
- Added information to content-image template-part

1.1.2 - 2016.06.11
- Removed .mo language file
- Fixed comment_count

1.1.3 - 2016.06.11
- Fixed naming of global variables

1.2.0 - 2016.06.16
- Removed HTML5 Shiv
- Updated and moved Font Awesome
- Fixed various style bugs and issues
- Fixed various RTL style bugs and issues

1.2.1 - 2016.08.28
- Added copyright information to readme.txt and style.css
- Replaced JS detection in functions.php with one in js/functions.js
- Removed Google and WhatsApp social icons
- Removed displaying of social media list if no social media options are set
- Replaced custom get_the_archive_title filter with JS solution
- Cleaned up post formats
- Cleaned up template parts
- Fixed various style and layout issues
- Escaped various missing attributes and URLs

1.2.2 - 2016.08.31
- Replaced customize logo setting with core wordpress custom logo feature
- Changed header styles and layout to accommodate both logo and title
- Added meta data such as License decleration to the theme's URL page

1.2.3 - 2016.09.02
- Included unminified version of Font Awesome with the theme
- Escaped various get_theme_mod relating to custom style outputs in functions.php

1.2.4 - 2016.09.05
- Fixed license attributions for Font Awesome in readme.txt
- Removed closing ?> tag in required files (customize.php and theme_functions.php) to prevent possible "Header already sent" errors
- Internationalized header image alt attribute text
- Added prefix to enqueued styles and scripts in funtions.php
- Escaped get_permalink() in functions.php:165
- Various style fixed related to widget areas
- Included complete Font Awesome package to go with license decleration

1.2.5 - 2016.11.06
- Enqueued comment-reply script
- Replaced customized css styles being added to the header with wp_add_inline_style option
- Added editor stylesheet

1.2.6 - 2017.05.17
- Added table of contents to style.css
- Updated theme information for author rebranding
- Fixed usage of get_the_permalink instead of the_permalink on .post-thumbnail and .read-more in template-parts/loop.php
- Simplified js/functions.js
