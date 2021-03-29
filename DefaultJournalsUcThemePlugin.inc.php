<?php

/**
 * @file plugins/themes/defaultJournalsUc/DefaultJournalsUcThemePlugin.inc.php
 *
 * Copyright (c) 2014-2020 Simon Fraser University
 * Copyright (c) 2003-2020 John Willinsky
 * Copyright (c) 2021 Sean Crowe
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class DefaultJournalsUcThemePlugin
 * @ingroup plugins_themes_default_journals uc
 *
 * @brief Default theme
 */
import('lib.pkp.classes.plugins.ThemePlugin');

class DefaultJournalsUcThemePlugin extends ThemePlugin {
	/**
	 * Initialize the theme's styles, scripts and hooks. This is only run for
	 * the currently active theme.
	 *
	 * @return null
	 */
	public function init() {

		// Initialize the parent theme
		$this->setParent('defaultthemeplugin');

		// Add custom styles
		$this->modifyStyle('stylesheet', array('addLess' => array('styles/index.less')));

		// Remove the typography options of the parent theme.
		// `removeOption` was introduced in OJS 3.0.2
		if (method_exists($this, 'removeOption')) {
			$this->removeOption('typography');
		}

		// Load the Montserrat and Open Sans fonts
		$this->addStyle(
			'font',
			'//fonts.googleapis.com/css?family=Montserrat:400,700|Noto+Serif:400,400i,700,700i',
			array('baseUrl' => '')
		);

		// Dequeue any fonts loaded by parent theme
		// `removeStyle` was introduced in OJS 3.0.2
		if (method_exists($this, 'removeStyle')) {
			$this->removeStyle('fontNotoSans');
			$this->removeStyle('fontNotoSerif');
			$this->removeStyle('fontNotoSansNotoSerif');
			$this->removeStyle('fontLato');
			$this->removeStyle('fontLora');
			$this->removeStyle('fontLoraOpenSans');
			$this->removeStyle('fontNotoSerif');
			$this->removeStyle('fontNotoSerif');
			$this->removeStyle('fontNotoSerif');
			$this->removeStyle('fontNotoSerif');
			$this->removeStyle('fontNotoSerif');
		}

		// Start with a fresh array of additionalLessVariables so that we can
		// ignore those added by the parent theme. This gets rid of @font
		// variable overrides from the typography option
		$additionalLessVariables = array();
  }

	/**
	 * Get the display name of this plugin
	 * @return string
	 */
	function getDisplayName() {
		return __('plugins.themes.defaultJournalsUc.name');
	}

	/**
	 * Get the description of this plugin
	 * @return string
	 */
	function getDescription() {
		return __('plugins.themes.defaultJournalsUc.description');
	}
}

?>
