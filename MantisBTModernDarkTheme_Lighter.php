<?php

class MantisBTModernDarkTheme_LighterPlugin
extends MantisPlugin
{
	const CFG_ENABLED = 'plugin_MantisBTModernDarkTheme_Lighter_enabled';

	function register()
	{
		$this->name = 'MantisBT Modern Dark Theme Lighter version';
		$this->description = 'A clean, dark but Lighter theme for MantisBT';

		$this->version = '1.0.0';
		$this->requires = array(
			'MantisCore' => '2.0.0',
		);

		$this->author = 'Original by Simone Tellini/Modified polnetwork, wiz78, alex3rq and sergiodevelop78';
		$this->url = 'https://github.com/wiz78/MantisBTModernDarkTheme';
	}

	function hooks()
	{
		return array(
			'EVENT_LAYOUT_RESOURCES' => 'add_css',

			'EVENT_ACCOUNT_PREF_UPDATE_FORM' => 'account_update_form',
			'EVENT_ACCOUNT_PREF_UPDATE' => 'account_update',
		);
	}

	function add_css($p_event)
	{
		if ($this->is_enabled())
			echo '<link rel="stylesheet" type="text/css" href="' . plugin_file('ModernDarkTheme_Lighter.css') . '" />' . "\n";
	}

	function is_enabled()
	{
		return auth_is_user_authenticated() && config_get(self::CFG_ENABLED, false, auth_get_current_user_id(), ALL_PROJECTS);;
	}

	function account_update_form($p_event, $p_user_id)
	{
		echo '<tr>' .
			'<td class="category">' .
			'<label for="DarkModeSwitch">Dark-Lighter Mode</label>' .
			'</td>' .
			'<td>' .
			'<input id="DarkModeSwitch" type="checkbox" name="' . self::CFG_ENABLED . '" value="1" ' . ($this->is_enabled() ? 'checked' : '') . '/>' .
			'</td>' .
			'</tr>';
	}

	function account_update($p_event, $p_user_id)
	{
		config_set(self::CFG_ENABLED, gpc_get_bool(self::CFG_ENABLED, false), $p_user_id, ALL_PROJECTS);
	}
}
