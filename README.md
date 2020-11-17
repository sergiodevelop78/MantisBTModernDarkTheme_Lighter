# Mantis Bugtracker Modern Dark Theme

![MantisBTModernDarkTheme Screenshot](files/MantisBTModernDarkTheme_Screenshot.png)

## About

I wanted a modern clean and dark theme for MantisBT. 

Based on https://github.com/iKyzu/MantisBTModernDarkTheme

Edited from https://github.com/polnetwork/MantisBTModernTheme

Edited from https://github.com/wiz78/MantisBTModernDarkTheme

## Installation

Upload the whole folder into your `plugins/` folder in the mantis installation so that you e.g. have `MANTIS_INSTALLATION/plugins/MantisBTModernDarkTheme/MantisBTModernDarkTheme.php`. After that the plugin should show up on the `manage_plugin_page.php` page in the mantis settings. There you can simply install it to activate it.

I recommend you to set this colors inside your config/config_inc.php file

```php
$g_status_colors = array( 'new' => '#e57373', # red,
    'feedback' => '#ba68c8', # purple
    'acknowledged' => '#ffb74d', # orange
    'confirmed' => '#fff176', # yellow
    'assigned' => '#64b5f6', # blue
    'resolved' => '#4db6ac', # teal
    'closed' => '#e8e8e8'); # light
```

Each user can then enable the dark theme in Account -> Preferences
